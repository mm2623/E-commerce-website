<?php
require_once(__DIR__ . "/db.php");
$BASE_PATH = '/Project/'; //This is going to be a helper for redirecting to our base project path since it's nested in another folder
function se($v, $k = null, $default = "", $isEcho = true)
{
    if (is_array($v) && isset($k) && isset($v[$k])) {
        $returnValue = $v[$k];
    } else if (is_object($v) && isset($k) && isset($v->$k)) {
        $returnValue = $v->$k;
    } else {
        $returnValue = $v;
        //added 07-05-2021 to fix case where $k of $v isn't set
        //this is to kep htmlspecialchars happy
        if (is_array($returnValue) || is_object($returnValue)) {
            $returnValue = $default;
        }
    }
    if (!isset($returnValue)) {
        $returnValue = $default;
    }
    if ($isEcho) {
        //https://www.php.net/manual/en/function.htmlspecialchars.php
        echo htmlspecialchars($returnValue, ENT_QUOTES);
    } else {
        //https://www.php.net/manual/en/function.htmlspecialchars.php
        return htmlspecialchars($returnValue, ENT_QUOTES);
    }
}
//TODO 2: filter helpers
function sanitize_email($email = "")
{
    return filter_var(trim($email), FILTER_SANITIZE_EMAIL);
}
function is_valid_email($email = "")
{
    return filter_var(trim($email), FILTER_VALIDATE_EMAIL);
}
//TODO 3: User Helpers
function is_logged_in($redirect = false, $destination = "login.php")
{
    $isLoggedIn = isset($_SESSION["user"]);
    if ($redirect && !$isLoggedIn) {
        flash("You must be logged in to view this page", "warning");
        die(header("Location: $destination"));
    }
    return $isLoggedIn; //se($_SESSION, "user", false, false);
}
function has_role($role)
{
    if (is_logged_in() && isset($_SESSION["user"]["roles"])) {
        foreach ($_SESSION["user"]["roles"] as $r) {
            if ($r["name"] === $role) {
                return true;
            }
        }
    }
    return false;
}
function get_username()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "username", "", false);
    }
    return "";
}
function get_user_email()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "email", "", false);
    }
    return "";
}
function get_user_id()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "id", false, false);
    }
    return false;
}
//TODO 4: Flash Message Helpers
function flash($msg = "", $color = "info")
{
    $message = ["text" => $msg, "color" => $color];
    if (isset($_SESSION['flash'])) {
        array_push($_SESSION['flash'], $message);
    } else {
        $_SESSION['flash'] = array();
        array_push($_SESSION['flash'], $message);
    }
}
function update_cart($item_id, $user_id, $quantity)
{
    error_log("add_item() Item ID: $item_id, User_id: $user_id, Quantity $quantity");
    $db = getDB();
    $stmt = $db->prepare("UPDATE Cart set desired_quantity = :q where product_id = :cart_id and user_id=:uid");
    try {
        $stmt->execute([":q" => $quantity,":cart_id" => $item_id ,":uid"=>$user_id]);
        return true;
    }catch (PDOException $e) {
        error_log("Error adding $quantity of $item_id to user $user_id: " . var_export($e->errorInfo, true));
    }
    return false;
}
function delete_item($item_id, $user_id)
{
    error_log("add_item() Item ID: $item_id, User_id: $user_id");
    $db = getDB();
    $stmt = $db->prepare("DELETE FROM Cart where product_id = :cart_id and user_id=:uid");
    try {
        $stmt->execute([":cart_id" => $item_id, ":uid" =>$user_id]);
        return true;
    }catch (PDOException $e) {
        error_log("Error deleting $item_id to user $user_id: " . var_export($e->errorInfo, true));
    }
    return false;
}
function empty_cart($user_id)
{
    error_log("add_item() Item ID: User_id: $user_id");
    $db = getDB();
    $stmt = $db->prepare("DELETE FROM Cart where user_id = :uid");
    try {
        $stmt->execute([":uid" =>$user_id]);
        return true;
    }catch (PDOException $e) {
        error_log("Error empting cart of $user_id: " . var_export($e->errorInfo, true));
    }
    return false;
}
function add_to_cart($item_id, $user_id, $quantity, $cost)
{
    //I'm using negative values for predefined items so I can't validate >= 0 for item_id
    if ($user_id <= 0 || $quantity === 0) {
        error_log("add_to_cart() Item ID: $item_id, User_id: $user_id, Quantity $quantity");
        return;
    }
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO Cart (product_id, user_id, desired_quantity, unit_cost) VALUES (:iid, :uid, :q, :uc) ON DUPLICATE KEY UPDATE desired_quantity = desired_quantity + :q, unit_cost=:uc"); 
    //$stmt = $db->prepare("INSERT INTO Cart (product_id, user_id, desired_quantity) VALUES (:iid, :uid, :q) ON DUPLICATE KEY UPDATE quantity = quantity + :q");
    try {
        $stmt->execute([":iid" => $item_id, ":uid" => $user_id, ":q" => $quantity, ":uc" => $cost]);
        return true;
    } catch (PDOException $e) {
        error_log("Error recording purchase $quantity of $item_id for user $user_id: " . var_export($e->errorInfo, true));
    }
    return false;
}

/**
 * @param $query must have a column called "total"
 * @param array $params
 * @param int $per_page
 */
function paginate($query, $params = [], $per_page = 10)
{
    global $page; //will be available after function is called
    try {
        $page = (int)se($_GET, "page", 1, false);
    } catch (Exception $e) {
        //safety for if page is received as not a number
        $page = 1;
    }
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("paginate error: " . var_export($e, true));
    }
    $total = 0;
    if (isset($result)) {
        $total = (int)se($result, "total", 0, false);
    }
    global $total_pages; //will be available after function is called
    $total_pages = ceil($total / $per_page);
    global $offset; //will be available after function is called
    $offset = ($page - 1) * $per_page;
}
//updates or inserts page into query string while persisting anything already present
function persistQueryString($page)
{
    $_GET["page"] = $page;
    return http_build_query($_GET);
}
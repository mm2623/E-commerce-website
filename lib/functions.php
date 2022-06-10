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

function getMessages()
{
    if (isset($_SESSION['flash'])) {
        $flashes = $_SESSION['flash'];
        $_SESSION['flash'] = array();
        return $flashes;
    }
    return array();
}
//TODO generic helpers
function reset_session()
{
    session_unset();
    session_destroy();
    session_start();
}
function users_check_duplicate($errorInfo)
{
    if ($errorInfo[1] === 1062) {
        //https://www.php.net/manual/en/function.preg-match.php
        preg_match("/Users.(\w+)/", $errorInfo[2], $matches);
        if (isset($matches[1])) {
            flash("The chosen " . $matches[1] . " is not available.", "warning");
        } else {
            //TODO come up with a nice error message
            flash("<pre>" . var_export($errorInfo, true) . "</pre>");
        }
    } else {
        //TODO come up with a nice error message
        flash("<pre>" . var_export($errorInfo, true) . "</pre>");
    }
}
function get_url($dest)
{
    global $BASE_PATH;
    if (str_starts_with($dest, "/")) {
        //handle absolute path
        return $dest;
    }
    //handle relative path
    return $BASE_PATH . $dest;
}
// Account Helpers
/**
 * Generates a unique string based on required length.
 * The length given will determine the likelihood of duplicates
 */
function get_random_str($length)
{
    //https://stackoverflow.com/a/13733588
    //$bytes = random_bytes($length / 2);
    //return bin2hex($bytes);

    //https://stackoverflow.com/a/40974772
    return substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', 36)), 0, $length);
}
function get_user_account_id()
{
    if (is_logged_in() && isset($_SESSION["user"]["account"])) {
        return (int)se($_SESSION["user"]["account"], "id", 0, false);
    }
    return 0;
}
function update_data($table, $id,  $data, $ignore = ["id", "submit"])
{
    $columns = array_keys($data);
    foreach ($columns as $index => $value) {
        //Note: normally it's bad practice to remove array elements during iteration

        //remove id, we'll use this for the WHERE not for the SET
        //remove submit, it's likely not in your table
        if (in_array($value, $ignore)) {
            unset($columns[$index]);
        }
    }
    $query = "UPDATE $table SET "; //be sure you trust $table
    $cols = [];
    foreach ($columns as $index => $col) {
        array_push($cols, "$col = :$col");
    }
    $query .= join(",", $cols);
    $query .= " WHERE id = :id";

    $params = [":id" => $id];
    foreach ($columns as $col) {
        $params[":$col"] = se($data, $col, "", false);
    }
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute($params);
        return true;
    } catch (PDOException $e) {
        flash("<pre>" . var_export($e->errorInfo, true) . "</pre>");
        return false;
    }
}
function inputMap($fieldType)
{
    if (str_contains($fieldType, "varchar")) {
        return "text";
    } else if ($fieldType === "text") {
        return "textarea";
    } else if (in_array($fieldType, ["int", "decimal"])) { //TODO fill in as needed
        return "number";
    }
    return "text"; //default
}
function get_columns($table)
{
    $table = se($table, null, null, false);
    $db = getDB();
    $query = "SHOW COLUMNS from $table"; //be sure you trust $table
    $stmt = $db->prepare($query);
    $results = [];
    try {
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "<pre>" . var_export($e, true) . "</pre>";
    }
    return $results;
}
function save_data($table, $data, $ignore = ["submit"])
{
    $table = se($table, null, null, false);
    $db = getDB();
    $query = "INSERT INTO $table "; //be sure you trust $table
    //https://www.php.net/manual/en/functions.anonymous.php Example#3
    $columns = array_filter(array_keys($data), function ($x) use ($ignore) {
        return !in_array($x, $ignore); // $x !== "submit";
    });
    //arrow function uses fn and doesn't have return or { }
    //https://www.php.net/manual/en/functions.arrow.php
    $placeholders = array_map(fn ($x) => ":$x", $columns);
    $query .= "(" . join(",", $columns) . ") VALUES (" . join(",", $placeholders) . ")";

    $params = [];
    foreach ($columns as $col) {
        $params[":$col"] = $data[$col];
    }
    $stmt = $db->prepare($query);
    try {
        $stmt->execute($params);
        //https://www.php.net/manual/en/pdo.lastinsertid.php
        //echo "Successfully added new record with id " . $db->lastInsertId();
        return $db->lastInsertId();
    } catch (PDOException $e) {
        //echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
        flash("<pre>" . var_export($e->errorInfo, true) . "</pre>");
        return -1;
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
function update_average_rating($a_r,$p_id)
{
    $db = getDB();
    $stmt = $db->prepare("UPDATE Products set average_rating = :aver_rat where id = :pro_id ");
    try {
        $stmt->execute([":aver_rat"=>$a_r, ":pro_id"=>$p_id]);
        return true;
    }catch (PDOException $e) {
        error_log("Error adding items to OrderItems table: " . var_export($e->errorInfo, true));
    }
    return false;
}
function updating_stock($product_id,$product_stock,$OrderItems_quantity){
    $db = getDB();
    $stmt = $db->prepare("UPDATE Products set stock = :p_s - :Oi_q where id = :p_id ");
    try {
        $stmt->execute([":p_id"=>$product_id, ":p_s"=>$product_stock, ":Oi_q"=>$OrderItems_quantity]);
        return true;
    }catch (PDOException $e) {
        error_log("Error adding items to OrderItems table: " . var_export($e->errorInfo, true));
    }
    return false;
}
function order($user_id,$total_price,$full_address,$payment_method)
{
    error_log("add_item() Item ID: user_id: $user_id");
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO Orders (user_id, total_price, address, payment_method ) VALUES (:uid, :tp, :a , :pm) ");
    try {
        $stmt->execute([":uid" =>$user_id,":tp" =>$total_price,":a" =>$full_address,":pm" =>$payment_method]);
        return $db->lastInsertId();
    }catch (PDOException $e) {
        error_log("Error adding items to OrderItems table: " . var_export($e->errorInfo, true));
    }
    return false;
}
function order_item($user_id,$order_id)
{
    //error_log("add_item() Item ID: order_id: $order_id");
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO OrderItems (order_id,product_id, quantity, unit_price) SELECT :order_id, product_id , desired_quantity , unit_cost FROM Cart WHERE user_id = :uid");
    //$stmt = $db->prepare("INSERT INTO OrderItems (order_id, product_id, quantity, unit_price) VALUES (:oid, :pid, :q, :up) ");
    try {
        $stmt->execute([":uid"=>$user_id, ":order_id"=>$order_id]);
        return true;
    }catch (PDOException $e) {
        error_log("Error adding items to OrderItems table: " . var_export($e->errorInfo, true));
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
    try {
        $stmt->execute([":iid" => $item_id, ":uid" => $user_id, ":q" => $quantity, ":uc" => $cost]);
        return true;
    } catch (PDOException $e) {
        error_log("Error recording purchase $quantity of $item_id for user $user_id: " . var_export($e->errorInfo, true));
    }
    return false;
}
function ratting($store_product_id,$store_user_id,$store_rating,$store_comment)
{
    $db = getDB();
    $stmt = $db->prepare("INSERT INTO Ratings (product_id, user_id, rating, comment) VALUES (:pid, :uid, :r, :c)"); 
    try {
        $stmt->execute([":pid" => $store_product_id, ":uid" => $store_user_id, ":r" => $store_rating, ":c" => $store_comment]);
        return true;
    } catch (PDOException $e) {
        error_log("Error recording rating of $store_product_id: " . var_export($e->errorInfo, true));
    }
    return false;
}
function redirect1($path)
{ //header headache
    //https://www.php.net/manual/en/function.headers-sent.php#90160
    /*headers are sent at the end of script execution otherwise they are sent when the buffer reaches it's limit and emptied */
    if (!headers_sent()) {
        //php redirect
        die(header("Location: " . get_url($path)));
    }
    //javascript redirect
    echo "<script>window.location.href='" . get_url($path) . "';</script>";
    //metadata redirect (runs if javascript is disabled)
    echo "<noscript><meta http-equiv=\"refresh\" content=\"0;url=" . get_url($path) . "\"/></noscript>";
    die();
}
function redirect($path,$variable)
{ //header headache
    //https://www.php.net/manual/en/function.headers-sent.php#90160
    /*headers are sent at the end of script execution otherwise they are sent when the buffer reaches it's limit and emptied */
    if (!headers_sent()) {
        //php redirect
        die(header("Location: " . get_url($path)."?id=" . $variable));
    }
    //javascript redirect
    echo "<script>window.location.href='" . get_url($path) . "?id=". $variable.  "';</script>";
    //metadata redirect (runs if javascript is disabled)
    echo "<noscript><meta http-equiv=\"refresh\" content=\"0;url=" . get_url($path) . "?id=". $variable ."\"/></noscript>";
    die();
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

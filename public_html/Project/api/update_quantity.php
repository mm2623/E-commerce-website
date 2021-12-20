<?php
//remember, API endpoints should only echo/output precisely what you want returned
//any other unexpected characters can break the handling of the response
$response = ["message" => "There was a problem completing your purchase"];
http_response_code(400);
error_log("req: " . var_export($_POST, true));
if (isset($_POST["item_id"]) && isset($_POST["quantity"])) {
    require_once(__DIR__ . "/../../../lib/functions.php");
    session_start();
    $user_id = get_user_id();
    $item_id = (int)se($_POST, "item_id", 0, false);
    $quantity = (int)se($_POST, "quantity", 0, false);
    $isValid = true;
    $errors = [];
    if ($user_id <= 0) {
        //invald user
        array_push($errors, "Invalid user");
        $isValid = false;
    }
    
    if ($quantity <= 0) {
        $isValid = false;
    }
    $db = getDB();
    $stmt = $db->prepare("SELECT name,stock,cost FROM Products where id = :id ");
    $name = "";
    try {
        $stmt->execute([":id" => $item_id]);
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($r) {
            $cost = (int)se($r, "cost", 0, false);
            $name = se($r, "name", "", false);
            $stock = se($r, "stock", "", false);
        }
    } catch (PDOException $e) {
        error_log("Error getting cost of $item_id: " . var_export($e->errorInfo, true));
        $isValid = false;
    }
    if ($isValid) {
            if ($quantity <= $stock){
                update_cart($item_id, $user_id, $quantity,);
                http_response_code(200);
                $response["message"] = "$name quantity have been changed to $quantity";
            }//success
            else if($stock == 0) {
                http_response_code(200);
                $response["message"] = "$name stock is 0";
            }
            else {
                http_response_code(200);
                $response["message"] = "$name quantity is out of stock";
            }
        }
    else if ($quantity == 0 ){
        delete_item($item_id, $user_id);
        http_response_code(200);
        $response["message"] = "Item removed from the cart";
        }
    else {
        http_response_code(200);
        $response["message"] = "Unsuccessfull";
        }
}
echo json_encode($response);
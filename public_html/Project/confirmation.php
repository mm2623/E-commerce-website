<?php
require(__DIR__ . "/../../partials/nav.php");
require_once(__DIR__ . "/../../lib/functions.php");
?>
<?php
    $results = [];
    $results1 = [];
    $order_id = se($_GET, "id", 0, false); 
    $db = getDB();
    $stmt = $db->prepare("SELECT id, user_id, total_price, address,created , payment_method FROM Orders WHERE id =:id ");
    try {
        $stmt->execute([":id"=> $order_id]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
    } catch (PDOException $e) {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
    $db = getDB();
    $stmt = $db->prepare("SELECT OrderItems.id, Products.name, Products.description,Products.stock, OrderItems.order_id, OrderItems.product_id, OrderItems.quantity , OrderItems.unit_price FROM OrderItems JOIN Products on OrderItems.product_id = Products.id WHERE OrderItems.order_id =:id ");
    try {
        $stmt->execute([":id" => $order_id]);
        $b = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($b) {
            $results1 = $b;
        }
    } catch (PDOException $e) {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
?>
<div class="container-fluid">
    <h1 id ="noflex" style="text-align: center; margin-top: 20px;">Thank you for your purchase</h1>
    <div class="row">  
        <h3 id ="noflex" style="margin-left: 20px;margin-top: 10px;" ><u>Orders Information</u></h3>
            <?php foreach ($results as $index => $record) : ?>
                <?php global $order_number; ?>
                <?php global $order_created; ?>
                <?php global $order_total_price; ?>
                <?php global $order_address; ?>
                <?php global $order_payment_method; ?>
                <?php foreach ($record as $column => $value) : ?>
                       <?php if($column == "id") :?>
                            <?php $order_number= $value ?>
                        <?php endif; ?>
                        <?php if($column == "created") :?>
                            <?php $order_created= $value ?>
                        <?php endif; ?>
                        <?php if($column == "total_price") :?>
                            <?php $order_total_price= $value ?>
                        <?php endif; ?>
                        <?php if($column == "address") :?>
                            <?php $order_address= $value ?>
                        <?php endif; ?>
                        <?php if($column == "payment_method") :?>
                            <?php $order_payment_method= $value ?>
                        <?php endif; ?>
                <?php endforeach; ?>
                <h6 id ="noflex" style="width : 700px;margin-left: 30px; margin-top: 20px;" ><?php echo "Order Number : ",$order_number; ?></h6>
                <h6 id ="noflex" style="width : 700px;margin-left: 30px; margin-top: 20px;" ><?php echo "Order placed : ",$order_created; ?></h6>
                <h6 id ="noflex" style="width : 700px;margin-left: 30px; margin-top: 20px;" ><?php echo "Payment Method : ",$order_payment_method; ?></h6>
                <h6 id ="noflex" style="width : 700px;margin-left: 30px; margin-top: 20px;" ><?php echo "Total Cost : $",$order_total_price; ?></h6>
                <h6 id ="noflex" style="width : 700px;margin-left: 30px; margin-top: 20px;" ><?php echo "Shipping Address : ",$order_address; ?></h6>
            <?php endforeach; ?>
    </div>
    <div class="row">
        <h3 id ="noflex" style="margin-left: 20px;margin-top: 30px;" ><u>Items Information</u></h3>
            <?php foreach ($results1 as $index => $record1) : ?>
                <?php global $OrderItems_name; ?>
                <?php global $product_stock; ?>
                <?php global $product_ide; ?>
                <?php global $OrderItems_description; ?>
                <?php global $OrderItems_quantity; ?>
                <?php global $OrderItems_unit_price; ?>
                <?php foreach ($record1 as $column => $value) : ?>
                       <?php if($column == "name") :?>
                            <?php $OrderItems_name= $value ?>
                        <?php endif; ?>
                        <?php if($column == "description") :?>
                            <?php $OrderItems_description= $value ?>
                        <?php endif; ?>
                        <?php if($column == "product_id") :?>
                            <?php $product_ide= $value ?>
                        <?php endif; ?>
                        <?php if($column == "stock") :?>
                            <?php $product_stock= $value ?>
                        <?php endif; ?>
                        <?php if($column == "quantity") :?>
                            <?php $OrderItems_quantity= $value ?>
                        <?php endif; ?>
                        <?php if($column == "unit_price") :?>
                            <?php $OrderItems_unit_price= $value ?>
                        <?php endif; ?>
                <?php endforeach; ?>
                <?php if($OrderItems_quantity > 0) :?>
                    <?php updating_stock($product_ide,$product_stock,$OrderItems_quantity);?>
                <?php endif; ?>
                <table>
                    <thread>
                        <tr></tr>
                    </thread>
                </table>
                <h6 id ="noflex" style="width : 300px;margin-left: 30px; margin-top: 20px;" ><?php echo "🌟 Item Name : ",$OrderItems_name; ?></h6>
                <h6 id ="noflex" style="width : 300px;margin-left: 5px; margin-top: 20px;" ><?php echo "Description : ",$OrderItems_description; ?></h6>
                <h6 id ="noflex" style="width : 300px;margin-left: 5px; margin-top: 20px;" ><?php echo "Quantity : ",$OrderItems_quantity; ?></h6>
                <h6 id ="noflex" style="width : 300px;margin-left: 5px; margin-top: 20px;" ><?php echo "Unit Price : $ ",$OrderItems_unit_price; ?></h6>
            <?php endforeach; ?>
    </div>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>

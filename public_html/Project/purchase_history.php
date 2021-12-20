<?php
require(__DIR__ . "/../../partials/nav.php");
require_once(__DIR__ . "/../../lib/functions.php");
?>
<?php
    $results = [];
    $user_id = get_user_id();
    $db = getDB();
    $stmt = $db->prepare("SELECT id, user_id, total_price, created FROM Orders ");
    try {
        $stmt->execute();
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
    } catch (PDOException $e) {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
    //print_r($results);
?>
<div class="container-fluid" style="margin-bottom:20px;">
    <h1 id ="noflex" >Order History</h1>
    <div class="row">
            <?php if (has_role("Admin")) : ?>
                <?php foreach ($results as $index => $record) : ?>
                        <?php global $order_number; ?>
                        <?php global $order_total; ?>
                        <?php global $order_created; ?>
                        <?php global $order_user_id; ?>
                        <?php global $once_user_id; ?>
                        <?php foreach ($record as $column => $value) : ?>
                               <?php if($column == "id") :?>
                                    <?php $order_number= $value ?>
                                <?php endif; ?>
                                <?php if($column == "total_price") :?>
                                    <?php $order_total= $value ?>
                                <?php endif; ?>
                                <?php if($column == "created") :?>
                                    <?php $order_created= $value ?>
                                <?php endif; ?>
                                <?php if($column == "user_id") :?>
                                    <?php $order_user_id= $value ?>
                                <?php endif; ?>
                            <?php endforeach; ?>
                            <?php if($order_user_id == $once_user_id) :?>
                                <a id ="noflex" style="width : 700px;margin-left: 30px; margin-top: 20px;" href="purchase_detail_page.php?id=<?php se($order_number, "id"); ?>"><?php echo " ★🌟 Order Number : ",$order_number," with the total cost of $",$order_total," placed at ",$order_created ; ?></a>
                            <?php endif; ?>
                            <?php if($order_user_id != $once_user_id) :?>
                                <a id ="noflex" style="margin-left: 20px; margin-top: 20px;"><?php echo "User : ", $order_user_id ?></a>
                                <a id ="noflex" style="width : 700px;margin-left: 30px; margin-top: 20px;" href="purchase_detail_page.php?id=<?php se($order_number, "id"); ?>"><?php echo " ★🌟 Order Number : ",$order_number," with the total cost of $",$order_total," placed at ",$order_created ; ?></a>
                                <?php $once_user_id= $order_user_id ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
            <?php endif; ?>
            <?php if (!has_role("Admin")) : ?>
                    <?php foreach ($results as $index => $record) : ?>
                        <?php global $order_number; ?>
                        <?php global $order_total; ?>
                        <?php global $order_created; ?>
                        <?php global $order_user_id; ?>
                        <?php foreach ($record as $column => $value) : ?>
                            <?php if($column == "id") :?>
                                <?php $order_number= $value ?>
                            <?php endif; ?>
                            <?php if($column == "total_price") :?>
                                <?php $order_total= $value ?>
                            <?php endif; ?>
                            <?php if($column == "created") :?>
                                <?php $order_created= $value ?> 
                            <?php endif; ?>
                            <?php if($column == "user_id") :?>
                                <?php $order_user_id= $value ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <?php if($order_user_id == $user_id) :?>
                            <a id ="noflex" style="width : 700px; margin-left: 20px; margin-top: 20px;" href="purchase_detail_page.php?id=<?php se($order_number, "id"); ?>"><?php echo " ★🌟 Order Number : ",$order_number," with the total cost of $",$order_total," placed at ",$order_created ; ?></a>
                        <?php endif; ?>
                    <?php endforeach; ?>
            <?php endif; ?>
    </div>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>
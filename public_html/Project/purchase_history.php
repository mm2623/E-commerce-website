<?php
require(__DIR__ . "/../../partials/nav.php");
require_once(__DIR__ . "/../../lib/functions.php");
?>
<?php
    $results = [];
    $user_id = get_user_id();
    $db = getDB();

    $col = se($_GET, "col", "id", false);
    if (!in_array($col, ["id","user_id","payment_method", "total_price", "created"])) {
        $col = "id"; //default value, prevent sql injection
    }

    $from = se($_GET, "from_date", "", false);
    $to = se($_GET, "to_date", "", false);

    $order = se($_GET, "order", "asc", false);
    if (!in_array($order, ["asc", "desc"])) {
        $order = "asc"; //default value, prevent sql injection
    }
    
    $base_query = "SELECT id, user_id, total_price, payment_method, created FROM Orders";
    $total_query = "SELECT count(1) as total FROM Orders";
    $query = " WHERE 1=1"; //1=1 shortcut to conditionally build AND clauses
    $params = [];

    if(!empty($from) && !empty($to)) {
        $query .= " AND created BETWEEN :from AND :to";
        $params[":from"] = $from;
        $params[":to"] = $to;
    }
    if(!empty($col) && !empty($order)) {
        $query .= " ORDER BY $col $order"; 
    }
    

    $per_page = 10;
    paginate($total_query.$query, $params, $per_page);
    $query .= " LIMIT :offset, :count";
    $params[":offset"] = $offset;
    $params[":count"] = $per_page;
        //get the records
        $stmt = $db->prepare($base_query . $query);
         //dynamically generated query
        //we'll want to convert this to use bindValue so ensure they're integers so lets map our array
    foreach ($params as $key => $value) {
        $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
        $stmt->bindValue($key, $value, $type);
    }
    $params = null; //set it to null to avoid issues

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
        <form >
        <div class = "row">
            <div class="col-3">
                <div class="input-group">
                    <div class="input-group-text">Sort</div>
                    <select class="form-control" name="col" value="<?php se($col); ?>">
                        <option value="id">Order Id</option>
                        <option value="user_id">Category</option>
                        <option value="payment_method">Payment Method</option>
                        <option value="total_price">Total Cost</option>
                        <option value="created">Date Purchase</option>
                    </select>
                    <script>
                        document.forms[0].col.value = "<?php se($col); ?>";
                    </script>

                </div>  
            </div>
            <div class="col-3">
                <div class="input-group">
                    <div class="input-group-text">Starting</div>
                        <input type="date" name="from_date" class="form-control">
                        <script>
                        document.forms[0].from_date.value = "<?php se($from_date); ?>";
                        </script>
                </div>  
            </div>
            <div class="col-3">
                <div class="input-group">
                    <div class="input-group-text">Ending</div>
                        <input type="date" name="to_date" class="form-control">
                        <script>
                        document.forms[0].to_date.value = "<?php se($to_date); ?>";
                        </script>
                </div>  
            </div>
            <div class="col">
                <select class="form-control" name="order" value="<?php se($order); ?>">
                    <option value="asc">Assending</option>
                    <option value="desc">Desending</option>
                </select>
                    <script>
                        document.forms[0].order.value = "<?php se($order); ?>";
                    </script>
            </div>
            <div class="col">
                <div class="input-group">
                    <input type="submit" class="btn btn-primary" value="Apply" />
                </div>
            </div>
        </div> 
        </form> 
            <?php if (has_role("Admin")) : ?>
                <?php global $order_number; ?>
                <?php foreach ($results as $index => $record) : ?>
                        <?php global $order_total; ?>
                        <?php global $order_created; ?>
                        <?php global $order_user_id; ?>
                        <?php global $once_user_id; ?>
                        <?php global $combined_total_cost; ?>
                        <?php foreach ($record as $column => $value) : ?>
                               <?php if($column == "id") :?>
                                    <?php $order_number= $value ?>
                                <?php endif; ?>
                                <?php if($column == "total_price") :?>
                                    <?php $order_total= $value ?>
                                    <?php $combined_total_cost += $value ?>
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
                                <a id ="noflex" style="margin-left: 20px; margin-top: 10px;"><?php echo "User : ", $order_user_id ?></a>
                                <a id ="noflex" style="width : 700px;margin-left: 30px; margin-top: 10px;" href="purchase_detail_page.php?id=<?php se($order_number, "id"); ?>"><?php echo " ★🌟 Order Number : ",$order_number," with the total cost of $",$order_total," placed at ",$order_created ; ?></a>
                                <?php $once_user_id= $order_user_id ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <?php if($order_number>0) :?>
                        <h3 style="margin-top : 20px; text-align:center;"><?php echo "Combined Total Price: $",$combined_total_cost; ?></h3>
                        <?php endif; ?>
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
<?php include(__DIR__ . "/../../partials/pagination.php"); ?>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>
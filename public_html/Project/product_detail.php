<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<?php
    $result = [];
    $item_id = se($_GET, "id", 0, false);
    $columns = get_columns("Products");
    $ignore = ["id", "modified", "created"];
    $db = getDB();
    $stmt = $db->prepare("SELECT * FROM Products where id =:id");
    try {
    $stmt->execute([":id" => $item_id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($r) {
            $result = $r;
        }
    }catch (PDOException $e) {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
    function mapColumn($col)
    {
        global $columns;
        foreach ($columns as $c) {
            if ($c["Field"] === $col) {
                return inputMap($c["Type"]);
           }
        }
        return "text";
    }
    $result1 = [];
    $product_id = se($_GET, "id", 0, false);
    $base_query = "SELECT * FROM Ratings";
    $total_query = "SELECT count(1) as total FROM Ratings";
    $query = " WHERE product_id =:id";
    $params[":id"]=$product_id;
    $query .= " ORDER BY created desc"; 
    $per_page = 10;
    paginate($total_query.$query, $params, $per_page);
    $query .= " LIMIT :offset, :count";
    $params[":offset"] = $offset;
    $params[":count"] = $per_page;
    $stmt = $db->prepare($base_query . $query);
    foreach ($params as $key => $value) {
        $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
        $stmt->bindValue($key, $value, $type);
    }
    $params = null;
    try {
        $stmt->execute();
        $r1 = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r1) {
            $result1 = $r1;
        }
    } catch (PDOException $e) {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
?>

<div class="container-fluid">
    <div class ="row">
        <div class = "col-3">
        <?php global $temp_id; ?>
        <?php global $a_r; ?>
        <?php global $p_id; ?>
        <h1>Product Detail</h1>
        <?php foreach ($result as $column => $value) : ?>
            <?php if ($column == "name"):  ?>
                <h5 class="body1">Name: <?php se($value, "name"); ?></h5>
            <?php endif; ?>
            <?php if ($column == "image"):  ?>
                <img class="body" src="<?php se($value, "image"); ?>" alt="...">
            <?php endif; ?>
            <?php if ($column == "description"):  ?>
                <h5 class="body">Description: <?php se($value, "description"); ?></h5>
            <?php endif; ?>
            <?php if ($column == "id"):  ?>
                <?php $p_id = $value?>
            <?php endif; ?>
            <?php if ($column == "average_rating"):  ?>
                <?php $a_r = $value?>
            <?php endif; ?>
            <?php if ($column == "cost"):  ?>
                <h5 class="body">Cost: $<?php se($value, "cost"); ?></h5>
            <?php endif; ?>
            <?php if ($column == "category"):  ?>
                <h5 class="body">Category: <?php se($value, "category"); ?></h5>
            <?php endif; ?>
            <?php if ($column == "stock"):  ?>
                <h5 class="body">Stock: <?php se($value, "stock"); ?></h5>
            <?php endif; ?>
        <?php endforeach; ?>
        <?php if (has_role("Admin")) : ?> 
            <td>
                <a href="admin/edit_item.php?id=<?php se($item_id, "id"); ?>">
                <button class="btn btn-primary">Edit</button>
            </a>
            </td>
        <?php endif; ?>
        </div>
        <div class = "row">
        <h1 style="margin-top : 20px;">Reviews</h1>
            <div class = "row">
            <?php foreach ($result1 as $index1 => $record1) : ?>
                <?php global $order_user_id; ?>
                <?php global $order_rating; ?>
                <?php global $order_comment; ?>
                <?php global $order_created; ?>
                <?php global $average_rating; ?>
                <?php global $round_average_rating; ?>
                <?php  $round_average_rating = (float) 0; ?>
                <?php global $total_rating; ?>
                <?php global $counter; ?>
                <?php foreach ($record1 as $column1 => $value1) : ?>
                    <?php if($column1 == "user_id") :?>
                        <?php $order_user_id= $value1 ?>
                        <?php $counter+=1; ?>
                    <?php endif; ?>
                    <?php if($column1 == "rating") :?>
                        <?php $order_rating= $value1 ?>
                        <?php $total_rating += $value1 ?>
                    <?php endif; ?>
                    <?php if($column1 == "comment") :?>
                        <?php $order_comment= $value1 ?>
                    <?php endif; ?>
                    <?php if($column1 == "created") :?>
                        <?php $order_created= $value1 ?>
                    <?php endif; ?>
                <?php endforeach; ?>
                <a id ="noflex" style="width : 10%;margin-right : 70px;margin-left : 15px;" href="viewprofile.php?id=<?php se($order_user_id, "id"); ?>"><?php echo "User-id : ",$order_user_id; ?></a>
                <h7 id ="noflex" style="width : 8%;margin-right : 70px;" ><?php echo "Rating: ",$order_rating; ?></h7>
                <h7 id ="noflex" style="width : 30%;margin-right : 70px;" ><?php echo "Comment : ",$order_comment; ?></h7>
                <h7 id ="noflex" style="width : 28%;margin-right : 70px;" ><?php echo "Review given on : ",$order_created; ?></h7>
            <?php endforeach; ?>
            <?php $average_rating= $total_rating/$counter; ?>
            <?php $round_average_rating = round($average_rating, 1); ?>
            </div>
        <div class = "row">
            <h1 style="margin-top : 20px; text-align:center;"><?php echo "Average rating: ",$round_average_rating; ?></h1>
            <?php if($a_r >= 0) :?>
                <?php update_average_rating($round_average_rating,$p_id);?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php include(__DIR__ . "/../../partials/pagination.php"); ?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>
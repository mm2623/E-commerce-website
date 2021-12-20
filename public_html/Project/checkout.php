<?php
require(__DIR__ . "/../../partials/nav.php");
require_once(__DIR__ . "/../../lib/functions.php");
?>
<?php
    $results =[];
    if(isset($_POST["button_order"])){
        if(empty($_POST["payment_check"])){
            flash("Please enter payment_check", "alert");
        }else if(empty ($_POST["payment"])){
            flash("Please select payment method", "alert");
        }else if(empty ($_POST["address"])){
            flash("Please enter address", "alert"); 
        }else if(empty ($_POST["city"])){
            flash("Please enter city", "alert");
        }else if(empty ($_POST["state"])){
            flash("Please select state", "alert");
        }else if(empty ($_POST["country"])){
            flash("Please select country", "alert");
        }else if(empty ($_POST["zipcode"])){
            flash("Please enter zipcode", "alert");
        }else if(isset($_POST["payment_check"]) || ($_POST["payment"]) || ($_POST["name"]) || ($_POST["number"]) || ($_POST["address"]) || ($_POST["apt"]) || ($_POST["city"]) || ($_POST["state"]) || ($_POST["country"]) || ($_POST["zipcode"])) {
            if(empty ($_POST["apt"])){
                $full_address = join(" , ",[ $_POST["address"], $_POST["city"], $_POST["state"], $_POST["zipcode"], $_POST["country"] ]);
            }
            if(!empty ($_POST["apt"])){
                $full_address = join(" , ",[ $_POST["address"],$_POST["apt"], $_POST["city"], $_POST["state"], $_POST["zipcode"], $_POST["country"] ]);
            }
            $payment_method = $_POST["payment"];
            $payment_check = $_POST["payment_check"];
            if ($payment_check == $_POST["ordertotal"]){
                $order_id = order(get_user_id(),$_POST["ordertotal"],$full_address,$payment_method);
                if ($order_id >0)
                {
                    order_item(get_user_id(),$order_id);
                    empty_cart(get_user_id());
                    redirect('confirmation.php',$order_id);
                }
            }
            else flash("Amount entered doesn't matched with cart total", "alert");;
        }
    }
    $user_id = get_user_id();
    $db = getDB();
    $stmt = $db->prepare("SELECT product_id, name, /*user_id,*/ desired_quantity, unit_cost FROM Cart JOIN Products on Cart.product_id = Products.id WHERE user_id = :uid");
    try {
        $stmt->execute([":uid" => $user_id]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
    } catch (PDOException $e) {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
?>

<script>
    function update_quantity(event,itemid) {
        event.preventDefault()
        var x = event.target.value;
        console.log("TODO Update quantity item", itemid);
            let http = new XMLHttpRequest();
            http.onreadystatechange = () => {
                if (http.readyState == 4) {
                    if (http.status === 200) {
                        let data = JSON.parse(http.responseText);
                        console.log("received data", data);
                        flash(data.message, "success");
                        if (data.message.indexOf("remove")>-1){
                            event.target.parentElement.parentElement.remove();
                            
                        }
                        else{
                            window.location.reload();
                        }      
                    }
                    console.log(http);
                }
            }
            http.open("POST", "api/update_quantity.php");
            let data = {
                item_id: itemid,
                quantity: x
            }
            let q = Object.keys(data).map(key => key + '=' + data[key]).join('&');
            console.log(q)
            http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            http.send(q);
    }
</script>

<div class="container-fluid">
    <form method="POST">
        <h1>Checkout</h1>
        <div class="row" >
            <h3 id ="noflex" style="margin-left: 40px; margin-top: 10px;">Shipping Address</h3>
                <div class="col">
                    <label style= "text-align:left; margin-left: 60px; margin-top: 10px; width:100%;" class="form-label" >
                        <span style ="margin-left: 10px;">Full Name (First and Last Name)</span>    
                        <input class="form-control" type="text" name="name" placeholder= "Name" style ="width:80%">
                        <span style ="margin-left: 10px; margin-top: 10px;"> Phone Number</span>    
                        <input class="form-control" type="number" name="number" placeholder= "10 digit without '-' " style ="width:58%">
                    </label>
                </div>
                <div class="col">
                    <label style= "text-align:left; margin-left: 30px; margin-top: 10px; width:100%;" class="form-label" >
                        <span style ="margin-left: 10px;">Address</span>    
                        <input class="form-control" type="text" name="address" placeholder= "Street address or PO-box" style ="width:100%">
                        <input class="form-control" type="text" name="apt"placeholder= "Apt,unit,suite,building,floor,etc" style ="margin-top: 25px; width:100%;">
                    </label>
                </div>
                <div class="col">
                    <label style= "text-align:left; margin-left: 90px; margin-top: 10px; width:100%;" class="form-label" >
                        <span style ="margin-left: 10px; margin-top: 10px;">City</span>    
                        <input class="form-control" type="text" name="city" style ="width:50%">
                        <span style ="margin-left: 10px;">State</span>  
                        <select class="form-control" name="state" style ="margin-left: 10px; width:50%;">
                            <option value=" ">Select</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select>   
                    </label>
                </div>
                <div class="col">
                    <label style= "text-align:left; margin-left: 10px; margin-top: 10px; width:100%;" class="form-label" >
                        <span style ="margin-left: 10px;">Country</span>    
                        <select class="form-control" name="country" style ="margin-left: 10px; width:50%;">
                            <option>Select</option>
                            <option value="United States">United States</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Algeria">Algeria</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Australia">Australia</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Canada">Canada</option>
                            <option value="China">China</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Egypt">Egypt</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Italy">Italy</option>
                            <option value="Japan">Japan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="South Korea">South Korea</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Philippines">Philippines</option>
                            <option value="United Kingdom">United Kingdom</option>
                        </select>
                        <span style ="margin-left: 10px;">ZIP Code</span>    
                        <input class="form-control" type="text" name="zipcode" placeholder= "5 digit" style ="width:50%">
                    </label>
                </div>
        </div>
        <div class ="row">
            <h3 id ="noflex" style="margin-left: 40px; margin-top: 10px;">Payment Method</h3>
            <div class="col">
                
                    <label style= "text-align:left; margin-left: 60px; margin-top: 10px;">
                        <input type="radio" name="payment" id="method1" value="Credit Card">
                        <span>Credit Card</span>
                    </label>
                    <label style= "text-align:left; margin-left: 60px; margin-top: 10px;">
                        <input type="radio" name="payment" id="method2" value="Debit Card">
                        <span>Debit Card</span>
                    </label>
                    <label style= "text-align:left; margin-left: 60px; margin-top: 10px;">
                        <input type="radio" name="payment" id="method3" value="Cash">
                        <span>Cash</span>
                    </label>
                    <label style= "text-align:left; margin-left: 60px; margin-top: 10px;">
                        <input type="radio" name="payment" id="method4" value="Paypal">
                        <span>Paypal</span>
                    </label>
                    <label style= "text-align:right; margin-left: 60px; margin-top: 10px;width: 190px;">     
                        <span>Payment Check $</span>
                    </label>
                    <label style= "text-align:left; margin-top: 10px; width: 190px;" >    
                        <input class="form-control" type="number" name="payment_check" placeholder= "Enter the total cost" style ="width:100%" >
                    </label>
                
            </div>
        </div>
        <div class ="row">
            <h3 id ="noflex" style="margin-left: 40px; margin-top: 10px;">Review items</h3>
            <div class="col">
                <table class="table text-dark" style="margin-left: 60px; width: 60%;">
                <?php global $cart_total; ?>
                <?php global $total; ?>
                <?php global $temp_id;?>
                <?php global $temp_quantity;?>
                <?php global $temp_cost;?>
                <?php $temp_quantity = 0;?>
                <?php foreach ($results as $index => $record) : ?> <!-- $result with all the information -->
                    <?php if ($index == 0) : ?>       <!-- $index is the number of rows in table  -->
                        <thead>
                                <tr>
                                    <th width="140px">Product</th>
                                    <th width="10%">Quantity</th>
                                    <th width="15%">Price</th>
                                    <th width="15%">Total</th>
                                </tr>
                        </thead>
                        <thead>
                            <?php foreach ($record as $column => $value) : ?>
                                <!--<th><?php se($column); ?></th>--><!-- column names "header"-->
                                
                            <?php endforeach; ?>
                        </thead>
                    <?php endif; ?>
                    <tr>
                        <?php foreach ($record as $column => $value) : ?> <!-- for each row-->
                                <?php if($column == "product_id") :?>
                                    <?php $temp_id = $value;?>
                                <?php endif; ?>
                                <?php if($column == "name") :?>
                                    <?php $temp_quantity = $value;?>
                                    <td>
                                        <a href="product_detail.php?id=<?php se($temp_id, "id"); ?>"><?php echo $value ?></a>
                                    </td>
                                <?php endif; ?>
                                <?php if($column == "unit_cost") :?>
                                    <?php $temp_cost = $value?>
                                    <td><?php echo "$",$value ?></td>
                                <?php endif; ?>
                                <?php if($column == "desired_quantity") :?>
                                    <?php $temp_quantity = $value;?>
                                    <td><input class="form-control" type="number" id="lname" name="quantity" value="<?php echo $value ;?>" onchange ="update_quantity(event,'<?php se($temp_id); ?>')"/></td>
                                <?php endif; ?>
                            <!--<?php se($value, null, "N/A"); ?></td>--> <!--display values in a row "----"-->  
                        <?php endforeach; ?>
                    <?php $total = $temp_quantity * $temp_cost;?> <!--calculating total for each item  -->
                    <?php $cart_total = $cart_total + $total;?>
                    <td><?php echo "$",$total ?></td>
                <?php endforeach; ?>
                <?php if($temp_quantity == 0) :?>
                    <h5 class="text" style="text-align:center"  >Your cart is empty</h5>
                <?php endif; ?>
                </table>
            </div>
            <div class="col">
                <?php if($temp_quantity > 0) :?>
                    <h3 style = "text-align:center;"><u>Summary</u></h3>
                        <h5 style="text-align:center; ">  
                            <?php echo "Cart Total :"?>
                            <?php echo "$",$cart_total ?></h5> 
                <?php endif; ?>
            </div>
        </div>
        <div class ="row" style= "text-align:center;">
            <h2 style= "text-align:center;">
                <input type="hidden" name="ordertotal" value="<?php echo$cart_total;?>">
                <td><button  type = "submit" name ="button_order" class = "btn btn-primary btn-lg" onclick="">Order</button></td>
            </h2>
        </div>
    </form> 
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>
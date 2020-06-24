<?php
error_reporting(0);

$page_title='Cart | ZERI';

include 'includes/header.php';
require 'includes/dbh.inc.php';

if(isset($_SESSION['cart_items'])){
    $count = 0;
    for($i=0;$i<=$cart_items;$i++){
        if(isset($_SESSION["cart_items_$i"])){
            $count++;
        }
    }
    $cart_items = $count;
}
else
    $cart_items = 0;
if(@$_GET['q'] == "addtocart"){
    if(isset($_POST['cart'])){
        $id = $_POST['id'];
        $size = $_POST['size'];
        $quantity = $_POST['quantity'];

        $query = "SELECT * FROM product WHERE Product_id='$id' AND Product_size LIKE '%$size%'";
        $result = mysqli_query($conn, $query);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) 
            {
                if ($quantity <= $row['Product_quantity'])
                {
                    $data = $id . "," . $size . "," . $quantity;
        
                    //$cart_item_data = explode(",",$data);
                    $find = 0;
                    for($i=0;$i<$cart_items;$i++){
                        if($id == explode(',',$_SESSION["cart_items_$i"])[0]){
                            $find = 1;
                             break;
                        }
                    }
                    if($find == 0){
                        @$_SESSION["cart_items_$cart_items"] = $data;
                        $cart_items = $cart_items + 1;
                        @$_SESSION['cart_items'] = $cart_items;
                    }
        
        
                    echo "<script>window.open('cart.php','_self')</script>";
                }

                else
                {
                    ?> <script> alert("Sorry, the required product isn't available in this quantity. Please try again!"); window.location.replace(" ./index.php");</script>
            <?php
                }
            }
        }

        else
        {
            ?> <script> alert("Sorry, your request couldn't process. Please try again!"); window.location.replace(" ./index.php");</script>
            <?php
        }
        
    }
}

if(@$_GET['action'] == "removefromcart" && strlen(@$_GET['id'])> 0){
    $id = @$_GET['id'];
    if(isset($_SESSION["cart_items_$id"])){
        unset($_SESSION["cart_items_$id"]);
        $cart_items = $cart_items - 1;
        @$_SESSION['cart_items'] = $cart_items;
    }
        
    
    echo "<script>window.open('cart.php','_self')</script>";
}
if(@$_GET['action'] == "empty"){
    for($i=0;$i<=$cart_items;$i++){
        unset($_SESSION["cart_items_$i"]);
    }
    $cart_items = 0;
    @$_SESSION['cart_items'] = $cart_items;
    
    echo "<script>window.open('cart.php','_self')</script>";
}

$cart_total = 0;
$cart_tax = 168;
if($cart_items > 0){
    
    for($i=0;$i<=$cart_items;$i++){
        $cart_itemdata =  explode(",",$_SESSION["cart_items_$i"]);
        $cart_id = $cart_itemdata[0];
        $cart_data_query = mysqli_query($conn,"select * from product where Product_id='$cart_id'");
        while($cart_data = mysqli_fetch_array($cart_data_query )){
            $cart_total = $cart_total + ($cart_data['Product_price'] * $cart_itemdata[2]);
        }
    }
}
 ?>

<html lang="en">
    
    <!DOCTYPE html>
    <html lang="en">
    <!-- Basic -->
    
    
       <title>Cart | ZERI</title>
    <body> 
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <h3>Cart</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Size</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    for($i=0;$i<=$cart_items;$i++){
                                            if(isset($_SESSION["cart_items_$i"])){
                                                $itemdata =  explode(',',$_SESSION["cart_items_$i"]);
                                                $cart_id = $itemdata[0];
                                                echo "<tr>";
                                                    $cart_data_query = mysqli_query($conn,"select * from product where Product_id='$cart_id'");
                                                    while($cart_data = mysqli_fetch_array($cart_data_query )){
                                                        ?>
                                                        <td><img src="images/<?php echo $cart_data['Product_img']; ?>" style="width:120px;height:120px;" class="img-fluid" alt="Image" id="pic1"></td>
                                                        <td><?php echo $cart_data['Product_Name']; ?></td>
                                                        <td><?php echo $itemdata[1]; ?></td>
                                                        <td><?php echo $cart_data['Product_price']; ?></td>
                                                        <td><?php echo $itemdata[2]; ?></td>
                                                        <td><?php echo $cart_data['Product_price'] * $itemdata[2]; ?></td>
                                                        <td><a href="cart.php?id=<?php echo $i; ?>&action=removefromcart" class="ml-auto btn hvr-hover">Remove</a></td>
                                                        <?php 
                                                    }
                                                echo "</tr>";   
                                            }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="update-box">
                        <div class="col-12 d-flex shopping-box">
                            <a href="cart.php?action=empty" class="ml-auto btn hvr-hover">Empty Cart</a>
                            <a href="shop.php" class="ml-auto btn hvr-hover">Continue Shopping</a>
                        </div>
                    </div>

                </div>

            </div>
          

            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            <div class="ml-auto font-weight-bold">  <?php echo $cart_total; ?>  SAR </div>
                        </div>
                       
                        <hr class="my-1">
                      
                        <div class="d-flex">
                            <h4>Tax</h4>
                            <div class="ml-auto font-weight-bold">  <?php echo $cart_tax; ?>  SAR</div>
                        </div>
                        <div class="d-flex">
                            <h4>Shipping Cost</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5">  <?php echo $cart_total + $cart_tax; ?>  SAR</div>
                        </div>
                        <hr>
                    </div>
                    
                    <!-- Start Chickout/Buy/Update Box -->
                    <div class="col-lg-4 col-sm-12"></div>
                        <div class="col-12 d-flex shopping-box">
                            <div Class="update-box">
                                <a href="adddata.php?action=checkout" class="ml-auto btn hvr-hover">Checkout</a> 
                                <a href="adddata.php?action=buy" class="ml-auto btn hvr-hover">Buy</a>
                            </div>
                        </div>
                    </div>
                     <!-- End Chickout/Buy/Update Box -->

                </div>
                
                </div>
                
                
            </div>

        </div>
    </div>
    <!-- End Cart -->

    <?php
include 'includes/footer.php';
 ?>

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
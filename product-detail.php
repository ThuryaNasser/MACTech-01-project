<?php
$page_title='Product Details | ZERI';
include 'includes/header.php';
require 'includes/dbh.inc.php';
 ?>

<html lang="en">

    <!DOCTYPE html>
    <html lang="en">
    <!-- Basic -->

    <head>


        <!-- Style border -->
        <style type="text/css">

            .star {
                border: 2px solid gray;
                border-radius: 15px;
                background-color: transparent;
                width: 20%;
                height: 5%;
            }

            #alert-cover{
  display:none;
  background:rgba(0,0,0,0.3);
  position:fixed;
  left:0; right:0; top:0; bottom:0;
  width:100%;
  height:100%;
}
#alert{
  position:fixed;
  z-index:99999;
  background:#fafafa;
  max-width:400px;
  padding:10px 15px 15px;
  left:0;
  right:0;
  margin:20px auto;
  box-shadow:0 3px 3px rgba(0,0,0,0.3);
}
#alert > button{
  background:#ddd;
  border:0;
  padding:7px 15px;
  cursor:pointer;
  border-bottom:1px solid #aaa;
}
        </style>


    </head>

    <body>


    <!-- Start All Title Box -->
   <!-- <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Product Details</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="shop.php">CATEGORIES</a></li>
                        <li class="breadcrumb-item active">Product Details</li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="images/big-img-01.jpg" alt="First slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="images/big-img-02.jpg" alt="Second slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="images/big-img-03.jpg" alt="Third slide"> </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                <img class="d-block w-100 img-fluid" src="images/smp-img-01.jpg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                                <img class="d-block w-100 img-fluid" src="images/smp-img-02.jpg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="2">
                                <img class="d-block w-100 img-fluid" src="images/smp-img-03.jpg" alt="" />
                            </li>
                        </ol>
                    </div>
                </div>
        <div class="single-product-details">

            <?php

            $id = $_GET['id'];

            $query = "SELECT * FROM product WHERE Product_id = '$id'";
            $result = mysqli_query($conn, $query);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc())
                    {
                        ?>
                        <table style="width: 100%;"><tr><td style="width: 30%;">
                                <img src="images/<?php echo $row["Product_img"]; ?>" alt="First slide" width="100%">
                            </td>
                            <td style="width: 70%; padding-left: 30px;">
                            <h2><?php echo $row["Product_Name"]; ?></h2>
                            <h5><?php echo $row["Product_price"]; ?> SR</h5>
                            
                            <hr />
                                <h4>Description:</h4>
                                    <p>
                                        <?php echo $row["Product_Description"]; ?>
                                    </p>


                            <hr />

                            <div>
                                <label for="size">Size:</label>
                                <form action="cart.php?q=addtocart" method="post">
                                    <input type="text" name="id" value="<?php echo $id; ?>" hidden>
                                    <select name="size" id="size" class="star" required="required">
                                        <option value="">Please select</option>
                                        <option value="XS">XS</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="2XL">2XL</option>
                                    </select>

                                <label for="quantity">Quantity: </label>
                                <input class="star" type="number" id="quantity" name="quantity" min=1required="required">
                                <br><br>
                                <div class="add-to-btn">
                                <div class="add-comp">
                                <input type="submit" name="cart" value="Add to cart" style="color: white; padding: 9px; font-weight: bold;" class="btn hvr-hover">
                            </form>
                            <a class="btn hvr-hover" data-fancybox-close="" href="shop.php">Buy New</a>

                            <!---
                             <a class="btn hvr-hover" data-fancybox-close="" style="color: white; padding: 9px; font-weight: bold;" href="javascript:;" data-alert="<p><img src='images/size-chart2.jpg'></p>"> Help! </a>
                            --->

                            <a class="btn hvr-hover" data-fancybox-close="" style="color: white; padding: 9px; font-weight: bold;"  data-alert="<p><img src='images/size-chart2.jpg'></p>" onclick=" popUp()" > Help! </a>



                            </div>
                            <br />

                            </td></tr></table>

                        <?php
                    }
                }

            ?>



            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

            <script>
                function popUp(){

                    Swal.fire({
                        title: 'Sweety Woman!',
                        text: 'You can Choose your size depending on this size chart',
                        imageUrl: 'images/size-chart2.jpg',
                        imageWidth: 400,
                        imageHeight: 200,
                        imageAlt: 'Custom image',
                    })

                }
            </script>



                                </div>
                            </div>

                    </div>
                </div>
            </div>
            <br />
            <br />

        </div>
    </div>
    <!-- End Shop Detail -->

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

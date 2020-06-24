

<?php
include 'includes/headerAdmin.php';
//require 'includes/dbh.inc.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>


    <title>Update Product</title>

    <style>



        .container {
            display: table;
            width: 100%;
            margin-top: 5px;
        }

        .left-half {
            position: absolute;
            left: 0px;
            padding-left: 300px;
            width: 50%;
        }

        .right-half {
            position: absolute;
            right: 0px;
            padding-left: 50px;
            width: 50%;
        }
    </style>

</head>

<body>

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Search Product</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

     <!-- Start Login Page -->
     <div class="login-box-main">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="banner-frame"> <img class="img-fluid" src="images/searchImg.png" alt=""  />
                     </div>
                 </div>
           <div class="col-lg-6">
           <div class="login-box-main">
            <form action="search.php" method="post" class="register-form" id= "AddForm" >

                <div class="form-group">
                    <div>
                    <br>
                        <br>
                        <label> <h3><p><strong>Search:</strong></p></h3>
                            <input type="search" name="SearchField" id="Sfieald" placeholder="Enter a product id to find it"  style="background-color: #b0b4356c;" size="50" required/>
                            <section>
                                <br>
                                <input class="btn hvr-hover" type="submit" value="search" name="search" >
                            </section>

                        </label>

                    </div>
                </div>

                  </form>
                  <?php

  require 'includes/dbh.inc.php';

  if(isset($_POST['search']))
  {
    $SearchField=$_POST["SearchField"];

      $query = "SELECT * FROM product WHERE Product_id='$SearchField'";
      $result = mysqli_query($conn, $query);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc())
        {

          echo "Do you want to <a href='update.php?data=update&id=" . $row["Product_id"] . "'>Update</a> or <a href='update.php?data=delete&id=". $row["Product_id"] . "'>Delete</a> this product?";

                ?>
                  <script>
                    document.getElementById("myDIV").innerHTML = "Do you want to <a href='update.php?data=update&id=" + <?php echo $row["Product_id"]; ?> + "'>Update</a> or <a href='update.php?data=delete&id=" + <?php echo $row["Product_id"]; ?> + "'>Delete</a> this product?";
                  </script>
                <?php
        }
      }

      else
      {
        ?> <script> alert("No such product found. Please try again!"); window.location.replace(" ./search.php");</script>
        <?php
      }
  }

?>
                  <p id="myDIV"></p>
                  </div>
                  </div>



                  </div>
                  </div>
                </div>
    <!-- End Login page -->
    <?php
include 'includes/footerAdmin.php';
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

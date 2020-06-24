<?php

   $page_title = 'Add Product | ZERI ADMIN';

  require 'includes/dbh.inc.php';

  session_start();
  $adminid = $_SESSION['Admin_id'];

  if (isset($_POST['add'])) {
      $name = $_POST['name'];
      $id = $_POST['id'];
      $quantity = $_POST['quantity'];
      $price = $_POST['price'];
      $size = $_POST['size'];
      $category = $_POST['category'];
      $description = $_POST['description'];

      $image = $_FILES['fileToUpload']['name'];
      $target = 'images/'.basename($image);

      $query = "INSERT into product (Product_id, Product_img, Product_Name, Product_Description, Product_price, Product_quantity, Product_size, Product_category, Admin_id) VALUES ('$id', '$image', '$name', '$description', '$price', $quantity, '$size', '$category', '$adminid')";
      $result = mysqli_query($conn, $query);

      if ($result) {
          //move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);
        ?> 
        <script> 
            alert("The product has been added.");   
         </script>
        <?php
      } else {
          echo $conn->error;
      }
  }

?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
<h1> summer trainning 2020</h1>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Add Product</title>
    <meta name="keywords" content="">


    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/apple-touch-icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">


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
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="right-phone-box">
                        <p>Call US :- <a href="#"> +966 5044799688s</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="SignInAdmin.php"><i class="fa fa-user s_color"></i> Admin</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                   <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                       <li class="nav-item "><a class="nav-link" href="index.php">Home</a></li>
                       <li class="dropdown active">
                           <a href="#" class="nav-link dropdown-toggle arrow " data-toggle="dropdown">Products Settings</a>
                           <ul class="dropdown-menu ">
                               <li><a href="add.php">Add</a></li>
                               <li><a href="search.php">Update or Delete</a></li>
                               
                           </ul>
                       </li>
                       <li class="nav-item"><a class="nav-link" href=""></a></li>
                       <button class="nav-item" style="font-size: 12pt; font-weight: bolder ; width: 100px; height: 45px; background-color:#b0b435; border-width: 0px; border-radius: 20px;"><a class="nav-link" href="logout.php">LOGOUT</a> </button>

                   </ul>
                </div>
                <!-- /.navbar-collapse -->
                <!-- End Atribute Navigation -->

    </header>
    <!-- End Main Top -->


    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Add Product</h2>
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
                     <br>
                     <br>
                     <br>
                     <div class="banner-frame"> <img class="img-fluid" src="images/choosefilep.png" alt=""  />
                     </div>
                 </div>
           <div class="col-lg-6">
           <div class="login-box-main"> 
            <form action="add.php" method="post" class="register-form" id= "AddForm" enctype="multipart/form-data" onsubmit="return checkForm(this);">
                 
                <div class="form-group">
                    <br>
                    <br>
                    <h3><p><strong>Product:</strong></p></h3>

                    <label> <Strong>Product Name</Strong>
                        <input type="text" name="name" id="ProName" placeholder="name" size="50"  style="background-color: #b0b4356c;" required/>
                    </label>

                    <label> <Strong>Product ID</Strong>
                        <input type="text" name="id" id="ProID" placeholder="Product ID" size="50" style="background-color: #b0b4356c;" required/>
                    </label>

                    <label> <Strong>Product Image</Strong>
                        <!---  code of choose file -->
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </label>

                    <label> <Strong>Product Quantity</Strong>
                        <input type="text" name="quantity" id="ProQty" placeholder="quantity" size="50" style="background-color: #b0b4356c;" required/>
                    </label>

                    <label> <Strong>Product Price</Strong>
                        <input type="text" name="price" id="ProPrice" placeholder="00.00 SR" size="50" style="background-color: #b0b4356c;" required/>
                    </label>

                    <label> <Strong>Product Size</Strong>
                        <input type="text" name="size" id="ProSize" placeholder="M" size="50" required style="background-color: #b0b4356c;"/>
                    </label>

                    <label> <Strong>Product Category</Strong>
                        <input type="text" name="category" id="ProSize" placeholder="Abayas" size="50" required style="background-color: #b0b4356c;"/>
                    </label>

                    <br>
                    <label> <Strong>Product Description</Strong></label>
                    <br>
                    <textarea name="description" id="ProDesc" placeholder="Description" style="background-color: #b0b4356c;"></textarea>

                    <br>
                    <br>
                    <div><input class="btn hvr-hover" type="submit" value="Add" name="add"></div>



                </div>

                
               
                
                  </form>
                  </p>
                  </div>
                  </div>
                  </div>
                  </div>
                </div> 
    <!-- End Login page -->

    <script>

  function checkForm(form)
  {
    // validation fails if the input is blank
    if(form.name.value == "") {
      alert("Error: Input is empty!");
      form.inputfield.focus();
      return false;
    }

    // regular expression to match only alphanumeric characters and spaces
    var re = /^[\w ]+$/;

    // validation fails if the input doesn't match our regular expression
    if(!re.test(form.name.value)) {
      alert("Error: Name contains invalid characters!");
      form.inputfield.focus();
      return false;
    }

    var re4 = /[A-Za-z0-9]+/;

    if(form.id.value == "") {
      alert("Error: Input is empty!");
      form.inputfield.focus();
      return false;
    }

    if(!re4.test(form.id.value)) {
      alert("Error: Id contains invalid characters!");
      form.inputfield.focus();
      return false;
    }

    var re2 = /^[0-9]*$/;

    if(form.quantity.value == "") {
      alert("Error: Input is empty!");
      form.inputfield.focus();
      return false;
    }

    if(!re2.test(form.quantity.value)) {
      alert("Error: Quantity contains invalid characters!");
      form.inputfield.focus();
      return false;
    }

    if(form.price.value == "") {
      alert("Error: Input is empty!");
      form.inputfield.focus();
      return false;
    }

    if(!re2.test(form.price.value)) {
      alert("Error: Price contains invalid characters!");
      form.inputfield.focus();
      return false;
    }

    if(form.size.value == "") {
      alert("Error: Input is empty!");
      form.inputfield.focus();
      return false;
    }

    var re5 = /[xsml2,]+/;

    if(!re5.test(form.size.value)) {
      alert("Error: Size contains invalid characters!");
      form.inputfield.focus();
      return false;
    }

    var re3 = /[a-zA-Z]+/;

    if(form.category.value == "") {
      alert("Error: Input is empty!");
      form.inputfield.focus();
      return false;
    }

    if(!re3.test(form.category.value)) {
      alert("Error: Category contains invalid characters!");
      form.inputfield.focus();
      return false;
    }

    if(form.description.value == "") {
      alert("Error: Input is empty!");
      form.inputfield.focus();
      return false;
    }

    if(!re.test(form.description.value)) {
      alert("Error: Description contains invalid characters!");
      form.inputfield.focus();
      return false;
    }

    // validation was successful
    return true;
  }

</script>

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
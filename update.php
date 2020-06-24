<!-- Mujaba update the update.php file --!>

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
                    <h2>Update Product</h2>
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

<?php

  require 'includes/dbh.inc.php';

    $data = $_GET['data'];
    $id = $_GET['id'];

    $adminid = $_SESSION['Admin_id'];

    if ($data == "delete")
    {
        $query = "SELECT * FROM product WHERE Product_id = '$id'";
        $result = mysqli_query($conn, $query);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) 
                { 
                    $query1 = "DELETE FROM product WHERE Product_id='$id'";
                    $result1 = mysqli_query($conn, $query1);
                    

                    echo "<br><br><br><br><br><br><br><h2>Product has been deleted successfully!</h2>";
                }
            }
    }

    else if ($data == "update")
    {
      $query = "SELECT * FROM product WHERE Product_id = '$id'";
        $result = mysqli_query($conn, $query);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) 
                { 
        ?>

            <form action="update.php?data=updated&id=<?php echo $id; ?>" method="post" class="register-form" id= "AddForm" enctype="multipart/form-data" onsubmit="return checkForm(this);">
                 
                <div class="form-group">

                    <h3><p><strong>Product:</strong></p></h3>

                    <label> <Strong>Product Name</Strong>
                        <input type="text" name="name" id="ProName" value="<?php echo $row['Product_Name']; ?>" placeholder="name" size="50"  style="background-color: #b0b4356c;" required/>
                    </label>

                    <label> <Strong>Product Image</Strong>
                        <!---  code of choose file -->
                        <input type="file" name="fileToUpload" id="fileToUpload">
                    </label>

                    <label> <Strong>Product Quantity</Strong>
                        <input type="text" name="quantity" id="ProQty" placeholder="quantity" value="<?php echo $row['Product_quantity']; ?>" size="50" style="background-color: #b0b4356c;" required/>
                    </label>

                    <label> <Strong>Product Price</Strong>
                        <input type="text" name="price" id="ProPrice" placeholder="00.00 SR" value="<?php echo $row['Product_price']; ?>" size="50" style="background-color: #b0b4356c;" required/>
                    </label>

                    <label> <Strong>Product Size</Strong>
                        <input type="text" name="size" id="ProSize" placeholder="M" size="50" value="<?php echo $row['Product_size']; ?>" required style="background-color: #b0b4356c;"/>
                    </label>

                    <label> <Strong>Product Category</Strong>
                        <input type="text" name="category" id="ProSize" placeholder="Abayas" value="<?php echo $row['Product_category']; ?>" size="50" required style="background-color: #b0b4356c;"/>
                    </label>

                    <br>
                    <label> <Strong>Product Description</Strong></label>
                    <br>
                    <textarea name="description" id="ProDesc" placeholder="Description" style="background-color: #b0b4356c;"> <?php echo $row['Product_Description']; ?> </textarea>

                    <br>
                    <br>
                    <div><input class="btn hvr-hover" type="submit" value="Update"></div>
                </div>
                
                  </form>

     <?php
    }}}

    else if ($data == "updated")
    {
        $name=$_POST["name"];
        $quantity=$_POST["quantity"];
        $price=$_POST["price"];
        $size=$_POST["size"];
        $category=$_POST["category"];
        $description=$_POST["description"];

        $image = $_FILES['fileToUpload']['name'];
        $target = "images/".basename($image);

        $query = "UPDATE product SET Product_img='$image', Product_Name='$name', Product_Description='$description', Product_price='$price', Product_quantity=$quantity, Product_size='$size', Product_category='$category', Admin_id='$adminid' WHERE Product_id='$id'";
        $result = mysqli_query($conn, $query);

        //move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);

        echo "<br><br><br><br><br><br><br><h2>The product has been updated.</h2>";   

    }

?>
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
      alert("Error: Input contains invalid characters!");
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
      alert("Error: Input contains invalid characters!");
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
      alert("Error: Input contains invalid characters!");
      form.inputfield.focus();
      return false;
    }

    if(form.price.value == "") {
      alert("Error: Input is empty!");
      form.inputfield.focus();
      return false;
    }

    if(!re2.test(form.price.value)) {
      alert("Error: Input contains invalid characters!");
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
      alert("Error: Input contains invalid characters!");
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
      alert("Error: Input contains invalid characters!");
      form.inputfield.focus();
      return false;
    }

    if(form.description.value == "") {
      alert("Error: Input is empty!");
      form.inputfield.focus();
      return false;
    }

    if(!re.test(form.description.value)) {
      alert("Error: Input contains invalid characters!");
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
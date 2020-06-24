<!-- I'm here --!>

<?php
$page_title='Admin Sign In | ZERI';
  require 'includes/dbh.inc.php';

  if(isset($_POST['signin']))
  {
    $Email=$_POST["Email"];
    $your_pass=$_POST["your_pass"];

      $query = "SELECT * FROM admin WHERE Admin_id='$Email' AND Admin_Password='$your_pass'";
      $result = mysqli_query($conn, $query);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) 
        { 
                session_start();
                $_SESSION['Admin_id'] = $row['Admin_id'];
                
                header('Location: ./add.php');
        }
      }

      else 
      {
        ?> <script> alert("Wrong username or password. Please try again!"); window.location.replace(" ./SignInAdmin.php");</script>
        <?php
      }
  }

?>

<?php
include 'includes/header.php';
//require 'includes/dbh.inc.php';
 ?>

<html lang="en">
    
    <!DOCTYPE html>
    <html lang="en">
    <!-- Basic -->
    
    <head>
       
        <title>Login</title>
       
    </head>
    
    <body>
        
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Sign in</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Sign In</li>
                    </ul>
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
                     <div class="banner-frame"> <img class="img-fluid" src="images/login-logo.png" alt="" />
                     </div>
                 </div>
           <div class="col-lg-6">
           <div class="login-box-main"> <h2 class="noo-sh-title-top"><span>Login</span></h2>
            <form action="SignInAdmin.php" method="post" class="register-form" id= "login-form" >
                 
                <div class="form-group">
                    <!-- Email -->
                    <input type="text" name="Email" id="your_Email" placeholder="Enter you Admin ID" size="50" required/>
                </div>

                <div class="form-group">
                   <!-- password -->
                    <input type="password" name="your_pass" id="your_pass" placeholder="Enter your password" size="50" required />
                   
                    <br/>     
                
                    <input type="checkbox" name="remember-me" id="remember-me" checked/>
                    <label for="remember-me">Remember me&emsp;&emsp;&emsp;&emsp;&emsp;</label>
                    <a href="forgotpass.php">&emsp;&emsp;Forgot Password?</a>
                    <br/>
                    <input class="btn hvr-hover" type="submit" name="signin" id="signin" value="Log in" style="width:100px"/>
                     </div> 
                
                  </form>
                  </p>
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
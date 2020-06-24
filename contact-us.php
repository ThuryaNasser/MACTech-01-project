<?php
$page_title='Contaxt Us | ZERI';
include 'includes/header.php';
//require 'includes/dbh.inc.php';
 ?>

<html lang="en">
    
    <!DOCTYPE html>
    <html lang="en">
    <!-- Basic -->
    
    <head>
       
    
        <!-- Site Metas -->
        <title>Contact Us | ZERI</title>
       
    </head>
    
    <body>
       
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="l-text2 t-center">
                        Contact Us
                    </h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active"> Contact Us </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>Send us your message</h2>
                        <p></p>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email, fill it with @">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="name" placeholder="Subject" required data-error="Please enter your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" id="submit" type="submit">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
				<div class="col-lg-4 col-sm-12">
                    <br></br>
                        <h2></h2>
                        <p></p>
                        <ul>
                            <li>
                                <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14276.008279752523!2d50.0200713!3d26.5522014!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8f6ac5345bd378ce!2z2KjZiNiq2YrZgyDYstix2Yog2KfZhNmG2LPYp9im2Yo!5e0!3m2!1sar!2ssa!4v1582933990271!5m2!1sar!2ssa" width="380" height="330" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                    <i class="fas fa-map-marker-alt "></i>
                                    Address: KSA, As Sharqiah, Qatif, Majeedyah<br><br></p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square "></i> Phone: <a href="tel:+1-888705770">+966 5044799688</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope "></i> Email: <a href="mailto:contactinfo@gmail.com">info@Zeriksa.com</a></p>
                            </li>
                        </ul>
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
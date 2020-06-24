<?php
$page_title='ZERI';
include 'includes/header.php';
require 'includes/dbh.inc.php';
 ?>

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container" id="GalleyHome">
            <li class="text-center">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Z E R I</strong></h1>
                            <p class="m-b-40">You can shop Dresses Now! <br></p>
                            <p><a class="btn hvr-hover" href="shop.html">Shop New Dresses</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Z E R I</strong></h1>
                            <p class="m-b-40">You can shop Jalabyas Now! <br></p>
                            <p><a class="btn hvr-hover" href="shop.html">Shop New Jalabyas</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center" id="GalleyHome">
                <img src="images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> Z E R I</strong></h1>
                            <p class="m-b-40">You can shop Abayas Now! <br></p>
                            <p><a class="btn hvr-hover" href="shop.html">Shop New Abayas</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Our Services  -->
    <div class="container">
        <div class="row my-5">
            <div class="col-sm-6 col-lg-4">
                <div class="service-block-inner">
                    <h3>Free Shipping</h3>
                    <p>We offer free worldwide shipping to all customers to orders above 300 SAR</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="service-block-inner">
                    <h3>Cash On Delivery</h3>
                    <p>You can pay online using Credit Card, Debit Card or PayPal, and also you can pay when you receive your order with Cash on Delivery service!</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="service-block-inner">
                    <h3>100% Genuine Brands</h3>
                        <p>- All are brands from Arabian Designers and Other Globe all across the globe</p>
                        <p>- 100% genuine and authentic items</p>
                        <p>- Direct relations with original suppliers in cities worldwide </p></p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- End Start Our Services -->
	
	<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<a href="shop.html"> 
                            <img class="img-fluid" src="images/add-img-01.jpg" alt=""/>
                        </a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
                        <a href="shop.html"> 
                            <img class="img-fluid" src="images/add-img-02.jpg" alt="" />
                        </a>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>A Piece of .. ?</h1>
                        <p>See a piece of all/top featured/ or best-seller products</p>
                    </div>
                </div>
            </div>
            <div class="row">

            <?php
                    $products=mysqli_query($conn,"select Product_id, Product_Name, Product_price, Product_quantity, Product_img, Product_Description from Product");
                    for ($i=0; $i <4; $i++) {
                      list($product_id,$product_name,$price, $quantity, $image, $desc)=mysqli_fetch_array($products);
                      echo "

                        <div class='col-lg-3 col-md-6 special-grid best-seller'>
                        <div class='products-single fix'>
                        
                        <div class='box-img-hover'>
                        
                            <a href='product-detail.php?id=$product_id'>
                                <img src='images/$image' class='img-fluid' width='255' height='322' alt='ImageProduct'> 
                            </a> 

                            <div class='mask-icon'>
                                    <ul>
                                        <li><a href='product-detail.php?id=$product_id' data-toggle='tooltip' data-placement='right' title='View'><i class='fas fa-eye'></i></a></li>
                                    </ul>                        
                            </div>

                        </div>

                        <div class='why-text'>
                            <h4> <a href='product-detail.php?id=$product_id'>$product_name</a> </h4>
                            <h5> <a href='product-detail.php?id=$product_id'> $price SR </a></h5>
                        </div>
                        
                        </div>
                        </div>
                        ";
                    }
            ?>
                        
                        </div>
                        </div>
              

            </div>
        </div>
    </div>
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Latest Blog On our Instagram?</h1>
                        <p>What we have latest add to our store in instagram:</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Most trending jalabyas</h3>
                                <p>Be briliant and glorious with the latest designs and collections, we offer various jalabya styles that suits all tastes.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img-01.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Mother daughter outfits</h3>
                                <p>Now you can match outfits with your little precious daughter and be unique at any event. We offer multiple designs to choose from to suit the event.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog-img-02.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Stylish abayas</h3>
                                <p>Be stylish in your own way as we offer a lot abaya designs you can choose from.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Blog  -->

    <!--Previously Purchase Items -->

    <div class="container table-main table-responsive">
    <div class="title-all text-center">
                        <h1>
                            <br>
                                Past Purchased Items
                            <br>
                        </h1>
                    </div>
                    


        <table class="table">
            <thead>
                <tr>
                    <th>Images</th>
                    <th>Product Name</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    for($i=0;$i<=$_COOKIE["purchased_items"];$i++){
                        if(isset($_COOKIE["purchased_item_$i"])){
                            $itemdata = explode(",",$_COOKIE["purchased_item_$i"]);
                            if(strlen($itemdata[1]) > 0 && strlen($itemdata[2]) > 0){
                                $cart_id =  $itemdata[0];
                                echo "<tr>";
                                    $cart_data_query = mysqli_query($conn,"select * from product where Product_id='$cart_id'");
                                    while($cart_data = mysqli_fetch_array($cart_data_query )){
                                        ?>
                                        <td><img src="images/<?php echo $cart_data['Product_img']; ?>" style="width:120px;height:120px;" class="img-fluid" alt="Image" id="pic1"></td>
                                        <td><?php echo $cart_data['Product_Name']; ?></td>
                                        <td><?php echo $itemdata[1]; ?></td>
                                        <td><?php echo $cart_data['Product_price']; ?></td>
                                        <td><?php echo $itemdata[2]; ?></td>
                                        <td><?php echo $cart_data['Product_price'] * $itemdata[2]; ?></td>                                              <?php 
                                    }
                                echo "</tr>";
                            }
                            
                        }
                        
                    }
                ?>
            </tbody>
        </table>
    </div>
    
    <!-- /// -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="item">
            <h3 class="text-center">See Some of our Products in Our instagram Page:</h3>
            <br>
        </div>
        
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/p/B8ARsasFkuf/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/p/BoHaLs_ADot/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/p/B4exIvGlGN9/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/p/BvYe0U5AgnK/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/p/BxDVxbBgyiP/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/p/B2cYL4lFvux/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/p/BpDw919FPSk/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/p/BxDVzuXAEAb/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="https://www.instagram.com/p/B570i8cJCKw/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Business Time</h3>
							<ul class="list-time">
								<li>Everyday: 4:pm to 10.00pm</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Submit</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Social Media</h3>
							<p>Contact us on social media</p>
							<ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Zeri</h4>
                            <p>More than a place to shop. Both buttons hold the concept of integrating fashion, design, beauty, art, and more. It includes a variety of elements from local, Gulf and Arab brands from different designs in amazing settings, as these designs are updated frequently and with new elements with great care.</p> 
													
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>Book a designer zone!</h4>
                            <ul>
                                <p>In order to book a zone as a designer, you can contact us by:
                                    <br> - phone: +966 5044799688s
                                    <br> - email: info@Zeriksa.com
                                    <br> - or you are welcome to discuess that in the botique!
                                </p> 
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: KSA, As Sharqiah, Qatif, Majeedyah</p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+966 5044799688s">+966 5044799688s</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:info@Zeriksa.com">info@Zeriksa.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2020 <a href="#">Zeri Ksa</a></p>
    </div>
    <!-- End copyright  -->

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
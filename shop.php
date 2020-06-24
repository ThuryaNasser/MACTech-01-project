<?php
$page_title='Products | ZERI';
include 'includes/header.php';
require 'includes/dbh.inc.php';
 ?>

<html lang="en">

    <!DOCTYPE html>
    <html lang="en">
    <!-- Basic -->

    <head>


        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Site Metas -->
        <title>Beaded evening dress details | ZERI</title>

        <!-- Style border -->
        <style type="text/css">

            .star {
                border: 2px solid gray;
                border-radius: 15px;
                background-color: transparent;
                width: 20%;
                height: 5%;
            }
        </style>



    </head>

    <body>


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">

                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view" >
                                    <div class="row">
										<?php
											$products_query = mysqli_query($conn,"select * from product");

											while($row = mysqli_fetch_array($products_query)){
										?>
											<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 special-grid Dresses">
												<div class="products-single fix">
													<div class="box-img-hover">
														<div class="type-lb">
															<p class="sale"><?php echo $row['Product_category']; ?></p>
														</div>
														<img src="images/<?php echo $row['Product_img']; ?>" class="img-fluid" alt="Image" id="pic1">
														<div class="mask-icon">
															<ul>
																<li><a href="product-detail.php?id=<?php echo $row['Product_id']; ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
															</ul>

														</div>
													</div>
													<div class="why-text">
														<h4><?php echo $row['Product_Name']; ?></h4>
														<h5> <?php echo $row['Product_price']; ?> </h5>
													</div>
												</div>
											</div>
											<?php } ?>
                                    </div>
                                </div>
								<!-- Cart Area -->
                                <div role="tabpanel" class="tab-pane fade" id="list-view">
                                    <?php
											$products_query = mysqli_query($conn,"select * from product");

											while($row = mysqli_fetch_array($products_query)){
										?>
										<div class="list-view-box">
											<div class="row">
												<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
													<div class="products-single fix">
														<div class="box-img-hover">
															<div class="type-lb">
																<p class="new"><?php echo $row['Product_category']; ?></p>
															</div>
															<img src="images/<?php echo $row['Product_img']; ?>" class="img-fluid" alt="Image">
															<div class="mask-icon">
															<ul>
																<li><a href="product-detail.php?id=<?php echo $row['Product_id']; ?>" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
															</ul>


															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
													<div class="why-text full-width">
														<h4><?php echo $row['Product_Name']; ?></h4>
														<h5> <del><?php echo ($row['Product_price']+50); ?> SR </del> <?php echo $row['Product_price']; ?> SR</h5>
														<p><?php echo $row['Product_Description']; ?> </p>

													</div>
												</div>
											</div>
										</div>
											<?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="#">
                                <input class="form-control" placeholder="Search here..." type="text">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Categories</h3>
                           </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                <div class="list-group-collapse sub-men">
                                <a href="#" class="list-group-item list-group-item-action"> All<small class="text-muted">(62)</small></a>
                                <a href="#" data-filter=".Abayas" class="list-group-item list-group-item-action"> Abayas<small class="text-muted">(22)</small></a>
                                <a href="#" data-filter=".Jalabyas" class="list-group-item list-group-item-action"> Jalabyas<small class="text-muted">(18)</small></a>
                                <a href="#" data-filter=".Dresses" class="list-group-item list-group-item-action"> Dresses<small class="text-muted">(30)</small></a>
                                </div>
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men1">Kids Ware
								<small class="text-muted">(7)</small>
								</a>
                                    <div class="collapse" id="sub-men1" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="#" data-filter=".KidAbayas" class="list-group-item list-group-item-action">Abayas <small class="text-muted">(2)</small></a>
                                            <a href="#" data-filter=".KidJalabyas" class="list-group-item list-group-item-action">Jalabyas <small class="text-muted">(2)</small></a>
                                            <a href="#" data-filter=".KidDress" class="list-group-item list-group-item-action">Dresses <small class="text-muted">(3)</small></a>
                                            <a href="#" data-filter=".KidAccessories" class="list-group-item list-group-item-action">Accessories <small class="text-muted">(0)</small></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" data-filter=".Accessories" class="list-group-item list-group-item-action"> Accessories<small class="text-muted">(5)</small></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->

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
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>

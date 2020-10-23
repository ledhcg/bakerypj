
<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Ecolife - Multipurpose eCommerce HTML Template</title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="source/assets/images/favicon/favicon.png" />

        <!-- Google Fonts -->
        <link href="../../../../../fonts.googleapis.com/cssdd1b.css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800&amp;display=swap" rel="stylesheet" />
        <!-- All CSS Flies   -->
        <!--===== Vendor CSS (Bootstrap & Icon Font) =====-->
         <link rel="stylesheet" href="source/assets/css/plugins/bootstrap.min.css" />
        <link rel="stylesheet" href="source/assets/css/plugins/font-awesome.min.css" />
        <link rel="stylesheet" href="source/assets/css/plugins/ionicons.min.css" /> 
        <!--===== Plugins CSS (All Plugins Files) =====-->
        <link rel="stylesheet" href="source/assets/css/plugins/jquery-ui.min.css" />
        <link rel="stylesheet" href="source/assets/css/plugins/meanmenu.css" />
        <link rel="stylesheet" href="source/assets/css/plugins/nice-select.css" />
        <link rel="stylesheet" href="source/assets/css/plugins/owl-carousel.css" />
        <link rel="stylesheet" href="source/assets/css/plugins/slick.css" /> 
        <!--===== Main Css Files =====-->
         <link rel="stylesheet" href="source/assets/css/style.css" /> 
        <!-- ===== Responsive Css Files ===== -->
         <link rel="stylesheet" href="source/assets/css/responsive.css" /> 

        <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

        <link rel="stylesheet" href="source/assets/css/vendor/plugins.min.css">
        <link rel="stylesheet" href="source/assets/css/style.min.css">
        <link rel="stylesheet" href="source/assets/css/responsive.min.css">
    </head>

    <body>
        <!-- main layout start from here -->
        <div id="main">

			@include('preload')
			@include('header')
			@yield('content')
			@include('footer')
  
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="source/assets/images/product-image/organic/product-11.jpg" alt="" />
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="source/assets/images/product-image/organic/product-9.jpg" alt="" />
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="source/assets/images/product-image/organic/product-20.jpg" alt="" />
                                    </div>
                                    <div id="pro-4" class="tab-pane fade">
                                        <img src="source/assets/images/product-image/organic/product-19.jpg" alt="" />
                                    </div>
                                </div>
                                <!-- Thumbnail Large Image End -->
                                <!-- Thumbnail Image End -->
                                <div class="quickview-wrap mt-15">
                                    <div class="quickview-slide-active owl-carousel nav owl-nav-style owl-nav-style-2" role="tablist">
                                        <a class="active" data-toggle="tab" href="#pro-1"><img src="source/assets/images/product-image/organic/product-11.jpg" alt="" /></a>
                                        <a data-toggle="tab" href="#pro-2"><img src="source/assets/images/product-image/organic/product-9.jpg" alt="" /></a>
                                        <a data-toggle="tab" href="#pro-3"><img src="source/assets/images/product-image/organic/product-20.jpg" alt="" /></a>
                                        <a data-toggle="tab" href="#pro-4"><img src="source/assets/images/product-image/organic/product-19.jpg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Originals Kaval Windbr</h2>
                                    <p class="reference">Reference:<span> demo_17</span></p>
                                    <div class="pro-details-rating-wrap">
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">€18.90</li>
                                        </ul>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                    <div class="pro-details-size-color">
                                        <div class="pro-details-color-wrap">
                                            <span>Color</span>
                                            <div class="pro-details-color-content">
                                                <ul>
                                                    <li class="blue"></li>
                                                    <li class="maroon active"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                        </div>
                                        <div class="pro-details-cart btn-hover">
                                            <a href="#"> + Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-wish-com">
                                        <div class="pro-details-wishlist">
                                            <a href="#"><i class="ion-android-favorite-outline"></i>Add to wishlist</a>
                                        </div>
                                        <div class="pro-details-compare">
                                            <a href="#"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-social-info">
                                        <span>Share</span>
                                        <div class="social-info">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="ion-social-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-google"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->

        <!-- Scripts to be loaded  -->
        <!-- JS


        <!--====== Vendors js ======-->
        <script src="source/assets/js/vendor/jquery-3.5.1.min.js"></script>
        <script src="source/assets/js/vendor/modernizr-3.7.1.min.js"></script>

        <!--====== Plugins js ======-->
        <script src="source/assets/js/plugins/bootstrap.min.js"></script>
        <script src="source/assets/js/plugins/popper.min.js"></script>
        <script src="source/assets/js/plugins/meanmenu.js"></script>
        <script src="source/assets/js/plugins/owl-carousel.js"></script>
        <script src="source/assets/js/plugins/jquery.nice-select.js"></script>
        <script src="source/assets/js/plugins/countdown.js"></script>
        <script src="source/assets/js/plugins/elevateZoom.js"></script>
        <script src="source/assets/js/plugins/jquery-ui.min.js"></script>
        <script src="source/assets/js/plugins/slick.js"></script>
        <script src="source/assets/js/plugins/scrollup.js"></script>
        <script src="source/assets/js/plugins/range-script.js"></script>

        <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

        <script src="source/assets/js/plugins.min.js"></script>

        <!-- Main Activation JS -->
        <script src="source/assets/js/main.js"></script>
    </body>
</html>

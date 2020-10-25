<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>AmBakery</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="{{URL::to('public/frontend/assets/logo/AmBakery.ico')}}">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{URL::to('public/frontend/assets/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{URL::to('public/frontend/assets/css/owl.carousel.min.css')}}">
            <link rel="stylesheet" href="{{URL::to('public/frontend/assets/css/flaticon.css')}}">
            <link rel="stylesheet" href="{{URL::to('public/frontend/assets/css/slicknav.css')}}">
            <link rel="stylesheet" href="{{URL::to('public/frontend/assets/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{URL::to('public/frontend/assets/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{URL::to('public/frontend/assets/css/fontawesome-all.min.css')}}">
            <link rel="stylesheet" href="{{URL::to('public/frontend/assets/css/themify-icons.css')}}">
            <link rel="stylesheet" href="{{URL::to('public/frontend/assets/css/slick.css')}}">
            <link rel="stylesheet" href="{{URL::to('public/frontend/assets/css/nice-select.css')}}">
            <link rel="stylesheet" href="{{URL::to('public/frontend/assets/css/style.css?v=echo time()')}}">

           
   </head>

   <body>
       
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{URL::to('public/frontend/assets/logo/AmBakery.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex">
                                    
                                    <div class="flag">
                                        <img src="{{URL::to('public/frontend/assets/img/icon/header_icon.png')}}" alt="">
                                    </div>
                                    <div class="select-this">
                                        <form action="#">
                                            <div class="select-itms">
                                                <select name="select" id="select1">
                                                    <option value="">USA</option>
                                                    <option value="">SPN</option>
                                                    <option value="">CDA</option>
                                                    <option value="" selected>USD</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <ul class="contact-now">     
                                        <li>Stay Strong - Stay Safe</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                   <ul>                                          
                                       <li><a href="login.html">My Account </a></li>
                                       <li><a href="product_list.html">Wish List  </a></li>
                                       <li><a href="cart.html">Shopping</a></li>
                                       <li><a href="cart.html">Cart</a></li>
                                       <li><a href="checkout.html">Checkout</a></li>
                                   </ul>
                                   
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                <div class="logo">
                                  <a href="index.html"><img src="{{URL::to('public/frontend/assets/logo/AmBakery.svg')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-left d-none d-lg-block">
                                    <nav>                                                
                                        <ul id="navigation">                                                                                                                                     
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="#">Product</a>
                                                <ul class="submenu">
                                                    <li><a href="product_list.html"> Drink</a></li>
                                                    <li><a href="single-product.html"> Bread</a></li>
                                                    <li><a href="single-product.html"> Cake</a></li>
                                                </ul>
                                            </li>

                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="contact.html">About</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> 
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Search products">
                                            <div class="search-icon">
                                                <i class="fas fa-search special-tag"></i>
                                            </div>
                                        </div>
                                     </li>
                                    <li class=" d-none d-xl-block">
                                        <div class="favorit-items">
                                            <i class="far fa-heart"></i>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-card">
                                            <a href="cart.html" data-toggle="modal" data-target="#idCartModal"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>

    <main>

    @yield('content')


    <!-- Modal shopping -->
    <div style="z-index: 10000;" class="modal fade" id="idCartModal" tabindex="-1" aria-labelledby="CartModal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div style="padding-left: 40px;" class="modal-header">
        <h5 style="font-weight: 800;" class="modal-title" id="CartModal">MY CART</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div  class="modal-body">
        <!-- Cart -->

        <section class="cart_area">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="assets/img/arrivel/arrivel_1.png" alt="" />
                    </div>
                    <div class="media-body">
                      <p>Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>$360.00</h5>
                </td>
                <td>
                  <div class="product_count">
                    <!-- <input type="text" value="1" min="0" max="10" title="Quantity:"
                      class="input-text qty input-number" />
                    <button
                      class="increase input-number-increment items-count" type="button">
                      <i class="ti-angle-up"></i>
                    </button>
                    <button
                      class="reduced input-number-decrement items-count" type="button">
                      <i class="ti-angle-down"></i>
                    </button> -->
                    <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                    <input class="input-number" type="text" value="1" min="0" max="10">
                    <span class="input-number-increment"> <i class="ti-plus"></i></span>
                  </div>
                </td>
                <td>
                  <h5>$720.00</h5>
                </td>
              </tr>

              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Subtotal</h5>
                </td>
                <td>
                  <h5>$2160.00</h5>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="#">Continue Shopping</a>
            <a class="btn_1 checkout_btn_1" href="#">Proceed to checkout</a>
          </div>
        </div>
      </div>
  </section>
  <!--================End Cart Area =================-->



        <!-- End Cart -->
      </div>
    </div>
  </div>
</div>



    <!-- Modal shopping -->



    </main>
   <footer>

       <!-- Footer Start-->
       <div class="footer-area footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                      <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                             <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/logo/AmBakeryTextLogo.svg" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                               </div>
                            </div>
                        </div>
                      </div>
                   </div>
                   <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Quick Links</h4>
                               <ul>
                                   <li><a href="#">About</a></li>
                                   <li><a href="#"> Offers & Discounts</a></li>
                                   <li><a href="#"> Get Coupon</a></li>
                                   <li><a href="#">  Contact Us</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>New Products</h4>
                               <ul>
                                   <li><a href="#">Woman Cloth</a></li>
                                   <li><a href="#">Fashion Accessories</a></li>
                                   <li><a href="#"> Man Accessories</a></li>
                                   <li><a href="#"> Rubber made Toys</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                       <div class="single-footer-caption mb-50">
                           <div class="footer-tittle">
                               <h4>Support</h4>
                               <ul>
                                <li><a href="#">Frequently Asked Questions</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Report a Payment Issue</a></li>
                            </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- Footer bottom -->
               <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-7">
                    <div class="footer-copy-right">
                        <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Powered by <a href="https://dinhcuong.me" target="_blank">dinhcuong.me</a>
                        </p>
                    </div>
                </div>
                 <div class="col-xl-5 col-lg-5 col-md-5">
                    <div class="footer-copy-right f-right">
                        <!-- social -->
                        <div class="footer-social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                        </div>
                    </div>
                </div>
            </div>
           </div>
       </div>
       <!-- Footer End-->

   </footer>
   
	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{URL::to('public/frontend/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{URL::to('public/frontend/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="{{URL::to('public/frontend/assets/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{URL::to('public/frontend/assets/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{URL::to('public/frontend/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{URL::to('public/frontend/assets/js/slick.min.js')}}"></script>

		<!-- One Page, Animated-HeadLin -->
        <script src="{{URL::to('public/frontend/assets/js/wow.min.js')}}"></script>
		<script src="{{URL::to('public/frontend/assets/js/animated.headline.js')}}"></script>
        <script src="{{URL::to('public/frontend/assets/js/jquery.magnific-popup.js')}}"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="{{URL::to('public/frontend/assets/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{URL::to('public/frontend/assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{URL::to('public/frontend/assets/js/jquery.sticky.js')}}"></script>
        
        <!-- contact js -->
        <script src="{{URL::to('public/frontend/assets/js/contact.js')}}"></script>
        <script src="{{URL::to('public/frontend/assets/js/jquery.form.js')}}"></script>
        <script src="{{URL::to('public/frontend/assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{URL::to('public/frontend/assets/js/mail-script.js')}}"></script>
        <script src="{{URL::to('public/frontend/assets/js/jquery.ajaxchimp.min.js')}}"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="{{URL::to('public/frontend/assets/js/plugins.js')}}"></script>
        <script src="{{URL::to('public/frontend/assets/js/main.js')}}"></script>
        
    </body>
</html>
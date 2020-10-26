@extends ('welcome')
@section('content')

  <!-- slider Area Start-->
  <div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{URL::to('public/frontend/assets/img/hero/category1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <img style="height: 200px" src="{{URL::to('public/frontend/assets/logo/AmBakeryText.svg?v=echo time()')}} " alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
        <!-- Category Area Start-->
        <section class="category-area section-padding">
            <div class="container-fluid">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-xl-4 col-lg-6">
                        <div class="single-category mb-30">
                            <div class="category-img">
                                <img src="{{URL::to('public/frontend/assets/img/categori/cat1.jpg?v=echo time()')}}" alt="">
                                <div class="category-caption">
                                    <h2>Drink</h2>
                                    <span class="best"><a href="#">Best New Deals</a></span>
                                    <span class="collection">New Collection</span>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-xl-4 col-lg-6">
                        <div class="single-category mb-30">
                            <div class="category-img text-center">
                                <img src="{{URL::to('public/frontend/assets/img/categori/cat2.jpg?v=echo time()')}}" alt="">
                                <div class="category-caption">
                                    <span class="collection">Discount!</span>
                                    <h2>Bread</h2>
                                   <p>New Collection</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="single-category mb-30">
                            <div class="category-img">
                                <img src="{{URL::to('public/frontend/assets/img/categori/cat3.jpg?v=echo time()')}}" alt="">
                                <div class="category-caption">
                                    <h2>Cake</h2>
                                    <span class="best"><a href="#">Best New Deals</a></span>
                                    <span class="collection">New Collection</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Category Area End-->
        <!-- Latest Products Start -->
        <section class="latest-product-area padding-bottom">
            <div class="container">
                <div class="row product-btn d-flex justify-content-end align-items-end">
                    <!-- Section Tittle -->
                    <div class="col-xl-4 col-lg-5 col-md-5">
                        <div class="section-tittle mb-30">
                            <h2>Products</h2>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7">
                        <div class="properties__button f-right">
                            <!--Nav Button  -->
                            <nav>                                                                                                
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                    @foreach ($category as $key => $cate)
                                    
                                    <a class="nav-item nav-link" id="category-{{$cate->id}}-tab" data-toggle="tab" href="#category-{{$cate->id}}" role="tab" aria-controls="category-{{$cate->id}}" aria-selected="false">{{$cate->category_name}}</a>
                                   
                                    @endforeach
                                    
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                     <!-- card one -->
                     <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                        @foreach ($random_product as $key =>$prod)
    
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="{{URL::to('public/images/products/'.$prod->product_image)}}" alt="">
                                       
                                        <div class="shopping">
                                            <form action="{{URL::to('/save_cart')}}" id="form_add_to_cart" method="post">
                                                {{csrf_field()}}  
                                              

                                                    <input name="product_quantity" type="hidden" min="1" value="5"/>
                                                    <input name="product_id" type="hidden" value="{{$prod->id}}" />
                                                    <a href="javascript:{}" onclick="document.getElementById('form_add_to_cart').submit();"><span><i class="fas fa-cart-plus"></i></span></a>
                                                    <a href="javascript:{}" onclick="document.getElementById('form_add_to_cart').submit();"><span><i class="far fa-heart"></i></span></a>
                                                    <a href="#"><span><i class="fas fa-shopping-basket"></i></span></a>
                                            </form>

                                            
                                        </div>
                                        <div class="new-product">
                                            <span>New</span>
                                        </div>
                                        
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">{{$prod->product_name}}</a></h4>
                                        <div class="price">
                                            <ul>
                                                <li>${{$prod->product_unit_price}}</li>
                                                @if ($prod->product_sale_price > 0)
                                                <li class="discount">${{$prod->product_sale_price}}</li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                 
                            @endforeach
                          
                        </div>
                    </div>
                @foreach ($category as $key => $cate)
                    
                    <div class="tab-pane fade" id="category-{{$cate->id}}" role="tabpanel" aria-labelledby="category-{{$cate->id}}-tab">
                        
                        <div class="row">
                            @foreach ($product as $key =>$prod)
                            @if($prod->category_id == $cate->id)
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="{{URL::to('public/images/products/'.$prod->product_image)}}" alt="">
                                       
                                        <div class="shopping">
                                            <a href="#"><span><i class="fas fa-cart-plus"></i></span></a>
                                            <a href="#"><span><i class="far fa-heart"></i></span></a>
                                            <a href="#"><span><i class="fas fa-shopping-basket"></i></span></a>
                                        </div>
                                        <div class="new-product">
                                            <span>New</span>
                                        </div>
                                        
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <i class="far fa-star low-star"></i>
                                            <i class="far fa-star low-star"></i>
                                        </div>
                                        <h4><a href="#">{{$prod->product_name}}</a></h4>
                                        <div class="price">
                                            <ul>
                                                <li>${{$prod->product_unit_price}}</li>
                                                @if ($prod->product_sale_price > 0)
                                                <li class="discount">${{$prod->product_sale_price}}</li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div> 
                    </div>
                @endforeach
            
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->
        <!-- Best Product Start -->
        <div class="best-product-area lf-padding" >
           <div class="product-wrapper bg-height" style="background-image: url('assets/img/categori/card.png')">
                <div class="container position-relative">
                    <div class="row justify-content-between align-items-end">
                        <div class="product-man position-absolute  d-none d-lg-block">
                            <img src="assets/img/categori/card-man.png" alt="">
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 d-none d-lg-block">
                            <div class="vertical-text">
                                <span>Manz</span>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                            <div class="best-product-caption">
                                <h2>Find The Best Product<br> from Our Shop</h2>
                                <p>Designers who are interesten creating state ofthe.</p>
                                <a href="#" class="black-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
           <!-- Shape -->
           <div class="shape bounce-animate d-none d-md-block">
               <img src="assets/img/categori/card-shape.png" alt="">
           </div>
        </div>
        <!-- Best Product End-->
        <!-- Best Collection Start -->
        <div class="best-collection-area section-padding2">
            <div class="container">
                <div class="row d-flex justify-content-between align-items-end">
                    <!-- Left content -->
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="best-left-cap">
                            <h2>Best Collection of This Month</h2>
                            <p>Designers who are interesten crea.</p>
                            <a href="#" class="btn shop1-btn">Shop Now</a>
                        </div>
                        <div class="best-left-img mb-30 d-none d-sm-block">
                            <img src="assets/img/collection/collection1.png" alt="">
                        </div>
                    </div>
                    <!-- Mid Img -->
                     <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                        <div class="best-mid-img mb-30 ">
                            <img src="assets/img/collection/collection2.png" alt="">
                        </div>
                    </div>
                    <!-- Riht Caption -->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="best-right-cap ">
                           <div class="best-single mb-30">
                               <div class="single-cap">
                                   <h4>Menz Winter<br> Jacket</h4>
                               </div>
                               <div class="single-img">
                                  <img src="assets/img/collection/collection3.png" alt="">
                               </div>
                           </div>
                        </div>
                        <div class="best-right-cap">
                           <div class="best-single mb-30">
                               <div class="single-cap active">
                                   <h4>Menz Winter<br>Jacket</h4>
                               </div>
                               <div class="single-img">
                                  <img src="assets/img/collection/collection4.png" alt="">
                               </div>
                           </div>
                        </div>
                        <div class="best-right-cap">
                           <div class="best-single mb-30">
                               <div class="single-cap">
                                   <h4>Menz Winter<br> Jacket</h4>
                               </div>
                               <div class="single-img">
                                  <img src="assets/img/collection/collection5.png" alt="">
                               </div>
                           </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Best Collection End -->
        <!-- Latest Offers Start -->
        <div class="latest-wrapper lf-padding">
            <div class="latest-area latest-height d-flex align-items-center" data-background="assets/img/collection/latest-offer.png">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-5 col-lg-5 col-md-6 offset-xl-1 offset-lg-1">
                            <div class="latest-caption">
                                <h2>Get Our<br>Latest Offers News</h2>
                                <p>Subscribe news latter</p>
                            </div>
                        </div>
                         <div class="col-xl-5 col-lg-5 col-md-6 ">
                            <div class="latest-subscribe">
                                <form action="#">
                                    <input type="email" placeholder="Your email here">
                                    <button>Shop Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- man Shape -->
                <div class="man-shape">
                    <img src="assets/img/collection/latest-bread.png" alt="">
                </div>
            </div>
        </div>
        <!-- Latest Offers End -->
        <!-- Shop Method Start-->
        <div class="shop-method-area section-padding30">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-package"></i>
                            <h6>Free Shipping Method</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-unlock"></i>
                            <h6>Secure Payment System</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div> 
                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-reload"></i>
                            <h6>Secure Payment System</h6>
                            <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Method End-->
   <!-- slider Area Start-->
   <div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="assets/img/hero/category.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Stay Strong & Stay Safe</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
@endsection
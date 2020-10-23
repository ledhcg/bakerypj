<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | AmBakery</title>
    
    <link rel="stylesheet" href="{{URL::to('public/admin/assets/css/bootstrap.css')}}">
    
    <link rel="stylesheet" href="{{URL::to('public/admin/assets/vendors/chartjs/Chart.min.css')}}">

    <link rel="stylesheet" href="{{URL::to('public/admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{URL::to('public/admin/assets/css/app.css')}}">
    <link rel="shortcut icon" href="{{URL::to('public/admin/assets/logo/AmBakery.ico')}}" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <img src="{{URL::to('public/admin/assets/logo/AmBakeryTextLogo.svg')}}" alt="" srcset="">
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            
            
                <li class='sidebar-title'>Main Menu</li>
            
            
            
                <li class="sidebar-item active ">
                    <a href="index.html" class='sidebar-link'>
                        <i data-feather="home" width="20"></i> 
                        <span>Dashboard</span>
                    </a>
                    
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="triangle" width="20"></i> 
                        <span>Product menu</span>
                    </a>
                    
                    <ul class="submenu ">
                        
                        <li>
                            <a href="{{URL::to('/add_product_category')}}">Add a product category</a>
                        </li>
                        
                        <li>
                            <a href="{{URL::to('/show_all_products_categories')}}">Show all product categories</a>
                        </li>
                        
                      
                        
                    </ul>
                    
                </li>

            
            
         
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                        
                        

                        <li class="dropdown nav-icon">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success mr-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class='text-bold'>New Order</h6>
                                            <p class='text-xs'>
                                                An order made by Ahmad Saugi for product Samsung Galaxy S69
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown nav-icon mr-2">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="mail"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                        <li class="dropdown nav-icon mr-3">
                            <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="globe"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Vietnamese</a>
                                <a class="dropdown-item active" href="#">Russian</a>
                                <a class="dropdown-item" href="#">English</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            
                                <div class="avatar mr-1">
                                                <img src="{{URL::to('public/admin/assets/images/avatar/')}}/<?php
                                                    $image = Session::get('admin_image');
                                                    if($image) echo ($image); 
                                                ?>" alt="" srcset="">
                                </div>
                                            <div class="d-none d-md-block d-lg-inline-block"><?php
                                                    $name = Session::get('admin_name');
                                                    if($name){ 
                                                        echo ($name);
                                                    };
                                            ?> </div>
                                
                              
                                
                               
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                                <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{URL::to('/logout')}}"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            
<div class="main-content container-fluid">
    <div class="page-title">
        <h3>Dashboard</h3>
        <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
    </div>
    @yield('content')

</div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-left">
                        <p>2020 &copy; AmBakery</p>
                    </div>
                    <div class="float-right">
                        <p>Powered by <a href="http://dinhcuong.me">dinhcuong.me </a>(from MIREA with love)</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{URL::to('public/admin/assets/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{URL::to('public/admin/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{URL::to('public/admin/assets/js/app.js')}}"></script>
    
    <script src="{{URL::to('public/admin/assets/vendors/chartjs/Chart.min.js')}}"></script>
    <script src="{{URL::to('public/admin/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{URL::to('public/admin/assets/js/pages/dashboard.js')}}"></script>

    <script src="{{URL::to('public/admin/assets/js/main.js')}}"></script>
</body>
</html>

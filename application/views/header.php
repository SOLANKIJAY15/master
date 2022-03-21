
<!DOCTYPE html>

<html lang="en">
    <head>

<?php
     $base=$this->config->item("base_url");
    // print_r($base);
    // exit;
?>
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
        <meta charset="utf-8">
        <title>E Shooper - eCommerce HTML Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?php echo $base.'/assets/lib/slick/slick.css?v=$this->config->item("curr_ver")';?>" rel="stylesheet">
        <link href="<?php echo $base.'/assets/lib/slick/slick-theme.css?v=$this->config->item("curr_ver")';?>" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo $base.'/assets/css/style.css?v=$this->config->item("curr_ver")';?>" rel="stylesheet">
        <link href="<?php echo $base.'/assets/css/login.css?v=$this->config->item("curr_ver")';?>" rel="stylesheet">
        <link href="<?php echo $base.'/assets/css/register.css?v=$this->config->item("curr_ver")';?>" rel="stylesheet">
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        <a href="himanshumakwana3110@gmail.com" style="color:white;">
                        himanshumakwana3110@gmail.com</a>
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        <a href="tel:+91 7566244671" style="color:white;">+91 7566244671</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="<?php echo $base.'index.php/Dashboard/index';?>" class="nav-item nav-link">Home</a>
                            <a href="<?php echo $base.'index.php/Brand/brands';?>" class="nav-item nav-link">Brands</a>
                            <a href="<?php echo $base.'index.php/Product_list/pro_list';?>" class="nav-item nav-link">Products</a>
                            <a href="<?php echo $base.'index.php/Product_details/pro_detail';?>" class="nav-item nav-link">Product Detail</a>
                            <a href="<?php echo $base.'index.php/Cart/crt';?>" class="nav-item nav-link">Cart</a>
                            <a href="<?php echo $base.'index.php/Checkout/co';?>" class="nav-item nav-link">Checkout</a>
                            <a href="<?php echo $base.'index.php/My_account/myaccount';?>" class="nav-item nav-link">My Account</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                                <div class="dropdown-menu">
                                    <a href="<?php echo $base.'index.php/Wish_list/wishlist';?>" class="dropdown-item">Wishlist</a>
                                    
                                    <a href="<?php echo $base.'index.php/Contact/contect';?>" class="dropdown-item">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">User Account</a>
                                <div class="dropdown-menu">
                                    <a href="<?php echo $base.'index.php/Login/userlogin';?>"  class="dropdown-item">Login</a>
                                    <a href="<?php echo $base.'index.php/User_Register/register';?>"  class="dropdown-item">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.php">
                                <img src="<?php echo $base.'/assets/img/logo.png';?>" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="<?php echo $base.'Wish_list/wishlist';?>" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="<?php echo $base.'Cart/crt';?>" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->       


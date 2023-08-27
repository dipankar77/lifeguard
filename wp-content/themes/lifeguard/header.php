<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lifeguard Chemists and Druggists-Your Health Meets a New Partner</title>
	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png" sizes="16x16">
    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
<div class="boxed_wrapper">
<!--Start Preloader -->
<div class="preloader"></div>
<!--End Preloader --> 
<!--Start header area-->
<!--Start top bar area-->
<section class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                <div class="top-left">
                    <!-- <p><span class="flaticon-phone"></span>24 hours emergency & ambulance Service: +321 789 01 2345</p>  -->
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                <div class="top-right clearfix">
                    <ul class="social-links">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End top bar area-->  
<!--Start header area--> 
<section class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="logo">
                    <a href="<?php echo site_url(); ?>">
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/resources/logo.png" alt="Awesome Logo"> -->
                        <?php $logopath = get_header_image(); ?>
                        <img src="<?php echo $logopath; ?>" alt="Lifeguard Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="header-right">
                    <ul>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-technology"></span>
                            </div>
                            <div class="text-holder">
                                <h4>Call us now</h4>
                                <span>+91 98362 13542</span>    
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-pin"></span>
                            </div>
                            <div class="text-holder">
                                <h4>5/1, Paddapukur Road</h4>
                                <span>Devika Apartment,  Kolkata - 700020</span>    
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-agenda"></span>
                            </div>
                            <div class="text-holder">
                                <h4>Mon - Satday</h4>
                                <span>09.00am to 18.00pm</span>    
                            </div>
                        </li>        
                    </ul>
                    <div class="search-button pull-right">
                        <div class="toggle-search">
                            <button><i class="fa fa-search" aria-hidden="true"></i></button>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<!--End header area-->  
<!--Start header-search  area-->
<section class="header-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="search-form pull-right">
                    <form action="#">
                        <div class="search">
                            <input type="search" name="search" value="" placeholder="Search">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End header-search  area-->        
<!--Start mainmenu area-->
<section class="mainmenu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--Start mainmenu-->
                <nav class="main-menu pull-left">
                    <div class="navbar-header">   	
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                        <?php 
                        if ( has_nav_menu( 'primary-menu' ) ) {
                            wp_nav_menu(array( 
                                'theme_location' => 'primary-menu',
                                'menu_class'=>'navigation clearfix'
                            ));
                        } 
                        ?>
                    </div>
                </nav>
                <!--End mainmenu-->
                <!--Start mainmenu right box-->
                <div class="mainmenu-right-box pull-right">
                    <!-- <div class="cart_select">
                        <button><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>(0)</span></button>
                    </div> -->
                    <div class="consultation-button">
                        <a href="#">For Consultation</a>    
                    </div>
                </div>
                <!--End mainmenu right box-->    
            </div>
        </div>
    </div>
</section>
<!--End mainmenu area-->
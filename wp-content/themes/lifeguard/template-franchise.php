<?php 
/* Template Name: Franchise */ 
get_header();
?>
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/resources/breadcrumb-bg.jpg);">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="breadcrumbs">
	                <h1><?php the_title(); ?></h1>
	            </div>
	        </div>
	    </div>
	</div>
	<div class="breadcrumb-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="left pull-left">
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li><a href="departments.html">Department</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active"><?php the_title(); ?></li>
                        </ul>
                    </div>
                    <div class="right pull-right">
                        <a href="#">
                            <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share</span> 
                        </a>   
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start call to action area-->
<section class="callto-action-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content" style="margin-top: 0px !important;">
                    <div class="title-box text-center">
                        <span class="flaticon-calendar"></span>
                        <h2>Exploring Franchise Opportunities?</h2>    
                    </div>
                    <div class="form-holder clearfix">
                        <form id="appointment" class="clearfix" name="appointment-form" action="http://st.ourhtmldemo.com/new/Hospitals/inc/sendmail.php" method="post">
                            <div class="single-box mar-right-30">    
                                <div class="input-box">
                                    <input type="text" name="form_name" value="" placeholder="Your Name" required="">
                                </div>
                                <!-- <div class="input-box">
                                    <select class="selectmenu">
                                        <option selected="selected">Select Doctor</option>
                                        <option>Marc Parcival</option>
                                        <option>Alen Bailey</option>
                                        <option>Basil Andrew</option>
                                        <option>Giles Franklin</option>
                                        <option>Edgar Denzil</option>
                                        <option>Garfield Feris</option>
                                    </select>  
                                </div> -->
                                <div class="input-box">
                                    <input type="text" name="form_phone" value="" placeholder="Phone">  
                                </div>
                            </div>
                            <div class="single-box">    
                                <!-- <div class="input-box">  
                                    <select class="selectmenu">
                                        <option selected="selected">Select Department</option>
                                        <option>Cardiology</option>
                                        <option>Pulmonology</option>
                                        <option>Gynecology</option>
                                        <option>Neurology</option>
                                        <option>Urology</option>
                                        <option>Gastrology</option>
                                        <option>Pediatrician</option>
                                        <option>Laboratory</option>
                                    </select>
                                </div> -->
                                <div class="input-box">  
                                    <select class="selectmenu">
                                        <option selected="selected">Select Location</option>
                                        <option>Bhowanipore</option>
                                        <option>Park Circus</option>
                                        <option>Golf Green</option>
                                    </select>
                                </div>
                                <div class="input-box">
                                    <input type="text" name="date" placeholder="Select Date" id="datepicker">
                                    <div class="icon-box">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                </div>       
                            </div>
                            <button class="thm-btn bgclr-1" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>    
                        </form>      
                    </div> 
                       
                </div>
            </div>
        </div>
    </div>
</section>
<!--End call to action area-->
<?php /* ?>
<!--Start service area-->
<section class="service-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="img-holder">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/services/doctor.jpg" alt="Awesome Image">
                    <div class="overlay-content">
                        <p>As a tertiary referral ICU to provide state of the art care with the help of very good professionals and infrastructure.</p>  
                    </div>    
                </div>
            </div>
            <div class="col-md-8">
                <div class="text-holder">
                    <!--Start tab box-->
                    <div class="tab-box">
                        <div class="tab-content">
                            <!--Start single tab pane-->
                            <div class="tab-pane" id="opthalmology">
                                <div class="inner-content">
                                    <div class="sec-title">
                                        <h1>About Lifeguard</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-box">
                                                <h3>Opthalmology Analysis</h3>
                                                <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                                <a class="thm-btn" href="#">Read More</a>
                                            </div>    
                                        </div>    
                                        <div class="col-md-6">
                                            <div class="img-box">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/services/service-big-1.jpg" alt="Awesome Image">
                                            </div>    
                                        </div>    
                                    </div>
                                </div>  
                            </div>
                            <!--End single tab pane-->
                            <!--Start single tab pane-->
                            <div class="tab-pane active" id="laboratory">
                                <div class="inner-content">
                                    <div class="sec-title">
                                        <h1>About Lifeguard</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-box">
                                                <h3>Welcome</h3>
                                                <p>Welcome to Lifeguard Pharmacy, a pioneering name in the pharmaceutical landscape of Kolkata. With an unwavering commitment to quality, convenience, and innovation, we have emerged as one of the fastest-growing pharmacy chains in the region.</p>
                                                <a class="thm-btn" href="#">Read More</a>
                                            </div>    
                                        </div>    
                                        <div class="col-md-6">
                                            <div class="img-box">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/services/service-big-2.jpg" alt="Awesome Image">
                                            </div>    
                                        </div>    
                                    </div>
                                </div>  
                            </div>
                            <!--End single tab pane-->
                            <!--Start single tab pane-->
                            <div class="tab-pane" id="cardiac">
                                <div class="inner-content">
                                    <div class="sec-title">
                                        <h1>Our Best Services</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-box">
                                                <h3>Cardiac Clinic Analysis</h3>
                                                <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and the master-builder of human happiness. Expound the actual teachings of the great explorer of the truth.</p>
                                                <a class="thm-btn" href="#">Read More</a>
                                            </div>    
                                        </div>    
                                        <div class="col-md-6">
                                            <div class="img-box">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/services/service-big-3.jpg" alt="Awesome Image">
                                            </div>    
                                        </div>    
                                    </div>
                                </div>     
                            </div>
                            <!--End single tab pane-->
                            <!--Start single tab pane-->
                            <div class="tab-pane" id="outpatient">
                                <div class="inner-content">
                                    <div class="sec-title">
                                        <h1>Our Best Services</h1>
                                        <span class="border"></span>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="text-box">
                                                <h3>OutPatient Analysis</h3>
                                                <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and the master-builder of human happiness. Expound the actual teachings of the great explorer of the truth.</p>
                                                <a class="thm-btn" href="#">Read More</a>
                                            </div>    
                                        </div>    
                                        <div class="col-md-6">
                                            <div class="img-box">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/services/service-big-4.jpg" alt="Awesome Image">
                                            </div>    
                                        </div>    
                                    </div>
                                </div>     
                            </div>
                            <!--End single tab pane-->
                        </div>
                        <ul class="nav nav-tabs tab-menu">
                            <li>
                                <!-- <a href="#opthalmology" data-toggle="tab"> -->
                                <a href="#">
                                    <div class="img-holder">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/service-small-1.jpg" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="iocn-holder">
                                                        <span class="flaticon-plus-symbol"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <h3>Bhowanipore</h3>
                            </li>
                            <!-- <li class="active"> -->
                            <li>
                                <!-- <a href="#laboratory" data-toggle="tab"> -->
                                <a href="#">
                                    <div class="img-holder">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/service-small-2.jpg" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="iocn-holder">
                                                        <span class="flaticon-plus-symbol"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                </a>
                                <h3>Park Circus</h3>
                            </li>
                            <li>
                                <!-- <a href="#cardiac" data-toggle="tab"> -->
                                <a href="#">
                                    <div class="img-holder">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/service-small-3.jpg" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="iocn-holder">
                                                        <span class="flaticon-plus-symbol"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <h3>Golf Green</h3>
                            </li>
                            <!-- <li>
                                <a href="#outpatient" data-toggle="tab">
                                    <div class="img-holder">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/services/service-small-4.jpg" alt="Awesome Image">
                                        <div class="overlay-style-one">
                                            <div class="box">
                                                <div class="content">
                                                    <div class="iocn-holder">
                                                        <span class="flaticon-plus-symbol"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <h3>OutPatient</h3>
                            </li> -->
                        </ul> 
                    </div>
                    <!--End tab box--> 
                </div>
            </div>
        </div>
    </div>
</section>  
<!--End service area-->
<?php */ ?>
<!--Start Medical Departments area-->
<section class="medical-departments-area">
    <div class="container">
        <div class="sec-title">
            <h1>How Do We Help You?</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="medical-departments-carousel">
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                            <span class="flaticon-cardiology"></span>    
                        </div>
                        <div class="text-holder">
                            <h3>Best in Class Training and Support</h3>
                            <!-- <p>Allopathic Medicines.</p> -->
                        </div>
                        <!-- <a class="readmore" href="#">Read More</a> -->
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                            <span class="flaticon-lungs"></span>    
                        </div>
                        <div class="text-holder">
                            <h3>Selection & Finalization of Shop Location</h3>
                            <!-- <p>Ayurvedic Medicines.</p> -->
                        </div>
                        <!-- <a class="readmore" href="#">Read More</a> -->
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                            <span class="flaticon-vagina"></span>    
                        </div>
                        <div class="text-holder">
                            <h3>Interiors and Branding Support</h3>
                            <!-- <p>Homeopathy Medicines.</p> -->
                        </div>
                        <!-- <a class="readmore" href="#">Read More</a> -->
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                            <span class="flaticon-neurology"></span>    
                        </div>
                        <div class="text-holder">
                            <h3>Assistance with License and Agreements</h3>
                            <!-- <p>Surgical Products.</p> -->
                        </div>
                        <!-- <a class="readmore" href="#">Read More</a> -->
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                            <span class="flaticon-neurology"></span>    
                        </div>
                        <div class="text-holder">
                            <h3>Tie up with Pharmacist</h3>
                            <!-- <p>OTC Product.</p> -->
                        </div>
                        <!-- <a class="readmore" href="#">Read More</a> -->
                    </div>
                    <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item text-center">
                        <div class="iocn-holder">
                            <span class="flaticon-neurology"></span>    
                        </div>
                        <div class="text-holder">
                            <h3>Inventory setup and procurement</h3>
                            <!-- <p>Other Products.</p> -->
                        </div>
                        <!-- <a class="readmore" href="#">Read More</a> -->
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                            <span class="flaticon-neurology"></span>    
                        </div>
                        <div class="text-holder">
                            <h3>Software and System IT support</h3>
                            <!-- <p>Daily Use Products.</p> -->
                        </div>
                        <!-- <a class="readmore" href="#">Read More</a> -->
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                            <span class="flaticon-neurology"></span>    
                        </div>
                        <div class="text-holder">
                            <h3>Dedicated Business Consultants & Coaches</h3>
                            <!-- <p>Daily Use Products.</p> -->
                        </div>
                        <!-- <a class="readmore" href="#">Read More</a> -->
                    </div>
                    <!--End single item-->					
                </div>
            </div>    
        </div>
    </div>
</section>
<!--End Medical Departments area--> 

<!--Start contact map area-->
<!-- <section class="team-area doctor">
    <div class="container">
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14740.903136905688!2d88.3336380107614!3d22.53321336812982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02773b434957f5%3A0x801da160ca17db35!2s5%2C%20Paddapukur%20Rd%2C%20Madan%20Mohan%20Malaviya%20Sarani%2C%20Jadubabur%20Bazar%2C%20Bhowanipore%2C%20Kolkata%2C%20West%20Bengal%20700025!5e0!3m2!1sen!2sin!4v1692038372472!5m2!1sen!2sin" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>  -->
<!--End contact map area-->

<!--Start welcome area-->
<section class="welcome-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="img-holder">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/resources/5.jpg" alt="Awesome Image">    
                </div>
                <div class="inner-content">
                    <p>As a tertiary referral ICU to provide state of the art care with the help of very good professionals and infrastructure.</p>
                </div>
            </div>

        </div>
    </div>    
</section>
<!--End welcome area-->

<!--Start team area-->
<section class="team-area">
    <div class="container">
        <div class="sec-title">
            <h1>Our Locations</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <!--Start single item-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-team-member">
                    <div class="img-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team/1.jpg" alt="Awesome Image">
                        <div class="overlay-style">
                            <div class="box">
                                <div class="content">
                                    <div class="top">
                                        <h3>5/1, Paddapukur Road, Devika Apartment, Ground Floor,  Kolkata - 700020</h3>
                                        <span>Opposite Khalsa Girls High School</span>
                                    </div>
                                    <span class="border"></span>
                                    <div class="bottom">
                                        <ul>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i>9007594965 / 9748123141</li>
                                            <li><i class="fa fa-envelope" aria-hidden="true"></i>lifeguardpharmacy1@gmail.com</li>
                                        </ul>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3>Bhowanipore</h3> 
                            <span>Kolkata</span>   
                        </div>    
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-team-member">
                    <div class="img-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team/2.jpg" alt="Awesome Image">
                        <div class="overlay-style">
                            <div class="box">
                                <div class="content">
                                    <div class="top">
                                        <h3>35, Beckbagan Row, Kolkata - 700017</h3>
                                        <span>Beside Mithai Shop</span>
                                    </div>
                                    <span class="border"></span>
                                    <div class="bottom">
                                        <ul>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i> 8100565003</li>
                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> lifeguardpharmacy2@gmail.com</li>
                                        </ul>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3>Park Circus</h3> 
                            <span>Kolkata</span>   
                        </div>    
                    </div>
                </div>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-team-member">
                    <div class="img-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/team/3.jpg" alt="Awesome Image">
                        <div class="overlay-style">
                            <div class="box">
                                <div class="content">
                                    <div class="top">
                                        <h3>8/7A, Bijaygarg Colony, Golf Green, Kolkata - 700032</h3>
                                        <span>Opposite 234 Bus/Auto Stand</span>
                                    </div>
                                    <span class="border"></span>
                                    <div class="bottom">
                                        <ul>
                                            <li><i class="fa fa-phone" aria-hidden="true"></i> 7044646580 / 8013150058</li>
                                            <li><i class="fa fa-envelope" aria-hidden="true"></i> lifeguardpharmacy3@gmail.com</li>
                                        </ul>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                            <h3>Golf Green</h3> 
                            <span>Kolkata</span>   
                        </div>    
                    </div>
                </div>
            </div>
            <!--End single item-->
        </div>
    </div>
</section> 
<!--End team area-->

<?php /*
<!--Start departments single area-->
<section id="departments-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">  
                <div class="tab-box">
                    <div class="tab-content">
                        <!--Start single tab pane-->
                        <div class="tab-pane" id="ds1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="img-box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/department/tab-content-1.jpg" alt="Awesome Image">
                                    </div>    
                                </div>      
                            </div>
                        </div>
                        <!--End single tab pane-->
                        <!--Start single tab pane-->
                        <div class="tab-pane active" id="ds2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="img-box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/department/tab-content-2.jpg" alt="Awesome Image">
                                    </div>    
                                </div>      
                            </div>
                        </div>
                        <!--End single tab pane-->
                        <!--Start single tab pane-->
                        <div class="tab-pane" id="ds3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="img-box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/department/tab-content-3.jpg" alt="Awesome Image">
                                    </div>    
                                </div>      
                            </div>   
                        </div>
                        <!--End single tab pane-->
                        <!--Start single tab pane-->
                        <div class="tab-pane" id="ds4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="img-box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/department/tab-content-4.jpg" alt="Awesome Image">
                                    </div>    
                                </div>      
                            </div>  
                        </div>
                        <!--End single tab pane-->
                        <!--Start single tab pane-->
                        <div class="tab-pane" id="ds5">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="img-box">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/department/tab-content-5.jpg" alt="Awesome Image">
                                    </div>    
                                </div>      
                            </div>  
                        </div>
                        <!--End single tab pane-->
                    </div>
                    <ul class="nav nav-tabs tab-menu">
                        <li>
                            <a href="#ds1" data-toggle="tab">
                                <div class="img-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/department/tab-menu-1.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="iocn-holder">
                                                    <span class="flaticon-plus-symbol"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#ds2" data-toggle="tab">
                                <div class="img-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/department/tab-menu-2.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="iocn-holder">
                                                    <span class="flaticon-plus-symbol"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </a>
                        </li>
                        <li>
                            <a href="#ds3" data-toggle="tab">
                                <div class="img-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/department/tab-menu-3.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="iocn-holder">
                                                    <span class="flaticon-plus-symbol"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#ds4" data-toggle="tab">
                                <div class="img-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/department/tab-menu-4.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="iocn-holder">
                                                    <span class="flaticon-plus-symbol"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#ds5" data-toggle="tab">
                                <div class="img-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/department/tab-menu-5.jpg" alt="Awesome Image">
                                    <div class="overlay-style-one">
                                        <div class="box">
                                            <div class="content">
                                                <div class="iocn-holder">
                                                    <span class="flaticon-plus-symbol"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="text-box">
                    <p>Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born wewill give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure sed rationally encounter consequences that are extremely painful.</p>
                    <p>Denouncing pleasure and praising pain was born wewill give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness rationally.</p>
                </div> 
                
                <div class="pricing-box">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-box">
                                <h3>Investigation</h3>
                                <ul>
                                    <li>Gastroscopy .......... <span>$320</span></li>
                                    <li>Colonoscopy .......... <span>$145</span></li>
                                    <li>Bronshoscopy .......... <span>$270</span></li>
                                    <li>Paratyroid Scan .......... <span>$80</span></li>
                                    <li>Allergy Testing .......... <span>$385</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-box">
                                <h3>Treatments</h3>
                                <ul>
                                    <li>Paratyroid Scan .......... <span>$80</span></li>
                                    <li>Allergy Testing .......... <span>$385</span></li>
                                    <li>Colonoscopy .......... <span>$145</span></li>
                                    <li>Gastroscopy .......... <span>$320</span></li>
                                    <li>Bronshoscopy .......... <span>$270</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
                
                <div class="service-plan">
                    <div class="sec-title">
                        <h1>Our Services</h1>
                        <span class="border"></span>
                    </div>
                    <div class="row">
                        <!--Start single box-->
                        <div class="col-md-6">
                            <div class="single-box">
                                <div class="icon-holder">
                                    <span class="flaticon-transport"></span>
                                </div>
                                <div class="text-box">
                                    <h3>24 Hrs Ambulance</h3>
                                    <p>How all this mistaken idea denoucing pleasure and praisings pain was born complete account expound.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single box-->
                        <!--Start single box-->
                        <div class="col-md-6">
                            <div class="single-box">
                                <div class="icon-holder">
                                    <span class="flaticon-drink"></span>
                                </div>
                                <div class="text-box">
                                    <h3>Food & Dietry</h3>
                                    <p>There anyone who loves or pursues or to obtain pain of itself, because it is but because occasionally.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single box-->
                        <!--Start single box-->
                        <div class="col-md-6">
                            <div class="single-box">
                                <div class="icon-holder">
                                    <span class="flaticon-avatar"></span>
                                </div>
                                <div class="text-box">
                                    <h3>Special Nurses</h3>
                                    <p>Pursues or desires to obtain pain itself, because is pain, because occasionally circumstances occur procure.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single box-->
                        <!--Start single box-->
                        <div class="col-md-6">
                            <div class="single-box">
                                <div class="icon-holder">
                                    <span class="flaticon-church"></span>
                                </div>
                                <div class="text-box">
                                    <h3>Places of Worship</h3>
                                    <p>Undertakes laborious physical exercise, except to obtain some advantage from it but who has any right.</p>
                                </div>
                            </div>
                        </div>
                        <!--End single box-->
                    </div>
                </div>
                
                <div class="team-area doctor">
                    <div class="sec-title">
                        <h1>Meet Our Doctors</h1>
                        <span class="border"></span>
                    </div>
                    <div class="row">
                        <!--Start single item-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-team-member">
                                <div class="img-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/team/1.jpg" alt="Awesome Image">
                                    <div class="overlay-style">
                                        <div class="box">
                                            <div class="content">
                                                <div class="top">
                                                    <h3>Marc Parcival</h3>
                                                    <span>Newyork</span>
                                                </div>
                                                <span class="border"></span>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                        <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-holder">
                                        <h3>Marc Parcival</h3> 
                                        <span>Newyork</span>   
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-team-member">
                                <div class="img-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/team/2.jpg" alt="Awesome Image">
                                    <div class="overlay-style">
                                        <div class="box">
                                            <div class="content">
                                                <div class="top">
                                                    <h3>Alen Bailey</h3>
                                                    <span>Newyork</span>
                                                </div>
                                                <span class="border"></span>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                        <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-holder">
                                        <h3>Marc Parcival</h3> 
                                        <span>Newyork</span>   
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                        <!--Start single item-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-team-member">
                                <div class="img-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/team/3.jpg" alt="Awesome Image">
                                    <div class="overlay-style">
                                        <div class="box">
                                            <div class="content">
                                                <div class="top">
                                                    <h3>Basil Andrew</h3>
                                                    <span>Newyork</span>
                                                </div>
                                                <span class="border"></span>
                                                <div class="bottom">
                                                    <ul>
                                                        <li><i class="fa fa-phone" aria-hidden="true"></i> +321 567 89 0123</li>
                                                        <li><i class="fa fa-envelope" aria-hidden="true"></i> Bailey@Hospitals.com</li>
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-holder">
                                        <h3>Marc Parcival</h3> 
                                        <span>Newyork</span>   
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <!--End single item-->
                    </div>
                </div>   
            </div> 
            
            <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12 pull-left">
                <div class="departments-sidebar">
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="title">
                            <h3>Departments</h3>    
                        </div>
                        <ul class="all-departments">
                            <li class="active">
                                <a href="cardiac-clinic.html">Cardiac Clinic</a>
                            </li>
                            <li>
                                <a href="pulmonology.html">Pulmonology</a>
                            </li>
                            <li>
                                <a href="gynecology.html">Gynecology</a>
                            </li>
                            <li>
                                <a href="neurology.html">Neurology</a>
                            </li>
                            <li>
                                <a href="urology.html">Urology</a>
                            </li>
                            <li>
                                <a href="gastrology.html">Gastrology</a>
                            </li>
                            <li>
                                <a href="pediatrician.html">Pediatrician</a>
                            </li>
                            <li>
                                <a href="laborotory.html">Laboratory</a>
                            </li>
                        </ul>
                    </div> 
                    <!--Ens single sidebar--> 
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="title">
                            <h3>Opening Hours</h3>    
                        </div>
                        <ul class="opening-time">
                            <li>Mon to Friday: <span>09.00 to 18.00</span></li>
                            <li>Saturday: <span>10.00 to 16.00</span></li>
                            <li>Sunday: <span>10.00 to 14.00</span></li>
                        </ul>
                    </div> 
                    <!--Ens single sidebar--> 
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="title">
                            <h3>Quick Contact</h3>    
                        </div>
                        <div class="contact-us">
                            <ul class="contact-info">
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-pin"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5>Park Drive, Varick 2nd Str<br>NY 10012, USA</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-technology"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5>Getwell@Hospitals.com</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-holder">
                                        <span class="flaticon-technology-1"></span>
                                    </div>
                                    <div class="text-holder">
                                        <h5>(123) 0200 12345 & 7890</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> 
                    <!--Ens single sidebar-->       
                </div>    
            </div>
            
        </div>
    </div>
</section>
<!--End Medical Departments area--> 
*/ ?>

<!--Start project faq area-->
<section class="project-faq-area sec-padding">
    <div class="container">
        <div class="sec-title mar0auto text-center">
            <h1>FAQ’s</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="faq-content">
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where is the hospital located?</h4>
                            </div>
                            <div class="accord-content">
                                <p>A Patient Centered Medical Home is a model of healthcare delivery in which care is tailored to the needs & preferences of patients, the Patient Centered Medical  model encourages.</p>
                            </div>
                        </div>
                        <!--End single accordion box--> 
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active">
                                <h4>What is the deposit amount for admission?</h4>
                            </div>
                            <div class="accord-content collapsed">
                                <p>A Patient Centered Medical Home is a model of healthcare delivery in which care is tailored to the needs & preferences of patients, the Patient Centered Medical  model encourages.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block last">
                            <div class="accord-btn last">
                                <h4>What are the visiting hours?</h4>
                            </div>
                            <div class="accord-content">
                                <p>A Patient Centered Medical Home is a model of healthcare delivery in which care is tailored to the needs & preferences of patients, the Patient Centered Medical  model encourages.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How many visitors are allowed at a time?</h4>
                            </div>
                            <div class="accord-content">
                                <p>A Patient Centered Medical Home is a model of healthcare delivery in which care is tailored to the needs & preferences of patients, the Patient Centered Medical  model encourages.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                    </div>
                </div>  
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="faq-content">
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>Where is the hospital located?</h4>
                            </div>
                            <div class="accord-content">
                                <p>A Patient Centered Medical Home is a model of healthcare delivery in which care is tailored to the needs & preferences of patients, the Patient Centered Medical  model encourages.</p>
                            </div>
                        </div>
                        <!--End single accordion box--> 
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active">
                                <h4>What is the deposit amount for admission?</h4>
                            </div>
                            <div class="accord-content collapsed">
                                <p>A Patient Centered Medical Home is a model of healthcare delivery in which care is tailored to the needs & preferences of patients, the Patient Centered Medical  model encourages.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block last">
                            <div class="accord-btn last">
                                <h4>What are the visiting hours?</h4>
                            </div>
                            <div class="accord-content">
                                <p>A Patient Centered Medical Home is a model of healthcare delivery in which care is tailored to the needs & preferences of patients, the Patient Centered Medical  model encourages.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn">
                                <h4>How many visitors are allowed at a time?</h4>
                            </div>
                            <div class="accord-content">
                                <p>A Patient Centered Medical Home is a model of healthcare delivery in which care is tailored to the needs & preferences of patients, the Patient Centered Medical  model encourages.</p>
                            </div>
                        </div>
                        <!--End single accordion box-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End project faq area--> 

<!--Start slogan area-->
<section class="slogan-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title pull-left">
                    <h2>Source of Income? Wondering HOW?</h2>
                </div>
                <div class="button pull-right">
                    <a class="thm-btn bgclr-1" href="#">Download Document</a>
                </div>
            </div>
        </div>
    </div>
</section>  
<!--End slogan area-->
<?php
get_footer();
?>
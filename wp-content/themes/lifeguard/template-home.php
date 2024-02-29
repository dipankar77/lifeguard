<?php 
/* Template Name: Home */ 
get_header();
?>
<!--Start rev slider wrapper-->     
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            <li data-transition="rs-20">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slides/1.jpg"  alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="220" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="1500">
                    <div class="slide-content-box mar-lft">
                        <h1>Hospitals providing total<br> healthcare <span>Solutions.</span></h1>
                        <p>Denouncing pleasure and praising pain was born and we will <br>give you a complete account of the system.</p>
                        <div class="button">
                            <a class="#" href="#">Read More</a>
                            <a class="btn-style-two" href="#">Departments</a>           
                        </div>  
                    </div>
                </div>
            </li>
            <li data-transition="fade">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slides/2.jpg" alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                <div class="tp-caption  tp-resizeme" 
                    data-x="right" data-hoffset="0" 
                    data-y="top" data-voffset="220" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="1500">
                    <div class="slide-content-box">
                        <h1>Hospitals providing total<br> healthcare <span>Solutions.</span></h1>
                        <p>Denouncing pleasure and praising pain was born and we will <br>give you a complete account of the system.</p>
                        <div class="button">
                            <a class="#" href="#">Read More</a>
                            <a class="btn-style-two" href="#">Departments</a>           
                        </div>  
                    </div>
                </div>
            </li>
            <li data-transition="fade">
                <img src="<?php echo get_template_directory_uri(); ?>/images/slides/3.jpg"  alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1">
                
                <div class="tp-caption  tp-resizeme" 
                    data-x="left" data-hoffset="0" 
                    data-y="top" data-voffset="220" 
                    data-transform_idle="o:1;"         
                    data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                    data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                    data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                    data-splitin="none" 
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-start="1500">
                    <div class="slide-content-box mar-lft">
                        <h1>Hospitals providing total<br> healthcare <span>Solutions.</span></h1>
                        <p>Denouncing pleasure and praising pain was born and we will <br>give you a complete account of the system.</p>
                        <div class="button">
                            <a class="#" href="#">Read More</a>
                            <a class="btn-style-two" href="#">Departments</a>           
                        </div>  
                    </div>
                </div>

            </li>
        </ul>
    </div>
</section>
<!--End rev slider wrapper-->
<!--Start call to action area-->
<section class="callto-action-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
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
                                <div class="input-box">
                                    <input type="text" name="form_phone" value="" placeholder="Phone">  
                                </div>
                            </div>
                            <div class="single-box">    
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
<!--Start Medical Departments area-->
<section class="medical-departments-area">
    <div class="container">
        <div class="sec-title">
            <h1>Our Products</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="medical-departments-carousel">
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/resources/Allopathic_Medicines_LifeGuard_Website.png" alt="Icon">  
                        </div>
                        <div class="text-holder">
                            <h3>Allopathic Medicines</h3>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/resources/Ayurvedic_Medicines_LifeGuard_Website.png" alt="Icon">
                        </div>
                        <div class="text-holder">
                            <h3>Ayurvedic Medicines</h3>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/resources/Homeopathy_Medicines_LifeGuard_Website.png" alt="Icon">    
                        </div>
                        <div class="text-holder">
                            <h3>Homeopathy Medicines</h3>
                        </div>
                        <!-- <a class="readmore" href="#">Read More</a> -->
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/resources/Surgical_Products_LifeGuard_Website.png" alt="Icon">    
                        </div>
                        <div class="text-holder">
                            <h3>Surgical Products</h3>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/resources/OTC_Product_LifeGuard_Website.png" alt="Icon">    
                        </div>
                        <div class="text-holder">
                            <h3>OTC Product</h3>
                        </div>
                    </div>
                    <!--End single item-->
                        <!--Start single item-->
                        <div class="single-item text-center">
                        <div class="iocn-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/resources/Other_Products_LifeGuard_Website.png" alt="Icon">    
                        </div>
                        <div class="text-holder">
                            <h3>Other Products</h3>
                        </div>
                    </div>
                    <!--End single item-->
                    <!--Start single item-->
                    <div class="single-item text-center">
                        <div class="iocn-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/resources/Daily_Use_Products_LifeGuard_Website.png" alt="Icon">    
                        </div>
                        <div class="text-holder">
                            <h3>Daily Use Products</h3>
                        </div>
                    </div>
                    <!--End single item-->
                </div>
            </div>    
        </div>
    </div>
</section>
<!--End Medical Departments area--> 
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
<!--Start fact counter area-->
<section class="fact-counter-area" style="background: #006661;">
    <div class="container">
        <div class="sec-title text-center">
            <h1>Your Health Meets A New Partner</h1>
            <p>How all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the<br> system and expound the actual teachings of the great.</p>
        </div>
        <div class="row">
            <!--Start single item-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul>
                    <li>
                        <div class="single-item text-center">
                            <div class="icon-holder">
                                <span class="flaticon-medical"></span> 
                            </div>
                            <h1><span class="timer" data-from="1" data-to="25" data-speed="5000" data-refresh-interval="50">25</span></h1>
                            <h3>3 Stores</h3>
                        </div>
                    </li>
                    <li>
                        <div class="single-item text-center">
                            <div class="icon-holder">
                                <span class="flaticon-smile"></span> 
                            </div>
                            <h1><span class="timer" data-from="1" data-to="284" data-speed="5000" data-refresh-interval="50">284</span></h1>
                            <h3>Well Smiley Faces</h3>
                        </div>
                    </li>
                    <li>
                        <div class="single-item text-center">
                            <div class="icon-holder">
                                <span class="flaticon-medical-1"></span> 
                            </div>
                            <h1><span class="timer" data-from="1" data-to="176" data-speed="5000" data-refresh-interval="50">176</span></h1>
                            <h3>Best Discounts</h3>
                        </div>
                    </li>
                    <li>
                        <div class="single-item text-center">
                            <div class="icon-holder">
                                <span class="flaticon-ribbon"></span> 
                            </div>
                            <h1><span class="timer" data-from="1" data-to="142" data-speed="5000" data-refresh-interval="50">142</span></h1>
                            <h3>Authentic Medicines</h3>
                        </div>
                    </li>
                </ul>
            </div>
            <!--End single item-->
        </div>
    </div>
</section>
<!--End fact counter area--> 
<!--Start testimonial area-->
<section class="testimonial-area">
    <div class="container">
        <div class="sec-title mar0auto text-center">
            <h1>What Our Clients Say</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <!--Start single item-->
            <div class="col-md-12">
                <div class="testimonial-carousel">
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item text-center">
                        <div class="img-box">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/1.png" alt="Awesome Image">
                            </div>
                            <div class="quote-box">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>    
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                        </div>
                        <div class="name">
                            <h3>Rossy Miranda</h3>
                            <span>Newyork</span>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item text-center">
                        <div class="img-box">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/2.png" alt="Awesome Image">
                            </div>
                            <div class="quote-box">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>    
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>The master-builder of human happiness one rejects, dislikes, or avoids pleasure itself, because it is pleasure pursue.</p>
                        </div>
                        <div class="name">
                            <h3>Peter Lawrence</h3>
                            <span>California</span>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item text-center">
                        <div class="img-box">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/1.png" alt="Awesome Image">
                            </div>
                            <div class="quote-box">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>    
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                        </div>
                        <div class="name">
                            <h3>Rossy Miranda</h3>
                            <span>Newyork</span>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item text-center">
                        <div class="img-box">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/2.png" alt="Awesome Image">
                            </div>
                            <div class="quote-box">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>    
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>The master-builder of human happiness one rejects, dislikes, or avoids pleasure itself, because it is pleasure pursue.</p>
                        </div>
                        <div class="name">
                            <h3>Peter Lawrence</h3>
                            <span>California</span>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item text-center">
                        <div class="img-box">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/1.png" alt="Awesome Image">
                            </div>
                            <div class="quote-box">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>    
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>Mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system.</p>
                        </div>
                        <div class="name">
                            <h3>Rossy Miranda</h3>
                            <span>Newyork</span>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                    <!--Start single testimonial item-->
                    <div class="single-testimonial-item text-center">
                        <div class="img-box">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/testimonial/2.png" alt="Awesome Image">
                            </div>
                            <div class="quote-box">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>    
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>The master-builder of human happiness one rejects, dislikes, or avoids pleasure itself, because it is pleasure pursue.</p>
                        </div>
                        <div class="name">
                            <h3>Peter Lawrence</h3>
                            <span>California</span>
                        </div>
                    </div>
                    <!--End single testimonial item-->
                </div>
            </div>
            <!--End single item-->

        </div>
    </div>
</section>
<!--End testimonial area--> 
<!--Start latest blog area-->  
<section class="latest-blog-area">
    <div class="container">
        <div class="sec-title">
            <h1>Latest From Blog</h1>
            <span class="border"></span>
        </div>
        <div class="row">
            <!--Start single blog item-->
            <div class="col-md-4">
                <div class="single-blog-item">
                    <div class="img-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/latest-blog-1.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="blog-single.html"><span class="flaticon-plus-symbol"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <a href="blog-single.html">
                            <h3 class="blog-title">How to handle your kids’ from mystery ailments</h3>
                        </a>
                        <div class="text">
                            <p>The great explorer of the truth, master builder of human happiness one rejects, dislikes, or avoids pleasure itself because it is pleasure.</p>
                        </div>
                        <ul class="meta-info">
                            <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>February 14, 2017</a></li>
                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>21 Comments</a></li>
                        </ul>
                    </div>    
                </div>    
            </div>
            <!--End single blog item-->
            <!--Start single blog item-->
            <div class="col-md-4">
                <div class="single-blog-item">
                    <div class="img-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/latest-blog-2.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="blog-single.html"><span class="flaticon-plus-symbol"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <a href="blog-single.html">
                            <h3 class="blog-title">Negative statin stories add to heart health risk</h3>
                        </a>
                        <div class="text">
                            <p>There anyone who loves or pursues or desires to obtain pains of itself, because it is pain because occasionally circumstances occur.</p>
                        </div>
                        <ul class="meta-info">
                            <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>January 21, 2017</a></li>
                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>18 Comments</a></li>
                        </ul>
                    </div>    
                </div>    
            </div>
            <!--End single blog item-->
            <!--Start single blog item-->
            <div class="col-md-4">
                <div class="single-blog-item">
                    <div class="img-holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/latest-blog-3.jpg" alt="Awesome Image">
                        <div class="overlay-style-one">
                            <div class="box">
                                <div class="content">
                                    <a href="blog-single.html"><span class="flaticon-plus-symbol"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-holder">
                        <a href="blog-single.html">
                            <h3 class="blog-title">Lung cancer survival rate in England improves</h3>
                        </a>
                        <div class="text">
                            <p>Which toil and pain can procure him some great pleasure. To take a trivial example, which of us  laborious physical exercise.</p>
                        </div>
                        <ul class="meta-info">
                            <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>January 15, 2017</a></li>
                            <li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>09 Comments</a></li>
                        </ul>
                    </div>    
                </div>    
            </div>
            <!--End single blog item-->
        </div>
    </div>
</section>
<!--End latest blog area-->

<!--Start facilities Appointment area-->
<section class="facilities-appointment-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="facilities-content-box">
                    <div class="sec-title">
                        <h1>Why Choose Us</h1>
                        <span class="border"></span>
                    </div>
                    <div class="text-holder">
                    <div class="title">
                        <h1>Welcome to Life Guard</h1>
                        <p>We are one of the Fastest growing Pharma Chains in Kolkata.</p>    
                    </div>

                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="appointment">
                    <div class="sec-title">
                        <h1>Vendor Tie Up</h1>
                        <span class="border"></span>
                    </div>
                    <form id="appointment-form" name="appointment-form" action="http://st.ourhtmldemo.com/new/Hospitals/inc/sendmail.php" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-box">
                                    <input type="text" name="form_name" value="" placeholder="Your Name" required="">
                                </div>
                                <div class="input-box">
                                    <input type="email" name="form_email" value="" placeholder="Your Email" required="">
                                </div>
                                <div class="input-box">
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
                                </div>
                                <div class="input-box">   
                                    <select class="selectmenu">
                                        <option selected="selected">Select Doctor</option>
                                        <option>Balance Body Mind</option>
                                        <option>Physical Activity</option>
                                        <option>Support & Motivation</option>
                                        <option>Exercise Program</option>
                                        <option>Healthy Daily Life</option>
                                        <option>First Hand Advice</option>
                                    </select>
                                </div>
                                <button class="thm-btn bgclr-1" type="submit">submit</button>        
                            </div>
                        </div>
                    </form>        
                </div>
            </div>
        </div>
    </div>    
</section>
<!--End facilities Appointment area-->

<?php
get_footer();
?>
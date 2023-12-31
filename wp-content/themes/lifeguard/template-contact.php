<?php 
/* Template Name: Contact */ 
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

<!--Start contact form area-->
<section class="contact-form-area">
    <div class="container">
        <div class="sec-title">
            <h1>Get In Touch With Us</h1>
            <span class="border"></span>
            <div class="select-box pull-right">
                <select class="text-capitalize selectpicker form-control required" name="form_subject" data-style="g-select" data-width="100%">
                    <option>Newyork Campus</option>
                    <option>Canada Campus</option>
                    <option>UK Campus</option>
                    <option>USA Campus</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div class="contact-form">
                    <form id="contact-form" name="contact_form" class="default-form" action="http://st.ourhtmldemo.com/new/Hospitals/inc/sendmail.php" method="post">
                        <h2>Make an Appointment</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="form_name" value="" placeholder="Your Name*" required="">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="form_email" value="" placeholder="Your Mail*" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="form_phone" value="" placeholder="Phone">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="form_subject" value="" placeholder="Subject">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="form_message" placeholder="Your Message.." required=""></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                <button class="thm-btn bgclr-1" type="submit" data-loading-text="Please wait...">send message</button>
                            </div>
                        </div>
                    </form>  
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="quick-contact">
                    <div class="title">
                        <h2>Quick Contact</h2>
                        <p>If you have any questions simply use the following contact details.</p>
                    </div>
                    <ul class="contact-info">
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-pin"></span>
                            </div>
                            <div class="text-holder">
                                <h5><span>Address:</span> 5/1, Paddapukur Road, Devika Apartment, Ground Floor,  Kolkata - 700020<br>LANDMARK: Opposite Khalsa Girls High School</h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-technology"></span>
                            </div>
                            <div class="text-holder">
                                <h5><span>Phone:</span> +91 98362 13542</h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-interface"></span>
                            </div>
                            <div class="text-holder">
                                <h5><span>Email:</span> info@lifeguard.net</h5>
                            </div>
                        </li>
                    </ul>
                    <ul class="social-links">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>    
            </div>
            
        </div>
    </div>
</section>
<!--End contact form area-->  

<!--Start contact map area-->
<section class="team-area doctor">
    <div class="container">
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14740.903136905688!2d88.3336380107614!3d22.53321336812982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02773b434957f5%3A0x801da160ca17db35!2s5%2C%20Paddapukur%20Rd%2C%20Madan%20Mohan%20Malaviya%20Sarani%2C%20Jadubabur%20Bazar%2C%20Bhowanipore%2C%20Kolkata%2C%20West%20Bengal%20700025!5e0!3m2!1sen!2sin!4v1692038372472!5m2!1sen!2sin" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section> 
<!--End contact map area-->
<?php
get_footer();
?>
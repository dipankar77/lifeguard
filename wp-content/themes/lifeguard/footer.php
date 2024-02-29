<!--Start footer area-->  
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget pd-bottom50">
                    <div class="title">
                        <h3>About Lifeguard</h3>
                        <span class="border"></span>
                    </div>
                    <div class="our-info">
                        <p>Welcome to Lifeguard Pharmacy, a pioneering name in the pharmaceutical landscape of Kolkata. With an unwavering commitment to quality, convenience, and innovation, we have emerged as one of the fastest-growing pharmacy chains in the region. Established on a foundation of trust, Lifeguard Pharmacy is dedicated to providing exceptional service, genuine medications, and unparalleled value to our customers.</p>
                        <!-- <p class="mar-top">A Health Care Provider of Western Approach, Hospitals is the most trusted multispecialty hospital.</p> -->
                        <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">Know More<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget pd-bottom50">
                    <div class="title">
                        <h3>Usefull Links</h3>
                        <span class="border"></span>
                    </div>
                    <ul class="usefull-links fl-lft">
                        <li><a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">About Us</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/stores' ) ); ?>">Stores</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/services' ) ); ?>">Services</a></li>
                    </ul>
                    <ul class="usefull-links">
                    <li><a href="<?php echo esc_url( home_url( '/franchise' ) ); ?>">Franchise</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/faq' ) ); ?>">FAQs</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget mar-bottom">
                    <div class="title">
                        <h3>Contact Details</h3>
                        <span class="border"></span>
                    </div>
                    <ul class="footer-contact-info">
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-pin"></span>
                            </div>
                            <div class="text-holder">
                                <h5>5/1, Paddapukur Road,<br>Devika Apartment, Kolkata - 700020</h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-interface"></span>
                            </div>
                            <div class="text-holder">
                                <h5>info@lifeguard.net</h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-technology-1"></span>
                            </div>
                            <div class="text-holder">
                                <h5>+91 98362 13542</h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-clock"></span>
                            </div>
                            <div class="text-holder">
                                <h5>Monday to Sunday (24x7)</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--Start single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget clearfix">
                    <div class="title">
                        <h3>Make an Appointment</h3>
                        <span class="border"></span>
                    </div>
                    <form class="appointment-form" action="#">
                        <div class="input-box">
                            <input type="text" name="form_name" value="" placeholder="Your Name" required="">
                            <div class="icon-box">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="input-box">
                            <input type="email" name="form_email" value="" placeholder="Your Email" required="">
                            <div class="icon-box">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="input-box">
                            <textarea name="form_message" placeholder="Your Message.." required="" aria-required="true"></textarea>
                        </div>
                        <button type="submit">submit</button>
                    </form>
                </div>
            </div>
            <!--End single footer widget-->
        </div>
    </div>
</footer>   
<!--End footer area-->
<!--Start footer bottom area-->
<section class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="copyright-text">
                    <p>&copy; <?php echo date("Y"); ?> Lifeguard. All Rights Reserved. Powered By <a href="https://espousal.co.in/" target="_blank">Espousal.</a></p> 
                </div>
            </div>
            <div class="col-md-4">
                <ul class="footer-social-links">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--End footer bottom area-->
</div>
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-triangle-inside-circle"></span></div>
<!-- main jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script>
<!-- Wow Script -->
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<!-- bootstrap -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="<?php echo get_template_directory_uri(); ?>/js/validation.js"></script>
<!-- mixit up -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAYG32XDI-0Sxq78wLyVTLHVMMFZZS60Y"></script>
<!--gmap script-->
<script src="<?php echo get_template_directory_uri(); ?>/js/gmaps.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/map-helper.js"></script>
<!-- fancy box -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.appear.js"></script>
<!-- isotope script-->
<script src="<?php echo get_template_directory_uri(); ?>/js/isotope.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.prettyPhoto.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bootstrap-touchspin.js"></script>
<!-- jQuery timepicker js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/timepicker/timePicker.js"></script>
<!-- Bootstrap select picker js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>                               
<!-- Bootstrap bootstrap touchspin js -->
<!-- jQuery ui js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<!-- Html 5 light box script-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/html5lightbox/html5lightbox.js"></script>
<!-- revolution slider js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- thm custom script -->
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
</body>
</html>
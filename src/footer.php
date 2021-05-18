<footer>
    <div class="container">
        <div class="logoFooter">
            <a href="<?php echo site_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/mbb-logo.png" alt="MBB Logo">
            </a>
            <div class="socialFooter">
                <a href="https://www.instagram.com/mbbwellnesscenter/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/company/mbbwellnesscenter" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/mbbwellnesscenter" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="footerContact">
            <p>Get in touch</p>
            <address>
                <a href="tel:407.217.5042">407.217.5042</a> <br>
                <a href="https://www.google.com/maps/place/4750+The+Grove+Dr+%23200,+Windermere,+FL+34786,+EUA/@28.4923879,-81.513569,17z/data=!3m1!4b1!4m5!3m4!1s0x88e77f56d8cd884b:0x6a7ed8f8833710d4!8m2!3d28.4923879!4d-81.5113803" target="blank">4750 The Grove Drive <br>
                    Suite 200 <br>
                    Windermere, FL 34786</a>
            </address>
        </div>
        <div class="footerOpening">
            <p>Hours</p>
            MONDAY-FRIDAY <br>
            8:00am-6:00pm <br> 
            SATURDAY-SUNDAY <br>
            By appointment only
        </div>
        <div class="footerNewsletter">
            <p>Sign up for email updates</p>
            <?php echo do_shortcode('[formidable id=5]');?>
        </div>
    </div>
	<div class="footerDppa">
        <?php require_once('partials/logo-dppa-footer.php'); ?>
    </div>
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://use.fontawesome.com/37d8e8fa0a.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.flipster.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
<script>
    $(window).load(function(){
       
        $(".homePageTestimonialsTitleCarousel #carousel").flipster({
            style: "carousel",
            spacing: -0.3,
            buttons: true,
        });
        $(".aboutTechnology #carousel").flipster({
            style: "flat",
            spacing: 0,
            start: 0,
            buttons: true,
        });
        
        $('.flipster__button--prev').html('<i class="fa fa-angle-left" aria-hidden="true"></i>');
        $('.flipster__button--next').html('<i class="fa fa-angle-right" aria-hidden="true"></i>');
    })
</script>
<?php wp_footer(); ?> 
</body>
</html>
<?php
/*
Template Name: Schedule Tour Page
*/
?>

<?php get_header(); ?>
<main class="schedulePage">
    <div class="container">
        <section>
            <div class="schedulePageTitle wow fadeInUp">
                <h1 class="pageTitle wow fadeInUp"><span>SCHEDULE YOUR</span><br>
					Free Evaluation
				</h1>
				<p class="wow fadeInUp">
                    <?php the_field('schedule_tour_page_copy'); ?>
				</p>
			</div>
			<div class="schedulePageForm wow fadeInUp">
                <?php echo do_shortcode('[formidable id=3]'); ?>
            </div>            
        </section>
        <section>
            <div class="schedulePageImage wow fadeIn">
                <div class="schedulePageImageMain" style="background-image: url(<?php the_field('schedule_tour_page_image'); ?>);">
                    <div class="content"></div>
                    
                </div>
                <div class="schedulePageImageAppend schedulePageImageAppend1">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/wp/balance.png" alt="Balance" class="animated pulse infinite slow">
                </div>
                <div class="schedulePageImageAppend schedulePageImageAppend2">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/wp/mind.png" alt="Mind" class="animated pulse infinite slow">
                </div>
                <div class="schedulePageImageAppend schedulePageImageAppend3">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/wp/body.png" alt="Body" class="animated pulse infinite slow">
                </div>
            </div>
            <div class="schedulePageMap wow fadeIn">
                <div class="schedulePageIframeWrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.573514528267!2d-81.51356898439515!3d28.492387882473345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e77f56d8cd884b%3A0x6a7ed8f8833710d4!2s4750%20The%20Grove%20Dr%20%23200%2C%20Windermere%2C%20FL%2034786%2C%20EUA!5e0!3m2!1spt-BR!2sbr!4v1587519911604!5m2!1sen-US!2sbr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </section>
    </div>
</main>	
<?php get_footer(); ?>

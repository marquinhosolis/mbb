<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>
	<main class="homePage">
		<div class="section coverHomePage">
			<div class="container">
				<div class="coverHomeText">
					<h1 class="pageTitle wow fadeInUp"><span><?php the_field('cover_title_append'); ?></span><br>
						<?php the_field('cover_title'); ?>
					</h1>
					<p class="wow fadeInUp">
						<?php the_field('cover_text'); ?>
					</p>
					<a href="#" class="btn btnBig wow zoomIn hvr-shrink">SCHEDULE A FREE ASSESSMENT</a>
				</div>
				<div class="coverHomeImage wow fadeIn">
					<div class="coverHomeImageMain" style="background-image: url(<?php the_field('cover_image'); ?>);">
						<div class="content"></div>
						
					</div>
					<div class="coverHomeImageAppend coverHomeImageAppend1">
						<img src="<?php echo get_template_directory_uri(); ?>/images/wp/balance.png" alt="Balance" class="animated pulse infinite slow">
					</div>
					<div class="coverHomeImageAppend coverHomeImageAppend2">
						<img src="<?php echo get_template_directory_uri(); ?>/images/wp/mind.png" alt="Mind" class="animated pulse infinite slow">
					</div>
					<div class="coverHomeImageAppend coverHomeImageAppend3">
						<img src="<?php echo get_template_directory_uri(); ?>/images/wp/body.png" alt="Body" class="animated pulse infinite slow">
					</div>
				</div>
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/intro-home-page-before.png" alt="" class="introHomePage--before">
		<section class="introHomePage">
			<div class="container">
				<div class="introHomePageCard wow fadeInUp">
					<h1 class="pageTitle wow fadeInUp"><span></span><br>
						<?php the_field('intro_box_1_title'); ?>
					</h1>
					<div class="introHomePageCardText wow fadeInUp" data-wow-delay="0.2s">
						<?php the_field('intro_box_1_copy'); ?>
					</div>
					<div class="introHomePageCardBtn">
						<a href="<?php echo site_url('/wellness-programs/'); ?>" class="btn btn-dark hvr-shrink"><span>Learn more about us</span></a>
					</div>
				</div>
				<div class="introHomePageCard wow fadeInUp" data-wow-delay="0.1s">
					<h1 class="pageTitle wow fadeInUp"><span></span><br>
						<?php the_field('intro_box_2_title'); ?>
					</h1>
					<div class="introHomePageCardText wow fadeInUp" data-wow-delay="0.3s">
						<?php the_field('intro_box_2_copy'); ?>
					</div>
					<div class="introHomePageCardBtn">
						<a href="<?php echo site_url('/about-us/'); ?>" class="btn btn-dark hvr-shrink"><span>Learn more about us</span></a>
					</div>
				</div>
				<div class="introHomePageCard wow fadeInUp" data-wow-delay="0.2s">
					<h1 class="pageTitle wow fadeInUp"><span></span><br>
						<?php the_field('intro_box_3_title'); ?>
					</h1>
					<div class="introHomePageCardText wow fadeInUp" data-wow-delay="0.4s">
						<?php the_field('intro_box_3_copy'); ?>
					</div>
					<!--<div class="introHomePageCardBtn">
						<a href="<?php echo site_url('/faqs/'); ?>" class="btn btn-dark hvr-shrink"><span>Learn more about us</span></a>
					</div>-->
					<div class="introHomePageCardBtn">
						<a href="" class="btn btn-dark" style="width: 0 !important;"><span style="width: 0 !important;"></span></a>
					</div>
				</div>
			</div>
		</section>
		<section class="ourServicesHomePage">
			<div class="container">
				<div class="ourServicesHomePageTitle">
					<div class="ourServicesHomePageTitleImage wow fadeIn" style="background-image: url(<?php the_field('services_image'); ?>);">
						<div class="content"></div>
					</div>
					<div class="ourServicesHomePageTitleText wow fadeInUp">
						<h2 class="pageTitle"><span>Our</span><br>
							Services
						</h2>
						<p><?php the_field('our_services_copy'); ?></p>
					</div>
				</div>
				<div class="ourServicesHomePageServices">
					<div class="ourServicesHomePageService wow fadeInUp">
						<img src="<?php echo get_template_directory_uri(); ?>/images/wp/mind.png" alt="Mind" class="wow fadeInUp">
						<div class="ourServicesHomePageServiceText wow fadeInUp">
							<h3>Mind Balance</h3>
							<p><?php the_field('mind_balance_copy'); ?></p>
						</div>
					</div>
					<div class="ourServicesHomePageService wow fadeInUp" data-wow-delay="0.1s">
						<img src="<?php echo get_template_directory_uri(); ?>/images/wp/body.png" alt="Body" class="wow fadeInUp" >
						<div class="ourServicesHomePageServiceText wow fadeInUp" data-wow-delay="0.3s">
							<h3>Body Balance</h3>
							<p><?php the_field('body_balance_copy'); ?></p>
						</div>
					</div>
					<div class="ourServicesHomePageService wow fadeInUp" data-wow-delay="0.2s">
						<img src="<?php echo get_template_directory_uri(); ?>/images/wp/balance.png" alt="Balance" class="wow fadeInUp">
						<div class="ourServicesHomePageServiceText wow fadeInUp" data-wow-delay="0.4s">
							<h3>Mind Body Balance Assessments</h3>
							<p>Non-invasive assessments to evaluate your balance, nervous system, brain health, and more.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="ourServicesHomePageCtaBefore">
			<img src="<?php echo get_template_directory_uri(); ?>/images/services-cta-before.png" alt="">
			<div class="ourServicesHomePageCtaBeforeBtn">
				<a href="#" class="btn btnBig hvr-shrink">Learn more about our services</a>
			</div>
		</div>
		<section class="ourServicesHomePageCta">
			<div class="container">
				<div class="ourServicesHomePageCtaImgClipPath ourServicesHomePageCtaImgClipPath--desktop wow fadeIn">
					<img src="<?php the_field('learn_more_image_1'); ?>" alt=""> 
				</div>
				<div class="ourServicesHomePageCtaText">
					<p>
						We also work with corporate clients. If you’d like to learn more, please contact us <a href="<?php echo site_url('contact') ?>">here</a>.
					</p>
					<div class="ourServicesHomePageCtaImgClipPath wow fadeIn">
						<img src="<?php the_field('learn_more_image_2'); ?>" alt=""> 
					</div>
				</div>
				<div class="ourServicesHomePageCtaImgClipPath ourServicesHomePageCtaImgClipPath--desktop wow fadeIn">
					<img src="<?php the_field('learn_more_image_3'); ?>" alt=""> 
				</div>
			</div>
		</section>
		<script>
			var redirectUrl = "http://stackoverflow.com";
		</script>	
		<img src="<?php echo get_template_directory_uri(); ?>/images/services-cta-before.png" alt="" class="ourServicesHomePageCtaAfter">

		<!-- <section class="blogShowcase">
			<div class="container">
				<div class="blogShowcaseTitle wow fadeInUp">
					<h2 class="pageTitle"><span>the latest</span><br>
						From the blog
					</h2>
				</div>
				<div class="blogShowcaseArticles">
                <?php
                    $args = array(
                        'post_type' => array( 'post' ),
                        'posts_per_page' => 3
					);

                    $query = new WP_Query( $args );
                    
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();?>
                            <?php 
                                $count = $query->found_posts;
                            ?>
                            <a href="<?php the_permalink(); ?>" class="hvr-shrink">
                                <article class="wow fadeInUp">
                                    <div class="blogShowcaseArticleThumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>">
                                        <div class="content"></div>
                                    </div>
                                    <div class="blogShowcaseArticleText">
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php the_excerpt(); ?></p>
                                        <div class="blogShowcaseReadMore">
                                            CONTINUE READING  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </article>
                            </a>
                        <?php }
                    } 
                    
                    wp_reset_postdata();
                ?>
            </div>
				<div class="blogShowcaseBtn">
					<a href="#" class="btn btnBig hvr-shrink">VISIT THE BLOG</a>
				</div>
			</div>
		</section> -->
		<!--<section class="homePageFreeGuide">
			<div class="container">
				<div class="homePageFreeGuideImage wow fadeIn" style="background-image: url(<?php the_field('free_resource_image'); ?>);">
						<div class="content"></div>
				</div>
				<div class="homePageFreeGuideText wow fadeInUp">
					<h2 class="pageTitle"><span>GET YOUR FREE GUIDE</span><br>
						<?php the_field('free_resource_title'); ?>
					</h2>
					<p><?php the_field('free_resource_copy'); ?></p>
					<?php echo do_shortcode('[formidable id=4]'); ?>
				</div>
			</div>
		</section>-->
		<!--<img src="<?php echo get_template_directory_uri(); ?>/images/intro-home-page-before.png" alt="" class="introHomePage--before">-->
		<section class="homePageTestimonials">
			<div class="container">
				<div class="homePageTestimonialsTitle wow fadeInUp">
					<h2 class="pageTitle"><span>rave</span><br>
						Reviews
					</h2>
				</div>
				<div class="homePageTestimonialsTitleCarousel wow fadeInUp">
					<div id="carousel">
						<ul class="flip-items">
							<?php
								if( have_rows('testimonials') ):
									while ( have_rows('testimonials') ) : the_row(); ?>
										<li>
											<div class="homePageTestimonialsUnique" >
												<div class="homePageTestimonialsUniqueImage" style="background-image: url(<?php the_sub_field('testimonial_image'); ?> );">
													<div class="content"></div>
												</div>
												<div class="homePageTestimonialsUniqueText">
													<?php the_sub_field('testimonial_copy'); ?> 
													<div class="homePageTestimonialsUniqueTextName">
														- <?php the_sub_field('testimonial_name'); ?> 
													</div>
												</div>
											</div>
										</li>
									<?php endwhile;
								endif;
							?>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section class="homeFooterCta">
			<div class="container">
				<a href="<?php echo site_url('/schedule-assessment/'); ?>" class="btn btnBig wow fadeInUp hvr-shrink">
					Book a 30-minutes free assessment
				</a>
			</div>
		</section>
		
	</main>
<?php get_footer(); ?>
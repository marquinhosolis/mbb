<?php
/*
Template Name: About Us Page
*/
?>

<?php get_header(); ?>
	<main class="aboutPage">
		<section class="aboutUsCover">
			<div class="container">
				<div class="aboutCoverImages">
					<div class="aboutCoverImage1 wow fadeInUp" style="background-image: url(<?php the_field('cover_image_1'); ?>);">
					<div class="content"></div>
					</div>
					<div class="aboutCoverImage2 wow fadeInUp" data-wow-delay="0.1s">
						<img src="<?php echo get_template_directory_uri(); ?>/images/wp/mind.png" alt="">
					</div>
					<div class="aboutCoverImage3 wow fadeInUp" data-wow-delay="0.2s">
						<img src="<?php echo get_template_directory_uri(); ?>/images/wp/balance.png" alt="">
					</div>
				</div>
				<div class="aboutCoverText">
					<div class="aboutCoverTextRow wow fadeInUp">
						<h1 class="pageTitle"><span>about</span><br>
							Us
						</h1>
						<p><?php the_field('cover_copy'); ?></p>
					</div>
					<div class="aboutCoverTextRow wow fadeInUp">
						<h2><?php the_field('cover_benefits_title'); ?></h2>
							<?php the_field('cover_benefits_copy'); ?>
					</div>
				</div>			
				<div class="aboutCoverImages">
					<div class="aboutCoverImage4 wow fadeInUp">
						<img src="<?php echo get_template_directory_uri(); ?>/images/wp/body.png" alt="">
					</div>
					<div class="aboutCoverImage5 wow fadeInUp" data-wow-delay="0.1s">
						<img src="<?php echo get_template_directory_uri(); ?>/images/wp/balance.png" alt="">
					</div>
					<div class="aboutCoverImage7 wow fadeInUp" data-wow-delay="0.2s" style="background-image: url(<?php the_field('cover_image_2'); ?>);">
						<div class="content"></div>
					</div>
				</div>
			</div>
		</section>
		<img src="<?php echo get_template_directory_uri(); ?>/images/intro-home-page-before.png" alt="" class="introHomePage--before">
		<section class="aboutWellness">
			<div class="container wow fadeInUp">
				<div class="aboutWellnessImage" style="background-image: url(<?php the_field('box_image'); ?>);">
					<div class="content"></div>
				</div>
				<div class="aboutWellnessCopy">
					<div class="introHomePageCard wow fadeInUp">
						<h1 class="pageTitle wow fadeInUp"><span></span><br>
							<?php the_field('box_title'); ?>
						</h1>
						<div class="introHomePageCardText wow fadeInUp" data-wow-delay="0.2s">
							<?php the_field('box_copy'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="ourServicesHomePage ourServicesAboutPage">
			<div class="container">
				<div class="ourServicesHomePageTitle">
					<div class="ourServicesHomePageTitleImage wow fadeIn" style="background-image: url(<?php the_field('what_to_expect_image'); ?>);">
						<div class="content"></div>
					</div>
					<div class="ourServicesHomePageTitleText wow fadeInUp">
						<h2 class="pageTitle"><span>what to</span><br>
							Expect
						</h2>
						<p><?php the_field('what_to_expect_copy'); ?></p>
					</div>
				</div>
				<div class="ourServicesHomePageServices">
					<div class="ourServicesHomePageService wow fadeInUp">
						<img src="<?php echo get_template_directory_uri(); ?>/images/about-icon-1.png" alt="" class="wow fadeInUp">
						<div class="ourServicesHomePageServiceText wow fadeInUp">
							<h3>
								<span><?php the_field('what_to_expect_item_1_title_prepend'); ?></span><br>
								<?php the_field('what_to_expect_item_1_title'); ?>
							</h3>
							<p><?php the_field('what_to_expect_item_1_copy'); ?></p>
						</div>
					</div>
					<div class="ourServicesHomePageService wow fadeInUp" data-wow-delay="0.1s">
						<img src="<?php echo get_template_directory_uri(); ?>/images/about-icon-2.png" alt="" class="wow fadeInUp" >
						<div class="ourServicesHomePageServiceText wow fadeInUp" data-wow-delay="0.3s">
							<h3>
								<span><?php the_field('what_to_expect_item_2_title_prepend'); ?></span><br>
								<?php the_field('what_to_expect_item_2_title'); ?>
							</h3>
							<p><?php the_field('what_to_expect_item_2_copy'); ?></p>
						</div>
					</div>
					<div class="ourServicesHomePageService wow fadeInUp" data-wow-delay="0.2s">
						<img src="<?php echo get_template_directory_uri(); ?>/images/about-icon-3.png" alt="" class="wow fadeInUp">
						<div class="ourServicesHomePageServiceText wow fadeInUp" data-wow-delay="0.4s">
							<h3>
								<span><?php the_field('what_to_expect_item_3_title_prepend'); ?></span><br>
								<?php the_field('what_to_expect_item_3_title'); ?>
							</h3>
							<p><?php the_field('what_to_expect_item_3_copy'); ?></p>
						</div>
					</div>
				</div>
				<!-- <h4 class=" wow fadeInUp">To learn more about what to expect, please visit our <a href="<?php echo site_url('/faqs/'); ?>">FAQs page.</a> </h4> -->
			</div>
		</section>
		<section class="aboutTechnology">
			<div class="container">
				<div class="aboutTechnologyTitle wow fadeInUp">
					<h2 class="pageTitle"><span>our</span><br>
							Health Technology
					</h2>
					<p><?php the_field('health_technology_copy'); ?></p>
				</div>
				<div class="aboutTechnologyWrapper">
					<div class="slider flexslider">
						<ul class="slides">
							<?php
								if( have_rows('health_technology_items') ):
									while ( have_rows('health_technology_items') ) : the_row(); ?>
										<li>
											<div class="aboutTechnologyUnique wow fadeInUp">
												<div class="aboutTechnologyUniqueImage" style="background-image: url(<?php the_sub_field('health_technology_image'); ?> );">
													<div class="content"></div>
												</div>
												<div class="aboutTechnologyUniqueText">
													<?php the_sub_field('health_technology_name'); ?> <span><?php the_sub_field('health_technology_copy'); ?></span>
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
		<section class="homeFacility">
			<div class="aboutFacilityTitle wow fadeInUp">
				<h2 class="pageTitle"><span>our</span><br>
					Facility
				</h2>
			</div>
			<div class="aboutFacilityVideoThumb" style="background-image: url(<?php the_field('video_thumbnail'); ?>);">
				<div class="content">
					<?php if( get_field('video_url') ): ?>
						<a href="#" class="aboutFacilityVideoBtn">
							<img src="<?php echo get_template_directory_uri(); ?>/images/play-video.png" alt="">
						</a>
					<?php endif; ?>
				</div>
			</div>
			<div class="aboutFacilityVideoModal">
				<div class="aboutFacilityVideoModalMask">
					<div class="aboutFacilityVideoModalBody">
						<div class="content">
							<?php the_field('video_url'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="ourServicesHomePageCta ourServicesAboutPageCta">
			<div class="container">
				<div class="ourServicesHomePageCtaImgClipPath ourServicesHomePageCtaImgClipPath--desktop wow fadeIn">
					<img src="<?php the_field('learn_more_image_1'); ?>" alt=""> 
				</div>
				<div class="ourServicesHomePageCtaText">
					<p>
						<a href="<?php echo site_url('/wellness-programs/'); ?>" class="btn hrv-shrink">Learn more about our services</a><br>
						<?php the_field('learn_more_copy'); ?>
					</p>
					<div class="ourServicesHomePageCtaImgClipPath wow fadeIn">
						<img src="<?php the_field('learn_more_image_3'); ?>" alt=""> 
					</div>
				</div>
				<div class="ourServicesHomePageCtaImgClipPath ourServicesHomePageCtaImgClipPath--desktop wow fadeIn">
					<img src="<?php the_field('learn_more_image_2'); ?>" alt=""> 
				</div>
			</div>
		</section>
		<img src="<?php echo get_template_directory_uri(); ?>/images/services-cta-before.png" alt="" class="ourServicesHomePageCtaAfter">
		<!--<section class="aboutTeam">
			<div class="container">
				<div class="aboutTeamTitle wow fadeInUp">
					<h2 class="pageTitle"><span>MEET</span><br>
						Your health team
					</h2>
					<p><?php the_field('health_team_copy'); ?></p>
				</div>
				<div class="aboutTeamWrapper wow fadeInUp">
					<h3>Leadership</h3>
					<div class="slider flexslider">
						<ul class="slides">
							<?php
								if( have_rows('leadership_members') ):
									while ( have_rows('leadership_members') ) : the_row(); ?>
										<li>
											<div class="aboutTeamMember">
												<div class="aboutTeamMemberImage" style="background-image: url(<?php the_sub_field('leadership_image'); ?>);">
													<div class="content"></div>
												</div>
												<div class="aboutTeamMemberText">
													<strong><?php the_sub_field('leadership_name'); ?> </strong>
													<?php the_sub_field('leadership_title'); ?>
												</div>
											</div>
										</li>
									<?php endwhile;
								endif;
							?>
						</ul>
					</div>
				</div>
				<div class="aboutTeamWrapper wow fadeInUp">
					<h3>health coaches</h3>
					<div class="slider flexslider">
						<ul class="slides">
							<?php
								if( have_rows('health_coaches') ):
									while ( have_rows('health_coaches') ) : the_row(); ?>
										<li>
											<div class="aboutTeamMember">
												<div class="aboutTeamMemberImage" style="background-image: url(<?php the_sub_field('health_coaches_image'); ?>);">
													<div class="content"></div>
												</div>
												<div class="aboutTeamMemberText">
													<strong><?php the_sub_field('health_coaches_name'); ?> </strong>
													<?php the_sub_field('health_coaches_title'); ?>
												</div>
											</div>
										</li>
									<?php endwhile;
								endif;
							?>
						</ul>
					</div>
				</div>
				<div class="aboutTeamWrapper wow fadeInUp">
					<h3>scientific advisors</h3>
					<div class="slider flexslider">
						<ul class="slides">
							<?php
								if( have_rows('scientific_advisors') ):
									while ( have_rows('scientific_advisors') ) : the_row(); ?>
										<li>
											<div class="aboutTeamMember">
												<div class="aboutTeamMemberImage" style="background-image: url(<?php the_sub_field('scientific_advisors_image'); ?>);">
													<div class="content"></div>
												</div>
												<div class="aboutTeamMemberText">
													<strong><?php the_sub_field('scientific_advisors_name'); ?> </strong>
													<?php the_sub_field('scientific_advisors_title'); ?>
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
		</section>-->
		<section class="homeFooterCta">
			<div class="container">
				<a href="<?php echo site_url('/schedule-assessment/'); ?> " class="btn btnBig wow fadeInUp hvr-shrink">
					book a free tour and consultation
				</a>
			</div>
		</section>
	</main>
<?php get_footer(); ?>		
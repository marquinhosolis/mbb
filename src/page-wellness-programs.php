<?php
/*
Template Name: Wellness Programs Page
*/
?>

<?php get_header(); ?>
<main class="wellnessProgramsPage">
	<section class="blogPageTitle">
		<div class="container">
			<div class="blogShowcaseTitle wow fadeInUp">
				<h1 class="pageTitle"><span>our</span><br>
					Programs
				</h1>
				<p><?php the_field('cover_copy'); ?></p>
			</div>
		</div>
	</section>
	<section class="programsIntro">
		<div class="container">
			<div class="programsIntroUnique wow fadeIn">
				<div class="programsIntroUniqueImage">
					<div class="programsIntroUniqueImageMain" style="background-image: url(<?php the_field('cover_body_balance_image'); ?>);">
						<div class="content"></div>
					</div>
					<div class="programsIntroUniqueImageAppend programsIntroUniqueImageAppend1">
						<img src="<?php echo get_template_directory_uri(); ?>/images/wp/balance.png" alt="Balance" class="animated pulse infinite slow">
					</div>
				</div>
				<div class="programsIntroUniqueText">
					<h2>BODY BALANCE</h2>
					<p><?php the_field('cover_body_balance_copy'); ?></p>
				</div>
			</div>
			<div class="programsIntroUnique wow fadeIn">
				<div class="programsIntroUniqueImage">
					<div class="programsIntroUniqueImageMain" style="background-image: url(<?php the_field('cover_mind_balance_image'); ?>);">
						<div class="content"></div>
					</div>
					<div class="programsIntroUniqueImageAppend programsIntroUniqueImageAppend1">
						<img src="<?php echo get_template_directory_uri(); ?>/images/wp/mind.png" alt="Balance" class="animated pulse infinite slow">
					</div>
				</div>
				<div class="programsIntroUniqueText">
					<h2>MIND BALANCE</h2>
					<p><?php the_field('cover_mind_balance_copy'); ?></p>
				</div>
			</div>
		</div>
	</section>
	<img src="<?php echo get_template_directory_uri(); ?>/images/intro-home-page-before.png" alt="" class="introHomePage--before">
	<section class="wellnessProgramsAll">
		<div class="container">
			
			<?php if( get_field('intro_boxes') ): ?>
				<?php while( the_repeater_field('intro_boxes') ): ?>
				
					<div class="wellnessProgramsAllCard wow fadeInUp">
						<div class="wellnessProgramsAllCardBefore" style="background-image: url(<?php the_sub_field('intro_box_image'); ?>);">
							<div class="content"></div>
						</div>
						<div class="wellnessProgramsAllCardWrapper">
							<h1 class="pageTitle wow fadeInUp"><span></span><br>
								<?php the_sub_field('intro_box_title'); ?>
							</h1>
							<div class="wellnessProgramsAllCardText wow fadeInUp" data-wow-delay="0.1s">
								<p><?php the_sub_field('intro_box_copy'); ?></p>
							</div>
						</div>
					</div>
					
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>
	<!--<section class="ourServicesHomePage">
		<div class="container">
			<div class="ourServicesHomePageTitle">
				<div class="ourServicesHomePageTitleImage wow fadeIn" style="background-image: url(<?php the_field('membership_&_packages_image'); ?>);">
					<div class="content"></div>
				</div>
				<div class="ourServicesHomePageTitleText wow fadeInUp">
					<h2 class="pageTitle"><span>MEMBERSHIP &</span><br>
						Packages
					</h2>
					<p>We’re proud to offer a variety of memberships and packages to fit your unique health goals. Individual sessions are also available. Please <a href="#">contact us here</a> to learn more..</p>
				</div>
			</div>
			<div class="ourServicesHomePageServices">
				<div class="ourServicesHomePageService wow fadeInUp">
					<img src="<?php echo get_template_directory_uri(); ?>/images/membership-icon-1.png" alt="" class="wow fadeInUp">
					<div class="ourServicesHomePageServiceText wow fadeInUp">
						<h3>
							<span><?php the_field('assessment_1_title_prepend'); ?></span><br>
							<?php the_field('assessment_1_title'); ?><br>
							<span><?php the_field('assessment_1_price'); ?></span> 
						</h3>
						<p><?php the_field('assessment_1_copy'); ?></p>
					</div>
				</div>
				<div class="ourServicesHomePageService wow fadeInUp" data-wow-delay="0.1s">
					<img src="<?php echo get_template_directory_uri(); ?>/images/membership-icon-2.png" alt="" class="wow fadeInUp" >
					<div class="ourServicesHomePageServiceText wow fadeInUp" data-wow-delay="0.3s">
						<h3>
							<span><?php the_field('assessment_2_title_prepend'); ?></span><br>
							<?php the_field('assessment_2_title'); ?><br>
							<span><?php the_field('assessment_2_price'); ?></span> 
						</h3>
						<p><?php the_field('assessment_2_copy'); ?></p>
					</div>
				</div>
				<div class="ourServicesHomePageService wow fadeInUp" data-wow-delay="0.2s">
					<img src="<?php echo get_template_directory_uri(); ?>/images/membership-icon-3.png" alt="" class="wow fadeInUp">
					<div class="ourServicesHomePageServiceText wow fadeInUp" data-wow-delay="0.4s">
						<h3>
							<span><?php the_field('assessment_3_title_prepend'); ?></span><br>
							<?php the_field('assessment_3_title'); ?><br>
							<span><?php the_field('assessment_3_price'); ?></span> 
						</h3>
						<p><?php the_field('assessment_3_copy'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>-->

	<div class="ourServicesHomePageCtaBefore" style="margin-top: 130px;">
		<img src="<?php echo get_template_directory_uri(); ?>/images/services-cta-before.png" alt="">
		<div class="ourServicesProgramsCtaBeforeBtn">
			<h2>Ready to reach your health goals?</h2>
			<a href="<?php echo site_url('/schedule-assessment/'); ?>" class="btn btnBig hrv-shrink">SCHEDULE YOUR FREE 30-MINUTE ASSESSMENT</a>
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
	<img src="<?php echo get_template_directory_uri(); ?>/images/services-cta-before.png" alt="" class="ourServicesHomePageCtaAfter">
	<section class="homeFooterCta">
		<div class="container">
			
		</div>
	</section>
</main>
<?php get_footer(); ?>		
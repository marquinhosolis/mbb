<?php
/*
Template Name: Phsyical Therapy Page
*/
?>

<?php get_header(); ?>
<main class="wellnessProgramsPage phsyicalTherapyPage">
	<section class="blogPageTitle">
		<div class="container">
			<div class="blogShowcaseTitle wow fadeInUp">
				<h1 class="pageTitle"><span>phsyical therapy</span><br>
				    Get back to your best
				</h1>
				<p>with physical therapy that’s tailored to you</p>
			</div>
		</div>
	</section>
	<section class="programsIntro">
		<div class="container">
			<div class="programsIntroUnique wow fadeIn">
				<div class="programsIntroUniqueImage">
					<div class="programsIntroUniqueImageMain" style="background-image: url(<?php the_field('intro_image'); ?>);">
						<div class="content"></div>
					</div>
					<div class="programsIntroUniqueImageAppend programsIntroUniqueImageAppend1">
						<img src="<?php echo get_template_directory_uri(); ?>/images/wp/body.png" alt="Balance" class="animated pulse infinite slow">
					</div>
				</div>
				<div class="programsIntroUniqueText">
					<p><?php the_field('intro_text'); ?></p>
				</div>
			</div>
		</div>
	</section>
	<img src="<?php echo get_template_directory_uri(); ?>/images/intro-home-page-before.png" alt="" class="introHomePage--before">
	<section class="wellnessProgramsAll">
		<div class="container">

			
			<div class="wellnessProgramsAllCard wow fadeInUp">
                <div class="wellnessProgramsAllCardBefore" style="background-image: url(<?php the_field('physical_therapy_box_image'); ?>);">
                    <div class="content"></div>
                </div>
                <div class="wellnessProgramsAllCardWrapper">
                    <h2 class="pageTitle wow fadeInUp"><span></span><br>
                        <?php the_field('physical_therapy_box_title'); ?>
                    </h2>
                    <div class="wellnessProgramsAllCardText wow fadeInUp" data-wow-delay="0.1s">
                        <p><?php the_field('physical_therapy_box_text'); ?></p>
                    </div>
                </div>
            </div>
            <div class="phsyicalTherapyPageText">
                <h3><?php the_field('physical_therapy_title'); ?></h3>
                <div>
                    <?php the_field('physical_therapy_text'); ?>
                </div>
            </div>
        </div>
	</section>
    <section class="ourServicesHomePage ourServicesAboutPage">
			<div class="container">
				<div class="ourServicesHomePageTitle">
					<div class="ourServicesHomePageTitleImage wow fadeIn" style="background-image: url(<?php the_field('physical_therapy_how_it_works_image'); ?>);">
						<div class="content"></div>
					</div>
					<div class="ourServicesHomePageTitleText wow fadeInUp">
						
                        <div class="howItWorksTestimonial">
                            <div class="howItWorksTestimonialNameText">
                                <?php the_field('physical_therapy_how_it_works_testimonial_text'); ?>”
                            </div>
                            <div class="howItWorksTestimonialName">
                                <?php the_field('physical_therapy_how_it_works_testimonial_name'); ?>
                            </div>
                        </div>
					</div>
				</div>
				<div class="blogShowcaseTitle wow fadeInUp">
                    <h3 class="pageTitle"><span></span><br>
                        How it works
                    </h3>
                    <p><?php the_field('physical_therapy_how_it_works_text'); ?></p>
                </div>
			</div>
		</section>
        <section class="ourServicesHomePage specialOffer">
            <div class="container">
                <div class="ourServicesHomePageTitle">
					<div class="ourServicesHomePageTitleImage wow fadeIn" style="background-image: url(<?php the_field('special_offer_image'); ?>);">
						<div class="content"></div>
					</div>
					<div class="ourServicesHomePageTitleText wow fadeInUp">
						<div class="blogShowcaseTitle wow fadeInUp">
                            <h1 class="pageTitle"><span>special offer</span><br>
                                $99 initial comprehensive assessment for physical therapy clients
                            </h1>
                            <p>We also offer affordable physical therapy session packages.</p>
                            <a href="<?php echo site_url('/schedule-assessment/'); ?>" class="btn hvr-shirnk">book my physical therapy assessment</a>
                        </div>
					</div>
				</div>
            </div>
        </section>


        <section class="areasExpertise">
            <div class="container">
                <div class="blogShowcaseTitle wow fadeInUp">
                    <h3 class="pageTitle"><span></span><br>
                        Areas of expertise
                    </h3>
                </div>
                <div class="areasExpertiseContent">
                    <ul>
                        <?php
                            if( have_rows('areas_of_expertise_list') ): ?>
								<ul>
                                    <?php 
                                        while( have_rows('areas_of_expertise_list') ): the_row();?>
                                            <li> 
                                                <?php the_sub_field('expertise_area_item'); ?>
                                                <?php
                                                    if( have_rows('expertise_area_subitem_list') ): ?>
                                                        <ul>
                                                        <?php 
                                                            while( have_rows('expertise_area_subitem_list') ): the_row();?>
                                                                <li> <?php the_sub_field('expertise_area_subitem'); ?></li>
                                                            <?php endwhile; ?>
                                                            </ul>
                                                    <?php endif; 
                                                ?>
                                            </li>
                                        <?php endwhile; 
                                    ?>
                                </ul>
                            <?php endif;  
                        ?>
                    </ul>
                </div>
            </div>
        </section>
        
        <img src="<?php echo get_template_directory_uri(); ?>/images/intro-home-page-before.png" alt="" class="introHomePage--before">  
        <section class="wellnessProgramsAll associations">
		<div class="container">
            <div class="phsyicalTherapyPageText">
                <div class="blogShowcaseTitle wow fadeInUp">
                    <h1 class="pageTitle"><span>your trained, trusted</span><br>                              
                    Physical Therapy Team
                    </h1>
                    <p><?php the_field('associations_text'); ?></p>
                    <a href="#" class="btn hvr-shrink">Meet the team</a>
                </div>
            </div>
            <div class="wellnessProgramsAllCard wow fadeInUp associationsLogos">
                <?php
                    if( have_rows('associations_logos') ): 
                        while( have_rows('associations_logos') ): the_row();?>
                            <img src="<?php the_sub_field('associations_image'); ?>" alt=""><br>
                        <?php endwhile;     
                    endif; 
                ?>
            </div>
            
        </div>
	</section>

    <section class="ourServicesHomePage ourServicesAboutPage Testimonial">
        <div class="container">
            <div class="ourServicesHomePageTitle">
                <div class="ourServicesHomePageTitleImage wow fadeIn" style="background-image: url(<?php the_field('testimonial_image'); ?>);">
                    <div class="content"></div>
                </div>
                <div class="ourServicesHomePageTitleText wow fadeInUp">
                    
                    <div class="howItWorksTestimonial">
                        <div class="howItWorksTestimonialNameText">
                            <?php the_field('testimonial_text'); ?>”
                        </div>
                        <div class="howItWorksTestimonialName">
                            <?php the_field('testimonial_name'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="equipment">
        <div class="container">
            <div class="blogShowcaseTitle wow fadeInUp">
                <h3 class="pageTitle"><span>the most advanced</span><br>
                    Equipment and Technology
                </h3>
                <p><?php the_field('equipment_text'); ?></p>
                <a href="#" class="btn hvr-shrink">Learn more</a>
            </div>
            <h4><?php the_field('equipment_end_text'); ?></h4>
        </div>
    </section>
    
    <section class="ourServicesHomePage specialOffer specialOffer2">
        <div class="container">
            <div class="ourServicesHomePageTitle">
                <div class="ourServicesHomePageTitleImage wow fadeIn" style="background-image: url(<?php the_field('special_offer_image_2'); ?>);">
                    <div class="content"></div>
                </div>
                <div class="ourServicesHomePageTitleText wow fadeInUp">
                    <div class="blogShowcaseTitle wow fadeInUp">
                        <h1 class="pageTitle"><span>special offer</span><br>
                            $99 initial comprehensive assessment for physical therapy clients
                        </h1>
                        <p>We also offer affordable physical therapy session packages.</p>
                        <a href="<?php echo site_url('/schedule-assessment/'); ?>" class="btn hvr-shirnk">book my physical therapy assessment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!-- <div class="ourServicesHomePageCtaBefore" style="margin-top: 130px;">
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
	</section> -->
</main>
<?php get_footer(); ?>		
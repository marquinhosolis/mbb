<?php
/*
Template Name: Resources Page
*/
?>

<?php
    $limit = 4;
    if(isset($_GET['cat'])){
        $cat = $_GET['cat'];
    }
    if(isset($_GET['search'])){
        $search = $_GET['search'];
    }
    if(isset($_GET['all'])){
        $posts = '-1';
    }else{
        $posts = $limit;
    }
?>
<?php get_header(); ?>
<main class="faqsPage">
    <section class="blogPageTitle">
        <div class="container">
            <div class="blogShowcaseTitle wow fadeInUp">
                <h2 class="pageTitle"><span>Mind Body Balance</span><br>
					Resources
				</h2>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="blogPageForms">
                <form action="" method="get" class="wow fadeInLeft">
                    <div class="blogPageFormsSearchWrapper">
                        <input type="search" name="search" placeholder="Search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </form>
                <div class="selectWrapper wow fadeInRight">
                    <form action="" method="get">
                        <?php
                            wp_dropdown_categories( array(
                                'show_option_all'    => 'Filter by Category',
                                'orderby'            => 'name', 
                                'hierarchical'       => 1, 
                                'depth'              => 1,
                            ) );
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
	<section class="resourcesShowcase">
		<div class="container">
			<?php
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

				$args = array(
					'post_type' => array( 'cpt_resources' ),
					'posts_per_page' => $posts,
					'paged'          => $paged,
					'cat'            => $cat,
					's'              => $search
				);

				$the_query = new WP_Query( $args );
				
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post();?>
							<article class="resourcesShowcaseUnique wow fadeInUp">
								<div class="resourcesShowcaseUniqueThumbWrapper">
									<div class="resourcesShowcaseUniqueThumb" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/wp/resources-thumb.png)">
										<div class="content"></div>
									</div>
									<div class="resourcesShowcaseUniqueThumbIcon">
										<img src="<?php echo get_template_directory_uri(); ?>/images/free-guide-after.png" alt="">
									</div>
								</div>
								<div class="resourcesShowcaseUniqueText">
									<h3><?php the_title(); ?></h3>
									<p><?php the_excerpt(); ?></p>
									<?php echo do_shortcode('[formidable id=4]'); ?>
								</div>
							</article>
					<?php }
				} 
			?>
		</div>
	</section>
	<div class="faqsPagination">
		<?php
		$big = 999999999; // need an unlikely integer

		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'prev_text'          => __('<i class="fa fa-angle-left" aria-hidden="true"></i>'),
			'next_text'          => __('<i class="fa fa-angle-right" aria-hidden="true"></i>'),
			'total' => $the_query->max_num_pages
		) );
		wp_reset_postdata();
		?>
	</div>
</main>
	
<?php get_footer(); ?>
	
<?php
/*
Template Name: Blog Page
*/
?>
<?php
    $limit = 6;
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
<main class="blogPage">
    <section class="blogPageTitle">
        <div class="container">
            <div class="blogShowcaseTitle wow fadeInUp">
                <h2 class="pageTitle"><span>Mind Body Balance</span><br>
                    Blog
                </h2>
                <p>Stay informed and be inspired to live a happy, healthy lifestyle with articles and guidance from our wellness team. </p>
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

    <section class="blogShowcase">
        <div class="container">
            <div class="blogShowcaseArticles">
                <?php
                    $args = array(
                        'post_type' => array( 'post' ),
                        'posts_per_page' => $posts,
                        'cat'            => $cat,
                        's'              => $search
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
                <?php 
            if($query->found_posts > $limit && !isset($_GET['all'])){ ?>
                <div class="loadMore">
                    <a href="<?php the_permalink(); ?>?all=1" class="btn btnBig hvr-shrink">VIEW MORE BLOGS</a>
                </div>
            <?php }
        ?>
            </div>
            
        </div>
    </section>
</main>
	
<?php get_footer(); ?>

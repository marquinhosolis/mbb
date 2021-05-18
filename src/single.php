<?php
/*
Template Name: Single Page
*/
?>

<?php get_header(); ?>
    <main class="singlePost">
        <div class="container">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <div class="singlePostWrapper">
                    <div class="singlePostImage" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                        <div class="content"></div>
                    </div>
                    <h1><?php the_title(); ?></h1>
                    <div class="singlePostImageDate">
                        Posted on <span><?php the_date(); ?></span> | <?php the_category(); ?>
                    </div>
                    <?php the_content(); ?>
                </div>
                <div class="postAfter">
                    <div class="postBack">
                        <a href="<?php echo site_url('/blog/'); ?>">
                            <i class="fa fa-long-arrow-left" aria-hidden="true"></i> Back to all blogs
                        </a>
                    </div>
                    <div class="postShare">
                        share this blog <br>
                        <a href="https://twitter.com/intent/tweet?text=<?php the_permalink(); ?>" target="_blank">
                            <i class="fa fa-twitter-square" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=&summary=&source=">
                            <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="postNav">
                        <?php
                            $prevPost = get_previous_post();
                            $prevThumbnail = get_the_post_thumbnail_url( $prevPost->ID );
                            $prevLink = get_permalink( $prevPost->ID );
                            
                            if($prevPost){ ?>
                                <div class="postPrevious hvr-shrink" style="background-image: url(<?php echo $prevThumbnail; ?>)">
                                    <a class="previous" href="<?php echo $prevLink ; ?>">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i> Previous Blog
                                    </a>
                                </div>
                            <?php }
                        ?>
                        <?php
                            $nextPost = get_next_post();
                            $nextThumbnail = get_the_post_thumbnail_url( $prevPost->ID );
                            $nextLink = get_permalink( $nextPost->ID );
                            
                            if($nextPost){ ?>
                                <div class="postNext hvr-shrink" style="background-image: url(<?php echo $nextThumbnail; ?>)">
                                    <a class="previous" href="<?php echo $nextLink ; ?>">
                                        Next Blog <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            <?php }
                        ?>
                    </div>
                </div>
                
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </main>
<?php get_footer(); ?>
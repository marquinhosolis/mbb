<?php
    //MENUS
    register_nav_menus( array(
        'main_menu'    => 'Main Menu',
    ) );

    // POST THUMBNAILS
    add_theme_support( 'post-thumbnails' );

    // EXCERPT SIZE
    function mytheme_custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );

    function new_excerpt_more( $more ) {
        return '';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    // REGISTER FAQS CUSTOM POST
    function create_post_type() {
        register_post_type( 'cpt_faqs',
            array(
                'labels' => array(
                    'name' => __( 'Faqs' ),
                    'singular_name' => __( 'Faq' )
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon'   => 'dashicons-megaphone',
                'menu_position' => 5,
            )
        );
        register_post_type( 'cpt_resources',
            array(
                'labels' => array(
                    'name' => __( 'Resources' ),
                    'singular_name' => __( 'Resource' )
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon'   => 'dashicons-media-document',
                'menu_position' => 5,
                'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
            )
        );
    }
    add_action( 'init', 'create_post_type' );
?>
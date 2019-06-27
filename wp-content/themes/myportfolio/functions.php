<?php
    function mytheme_post_thumbnails() {
        add_theme_support( 'post-thumbnails' );
        add_post_type_support('page', 'excerpt');
    }
    add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

    function myportfolio_widgets_init() {
        register_sidebar(array(
            'name' => __('right-sidebar', 'myportfolio'),
            'id' => 'sidebar-1',
            'before_widget' => '<aside id="%1$s" class="widget %2$s"',            
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',                 
        ));
    }
    add_action('widgets_init', 'myportfolio_widgets_init');

?>


<?php
/*
Bubble Tea theme functions and definitions
*/

if( !function_exists('bt_setup')) : 
    function bt_setup() 
    {
        /*
            * add theme support
        */

        // featured image
        add_theme_support( 'post-thumbnails' );

        // featured logo
        add_theme_support( 'custom-logo' , array(

            'height' => 250,
            'width' => 250

        ));

        // register menus
        register_nav_menus(array(
            'primary-menu' => _('Primary'),
            'footer-menu' => _('Footer'),
            'social-menu' => _('Social')
        ));
    }
endif ;
add_action('after-setup_theme', 'bt_setup');

if ( !function_exists('bt_enqueue_scripts')) :
    function bt_enqueue_scripts()
    {
                //enqueue styles
                wp_enqueue_style('bt-style', get_stylesheet_uri());
                wp_enqueue_style('bt-nav-style', get_template_directory_uri() . '../assets/css/nav.css');
        
                //enqueue scripts
                wp_enqueue_script('bt-main', get_template_directory_uri() . '../assets/js/main.js');
    }
endif ;
add_action('wp_enqueue_scripts', 'bt_enqueue_scripts');

if ( !function_exists('bt_widgets_init')) :
    function bt_widgets_init()
    {
        register_sidebar(array(
            'name'          => __( 'Sidebar name', 'theme_text_domain' ),
            'id'            => 'sidebar-1',
            'description'   => 'Add widgets here'
        ));
    }
endif ;
add_action('widgets_init', 'bt_widgets_init');
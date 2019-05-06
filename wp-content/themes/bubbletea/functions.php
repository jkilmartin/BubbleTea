<?php
/*
Bubble Tea theme functions and definitions
*/

if( !function_exists('bt_setup')) : 
    function bt_setup() 
    {
        //enqueue styles
        wp_enqueue_style('bt-style', get_stylesheet_uri());

        //enqueue scripts
        wp_enqueue_script('dance-main', get_template_directory_uri() . '/js/main.js');

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
            'primary-menu' => _('Primary')
        ));
    }
endif ;
add_action('after-setup_theme', 'bt-setup');
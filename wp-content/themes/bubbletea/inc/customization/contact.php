<?php
$wp_customize->add_section('bt_contact', array(
        'title' => __('Contact'),
        'priority' => 30 
    ));

    $wp_customize->add_setting('bt_contact_blurb_setting', array(
        'capability' => 'edit_theme_options',
        'default' => __('We\'d love to hear from you')
    ));
    
    $wp_customize->add_control('bt_contact_blurb_control', array(
        'type' => 'textarea',
        'section' => 'bt_contact',
        'settings' => 'bt_contact_blurb_setting',
        'label' => __('Blurb')
    ));
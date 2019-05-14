<?php get_header(); ?>
<h1>Hello</h1>


<?php 
$blurb = get_theme_mod('bt_contact_blurb_setting');
if($blurb || is_customize_preview()):
echo $blurb;
endif;

get_footer(); ?>
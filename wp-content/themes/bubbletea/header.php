<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head <?php do_action('add_head_attributes'); ?>>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>> 

<header>
    <nav>
        <?php wp_nav_menu(array('menu_id' => 'Primary')); ?>
    </nav>

    <section>
        <div>
            <?php the_custom_logo(); ?>
        </div>
    </section>
</header>
<?php get_header(); ?>
<h1>Hello</h1>
<?php 

if(have_posts()) :
    while(have_posts()): the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    <?php endwhile;
else : ?>
    <p>Sorry, no posts</>
<?php endif;

get_footer(); ?>
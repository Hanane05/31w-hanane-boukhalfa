<?php
/**
 * Mon modèle par défaut 31w
 *
 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mon_31w
 */
get_header(); ?>
<h1> Mon premier modèle Wordpress</h1>
<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <p><?php the_title(); ?></p>
        <p><?php the_content(); ?></p>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

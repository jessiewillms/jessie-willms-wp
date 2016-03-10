<?php
/*
	Template Name: homepage
*/
get_header(); ?>
	
<?php get_template_part('template-parts/about') ?>
<?php get_template_part('template-parts/skills'); ?>
<?php get_template_part('template-parts/services'); ?>
<?php get_template_part('template-parts/portfolio'); ?>


<?php get_template_part('template-parts/work'); ?>
<?php get_template_part('template-parts/testimonials'); ?>
<?php get_template_part('template-parts/instagram'); ?>

<?php
get_sidebar();
get_footer();
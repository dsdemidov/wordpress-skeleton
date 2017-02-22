<?php
/**
 * Front page template file
 */
?>

<?php get_header(); ?>

<?php motoPressSlider('slider-frontpage'); ?>

<?php get_template_part('page-templates/content','main'); ?>

<?php get_footer(); ?>
<?php
/**
 * Template Name: Gallery Page
 *
 * Template for Brandon's portfolio.
 *
 * @package understrap
 */

get_header(); ?>

<div class="container">

<img src=" <?php echo get_field('idwpub_img')['url']; ?> " alt="">

</div>

<?php get_footer(); ?>

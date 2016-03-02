<?php
/**
 * The template for displaying contact page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 *
 * Template Name: Contact
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

  <div id="primary" class="site-content">
    <div class="contact-container">
      <div id="content" role="main">
        <?php while ( have_posts() ) : the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>

      </div>
      <!-- #content -->
    </div>
  </div>
  <!-- #primary -->

  <?php get_footer(); ?>
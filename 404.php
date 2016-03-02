<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>


  <div id="primary" class="content-area">
    <div class="error-container">
      <div id="content" class="site-content" role="main">

        <div class="error-image">
          <img title="404 Page Image" src="<?php bloginfo('stylesheet_directory'); ?>/img/404-image.png" alt="404 Not Found">
        </div>

        <header class="page-header">
          <h1 class="page-title"><?php _e( 'Whoops, Took a Wrong Turn...', 'accelerate_theme' ); ?></h1>
        </header>

        <div class="page-content">
          <p>
            <?php _e( 'Sorry, this page no longer exists, never existed or has been moved. We feel like complete jerks for totally misleading you.', 'accelerate_theme' ); ?>
          </p>
          <p>
            <?php _e( 'Feel free to take a look around our <a title="Our Blog" href="http://localhost:8080/wordpress/blog/">blog</a> or some of our featured <a title="Featured Work" href="http://localhost:8080/wordpress/work/">work</a>.', 'accelerate_theme' ); ?>
          </p>


        </div>
        <!-- .page-content -->

      </div>
      <!-- #content -->
    </div>
    <!-- .error-container -->
  </div>
  <!-- #primary -->

  <?php

get_footer();
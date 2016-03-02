<?php
/**
 * The template for displaying case studies
 *
 *
 * Template Name: Services
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */



get_header(); ?>

  <section class="home-page">
    <div class="site-content">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class='about-hero'>
          <?php echo the_content(); ?>
        </div>
        <?php endwhile; // end of the loop. ?>
    </div>
    <!-- .site-content -->
  </section>
  <!-- .home-page -->


  <div id="primary" class="site-content">
    <div class="case-study-container">
      <div id="content" role="main">
        <?php while ( have_posts() ) : the_post();
        $about = get_field('about');
        $service_1 = get_field('service_1');
        $service_2 = get_field('service_2');
        $service_3 = get_field('service_3');
        $service_4 = get_field('service_4');
        $ser_title_1 = get_field('service_title_1');
        $ser_title_2 = get_field('service_title_2');
        $ser_title_3 = get_field('service_title_3');
        $ser_title_4 = get_field('service_title_4');
        $ser_image_1 = get_field('service_image_1');
        $ser_image_2 = get_field('service_image_2');
        $ser_image_3 = get_field('service_image_3');
        $ser_image_4 = get_field('service_image_4');
        $size = 'full';
      ?>


          <section class="about">
            <div class="services-intro">
              <h2><?php the_title(); ?></h2>
              <p>
                <?php echo $about; ?>
              </p>

            </div>

          </section>

          <section class="about-services">


            <div class="service-one">
              <?php if($ser_image_1) { ?>
                <?php echo wp_get_attachment_image($ser_image_1, $size); ?>
                  <?php } ?>
              <h2><?php echo $ser_title_1; ?></h2>
<p>
  <?php echo $service_1; ?>
</p>
            </div>

            <div class="service-two">
              <h2><?php echo $ser_title_2; ?></h2>
              <p>
                <?php echo $service_2; ?>
              </p>
              <?php if($ser_image_2) { ?>
                <?php echo wp_get_attachment_image($ser_image_2, $size); ?>
                  <?php } ?>
            </div>

            <div class="service-three">
              <?php if($ser_image_3) { ?>
                <?php echo wp_get_attachment_image($ser_image_3, $size); ?>
                  <?php } ?>
                    <h2><?php echo $ser_title_3; ?></h2>
                    <p>
                      <?php echo $service_3; ?>
                    </p>

            </div>

            <div class="service-four">
              <h2><?php echo $ser_title_4; ?></h2>
              <p>
                <?php echo $service_4; ?>
              </p>
              <?php if($ser_image_4) { ?>
                <?php echo wp_get_attachment_image($ser_image_4, $size); ?>
                  <?php } ?>

            </div>

          </section>
          <!-- .about-services -->

          <section class="about-footer">
            <h2>Interested in working with us?</h2>
            <a class="button" href="<?php echo home_url(); ?>/contact">Contact Us</a>
          </section>
          <!-- .about-footer -->
          <?php endwhile; // end of the loop. ?>
      </div>
      <!-- #content -->
    </div>
    <!-- .case-study-container -->
  </div>
  <!-- #primary -->

  <?php get_footer(); ?>
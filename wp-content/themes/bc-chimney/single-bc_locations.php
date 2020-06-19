<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
get_header();
global $post;
?>
<main>
    <?php get_template_part( 'page-templates/common/bc-banner-section' ); ?>
    <div class="container-fluid m-0 py-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-8 subpage_content">
                  <h1><?php the_title()?></h1>
                  <?php 
                  if ( have_posts() ) :
                      while ( have_posts() ) :  the_post();
                        the_content();
                    endwhile;
                  endif;
                  ?>
              </div>
              <div class="col-lg-4 pl-lg-3">
                <?php get_template_part( 'sidebar-templates/sidebar-subpagerightsidebar' ); ?>
              </div>
          </div>
      </div>
  </div>
    <!--  Include Heating Services Features file here -->
    <?php get_template_part( 'page-templates/common/experience-the-chimney' ); ?>
</main>
<?php get_footer();?>
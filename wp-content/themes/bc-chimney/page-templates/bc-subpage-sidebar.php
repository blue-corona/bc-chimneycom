<?php
/**
 * Template Name: SubPage-Siderbar Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
global $post;
?>
<main>


 <?php get_template_part( 'page-templates/common/bc-banner-section' ); ?> 
    

        <div class="container-fluid">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-8 subpage_content">
                     <h1><?php the_title()?></h1>
                       <?php 
                        if ( have_posts() ) : 
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile;
                        endif;
                        ?>
                                    
                    </div>

              <div class="col-md-4">
              <?php get_template_part( 'sidebar-templates/sidebar-subpagerightsidebar' ); ?>
                    </div>
 
                    <!-- sidebar end -->
                </div>
            </div>
        </div>
      
        <!--  experience-the-chimney -->

      <?php get_template_part( 'page-templates/common/experience-the-chimney' ); ?> 

</main>

<?php get_footer();?>

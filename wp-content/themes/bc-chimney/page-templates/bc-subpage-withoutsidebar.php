<?php
/**
 * Template Name: SubPage Without sidebar Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

<main>
    <?php get_template_part( 'page-templates/common/bc-banner-section' ); ?> 
    <!-- The Content Starts -->
    
    <?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>


    <!-- The Content ends --> 

    <!--  Include Heating Services Features file here -->
    <?php get_template_part( 'page-templates/common/experience-the-chimney' ); ?>
</main>
<?php get_footer();?>
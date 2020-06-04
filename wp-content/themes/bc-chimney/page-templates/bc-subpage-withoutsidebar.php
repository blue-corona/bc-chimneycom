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
       <div class="container-fluid">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-12 subpage_content">

    <?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    endif;
    ?>

</div>
</div>
</div>
</div>

    <!-- The Content ends --> 

    <!--  Include Heating Services Features file here -->
    <?php get_template_part( 'page-templates/common/experience-the-chimney' ); ?>
</main>
<?php get_footer();?>
<?php
/**
 * Template Name: styleguide Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

<main class="pt-5 mt-5">
    <div class="container-fluid px-0 m-0 mt-5">
      <div class="container">
        <div class="row no-gutters">
            <div class="col-12">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_header.png" class="img-fluid" alt="Site-Logo">
            </div>
            <div class="col-12">
                <div class="d-inline-block mr-2 p-98 bc_color_secondary_bg"></div>
                <div class="d-inline-block mr-2 p-98 bc_color_tertiary_bg"></div>
                <div class="d-inline-block mr-2 p-98 bc_color_primary_bg"></div>
                <div class="d-inline-block mr-2 p-98 bc_color_quaternary_bg"></div>
            </div>            
        </div>
      </div>
    </div>
</main>
<?php get_footer();?>
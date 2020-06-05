<?php
/**
 * Template Name: HomePage Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();
?>

  <main role="main">
    <?php 
        if(bc_get_theme_mod('bc_theme_home_options', 'bc_hero_type', false, 'background_image') == 'background_image'){
            get_template_part( 'page-templates/hero-section/bc-hero-banner' );
        }else if(bc_get_theme_mod('bc_theme_home_options', 'bc_hero_type', false, 'image_slider') == 'image_slider'){
            get_template_part( 'page-templates/hero-section/bc-hero-swiper' );
        }
        else if(bc_get_theme_mod('bc_theme_home_options', 'bc_hero_type', false, 'video') == 'video'){
            get_template_part( 'page-templates/hero-section/bc-hero-video' );
        }
    ?>
 <script>
    jQuery(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        jQuery(".collapse.show").each(function(){
            jQuery(this).prev(".card-header").find("svg").addClass("fa-minus-circle").removeClass("fa-plus-circle");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        jQuery(".collapse").on('show.bs.collapse', function(){
            jQuery(this).prev(".card-header").find("svg").removeClass("fa-plus-circle").addClass("fa-minus-circle");
        }).on('hide.bs.collapse', function(){
            jQuery(this).prev(".card-header").find("svg").removeClass("fa-minus-circle").addClass("fa-plus-circle");
        });
    });
</script>

    <!-- service section #Trusted Chimney Company (desktop/mobile)--->
     <?php get_template_part( 'page-templates/common/trusted-chimney-company' ); ?>
      <!-- End of service section #Trusted Chimney Company (desktop/mobile)--->

    <!-- Gas Furnace & Fireplace section--->
    <?php get_template_part( 'page-templates/common/gas-furnace-&-fireplace' ); ?>
   
<!-- End Gas Furnace & Fireplace -->

    <!-- experience section--->
   <?php get_template_part( 'page-templates/common/experience-the-chimney' ); ?>

    <!-- inspection section--->
   
    <div class="container-fluid py-5 inspection">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center px-0 px-md-15">
                    
                      <?php 
                        if ( have_posts() ) : 
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile;
                        endif;
                        ?>
                    <!-- <h1 class="mb-3 expert_title">Expert Chimney & Fireplace Repairs and <span class="d-none d-md-inline">Service</span></h1>
                    <h2 class="bc_color_primary">Bonded, Licensed and Insured</h2>
                    <hr>
                    <p class="mb-4">Chimney.com brings modern, innovative venting solutions while never losing the time standing traditions taught by the chimney and masonry professionals before us. Chimney.com carries warmth, joy and a sense of comfort to every house we step into. Chimney.com offers complete chimney and fireplace repairs and services.</p>
                    <p class="mb-4">Since 1989 Chimney.com has provided chimney services for commercial and residential clients. A Yearly chimney inspection, when performed properly, can intercept many health and safety hazards caused by deteriorating chimney systems. It keeps your home and family safe! <span class="d-none d-md-inline">Chimney.com is a fully licensed and insured company that offers a complete line of chimney services. We guarantee the quality of our work and can provide numerous references, both commercial and residential.</span></p>
                    <p class="bc_font_default bc_text_bold d-none d-md-block">Get a chimney inspection today!</p>
                    <div id="read_more" class="collapse mb-2 text-left text-md-center d-md-none text-center">
                        <p>Chimney.com is a fully licensed and insured company that offers a complete line of chimney services. We guarantee the quality of our work and can provide numerous references, both commercial and residential.</p>
                        <p class="bc_font_default bc_text_bold">Get a chimney inspection today!</p>
                    </div>
                    <a class="bc_text_20 bc_line_height_30 no_hover_underline bc_text_normal bc_toggle_content bc_font_alt_4" href="#" data-toggle="#read_more"><span class="bc_color_secondary bc_color_secondary_hover">Read More</span> <i class="fal fa-plus bc_color_secondary bc_text_20 bc_line_height_30 bc_text_normal" aria-hidden="true"></i> </a> -->

                </div>
            </div>
        </div>
    </div>

    <!-- map section -->
     <?php get_template_part( 'page-templates/common/proudly-serving' ); ?>
  
    <!-- testimonial section --->
    <?php echo do_shortcode('[bc-testimonial]');?>
<!-- testimonial end -->

<!--  start affiliations -->

  <?php echo do_shortcode ( '[bc-affiliation]');?>
  
  <?php echo do_shortcode ( '[bc-affiliation-mobile]');?>
<!--  end affiliations -->
</main>
<script>
    jQuery(document).ready(function(){
    jQuery(".hide_div").hide();
    jQuery("#minus").toggle();
    jQuery(".abc").click(function(){
        jQuery("#minus").toggle();
        jQuery("#plus").toggle();
        jQuery(".hide_div").toggle(500);
    });
});


// var swiper = new Swiper('.affiliations_swiper', {
//       slidesPerView: 6,
//       spaceBetween: 30,
//       slidesPerGroup: 1,
//       pagination: {
//         el: '.affiliations_pagination',
//         clickable: true,
//       },
//       breakpoints: {
//         640: {
//           slidesPerView: 3,
//           spaceBetween: 20,
//           slidesPerGroup: 1,
//         },
//         768: {
//           slidesPerView: 3,
//           spaceBetween: 40,
//           slidesPerGroup: 1,
//         },}
        
//     });
</script>
<?php get_footer(); ?>

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
    <?php 
    if ( have_posts() ) : 
    	while ( have_posts() ) : the_post();
			the_content();
		endwhile;
	endif;
	?>

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
    <div class="container-fluid testimonial pb-5" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/bricks_bg.jpg')">
        <div class="container text-center py-4">
            <div class="row">
                <div class="col-md-12 px-0 px-md-15">
                    <div class=" text-center mb-4">
                        <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
                        <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
                        <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
                        <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
                        <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
                    </div>
                    <h2 class="mb-3 px-md-0 px-4 bc_color_primary">What Your Neighbors Have to Say</h2>
                    <div class="position-relative mt-4">
                        <div class="swiper-container testimonial_swiper">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                    <div class="testimonial_inner position-relative bg-white p-4">
                                       <h7 class="h7 bc_sm_text_16 d-lg-block d-none">We love our new fireplace in the entrance of our office. The final result is really so welcoming and comforting I enjoy seeing it everyday! Thank you for all your hard work!</h7>
                                       <p class="d-lg-none d-block">We love our new fireplace in the entrance of our office. The final result is really so welcoming and comforting I enjoy seeing it everyday! Thank you for all your hard work!</p>
                                       <span class="bc_text_16 bc_font_alt_2 bc_letter_spacing_1 bc_line_height_0 bc_text_bold">James G, RSC</span>
                                    </div>
                              </div>
                              <div class="swiper-slide">
                                    <div class="testimonial_inner position-relative bg-white p-4">
                                       <h7 class="h7 bc_sm_text_16 d-lg-block d-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud...</h7>
                                       <p class="d-lg-none d-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud...</p>
                                       <span class="bc_text_16 bc_font_alt_2 bc_letter_spacing_1 bc_line_height_0 bc_text_bold">Name A, VA </span>
                                    </div>
                              </div>
                              <div class="swiper-slide">
                                    <div class="testimonial_inner position-relative bg-white p-4">
                                       <h7 class="h7 bc_sm_text_16 d-lg-block d-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quisnostrud...</h7>
                                       <p class="d-lg-none d-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quisnostrud...</p>
                                       <span class="bc_text_16 bc_font_alt_2 bc_letter_spacing_1 bc_line_height_0 bc_text_bold">Name B, MD</span>
                                    </div>
                              </div>
                              <div class="swiper-slide">
                                    <div class="testimonial_inner position-relative bg-white p-4">
                                       <h7 class="h7 bc_sm_text_16 d-lg-block d-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud...</h7>
                                       <p class="d-lg-none d-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud...</p>
                                       <span class="bc_text_16 bc_font_alt_2 bc_letter_spacing_1 bc_line_height_0 bc_text_bold">Name A, VA </span>
                                    </div>
                              </div>
                              <div class="swiper-slide">
                                    <div class="testimonial_inner position-relative bg-white p-4">
                                       <h7 class="h7 bc_sm_text_16 d-lg-block d-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quisnostrud...</h7>
                                       <p class="d-lg-none d-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quisnostrud...</p>
                                       <span class="bc_text_16 bc_font_alt_2 bc_letter_spacing_1 bc_line_height_0 bc_text_bold">Name B, MD</span>
                                    </div>
                              </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination testimonial_pagination d-md-none d-block"></div>
                        
                        </div>
                        <!-- Add Arrows -->
                        <div class="testimonial_buttons d-none d-md-block">
                            <div class="swiper-button-next testimonial_next  bc_text_16 bc_line_height_0"><i class="fas fa-chevron-right bc_text_16 bc_line_height_0"></i></div>
                            <div class="swiper-button-prev testimonial_prev bc_text_16 bc_line_height_0"><i class="fas fa-chevron-left bc_text_16 bc_line_height_0"></i></div>
                        </div>
                        
                    </div>

                </div>
                <div class="col-md-12 text-center mt-3"><a href="#" class="btn btn-primary text-uppercase w-auto mt-4">Read our reviews</a></div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white affiliations_section py-5">
        <div class="container">
            <div class="row d-lg-flex d-none align-items-center">
                <div class="col-md-2 text-center">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/AL_2017.png">
                    </a>
                </div>
                <div class="col-md-2 text-center">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/AL_2018.png">
                    </a>
                </div>
                <div class="col-md-2 text-center">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/AL_2019.png">
                    </a>
                </div>
                <div class="col-md-2 text-center">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/homeadvisor2.png">
                    </a>
                </div>
                <div class="col-md-2 text-center">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/homeadvisor1.png">
                    </a>
                </div>
                <div class="col-md-2 text-center">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wssc.png">
                    </a>
                </div>
            </div>
            <div class="row d-lg-none d-block">
                <div class="col-md-12">
                    <div class="swiper-container affiliations_swiper">
                        <div class="swiper-wrapper d-flex align-items-center">
                            <div class="swiper-slide text-center">
                                <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/AL_2017.png">
                                </a>
                            </div>
                            <div class="swiper-slide text-center">
                                <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/AL_2018.png">
                                </a>
                            </div>
                            <div class="swiper-slide text-center">
                                <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/AL_2019.png">
                                </a>
                            </div>
                            <div class="swiper-slide text-center">
                                <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/homeadvisor2.png">
                                </a>
                            </div>
                            <div class="swiper-slide text-center">
                                  <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/homeadvisor1.png">
                                </a>
                            </div>
                            <div class="swiper-slide text-center">
                                <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wssc.png">
                                </a>
                            </div>
                        </div>
                        
                    </div>   
                    <!-- Add Pagination -->
                    <div class="swiper-pagination affiliations_pagination d-md-none d-block"></div>                 
                </div>
            </div>
        </div>
    </div>

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

var swiper = new Swiper('.testimonial_swiper', {
      slidesPerView: 3,
      spaceBetween: 50,
      slidesPerGroup: 1,

      loop: true,
      loopFillGroupWithBlank: true,
      autoplay: {
        delay: 2000,
      },
      pagination: {
        el: '.testimonial_pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.testimonial_next',
        prevEl: '.testimonial_prev',
      },
      breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        768: {
          slidesPerView: 1,
          spaceBetween: 0,
        },}
});

var swiper = new Swiper('.affiliations_swiper', {
      slidesPerView: 6,
      spaceBetween: 30,
      slidesPerGroup: 1,
      pagination: {
        el: '.affiliations_pagination',
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 3,
          spaceBetween: 20,
          slidesPerGroup: 1,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
          slidesPerGroup: 1,
        },}
        
    });
</script>
<?php get_footer(); ?>

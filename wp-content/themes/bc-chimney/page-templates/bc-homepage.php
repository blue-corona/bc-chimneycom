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

    <!-- service section--->
    <div class="container-fluid home_services bc_home_section_bg d-none d-md-block" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/bricks_bg.jpg')">
        <div class="container text-center pb-5">
            <div class="row pt-5">
                <div class="col-md-12">
                    <h4>Your #1 Trusted Chimney Company</h4>
                    <span class="bc_font_default bc_text_35 bc_letter_spacing_normal bc_color_primary bc_line_height_45 bc_text_light">Servicing the DMV Since 1989</span>
                </div>
            </div>
            <div class="row pb-5 pt-5">
                <div class="col-md-3">
                    <div class="bg-white sevice_wrapper pt-5 pb-4 position-relative">
                        <div class="service_content position-absolute">
                            <p class="bc_text_16 bc_line_height_24 text-white p-3">It is recommended to have your chimney system inspected annually for safety regardless of frequency of use. Water damage is a chimney’s number one enemy and can happen at any time.</p>
                            
                        </div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/glass_icon.svg" class="mb-4">
                        <h5 class="mb-4">Professional<br>Inspections</h5>
                        <a href="#" class="bc_text_16 bc_font_alt_2 bc_letter_spacing_0 bc_line_height_28 bc_color_brown bc_text_semibold learn_more position-relative">Learn More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="bg-white sevice_wrapper pt-5 pb-4 position-relative">
                        <div class="service_content position-absolute">
                            <p class="bc_text_16 bc_line_height_24 text-white p-3">It is recommended to have your chimney system inspected annually for safety regardless of frequency of use. Water damage is a chimney’s number one enemy and can happen at any time.</p>
                            
                        </div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/broom_icon.svg" class="mb-4">
                        <h5 class="mb-4">Chimney & Fireplace<br>Cleaning</h5>
                        <a href="#" class="bc_text_16 bc_font_alt_2 bc_letter_spacing_0 bc_line_height_28 bc_color_brown bc_text_semibold learn_more position-relative">Learn More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="bg-white sevice_wrapper pt-5 pb-4 position-relative">
                        <div class="service_content position-absolute">
                            <p class="bc_text_16 bc_line_height_24 text-white p-3">It is recommended to have your chimney system inspected annually for safety regardless of frequency of use. Water damage is a chimney’s number one enemy and can happen at any time.</p>
                        </div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bricks_icon.svg" class="mb-4">
                        <h5 class="mb-4">Chimney & Fireplace<br>Repair</h5>
                        <a href="#" class="bc_text_16 bc_font_alt_2 bc_letter_spacing_0 bc_line_height_28 bc_color_brown bc_text_semibold learn_more position-relative">Learn More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="bg-white sevice_wrapper pt-5 pb-4  position-relative">
                        <div class="service_content position-absolute">
                            <p class="bc_text_16 bc_line_height_24 text-white p-3">It is recommended to have your chimney system inspected annually for safety regardless of frequency of use. Water damage is a chimney’s number one enemy and can happen at any time.</p>
                            
                        </div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fire_icon.svg" class="mb-4">
                        <h5 class="mb-4">Furnace & Fireplace<br>Relining</h5>
                        <a href="#" class="bc_text_16 bc_font_alt_2 bc_letter_spacing_0 bc_line_height_28 bc_color_brown bc_text_semibold learn_more position-relative">Learn More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Mobile service_section -->
    <div class="container-fluid d-md-none bg-white">
        <div class="container py-2 px-0 d-md-none d-block">
            <div class="row pt-3">
                <div class="col-md-12 text-center">
                    <h4>Your #1 Trusted Chimney Company</h4>
                    <span class="bc_font_default bc_text_24 bc_letter_spacing_normal bc_color_primary bc_line_height_24 bc_text_light">Servicing the DMV Since 1989</span>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-12 mt-2">
                    <div id="accordion">
                        <div class="card border-0 mb-0">
                            <div class="b_bottom">
                                <div class="card-header position-relative border-bottom-0 bg-white service_head" data-toggle="collapse" href="#collapse1">
                                    <div class="d-flex">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/glass_icon.svg" class="mr-4">
                                        <h5>Professional<br>Inspections</h5>
                                    </div>
                                </div>
                                <div id="collapse1" class="card-body collapse position-relative show" data-parent="#accordion">
                                    <p class="bc_font_alt_3 bc_text_16 bc_line_height_24 color_4 bc_text_normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <a href="#" class="bc_text_14 bc_font_alt_2 bc_letter_spacing_0 bc_line_height_28 bc_color_brown bc_text_semibold learn_more position-relative">Learn More <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                            <div class=" b_bottom">
                                <div class="card-header position-relative border_top border-bottom-0 bg-white border-t1 collapsed  service_head" data-parent="#accordion" data-toggle="collapse" href="#collapse2">
                                   <div class="d-flex">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/broom_icon.svg" class="mr-4">
                                        <h5>Chimney & Fireplace<br>Cleaning</h5>
                                    </div>
                                </div>
                                <div id="collapse2" class="card-body collapse position-relative " data-parent="#accordion">
                                    <p class="bc_font_alt_3 bc_text_16 bc_line_height_24 color_4 bc_text_normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <a href="#" class="bc_text_14 bc_font_alt_2 bc_letter_spacing_0 bc_line_height_28 bc_color_brown bc_text_semibold learn_more position-relative">Learn More <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                            <div class="b_bottom">
                                <div class="card-header position-relative border_top bg-white border-bottom-0 collapsed  service_head" data-parent="#accordion" data-toggle="collapse" href="#collapse3">
                                    <div class="d-flex">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bricks_icon.svg" class="mr-4">
                                        <h5>Chimney & Fireplace<br>Repair</h5>
                                    </div>
                                </div>
                                <div id="collapse3" class="card-body collapse position-relative " data-parent="#accordion">
                                    <p class="bc_font_alt_3 bc_text_16 bc_line_height_24 color_4 bc_text_normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <a href="#" class="bc_text_14 bc_font_alt_2 bc_letter_spacing_0 bc_line_height_28 bc_color_brown bc_text_semibold learn_more position-relative">Learn More <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                            <div class=" b_bottom">
                                <div class="card-header position-relative border_top bg-white border-bottom-0 collapsed  service_head" data-parent="#accordion" data-toggle="collapse" href="#collapse4">
                                    <div class="d-flex">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fire_icon.svg" class="mr-4">
                                        <h5>Furnace & Fireplace<br>Relining</h5>
                                    </div>
                                </div>
                                <div id="collapse4" class="card-body collapse position-relative " data-parent="#accordion">
                                    <p class="bc_font_alt_3 bc_text_16 bc_line_height_24 color_4 bc_text_normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <a href="#" class="bc_text_14 bc_font_alt_2 bc_letter_spacing_0 bc_line_height_28 bc_color_brown bc_text_semibold learn_more position-relative">Learn More <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile service_section for -->

    <!-- service - install section--->
    <div class="container-fluid sevice_install bc_home_section_bg position-relative pt-3 pb-5" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/home_img1.jpg')">
        <div class="container py-5 position-relative">
            <div class="row d-flex align-items-center">
                <div class="col-md-3 text-center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/WSSC_logo_white.png" class="img-fluid">
                </div>
                <div class="col-md-6 b_left position-relative text-center text-md-left  px-2 px-md-15">
                    <h2 class="h2-alt bc_text_bold text-white bc_sm_text_bold px-4 px-md-0 pt-4 pt-md-0">Gas Furnace & Fireplace</h2>
                    <h2 class="h2-alt text-white pb-2 mb-0  pb-md-0">Service & Installation</h2>
                    <p class="p-alt mb-0 pr-md-2 bc_sm_line_height_24 pb-4 pb-md-0">We are the only chimney company in the metropolitan area licensed by WSSC. This license is required to perform service on or reline gas appliances.</p>
                </div>
                <div class="col-md-3 text-center">
                    <a href="#" class="btn btn-white">Learn More</a>
                </div>
            </div>
        </div>
    </div>


    <!-- experience section--->
    <div class="container-fluid bc_color_secondary_bg py-5 experience">
        <div class="container">
            <div class="row pb-5">
                <div class="col-md-12 text-center px-0">
                    <h2 class="h2-alt bc_sm_text_23 text-white">Experience the Chimney.com Difference</h2>
                </div>
            </div>
            <div class="d-lg-flex d-none justify-content-between mt-4 mb-5">
                <div class="text-center w-20 b_right">
                    <i class="far fa-user-shield bc_text_50 bc_line_height_64 text-white mb-4"></i>
                    <h6 class=" text-white">Local licensed professionals</h6>
                </div>
                <div class="text-center w-20 b_right">
                    <i class="far fa-file-invoice-dollar bc_text_50 bc_line_height_64 text-white mb-4"></i>
                    <h6 class=" text-white">Free & honest estimates</h6>
                </div>
                <div class="text-center w-20 b_right">
                    <i class="far fa-video bc_text_50 bc_line_height_64 text-white mb-4"></i>
                    <h6 class=" text-white">Live video camera inspections</h6>
                </div>
                <div class="text-center w-20 b_right">
                    <i class="far fa-shield-check bc_text_50 bc_line_height_64 text-white mb-4"></i>
                    <h6 class=" text-white">Quality stainless steel products</h6>
                </div>
                <div class="text-center w-20">
                    <i class="far fa-award bc_text_50 bc_line_height_64 text-white mb-4"></i>
                    <h6 class=" text-white">Guaranteed clean & courteous service</h6>
                </div>
            </div>
            <div class="d-lg-none d-block">
                <div class="swiper-container experience_swiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                          <div class="text-center">
                            <i class="far fa-user-shield bc_text_50 bc_line_height_64 text-white mb-4"></i>
                            <h6 class="text-white">Local licensed<br>professionals</h6>
                        </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="text-center">
                            <i class="far fa-file-invoice-dollar bc_text_50 bc_line_height_64 text-white mb-4"></i>
                            <h6 class=" text-white">Free & honest<br>estimates</h6>
                        </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="text-center">
                            <i class="far fa-video bc_text_50 bc_line_height_64 text-white mb-4"></i>
                            <h6 class=" text-white">Live video camera<br>inspections</h6>
                        </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="text-center">
                            <i class="far fa-shield-check bc_text_50 bc_line_height_64 text-white mb-4"></i>
                            <h6 class=" text-white">Quality stainless<br>steel products</h6>
                        </div>
                      </div>
                      <div class="swiper-slide">
                          <div class="text-center">
                            <i class="far fa-award bc_text_50 bc_line_height_64 text-white mb-4"></i>
                            <h6 class=" text-white">Guaranteed clean &<br>courteous service</h6>
                        </div>
                      </div>
                    </div>
                    <!-- Add Pagination -->
                    
                  </div>
                  <div class="swiper-pagination experience_pagination"></div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 text-center mt-5 mt-md-0">
                    <a href="#" class="btn btn-secondary text-uppercase">Get to know us</a>
                </div>
            </div>
        </div>
    </div>

    <!-- inspection section--->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center px-0 px-md-15">
                    <h1 class="mb-3 expert_title">Expert Chimney & Fireplace Repairs and <span class="d-none d-md-inline">Service</span></h1>
                    <h2 class="bc_color_primary">Bonded, Licensed and Insured</h2>
                    <hr>
                    <p class="mb-4">Chimney.com brings modern, innovative venting solutions while never losing the time standing traditions taught by the chimney and masonry professionals before us. Chimney.com carries warmth, joy and a sense of comfort to every house we step into. Chimney.com offers complete chimney and fireplace repairs and services.</p>
                    <p class="mb-4">Since 1989 Chimney.com has provided chimney services for commercial and residential clients. A Yearly chimney inspection, when performed properly, can intercept many health and safety hazards caused by deteriorating chimney systems. It keeps your home and family safe! <span class="d-none d-md-inline">Chimney.com is a fully licensed and insured company that offers a complete line of chimney services. We guarantee the quality of our work and can provide numerous references, both commercial and residential.</span></p>
                    <p class="bc_font_default bc_text_bold d-none d-md-block">Get a chimney inspection today!</p>
                    <div id="read_more" class="collapse mb-2 text-left text-md-center d-md-none text-center">
                        <p>Chimney.com is a fully licensed and insured company that offers a complete line of chimney services. We guarantee the quality of our work and can provide numerous references, both commercial and residential.</p>
                        <p class="bc_font_default bc_text_bold">Get a chimney inspection today!</p>
                    </div>
                    <a class="bc_text_20 bc_line_height_30 no_hover_underline bc_text_normal bc_toggle_content bc_font_alt_4" href="#" data-toggle="#read_more"><span class="bc_color_secondary bc_color_secondary_hover">Read More</span> <i class="fal fa-plus bc_color_secondary bc_text_20 bc_line_height_30 bc_text_normal" aria-hidden="true"></i> </a>

                </div>
            </div>
        </div>
    </div>

    <!-- map section -->
    <div class="container-fluid map_location bc_home_section_bg" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/service_area_map.jpg')">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-7 py-md-5 text-center text-md-left px-0">
                    <h2 class="text-white pr-md-5 px-3 px-md-0 mr-md-5">Proudly Serving Maryland, Washington DC & Northern Virgina</h2>
                    <hr class="bg-white mx-0 my-md-4 my-3 ">
                    <span class="bc_text_24 bc_font_default bc_text_bold text-white bc_line_height_30 pr-md-4 d-block bc_sm_text_18 bc_sm_line_height_24 mr-md-5">Silver Spring, Gaithersburg, Laurel, Potomac, Bethesda, McLean, Arlington, Alexandria & More!</span>
                </div>
            </div>
        </div>
    </div>

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
                                       <h7 class="h7 bc_sm_text_16">We love our new fireplace in the entrance of our office. The final result is really so welcoming and comforting I enjoy seeing it everyday! Thank you for all your hard work!</h7>
                                       <span class="bc_text_16 bc_font_alt_2 bc_letter_spacing_1 bc_line_height_0 bc_text_bold">James G, RSC</span>
                                    </div>
                              </div>
                              <div class="swiper-slide">
                                    <div class="testimonial_inner position-relative bg-white p-4">
                                       <h7 class="h7 bc_sm_text_16">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud...</h7>
                                       <span class="bc_text_16 bc_font_alt_2 bc_letter_spacing_1 bc_line_height_0 bc_text_bold">Name A, VA </span>
                                    </div>
                              </div>
                              <div class="swiper-slide">
                                    <div class="testimonial_inner position-relative bg-white p-4">
                                       <h7 class="h7 bc_sm_text_16">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quisnostrud...</h7>
                                       <span class="bc_text_16 bc_font_alt_2 bc_letter_spacing_1 bc_line_height_0 bc_text_bold">Name B, MD</span>
                                    </div>
                              </div>
                              <div class="swiper-slide">
                                    <div class="testimonial_inner position-relative bg-white p-4">
                                       <h7 class="h7 bc_sm_text_16">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud...</h7>
                                       <span class="bc_text_16 bc_font_alt_2 bc_letter_spacing_1 bc_line_height_0 bc_text_bold">Name A, VA </span>
                                    </div>
                              </div>
                              <div class="swiper-slide">
                                    <div class="testimonial_inner position-relative bg-white p-4">
                                       <h7 class="h7 bc_sm_text_16">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quisnostrud...</h7>
                                       <span class="bc_text_16 bc_font_alt_2 bc_letter_spacing_1 bc_line_height_0 bc_text_bold">Name B, MD</span>
                                    </div>
                              </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination testimonial_pagination d-md-none d-block"></div>
                        
                        </div>
                        <!-- Add Arrows -->
                        <div class="testimonial_buttons d-none d-md-block">
                            <div class="swiper-button-next testimonial_next  bc_text_16 bc_line_height_0"><i class="fal fa-angle-right bc_text_16 bc_line_height_0"></i></div>
                            <div class="swiper-button-prev testimonial_prev bc_text_16 bc_line_height_0"><i class="fal fa-angle-left bc_text_16 bc_line_height_0"></i></div>
                        </div>
                        
                    </div>

                </div>
                <div class="col-md-12 text-center"><a href="#" class="btn btn-primary text-uppercase w-auto mt-4">Read our reviews</a></div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-white affiliations_section py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="swiper-container affiliations_swiper">
                        <div class="swiper-wrapper d-flex align-items-center">
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/AL_2017.png">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/AL_2018.png">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/AL_2019.png">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/homeadvisor2.png">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                  <a href="#">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/homeadvisor1.png">
                                </a>
                            </div>
                            <div class="swiper-slide">
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
    

    <?php //get_template_part( 'page-templates/common/bc-locations-section' ); ?>
	
    <!--  Include coupons file here -->
	<?php //get_template_part( 'page-templates/common/coupons' ); ?>

    <!--  Include testimonial file here -->
	<?php //get_template_part( 'page-templates/common/testimonials' ); ?>
    <!-- Include affiliations file here -->
    <?php //get_template_part( 'page-templates/common/affiliations' ); ?>
    <div class="d-lg-none d-block">
        <?php //echo do_shortcode('[bc-contact-us]'); ?>
    </div>

</main>
<!-- <?php //function serviceAreaJavascript() {?>-->
<!-- <script type="text/javascript">
jQuery(document).ready(function(){
    jQuery(".hide_div").hide();
    jQuery("#minus").toggle();
    jQuery(".abc").click(function(){
        jQuery("#minus").toggle();
        jQuery("#plus").toggle();
        jQuery(".hide_div").toggle(500);
    });
});
var swiper = new Swiper('.experience_swiper', {
      spaceBetween: 30,
      autoplay: {
        delay: 2000,
      },
      pagination: {
        el: '.experience_pagination',
        clickable: true,
      },
    });
</script> -->
<!--
<?php// }
//add_action( 'wp_footer' , 'serviceAreaJavascript' );?> -->
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
var swiper = new Swiper('.experience_swiper', {
      spaceBetween: 30,
      autoplay: {
        delay: 2000,
      },
      pagination: {
        el: '.experience_pagination',
        clickable: true,
      },
});
var swiper = new Swiper('.testimonial_swiper', {
      slidesPerView: 3,
      spaceBetween: 30,
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

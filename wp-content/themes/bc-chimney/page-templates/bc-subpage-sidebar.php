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
    <div class="container-fluid p-0 bc_hero_container bc_home_section_bg py-5 subpage_banner" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/sub_banner.jpg')">
        <div class="container py-5">
            <div class="row py-3">
                <div class="col-sm-12 ">
                    <div class="bc_subpage_hero_overlay d-block d-md-flex text-center">
                        <?php $title = get_post_meta( $post->ID, 'title_overlay', true );
                        if(isset($title) && !empty($title)){
                            echo $title;
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

        <div class="container-fluid">
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-8 subpage_content">
                        <h1>Heading 1 Goes Here</h1>
                        <p>Chimney.com brings modern, innovative venting solutions while never losing the time standing traditions taught by the chimney and masonry professionals before us. Chimney.com carries warmth, joy and a sense of comfort to every house we step into. Chimney.com offers complete chimney and fireplace repairs and services. </p>
                        <h2 class="bc_color_primary">Heading 2 Goes Here</h2>
                        <p>Since 1989 Chimney.com has provided chimney services for commercial and residential clients. A Yearly chimney inspection, when performed properly, can intercept many health and safety hazards caused by deteriorating chimney systems. It keeps your home and family safe! Chimney.com is a fully licensed and insured company that offers a complete line of chimney services. We guarantee the quality of our work and can provide numerous references, both commercial and residential. </p>
                        <h3>Heading 3 Goes Here</h3>
                        <p>There are many reasons why it is important to get your chimney serviced and cleaned periodically. The experts at Chimney.com know how to clean a chimney safely, effectively, and reliably, all at an unbeatable price.</p>
                        <p>You will notice these immediate changes to your chimney area:</p>
                        <ul>
                            <li>Smell</li>
                            <li>Cleanliness</li>
                            <li>Safety</li>
                        </ul>
                        <p class="bc_text_bold pr-5">For top level chimney sweeping and chimney cleaning contact the experts at Chimney.com  by calling 555-555-5555.</p>
                    </div>

                    <div class="col-md-4">
                        <div class="bc_color_secondary_bg py-4">
                            <span class="bc_font_default bc_text_bold bc_text_28 d-block bc_line_height_24 text-uppercase pr-25 pl-35 text-white">Free Estimate</span>
                            <span class="bc_font_default bc_line_height_20_61 d-block bc_text_normal text-uppercase bc_text_14 pr-25 pl-35 text-white">Chimney and Fireplace service & repair</span>
                            <div class="subpage_form px-2 mt-3"><?php echo do_shortcode('[gravityform id=3 ajax=true]')?></div>
                        </div>

                        <div class="testimonial pb-5">
                            <div class="text-center py-4">
                                <div class=" text-center mb-4">
                                            <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
                                            <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
                                            <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
                                            <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
                                            <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
                                        </div>
                                        <h3 class="mb-3 bc_color_primary bc_line_height_36">What Your Neighbors Have to Say</h3>
                                        <div class="position-relative mt-4">
                                            <div class="swiper-container testimonial_swiper_subpage">
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
                                                </div>
                                                <!-- Add Pagination -->
                                                <div class="swiper-pagination testimonial_pagination_subpage"></div>
                                            
                                            </div>
                                            
                                            
                                        </div>
                                
                                    <div class="text-center"><a href="#" class="btn btn-primary text-uppercase w-auto mt-4">our reviews</a></div>
                            </div>
                        </div>
                    </div>
                <!-- The Content Starts -->
                <?php 
                //if ( have_posts() ) : 
                   // while ( have_posts() ) : the_post();
                     //   the_content();
                    //endwhile;
                //endif;
                ?>
                <!-- The Content ends --> 
                <!-- right sidebar starts -->
                <?php// get_template_part( 'sidebar-templates/sidebar', 'subpagerightsidebar' ); ?>
                <!-- right sidebar ends -->
                </div>
            </div>
        </div>
        <!--  Include Heating Services Features file here -->
        <?php //get_template_part( 'page-templates/common/bc-heating-services-features' ); ?>

        <?php //get_template_part( 'page-templates/common/bc-dont-see-service' ); ?>
        
        
    <!--  Include blogs file here -->
    <?php //echo do_shortcode('[bc-blog-slider]');?>
    <?php //get_template_part( 'page-templates/common/blogs' ); ?>

    <!--  Include testimonial file here -->
    <?php //get_template_part( 'page-templates/common/testimonials' ); ?>
</main>
<script>
    var swiper = new Swiper('.testimonial_swiper_subpage', {
      slidesPerView: 1,
      spaceBetween: 30,

      loop: true,
      loopFillGroupWithBlank: true,
      autoplay: {
        delay: 2000,
      },
      pagination: {
        el: '.testimonial_pagination_subpage',
        clickable: true,
      },
     
});
</script>
<?php get_footer();?>
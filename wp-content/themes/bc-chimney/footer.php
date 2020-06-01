<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!-- Footer -->
<footer class="page-footer font-small blue">
    <!-- <div class="container-fluid bc_color_info_bg"> -->
    <!-- Include servicearea file here -->
    <?php //if ( is_front_page() ) {?>
        <?php //get_template_part( 'page-templates/common/servicearea' ); ?>
    <?php //}else{?>
        <!-- <div class="container py-3"></div> -->
    <?php //} ?>
    <!-- </div> -->
    <!-- Footer Links -->
    <div class="container-fluid bg-white text-md-left pt-3 pb-md-3 footer_border">
        <div class="container py-md-2">
            <div class="row">
                 <?php dynamic_sidebar( 'footer' ); ?>
               <!--  <div class="col-lg-5 col-md-5 text-md-left text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?php echo get_home_url();?>" class="d-block mb-4 footer_logo">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_footer.png" class="bc_branding_logo" alt="logo" style="width: 374px" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_footer.png 2x, <?php echo get_stylesheet_directory_uri(); ?>/img/m_logo_footer.png 3x">
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-9 col-md-12 pr-md-0">
                            <div class=" d-flex align-items-center top_line pt-3">
                                <div class="footer_badge pr-xl-3 pr-md-2">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer_badge.png">
                                </div>
                                <div class="ml-xl-3 ml-md-2 text-left">
                                    <p class="mb-2 bc_font_default bc_text_normal bc_text_23 bc_line_height_24 bc_color_primary text-uppercase">Call Today</p>
                                    <p class="mb-2 bc_text_bold"><i class="fas fa-phone  bc_text_21 bc_line_height_50 bc_text_bold bc_sm_line_height_51"></i> <a href="tel: 555-555-5555" class="bc_text_bold text-decoration-none"><strong class="bc_font_default bc_text_23 bc_line_height_20 bc_color_secondary bc_text_bold bc_sm_line_height_24">
                                    <?php echo bc_get_theme_mod('bc_theme_options', 'bc_phone',false, '(555) 555-5555');?>
                                    </strong></a></p>
                                    <div class="social_icons mb-0 d-none d-md-block">
                                          <?php echo do_shortcode('[social-icons]');?>
                                        <a href="#" class="bc_color_secondary_hover"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#" class="bc_color_secondary_hover"><i class="fab fa-twitter"></i></a>
                                        <a href="#" class="bc_color_secondary_hover"><i class="fab fa-instagram"></i></a>
                                        <a href="#" class="bc_color_secondary_hover"><i class="fab fa-youtube"></i></a>
                                        <a href="#" class="bc_color_secondary_hover"><i class="fab fa-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="social_icons mb-0 d-md-none d-block mt-4">
                                  <?php echo do_shortcode('[social-icons]');?>
                                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-pinterest"></i></a>
                                    </div>
                        </div>
                   </div>
                </div> -->
                <!-- right address -->
                <!-- <div class="col-md-6 offset-md-1 mt-xl-4 mt-md-3 mt-lg-4 pt-lg-2 pt-xl-0">
                    <div class="row mt-3">
                        <div class="col-md-6 col-10 offset-1 offset-md-0 right_md_border pt-md-4 pr-xl-4 text-md-left text-center mb-3">
                        
                            <p class="bc_font_default bottom_border bc_text_24 bc_line_height_24 text-uppercase pb-2 bc_sm_text_17 bc_sm_line_height_17 mx-4 mx-md-0 mb-2 mb-md-3">Maryland</p>

                            <p class="mb-md-5 bc_sm_line_height_20 px-4 px-md-0 pr-xl-3 mx-3 mx-md-0 footer_address">10 Old Bonifant Rd. <br>Silver Spring, MD 20905
                        </p>
                        </div>
                        <div class="col-md-6  col-10 offset-1 offset-md-0 pt-md-4 pr-xl-4 text-md-left text-center pl-xl-4">
                            <p class="bc_font_default bottom_border bc_text_24 bc_line_height_24 text-uppercase pb-2 bc_sm_text_17 bc_sm_line_height_17 mx-4 mx-md-0  mb-2 mb-md-3">Virginia</p>
                            <p class="pr-xl-4 mb-md-5 mb-0 bc_sm_line_height_20 footer_address">12929 Centre Park Circle Unit 115 Herndon, VA 20171</p>
                        </div>
                    </div>
                </div> -->
                 <!-- right addressend -->
            </div>
        </div>
    </div>
    <?php get_template_part( 'page-templates/common/bc-copyright' ); ?>
</footer>

<div class="modal fade" id="disclaimer" tabindex="-1" role="dialog" aria-labelledby="disclaimerLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content rounded-0">
      <div class="modal-header">
        <button type="button" class="close bc_color_secondary_hover_bg" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fal fa-times fa-2x"></i></span>
        </button>
      </div>
      <div class="modal-body px-5 pb-5 col-md-10 offset-1">
        <div id="disclaimerLabel" class="bc_color_black h1">Disclaimer</div>
            <p class="bc_color_black">The information on this website is for informational purposes only; it is deemed accurate but not guaranteed. It does not constitute professional advice. All information is subject to change at any time without notice. <a class="text-danger bc_text_bold" href="<?php echo get_site_url()?>/contact-us">Contact us</a> for complete details.</p>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
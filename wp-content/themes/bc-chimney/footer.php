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
            <p class="bc_color_black">The information on this website is for informational purposes only; it is deemed accurate but not guaranteed. It does not constitute professional advice. All information is subject to change at any time without notice. <a class="text-danger bc_text_bold" href="<?php echo get_site_url()?>/contact/">Contact us</a> for complete details.</p>
      </div>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>
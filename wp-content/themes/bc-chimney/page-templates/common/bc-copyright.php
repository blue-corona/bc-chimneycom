<?php
/**
 * Copyright
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<?php echo bc_get_theme_mod('bc_theme_options', 'footer','copyright_text', '<div class="container-fluid bc_footer_copyright_bar text-left py-md-4 py-lg-2 py-2 bc_font_alt_1 bc_line_height_24 bc_text_normal bc_text_16 ">
   <div class="container"><div class="row"><div class="col-md-12"><div class="copyright_border"><p class="text-md-left text-center color_1 bc_font_alt_1 bc_line_height_24 bc_text_normal bc_text_16 mb-md-1 mb-3 bc_sm_text_15 bc_sm_line_height_20 text-uppercase">VA hic: 2705172164 | Mhic: 93924 <span class="d-none d-md-inline-block">|</span> <span class="d-block d-md-inline-block">DCRA: 420218000219 | WSSC: 462</span></p><p class="text-md-left text-center color_2 bc_font_alt_1 bc_line_height_24 bc_text_normal bc_text_16 bc_sm_text_13 bc_sm_line_height_16">© '.date("Y").' Chimney.com <span class="d-inline-block">&nbsp;|&nbsp;</span> <span class="d-inline-block">All Rights Reserved</span>
  <span class="d-none d-lg-inline-block d-none">&nbsp; | &nbsp;</span><span class="d-md-inline-block d-block"><a class="color_2 bc_font_alt_1 bc_line_height_24 bc_text_normal bc_text_16 no_hover_underline" href="#" data-toggle="modal" data-target="#disclaimer">Disclaimer</a><span class="d-inline-block">&nbsp; | &nbsp;</span><a class="color_2 bc_font_alt_1 bc_line_height_24 bc_text_normal bc_text_16 no_hover_underline" href="#">Privacy Policy</a></span></p></div></div></div></div>
</div>');?>


<button data-toggle="modal" data-target="#myModal_mobile" class="py-3 w-100 d-block d-lg-none bc_font_default bc_text_bold bc_text_28 d-block bc_line_height_24 bc_color_secondary_bg text-uppercase  position-fixed sticky-footer  p-0 border-0 text-white" style="bottom: 0; z-index:999; position: fixed !important; border-radius: 0px !important;"> Free Estimate</button>


<div class="modal fade bg-white" id="myModal_mobile" tabindex="-1" role="dialog" aria-labelledby="disclaimerLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered bc_color_secondary_bg m-0" role="document" style="height:100%;">
    <div class="modal-content rounded-0 bc_color_secondary_bg position-relative" style="z-index:100001; border: none !important;  ">
      <div class="modal-header" style="z-index: 9; position: absolute; right: -15px; top: 0;">
        <button type="button" class="close mt-n5" data-dismiss="modal" aria-label="Close" style="opacity: 1;">
          <i class="fal fa-times text-white" style="font-size: 30px;"></i>
        </button>
      </div>
      <div class="modal-body">
        <div class=" mt-4">
        	<span class="bc_font_default bc_text_bold bc_text_28 d-block bc_line_height_24 text-uppercase text-white modal_title">Free Estimate</span>
            <span class="bc_font_default bc_line_height_20_61 d-block bc_text_normal text-uppercase bc_text_14 text-white modal_title">Chimney and Fireplace service & repair</span>
            <div class="subpage_form"><?php echo do_shortcode('[gravityform id=3 ajax=true]')?></div>
        </div>
      </div>
    </div>
  </div>
</div>
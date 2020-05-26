<div class="d-lg-none show-on-touch">
    <div class="container-fluid m-0 p-0">
        <div class="container p-0">
            <div class="row no-gutters d-flex align-items-center">
                <div class="col-2 text-center">
                    <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="p-0 navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                        <em class="fas fa-bars navbar-toggler-icon bc_text_24 bc_line_height_24 bc_color_primary"></em>
                    </button>

                   
                </div>
                <div class=" col-8 mr-0 position-relative text-center">
                    <a href="<?php echo get_home_url();?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mobile_logo_header.png">
                    </a>
                </div>
                <div class="col-2 bc_color_secondary_bg text-center py-3">
                    <a href="tel: 555-555-5555" class="mx-auto d-block mt-1 text-white"><i class="fas fa-phone  bc_text_24"></i></a>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part( 'page-templates/common/bc-nav-menu' ); ?>

</div>

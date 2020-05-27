<div class="container-fluid bc_nav_container bg-white mx-0">
    <div class="container p-0">
        <div class="row m-0">
            <div class="col-lg-8 offset-lg-4 mt-md-n5 px-0">
                <nav class="navbar navbar-expand-lg navbar-dark d-table w-100 text-md-right">
                    <div id="navbarSupportedContent" class="navbar-collapse collapse" style="width:100%">
                        <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="d-none navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                            <span class="navbar-toggler-icon navbar-dark"></span>
                        </button>
                         <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler mt-3 ml-n3 position-absolute" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                            <span class="fal fa-times bc_text_24 bc_line_height_36" style="color: #282828"></span>
                        </button>
                        <div class=" d-md-none text-center mt-3">
                            <a href="<?php echo get_home_url();?>">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mobile_logo_header.png">
                            </a>
                        </div>
                        <?php 
                            $args = [
                            'menu' => 'main-menu',
                            'depth' => 3,
                            'theme_location' => 'primary',
                            'container' => false,
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'navbarSupportedContent',
                            'menu_class' => 'navbar-nav ml-auto',
                            'fallback_cb'     => 'Bluecorona_WP_Bootstrap_Navwalker::fallback',
                            'walker' => new Bluecorona_WP_Bootstrap_Navwalker(),
                            ];
                            wp_nav_menu( $args )
                        ?>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

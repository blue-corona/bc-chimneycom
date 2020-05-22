<div class="container-fluid bc_nav_container">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="<?php echo get_home_url();?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_header.png" class="bc_branding_logo" alt="logo" style="width:350px" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_header.png 2x, <?php echo get_stylesheet_directory_uri(); ?>/img/logo_header.png 3x">
                </a>
            </div>
            <div class="col-md-8">
                <nav class="navbar navbar-expand-lg navbar-dark m-auto d-table w-100">
                    <div id="navbarSupportedContent" class="navbar-collapse collapse" style="">
                        <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="d-none navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
                            <span class="navbar-toggler-icon navbar-dark"></span>
                        </button>
                        <?php 
                            $args = [
                            'menu' => 'main-menu',
                            'depth' => 3,
                            'theme_location' => 'primary',
                            'container' => false,
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'navbarSupportedContent',
                            'menu_class' => 'navbar-nav m-auto',
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

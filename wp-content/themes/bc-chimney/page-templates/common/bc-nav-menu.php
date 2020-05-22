<div class="container-fluid bc_nav_container bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-4 mt-n5">
                <nav class="navbar navbar-expand-lg navbar-dark w-100 text-right">
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

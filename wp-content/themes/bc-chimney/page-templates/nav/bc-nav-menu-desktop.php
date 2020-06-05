<div class="container-fluid bc_nav_container_desktop">
    <div class="container">
        <div class="row m-0">
            <div class="col-xl-9 offset-xl-3 mt-xl-n5 px-0">
                <nav class="navbar navbar-expand-lg navbar-dark ml-auto p-0 w-100 text-xl-right">
                    <div id="navbarSupportedContent" class="navbar-collapse collapse" style="">
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

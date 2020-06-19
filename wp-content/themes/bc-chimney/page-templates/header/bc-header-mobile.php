<?php 
    echo do_shortcode('[bc-ui-kit 
        type="mobile-header" 
        name="header_A" 
        logo_url="'.bc_get_theme_mod('bc_theme_options', 'bc_logo_upload',false, get_stylesheet_directory_uri().'/img/mobile_logo_header.png').'" 
        logo_class=""
        phone="'.bc_get_theme_mod('bc_theme_options', 'bc_phone',false, '(555) 555-5555').'"
        class="bc_color_primary_bg--imp"
        icon_class="bc_color_primary"
        icon_background="#8f3e28"
    ]');


?>

<div class="container-fluid home_services bc_home_section_bg d-none d-lg-block" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/bricks_bg.jpg')">
        <div class="container text-center pb-5">
            <div class="row pt-5">
                <div class="col-md-12">
                    <h4>Your #1 Trusted Chimney Company</h4>
                    <span class="bc_font_default bc_text_35 bc_letter_spacing_normal bc_color_primary bc_line_height_45 bc_text_light">Servicing the DMV Since 1989</span>
                </div>
            </div>
            <div class="row pb-5 pt-5">
                <div class="col-md-3">
                    <div class="bg-white sevice_wrapper pt-5 pb-4 position-relative">
                        <div class="service_content position-absolute">
                            <p class="bc_text_16 bc_line_height_24 text-white p-3">It is recommended to have your chimney system inspected annually for safety regardless of frequency of use. Water damage is a chimney’s number one enemy and can happen at any time.</p>
                            
                        </div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/glass_icon.svg" class="mb-4">
                        <h5 class="mb-4">Professional<br>Inspections</h5>
                        <a href="#" class="bc_text_14 bc_font_alt_2 bc_letter_spacing_0 bc_line_height_28 bc_color_brown bc_text_semibold learn_more position-relative">Learn More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="bg-white sevice_wrapper pt-5 pb-4 position-relative">
                        <div class="service_content position-absolute">
                            <p class="bc_text_16 bc_line_height_24 text-white p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            
                        </div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/broom_icon.svg" class="mb-4">
                        <h5 class="mb-4">Chimney & Fireplace<br>Cleaning</h5>
                        <a href="#" class="bc_text_14 bc_font_alt_2 bc_letter_spacing_0 bc_line_height_28 bc_color_brown bc_text_semibold learn_more position-relative">Learn More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="bg-white sevice_wrapper pt-5 pb-4 position-relative">
                        <div class="service_content position-absolute">
                            <p class="bc_text_16 bc_line_height_24 text-white p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        </div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bricks_icon.svg" class="mb-4">
                        <h5 class="mb-4">Chimney & Fireplace<br>Repair</h5>
                        <a href="#" class="bc_text_14 bc_font_alt_2 bc_letter_spacing_0 bc_line_height_28 bc_color_brown bc_text_semibold learn_more position-relative">Learn More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="bg-white sevice_wrapper pt-5 pb-4  position-relative">
                        <div class="service_content position-absolute">
                            <p class="bc_text_16 bc_line_height_24 text-white p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            
                        </div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fire_icon.svg" class="mb-4">
                        <h5 class="mb-4">Furnace & Fireplace<br>Relining</h5>
                        <a href="#" class="bc_text_14 bc_font_alt_2 bc_letter_spacing_0 bc_line_height_28 bc_color_brown bc_text_semibold learn_more position-relative">Learn More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- End of service section #Trusted Chimney Company (desktop)--->
    <!-- Mobile service_section -->
    <div class="container-fluid d-lg-none d-block bg-white">
        <div class="container py-2 px-0">
            <div class="row pt-3">
                <div class="col-md-12 text-center">
                    <h4 class="px-4">Your #1 Trusted Chimney Company</h4>
                    <span class="bc_font_default bc_text_24 bc_letter_spacing_normal bc_color_primary bc_line_height_24 bc_text_light">Servicing the DMV Since 1989</span>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-12 mt-2">
                    <?php 
                        echo do_shortcode('[bc_accordion]
                            [bc_card title="Professional Inspections" image="'.get_stylesheet_directory_uri().'/img/glass_icon.svg"  expanded=1]It is recommended to have your chimney system inspected annually for safety regardless of frequency of use. Water damage is a chimney’s number one enemy and can happen at any time.[/bc_card]
                            [bc_card title="Chimney & Fireplace Cleaning" image="'.get_stylesheet_directory_uri().'/img/broom_icon.svg"]Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.[/bc_card]
                            [bc_card title="Chimney & Fireplace Repair" image="'.get_stylesheet_directory_uri().'/img/bricks_icon.svg"]Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.[/bc_card]
                            [bc_card title="Furnace & Fireplace Relining" image="'.get_stylesheet_directory_uri().'/img/fire_icon.svg"]Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.[/bc_card]
                            [/bc_accordion]');
                    ?>
                   
                    </div>
                </div>
            </div>
        </div>
    
    <!-- End Mobile service_section for -->
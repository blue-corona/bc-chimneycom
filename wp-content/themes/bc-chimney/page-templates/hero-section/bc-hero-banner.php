<div class="container-fluid p-0 bc_hero_container bc_home_section_bg d-none d-lg-block" style="background-image: url('<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_upload', false);?>');background-position: center;" >
    <div class="hero-overlay-gradient">
        <div class="container px-4 py-4">
            <div class="row text-center text-lg-left text-md-left">
                
                <div class="col-md-6 offset-md-6 col-xs-12 col-lg-6 col-sm-12 py-4 d-none d-md-block pr-2">
                    <div class="row">
                        <div class=" col-md-4 col-lg-4 col-sm-12 col-xs-12 px-0 text-md-right mr-n4 mt-n2 position-relative" style="z-index: 9">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/30_form_badge.png">
                        </div>
                        <div class=" col-md-8 col-lg-8 col-sm-12 col-xs-12 px-0 d-none d-lg-block">
                            
                            <div class="entry-content bc_hero_form_body">
                                <span class="bc_font_default bc_text_bold bc_text_26 d-block bc_line_height_24 bc_color_secondary text-uppercase pr-25 pl-35">Free Estimate</span>
                                <span class="bc_font_default bc_line_height_20_61 d-block bc_text_normal bc_color_secondary text-uppercase bc_text_14 pr-25 pl-35">Chimney and Fireplace service & repair</span>
                               <div class="banner_form px-2 mt-3"><?php echo do_shortcode('[gravityform id=1 ajax=true]')?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .hero-overlay-gradient-->
</div>

<div class="container-fluid p-0 bc_hero_container bc_home_section_bg d-lg-none d-block" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/m_banner_home.jpg')">
    <div class="hero-overlay-gradient">
        <div class="container px-4 ">
            <div class="row text-center text-right ">
                
                <div class="col-md-6 offset-md-6 col-xs-12 col-lg-6 col-sm-12 py-4  pr-5 text-right">
                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/30_form_badge.png">
                </div>
            </div>
        </div>
    </div><!-- .hero-overlay-gradient-->
</div>

<style type="text/css">
.hero-image{background-color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_button_color', '#00395e');?>;color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_button_text_color', '#ffffff');?>;}

<?php if(bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_overlay_type', 'gradient') == 'gradient'){ ?>
    .hero-overlay-gradient{background: linear-gradient(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_gradient_rotation', false ,false)."deg"; ?>, rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_gradient_start', false,false);?>), rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_gradient_end',false,false);?>));}
<?php }else if(bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_overlay_type', 'solid') == 'solid'){ ?>
    .hero-overlay-gradient{background: rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_overlay_solid_color', false ,false);?>);}
<?php }?>
</style>
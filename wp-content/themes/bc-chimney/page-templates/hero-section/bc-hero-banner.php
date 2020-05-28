<div class="container-fluid p-0 bc_hero_container bc_home_section_bg" style="background-image: url('<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_image', 'bc_background_upload', false);?>')">
    <div class="hero-overlay-gradient">
        <div class="container px-4 pt-4">
            <div class="row text-center text-lg-left text-md-left">
                
                <div class="col-md-6 offset-md-6 col-xs-12 col-lg-6 col-sm-12 py-4 d-none d-md-block pr-2">
                    <div class=" col-md-12 col-lg-8 col-sm-12 col-xs-12 offset-lg-4 pr-0">
                        
                        <div class="entry-content bc_hero_form_body">
                            <span class="bc_font_default bc_text_bold bc_text_26 d-block bc_line_height_24 bc_color_secondary text-uppercase px-26">Free Estimate</span>
                            <span class="bc_font_default bc_line_height_20_61 d-block bc_text_normal bc_color_secondary text-uppercase bc_text_14 px-26">Chimney and Fireplace service & repair</span>
                           <?php echo do_shortcode('[gravityform id=1 ajax=true]')?>
                        </div>
                    </div>
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
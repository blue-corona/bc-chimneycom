<div class="container-fluid bc_hero_container p-0" style="position:relative;">
    <iframe width="100%" height="100%" class="position-absolute" src="<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_url', false);?>"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<div class="hero-overlay-gradient-video">
        <div class="container px-4 py-4">
            <div class="row text-center text-lg-left text-md-left">
                  <?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_overlay_text', false);?>
                <div class="col-md-6 offset-md-6 col-xs-12 col-lg-6 col-sm-12 py-4 d-none d-md-block pr-2">
                    <div class="row">
                        <div class=" col-md-4 col-lg-4 col-sm-12 col-xs-12 px-0 text-md-right mr-n4 mt-n2 position-relative" style="z-index: 9">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/30_form_badge.png">
                        </div>
                        <div class=" col-md-8 col-lg-8 col-sm-12 col-xs-12 px-0 d-none d-lg-block">
                            
                            <div class="entry-content bc_hero_form_body">
                                <span class="bc_font_default bc_text_bold bc_text_28 d-block bc_line_height_24 bc_color_secondary text-uppercase pr-25 pl-35">Free Estimate</span>
                                <span class="bc_font_default bc_line_height_20_61 d-block bc_text_normal bc_color_secondary text-uppercase bc_text_14 pr-25 pl-35">Chimney and Fireplace service & repair</span>
                               <div class="banner_form px-2 mt-3"><?php echo do_shortcode('[gravityform id=1 ajax=true]')?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
<?php if(bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_overlay_type', 'gradient') == 'gradient'){ ?>
    .hero-overlay-gradient-video{background: linear-gradient(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_gradient_rotation', false ,false)."deg"; ?>, rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_gradient_start', false,false);?>), rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_gradient_end',false,false);?>));height: 100%; pointer-events: none; position:absolute; top:0; width: 100%}

<?php }else if(bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_overlay_type', 'solid') == 'solid'){ ?>
    .hero-overlay-gradient-video{background: rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_overlay_color', false ,false);?>);height: 100%; pointer-events: none; position:absolute; top:0; width: 100%}
<?php }?>
.hero-video{background-color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_button_color', '#00395e');?>;color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'background_video', 'bc_video_button_text_color', '#ffffff');?>;}
</style>

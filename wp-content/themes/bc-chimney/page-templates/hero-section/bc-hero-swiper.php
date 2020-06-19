 <div class="swiper-container bc_hero_swiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
                <div class="container-fluid p-0 bc_hero_container bc_home_section_bg" style="background-image: url('<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_slider_image_one', false);?>')">

<div class="hero-overlay-gradient">
        <div class="container px-4 py-4">
            <div class="row text-center text-lg-left text-md-left">
                <?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_text_one', false);?>
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
        </div>
            <div class="swiper-slide">
                <div class="container-fluid p-0 bc_hero_container bc_home_section_bg" style="background-image: url('<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_slider_image_two', false);?>')">


<div class="hero-overlay-gradient-two">
        <div class="container px-4 py-4">
            <div class="row text-center text-lg-left text-md-left">
                <?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_text_two', false);?>
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
            </div>
            <div class="swiper-slide">
                <div class="container-fluid p-0 bc_hero_container bc_home_section_bg" style="background-image: url('<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_slider_image_three', false);?>')">

<div class="hero-overlay-gradient-three">
        <div class="container px-4 py-4">
            <div class="row text-center text-lg-left text-md-left">
                <?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_text_three', false);?>
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

                <div>
            </div>
            </div>
    </div>
    <div class="swiper-paginations text-center position-absolute bc_hero_swiper_pagination" style="z-index:1;"></div>
</div>
<?php function heroSwiperJs() {?>
<script>
    var bcHeroSwiper = new Swiper('.bc_hero_swiper', {
      pagination: {
        el: '.bc_hero_swiper_pagination',
        clickable:true,
      },
      autoHeight: true, 
      <?php if (bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_auto_rotate_slide_one', 'enabled') == 'enabled') { ?>
        autoplay: {
        delay: <?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_slider_rotation_time_one', 2500);?>,
        disableOnInteraction: true,
        },
        <?php } else { ?>
        autoplay:false,
        <?php } ?>
    });
</script>
<?php }  add_action( 'wp_footer' , 'heroSwiperJs' );?>


<style type="text/css">
/*First Slider Properties*/
.hero-slide-one{background-color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_button_color_one', '#00395e');?>;color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_button_text_color_one', '#ffffff');?>;}
.hero-slide-two{background-color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_button_color_two', '#00395e');?>;color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_button_text_color_two', '#ffffff');?>;}
.hero-slide-three{background-color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_button_color_three', '#00395e');?>;color:<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_button_text_color_three', '#ffffff');?>;}

<?php if(bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_type_one', 'gradient') == 'gradient'){ ?>
    .hero-overlay-gradient-one{background: linear-gradient(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_gradient_rotation_one', false ,false)."deg"; ?>, rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_gradient_start_one', false,false);?>), rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_gradient_end_one',false,false);?>));}

<?php }else if(bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_type_one', 'solid') == 'solid'){ ?>
    .hero-overlay-gradient-one{background: rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_solid_color_one', false ,false);?>);}
<?php }?>
/*Second Slider Properties*/
<?php if(bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_type_two', 'gradient') == 'gradient'){ ?>
    .hero-overlay-gradient-two{background: linear-gradient(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_gradient_rotation_two', false ,false)."deg"; ?>, rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_gradient_start_two', false,false);?>), rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_gradient_end_two',false,false);?>));}
<?php }else if(bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_type_two', 'solid') == 'solid'){ ?>
    .hero-overlay-gradient-two{background: rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_solid_color_two', false ,false);?>);}
<?php }?>
/*Third Slider Properties*/
<?php if(bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_type_three', 'gradient') == 'gradient'){ ?>
    .hero-overlay-gradient-three{background: linear-gradient(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_gradient_rotation_three', false ,false)."deg"; ?>, rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_gradient_start_three', false,false);?>), rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_gradient_end_three',false,false);?>));}
<?php }else if(bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_type_three', 'solid') == 'solid'){ ?>
    .hero-overlay-gradient-three{background: rgba(<?php echo bc_get_theme_mod('bc_theme_home_options', 'image_slider', 'bc_overlay_solid_color_three', false ,false);?>);}
<?php }?>
</style>

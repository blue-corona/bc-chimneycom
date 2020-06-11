<?php 
/*Custom widget*/
// BC Footer Address Widget
class BC_Footer_Address_Widget extends WP_Widget {
    public function __construct() {

        $id = 'BC_Footer_Address_widget';
        $title = esc_html__('BC Footer Identity', 'bc-footer-address-custom-widget');
        $options = array(
            // 'classname' => 'bc-footer-address-markup-widget',
            'description' => esc_html__('Add Custom HTML in inputbox', 'bc-footer-address-custom-widget')
        );
        parent::__construct( $id, $title, $options );
    }
    
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        ?>


<div class="col-lg-5 col-md-5 text-md-left text-center">
     <div class="row">
                        <div class="col-md-12">
                            <a href="<?php echo get_home_url();?>" class="d-block footer_logo">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_footer.png" class="bc_branding_logo" alt="logo" style="width: 374px" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_footer.png 2x, <?php echo get_stylesheet_directory_uri(); ?>/img/m_logo_footer.png 3x">
                            </a>
                        </div>
                    </div>
    <div class="row">
        <div class="col-xl-9 col-md-12 pr-md-0">
            <div class="d-flex align-items-center top_line pt-3 justify-content-center justify-content-md-start">
                <div class="footer_badge pr-xl-3 pr-md-2">
                   <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer_badge.png">
                </div>
                <div class="ml-xl-3 ml-md-2 text-left">
                    <p class="mb-2 bc_font_default bc_text_normal bc_text_23 bc_line_height_24 bc_color_primary text-uppercase">Call Today</p>
                    <p class="mb-2 bc_text_bold"><i class="fas fa-phone  bc_text_21 bc_line_height_50 bc_text_bold bc_sm_line_height_51"></i> <a href="tel: 555-555-5555" class="bc_text_bold text-decoration-none"><strong class="bc_font_default bc_text_23 bc_line_height_20 bc_color_secondary bc_text_bold bc_sm_line_height_24">
                    <?php echo bc_get_theme_mod('bc_theme_options', 'bc_phone',false, '(555) 555-5555');?>
                    </strong></a></p>
                    <div class="social_icons mb-0 d-none d-md-block">
                          <?php echo do_shortcode('[social-icons]');?>
                      <!--   <a href="#" class="bc_color_secondary_hover"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" class="bc_color_secondary_hover"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="bc_color_secondary_hover"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="bc_color_secondary_hover"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="bc_color_secondary_hover"><i class="fab fa-pinterest"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="social_icons mb-0 d-md-none d-block mt-4">
                <?php echo do_shortcode('[social-icons]');?>
                <!--   <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a> -->
            </div>
        </div>
   </div>
</div>

          
    <?php echo $args['after_widget'];
    }
}
// register widget
function bc_footer_address_register_widgets() {
    register_widget( 'BC_Footer_Address_Widget' );
}
add_action( 'widgets_init', 'bc_footer_address_register_widgets' );
?>

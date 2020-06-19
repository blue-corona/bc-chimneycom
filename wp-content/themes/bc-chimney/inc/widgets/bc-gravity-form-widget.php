<?php 
/*Custom widget*/
// BC Gravity Widget
class BC_Gravity_Widget extends WP_Widget {
	public function __construct() {

		$id = 'BC_Gravity_widget';
		$title = esc_html__('BC Gravity Form', 'bc-gravity-custom-widget');
		$options = array(
			'classname' => 'bc-gravity-markup-widget',
			'description' => esc_html__('Add Custom HTML in inputbox', 'bc-gravity-custom-widget')
		);
		parent::__construct( $id, $title, $options );
	}
	
	public function widget( $args, $instance ) {?>

 <div class="bc_color_secondary_bg py-4 form_shadow d-md-block d-none">
 	 <?php 
				if ( isset( $instance['title'] ) && !empty($instance['title']) ) {
					echo  $instance['title']; 
				}else{
					echo ' <span class="bc_font_default bc_text_bold bc_text_28 d-block bc_line_height_24 text-uppercase pr-25 pl-35 text-white">


                            Free Estimate</span>
                            <span class="bc_font_default bc_line_height_20_61 d-block bc_text_normal text-uppercase bc_text_14 pr-25 pl-35 text-white mt-2">Chimney and Fireplace service & repair

                            </span>';
				}
			?>
                            <div class="subpage_form top_line px-2 mt-3">

                            	<?php echo do_shortcode($instance['gravityform']);?></div>
                            </div>




<?php echo $args['after_widget'];
}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		if ( isset( $new_instance['title'] ) && ! empty( $new_instance['title'] ) ) {
			$instance['title'] = $new_instance['title'];
		}
		if ( isset( $new_instance['gravityform'] ) && ! empty( $new_instance['gravityform'] ) ) {
			$instance['gravityform'] = $new_instance['gravityform'];
		}
		return $instance;
	}
	public function form( $instance ) {
		$id = $this->get_field_id( 'title' );
		$for = $this->get_field_id( 'title' );
		$name = $this->get_field_name( 'title' );
		$label = __( 'Title', 'bc-service-custom-widget' );
		$title = ' <span class="bc_font_default bc_text_bold bc_text_28 d-block bc_line_height_24 text-uppercase pr-25 pl-35 text-white">


                            Free Estimate</span>
                            <span class="bc_font_default bc_line_height_20_61 d-block bc_text_normal text-uppercase bc_text_14 pr-25 pl-35 text-white mt-2">Chimney and Fireplace service & repair

                            </span>';
		if ( isset( $instance['title'] ) && ! empty( $instance['title'] ) ) {
			$title = $instance['title'];
		}
		?>
		<p>
			<label for="<?php echo esc_attr( $for ); ?>"><?php echo esc_html( $label ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $id ); ?>" name="<?php echo esc_attr( $name ); ?>"><?php echo esc_textarea( $title ); ?></textarea>
		</p>
		<?php 
		$g_id = $this->get_field_id( 'gravityform' );
		$g_for = $this->get_field_id( 'gravityform' );
		$g_name = $this->get_field_name( 'gravityform' );
		$g_label = __( 'Shortcode', 'bc-service-custom-widget' );
		$g_title = '[gravityform id=2]';
		if ( isset( $instance['gravityform'] ) && ! empty( $instance['gravityform'] ) ) {
			$g_title = $instance['gravityform'];
		}?>
		<p>
			<label for="<?php echo esc_attr( $g_for ); ?>"><?php echo esc_html( $g_label ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $g_id ); ?>" name="<?php echo esc_attr( $g_name ); ?>"><?php echo esc_textarea( $g_title ); ?></textarea>
		</p>
<?php }
}
// register widget
function bc_gravity_register_widgets() {
	register_widget( 'BC_Gravity_Widget' );
}
add_action( 'widgets_init', 'bc_gravity_register_widgets' );

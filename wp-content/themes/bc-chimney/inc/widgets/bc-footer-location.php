<?php 
/*Custom widget*/
// BC How we Work Widget
class bc_footer_location extends WP_Widget {
	public function __construct() {

		$id = 'bc_footer_location';
		$title = esc_html__('BC Footer Location', 'bc_footer_location-custom-widget');
		$options = array(
			'classname' => 'bc_footer_location-markup-widget',
			'description' => esc_html__('Add Custom HTML in inputbox', 'bc_footer_location-custom-widget')
		);
		parent::__construct( $id, $title, $options );
	}
	
	function addSwiperInitServiceJsToFooter($instance){
	echo "<script>
	var servicesSwiper".$instance." = new Swiper('#".$instance."', {
		pagination: true,
		loop:true,
		navigation: {
			nextEl: '.bc_services_swiper_next',
			prevEl: '.bc_services_swiper_prev',
			},
			});
			</script>";
		}

public function widget( $args, $instance ) {
//Add JS for widget to footer
	$widgetInstance = $this->id;
	add_action('wp_footer', function() use ( $widgetInstance ) { 
		$this->addSwiperInitServiceJsToFooter( $widgetInstance ); });
		?>



<div class="col-md-6 offset-md-1 mt-xl-4 mt-md-3 mt-lg-4 pt-lg-2 pt-xl-0">
                    <div class="row mt-3">
                        <div class="col-md-6 col-10 offset-1 offset-md-0 right_md_border pt-md-4 pr-xl-4 text-md-left text-center mb-3">
                        
                        <?php 
								if ( isset( $instance['title'] ) && !empty($instance['title']) ) {
								echo $args['before_title'] . $instance['title'] . $args['after_title']; 
								}else{
								echo '<p class="bc_font_default bottom_border bc_text_24 bc_line_height_24 text-uppercase pb-2 bc_sm_text_17 bc_sm_line_height_17 mx-4 mx-md-0 mb-2 mb-md-3">Maryland</p>';
								}
								?>
                           

                            <p class="mb-md-5 bc_sm_line_height_20 px-4 px-md-0 pr-xl-3 mx-3 mx-md-0 footer_address"><?php echo $instance['text_description'];?>
                        </p>
                        </div>
                        <div class="col-md-6  col-10 offset-1 offset-md-0 pt-md-4 pr-xl-4 text-md-left text-center pl-xl-4">
                        		<?php 
								if ( isset( $instance['address_two'] ) && !empty($instance['address_two']) ) {
								echo $args['before_title'] . $instance['address_two'] . $args['after_title']; 
								}else{
								echo ' <p class="bc_font_default bottom_border bc_text_24 bc_line_height_24 text-uppercase pb-2 bc_sm_text_17 bc_sm_line_height_17 mx-4 mx-md-0  mb-2 mb-md-3">Virginia</p>';
								}
								?>
                            
                            <p class="pr-xl-4 mb-md-5 mb-0 bc_sm_line_height_20 footer_address"><?php echo $instance['description_second'];?></p>
                        </div>
                    </div>
                </div> 




	<?php echo $args['after_widget'];
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		if ( isset( $new_instance['title'] ) && ! empty( $new_instance['title'] ) ) {
			$instance['title'] = $new_instance['title'];
		}

		if ( isset( $new_instance['text_description'] ) && ! empty( $new_instance['text_description'] ) ) {
			$instance['text_description'] = $new_instance['text_description'];
		}

		if ( isset( $new_instance['address_two'] ) && ! empty( $new_instance['address_two'] ) ) {
			$instance['address_two'] = $new_instance['address_two'];
		}
		if ( isset( $new_instance['description_second'] ) && ! empty( $new_instance['description_second'] ) ) {
			$instance['description_second'] = $new_instance['description_second'];
		}

		return $instance;
	}
	public function form( $instance ) {
		$id = $this->get_field_id( 'title' );
		$for = $this->get_field_id( 'title' );
		$name = $this->get_field_name( 'title' );
		$label = __( 'First address title', 'bc_footer_location-custom-widget' );
		$title = 'Maryland';
		if ( isset( $instance['title'] ) && ! empty( $instance['title'] ) ) {
			$title = $instance['title'];
		}
		?>
		<p>
			<label for="<?php echo esc_attr( $for ); ?>"><?php echo esc_html( $label ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $id ); ?>" name="<?php echo esc_attr( $name ); ?>"><?php echo esc_textarea( $title ); ?></textarea>
		</p>

		<?php 
		$desc_id = $this->get_field_id( 'text_description' );
		$desc_for = $this->get_field_id( 'text_description' );
		$desc_name = $this->get_field_name( 'text_description' );
		$desc_label = __( 'Description', 'bc-text_description-custom-widget' );
		$desc_title = '';
		if ( isset( $instance['text_description'] ) && ! empty( $instance['text_description'] ) ) {
			$desc_title = $instance['text_description'];
		}?>
		<p>
			<label for="<?php echo esc_attr( $desc_for ); ?>"><?php echo esc_html( $desc_label ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $desc_id ); ?>" name="<?php echo esc_attr( $desc_name ); ?>"><?php echo esc_textarea( $desc_title ); ?></textarea>
		</p>

		<?php 
		$address2_id = $this->get_field_id( 'address_two' );
		$address2_for = $this->get_field_id( 'address_two' );
		$address2_name = $this->get_field_name( 'address_two' );
		$address2_label = __( 'Second address title', 'bc-address_two-custom-widget' );
		$address2_title = '';
		if ( isset( $instance['address_two'] ) && ! empty( $instance['address_two'] ) ) {
			$address2_title = $instance['address_two'];
		}?>
		<p>
			<label for="<?php echo esc_attr( $address2_for ); ?>"><?php echo esc_html( $address2_label ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $address2_id ); ?>" name="<?php echo esc_attr( $address2_name ); ?>"><?php echo esc_textarea( $address2_title ); ?></textarea>
		</p>

	<?php
		
		$Desc2_id = $this->get_field_id( 'description_second' );
		$Desc2_for = $this->get_field_id( 'description_second' );
		$Desc2_name = $this->get_field_name( 'description_second' );
		$Desc2_label = __( 'Second address', 'bc-description_second-custom-widget' );
		$Desc2_title = '';
		if ( isset( $instance['description_second'] ) && ! empty( $instance['description_second'] ) ) {
			$Desc2_title = $instance['description_second'];
		}?>
		<p>
			<label for="<?php echo esc_attr( $Desc2_for ); ?>"><?php echo esc_html( $Desc2_label ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $Desc2_id ); ?>" name="<?php echo esc_attr( $Desc2_name ); ?>"><?php echo esc_textarea( $address2_title ); ?></textarea>
		</p>

	<?php

	 }
}
// register widget
function bc_footer_location_register_widgets() {
	register_widget( 'bc_footer_location' );
}
add_action( 'widgets_init', 'bc_footer_location_register_widgets' );

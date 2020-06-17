<?php 

// BC Testimonials Widget
class BC_Testimonials_Widget extends WP_Widget {
	public function __construct() {
		$id = 'BC_Testimonials_widget';
		$title = esc_html__('BC Testimonials', 'bc-testimonial-custom-widget');
		$options = array(
			'classname' => 'bc-testimonial-markup-widget',
			'description' => esc_html__('Add Custom HTML in inputbox', 'bc-testimonial-custom-widget')
		);
		parent::__construct( $id, $title, $options );
	}

	function addSwiperInitTestimonialJsToFooter($instance){
			echo "<script>
    var swiper = new Swiper('.testimonial_swiper_subpage', {
      slidesPerView: 1,
      spaceBetween: 30,

      loop: true,
      loopFillGroupWithBlank: true,
      autoplay: {
        delay: 2000,
      },
      pagination: {
        el: '.testimonial_pagination_subpage',
        clickable: true,
      },
     
});
</script>";
	}

	public function widget( $args, $instance ) {
		//Add JS for widget to footer
		$widgetInstance = $this->id;
		add_action('wp_footer', function() use ( $widgetInstance ) { 
        $this->addSwiperInitTestimonialJsToFooter( $widgetInstance ); });
	?>


<div class="testimonial pb-md-5">
<div class="text-center py-4">
  <div class=" text-center mb-4">
              <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
              <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
              <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
              <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
              <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
          </div>
           <?php 
		if ( isset( $instance['title'] ) && !empty($instance['title']) ) {
			echo $args['before_title'] . $instance['title'] . $args['after_title']; 
		}else{
			echo '<h3 class="mb-3 bc_color_primary bc_line_height_36 bc_sm_line_height_30">What Your Neighbors Have to Say</h3>';
		}
         
        
		?>
          </h3>
          <div class="position-relative mt-4">
              <div id="<?php echo $this->id ?>" class="swiper-container testimonial_swiper_subpage">
                  <div class="swiper-wrapper">
                  	<?php 
			$testimonial_args  = array( 'post_type' => 'bc_testimonials', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');

	        $query = new WP_Query( $testimonial_args );
	        if ( $query->have_posts() ) :
	            while($query->have_posts()) : $query->the_post();
	        $title = get_post_meta( get_the_ID(), 'testimonial_title', true );
	        $message = get_post_meta( get_the_ID(), 'testimonial_message', true );
	        $image = get_post_meta( get_the_ID(), 'testimonial_custom_image', true );
        ?>
                    <div class="swiper-slide">
                          <div class="testimonial_inner position-relative bg-white p-4">

                          	  <span class=" bc_text_16 bc_font_alt_1 bc_line_height_30 bc_text_normal bc_letter_spacing_normal color_1 d-lg-block d-none">
                          	  	 <?php 
                                     if (strlen($message) > 189){
                                        echo $message = substr($message, 0,189) . '...';
                                    }else{
                                        echo $message;
                                    }
                                    ?>
                          	  </span>
                                 <p class="d-lg-none d-block"> 
                                   <?php 
                                     if (strlen($message) > 189){
                                        echo $message = substr($message, 0,189) . '...';
                                    }else{
                                        echo $message;
                                    }
                                    ?>
                                 </p>
                           
                             <span class="bc_text_16 bc_font_alt_2 bc_letter_spacing_1 bc_line_height_0 bc_text_bold"><?php the_title();?></span>
                          </div>
                    </div>
                     <?php
            endwhile; 
            wp_reset_query();
        endif;?>
			
                   
                  </div>
                 
                   <div class="swiper-pagination testimonial_pagination_subpage"></div>
              
              </div>
              
              
          </div>
  
      <div class="text-center"><a href="<?php echo get_home_url();?>/testimonials/" class="btn btn-primary text-uppercase w-auto mt-4 subpage_review">our reviews</a></div>
</div>
                        </div>

<?php echo $args['after_widget'];
}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		if ( isset( $new_instance['title'] ) && ! empty( $new_instance['title'] ) ) {
			$instance['title'] = $new_instance['title'];
		}
		return $instance;
	}
	public function form( $instance ) {
		$id = $this->get_field_id( 'title' );
		$for = $this->get_field_id( 'title' );
		$name = $this->get_field_name( 'title' );
		$label = __( 'Title', 'bc-testimonial-custom-widget' );
		$title = '<h3 class="mb-3 bc_color_primary bc_line_height_36 bc_sm_line_height_30"></h3>'.__( 'What Your Neighbors Have to Say', 'bc-testimonial-custom-widget' ).'</h3>';
		if ( isset( $instance['title'] ) && ! empty( $instance['title'] ) ) {
			$title = $instance['title'];
		}
		?>
		<p>
			<label for="<?php echo esc_attr( $for ); ?>"><?php echo esc_html( $label ); ?></label>
			<textarea class="widefat" id="<?php echo esc_attr( $id ); ?>" name="<?php echo esc_attr( $name ); ?>"><?php echo esc_textarea( $title ); ?></textarea>
		</p>
<?php }
}
// register widget
function bc_testimonials_register_widgets() {
	register_widget( 'BC_Testimonials_Widget' );
}
add_action( 'widgets_init', 'bc_testimonials_register_widgets' );

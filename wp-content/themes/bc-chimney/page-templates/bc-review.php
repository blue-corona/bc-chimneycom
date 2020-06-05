<?php
/**
 * Template Name: Review Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
global $post;
?>
<main>
    <?php get_template_part( 'page-templates/common/bc-banner-section' ); ?> 

<div class="container-fluid testimonial pb-5" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/bricks_bg.jpg')">
    <div class="container text-center py-4">

        <div class="row">
            <div class="col-md-12 px-0 px-md-15">
                <div class=" text-center mb-4">
                    <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
                    <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
                    <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
                    <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
                    <i class="fas fa-star bc_text_20 bc_line_height_55  color_5"></i>
                </div>
                <h2 class="mb-3 px-md-0 px-4 bc_color_primary">What Your Neighbors Have to Say</h2>
                <div class="position-relative mt-4">
                    <div id="bc_testimonials-swiper" class="swiper-container testimonial_swiper">
                        <div class="swiper-wrapper">

                          <?php 
                          $args  = array( 'post_type' => 'bc_testimonials', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');

                          ob_start();
                          $query = new WP_Query( $args );
                          while( $query->have_posts() ) {
                            $query->the_post();
                            $name = get_post_meta( get_the_id(), 'testimonial_name', true );
                            $title = get_post_meta( get_the_id(), 'testimonial_title', true );
                            $message = get_post_meta( get_the_id(), 'testimonial_message', true );
                            $image = get_post_meta( get_the_id(), 'testimonial_custom_image', true );
                            ?>
                            <div class="swiper-slide">
                                <div class="testimonial_inner position-relative bg-white p-4">
                                    <h7 class="h7 bc_sm_text_16 d-lg-block d-none"><?php 
                                     if (strlen($message) > 189){
                                        echo $message = substr($message, 0,189) . '...';
                                    }else{
                                        echo $message;
                                    }
                                    ?>
                                    </h7>
                                    <p class="d-lg-none d-block">
                                    <?php 
                                     if (strlen($message) > 189){
                                        echo $message = substr($message, 0,189) . '...';
                                    }else{
                                        echo $message;
                                    }
                                    ?></p>
                                <span class="bc_text_16 bc_font_alt_2 bc_letter_spacing_1 bc_line_height_0 bc_text_bold">
                                   <?php echo $name;?></span>
                               </div>
                           </div>
                       <?php }?>
                   </div>
                   <!-- Add Pagination -->
                   <div class="swiper-pagination testimonial_pagination d-md-none d-block"></div>

               </div>
               <!-- Add Arrows -->
               <div class="testimonial_buttons d-none d-md-block">
                <div class="swiper-button-next testimonial_next  bc_text_16 bc_line_height_0"><i class="fas fa-chevron-right bc_text_16 bc_line_height_0"></i></div>
                <div class="swiper-button-prev testimonial_prev bc_text_16 bc_line_height_0"><i class="fas fa-chevron-left bc_text_16 bc_line_height_0"></i></div>
            </div>

        </div>

    </div>
    <div class="col-md-12 text-center mt-3"><a href="<?php echo get_home_url();?>/testimonials/" class="btn btn-primary text-uppercase w-auto mt-4">Read our reviews</a></div>

</div>


</div>
</div>

<!--  experience-the-chimney -->

<?php get_template_part( 'page-templates/common/experience-the-chimney' ); ?> 

</main>
<?php get_footer();?>
<script type="text/javascript">

   var swiperTestimonials = new Swiper('#bc_testimonials-swiper', {
      slidesPerView: 3,
      spaceBetween: 50,
      slidesPerGroup: 1,

      loop: true,
      loopFillGroupWithBlank: true,
      autoplay: {
        delay: 2000,
    },
    pagination: {
        el: '.testimonial_pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.testimonial_next',
        prevEl: '.testimonial_prev',
    },
    breakpoints: {
        640: {
          slidesPerView: 1,
          spaceBetween: 0,
      },
      768: {
          slidesPerView: 1,
          spaceBetween: 0,
      },}
  });
</script>

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

<div class="container-fluid testimonial pb-5" style="background: #fff;">
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
                <h1 class="mb-3 px-md-0 px-4">What Your Neighbors Have to Say</h1>
                <div class="position-relative mt-4">
                    <div id="bc_testimonials-swiper" class="testimonial_swiper">
                        <div class="row">

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
                            <div class="col-md-6 mb-md-4 mb-5">
                                <div class="testimonial_inner position-relative review_columns p-4">
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
                  

               </div>
               <!-- Add Arrows -->
               
            </div>

        </div>

    </div>
    <div class="col-md-12 text-center mt-md-3"><a href="<?php echo get_home_url();?>/testimonials/" class="btn btn-primary text-uppercase w-auto mt-md-4">Write a Review</a></div>

</div>


</div>
</div>

<!--  experience-the-chimney -->

<?php get_template_part( 'page-templates/common/experience-the-chimney' ); ?> 

</main>
<?php get_footer();?>
<!-- <script type="text/javascript">

   var swiperTestimonials = new Swiper('#bc_testimonials-swiper', {
      slidesPerView: 3,
      spaceBetween: 30,
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
</script> -->

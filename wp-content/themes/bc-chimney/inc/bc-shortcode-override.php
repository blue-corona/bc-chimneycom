<?php
/*- overriding plugins shortcode -*/

add_action('wp_head', 'bc_promotion_shortcode_custom');
function bc_promotion_shortcode_custom() {
    remove_shortcode('bc-testimonial');
    add_shortcode('bc-testimonial', 'custom_testimonial_shortcode');

    remove_shortcode('bc-affiliation');
    add_shortcode('bc-affiliation', 'custom_affiliation_shortcode');

    remove_shortcode('bc-affiliation-mobile');
    add_shortcode('bc-affiliation-mobile', 'custom_affiliation_shortcode_mobile');
}

function custom_affiliation_shortcode_mobile( $atts , $content = null ) {
    static $count = 0;
    $count++;
    add_action( 'wp_footer' , function() use($count){
        ?>
        <script>
           var swiper = new Swiper('.affiliations_swiper', {
              slidesPerView: 6,
              spaceBetween: 30,
              slidesPerGroup: 1,
              pagination: {
                el: '.affiliations_pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                  slidesPerView: 3,
                  spaceBetween: 20,
                  slidesPerGroup: 1,
              },
              768: {
                  slidesPerView: 3,
                  spaceBetween: 40,
                  slidesPerGroup: 1,
              },}

          });
      </script>
  <?php });
    $args  = array( 'post_type' => 'bc_affiliations', 'posts_per_page' => -1, 'order'=> 'ASC','post_status'  => 'publish');
    ob_start();
    ?>
    <div class="container-fluid bg-white affiliations_section py-5">
        <div id="affiliation<?php echo $count;?>" class="container">

            <div class="row d-lg-none d-block">
                <div class="col-md-12">
                    <div class="swiper-container affiliations_swiper">
                        <div class="swiper-wrapper d-flex align-items-center">
                          <?php 
                          $query = new WP_Query( $args );
                          if ( $query->have_posts() ) :
                            while($query->have_posts()) : $query->the_post();
                                $name = get_post_meta( get_the_ID(), 'affiliation_name', true );
                                $link = get_post_meta( get_the_ID(), 'affiliation_link', true );
                                $image = get_post_meta( get_the_ID(), 'affiliation_custom_image', true );
                                ?>
                                <div class="swiper-slide text-center">
                                    <img src="<?= $image;?>">

                                </div>
                                <?php
                            endwhile; 
                            wp_reset_query();
                        endif;
                        ?>
                    </div>

                </div>  
                <!-- Add Pagination -->
                <div class="swiper-pagination affiliations_pagination d-md-none d-block"></div>                 
            </div>
        </div>
    </div>
</div>

<?php 
$output = ob_get_clean();
return $output;
}

function custom_affiliation_shortcode( $atts , $content = null ) {
    static $count = 0;
    $count++;
    add_action( 'wp_footer' , function() use($count){
        ?>
        <script>

        </script>
    <?php });
    $args  = array( 'post_type' => 'bc_affiliations', 'posts_per_page' => -1, 'order'=> 'ASC','post_status'  => 'publish');
    ob_start();
    ?>
    <div class="container-fluid bg-white affiliations_section py-5">
        <div class="container">

            <div class="row d-lg-flex d-none align-items-center">
              <?php 
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) :
                while($query->have_posts()) : $query->the_post();
                    $name = get_post_meta( get_the_ID(), 'affiliation_name', true );
                    $link = get_post_meta( get_the_ID(), 'affiliation_link', true );
                    $image = get_post_meta( get_the_ID(), 'affiliation_custom_image', true );
                    ?>
                    <div class="col-md-2 text-center">

                        <img src="<?= $image;?>">

                    </div>
                    <?php
                endwhile; 
                wp_reset_query();
            endif;
            ?>            
        </div>
    </div>
</div>
<?php 
$output = ob_get_clean();
return $output;
}


function custom_testimonial_shortcode($atts , $content = null){
    static $count = 0;
    $count++;
    add_action( 'wp_footer' , function() use($count){
        ?>


        <script>
            var swiperTestimonials = new Swiper('#bc_testimonials-swiper_<?php echo $count ?>', {
              slidesPerView: 3,
              spaceBetween: 30,
              slidesPerGroup: 1,
              autoHeight: false, //enable auto height

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
  <?php });

    $Ids = null;
    $args  = array( 'post_type' => 'bc_testimonials', 'posts_per_page' => -1, 'order'=> 'DESC','post_status'  => 'publish');
    
    ob_start();
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) : ?>


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
                        <div id="bc_testimonials-swiper_<?php echo $count;?>" class="swiper-container testimonial_swiper">
                            <div class="swiper-wrapper">
                              <?php 
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

<?php 
endif;
$output = ob_get_clean();
return $output;
}

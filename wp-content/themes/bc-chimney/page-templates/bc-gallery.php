<?php
/**
 * Template Name: Gallery Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
global $post;
?>
<main>
  <div class="container-fluid p-0 bc_hero_container bc_home_section_bg py-md-5 subpage_banner" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/sub_banner.jpg')">
        <div class="container py-md-5">
            <div class="row py-md-3">
                <div class="col-sm-12 ">
                    <div class="bc_subpage_hero_overlay d-block d-md-flex text-center">
                        <?php $title = get_post_meta( $post->ID, 'title_overlay', true );
                        if(isset($title) && !empty($title)){
                            echo $title;
                        }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

        <div class="container-fluid">
            <div class="container py-5">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="mb-3 subpage_content">Our Gallery</h1>
                </div>
              </div>
                <div class="row">
                    <div class="col-md-4">
                      <div class="gallery_main position-relative">
                        <a href="#">
                          <div class="gallery_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery_thumb_img1.jpg')" class="img-fluid">
                          </div>
                          <div class="gallery_content position-absolute">
                            <i class="far fa-search bc_text_36 bc_line_height_48 text-white"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="gallery_main position-relative">
                        <a href="#">
                          <div class="gallery_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery_thumb_img2.jpg')" class="img-fluid">
                          </div>
                          <div class="gallery_content position-absolute">
                            <i class="far fa-search bc_text_36 bc_line_height_48 text-white"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="gallery_main position-relative">
                        <a href="#">
                          <div class="gallery_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery_thumb_img3.jpg')" class="img-fluid">
                          </div>
                          <div class="gallery_content position-absolute">
                            <i class="far fa-search bc_text_36 bc_line_height_48 text-white"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="gallery_main position-relative">
                        <a href="#">
                          <div class="gallery_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery_thumb_img4.jpg')" class="img-fluid">
                          </div>
                          <div class="gallery_content position-absolute">
                            <i class="far fa-search bc_text_36 bc_line_height_48 text-white"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="gallery_main position-relative">
                        <a href="#">
                          <div class="gallery_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery_thumb_img5.jpg')" class="img-fluid">
                          </div>
                          <div class="gallery_content position-absolute">
                            <i class="far fa-search bc_text_36 bc_line_height_48 text-white"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="gallery_main position-relative">
                        <a href="#">
                          <div class="gallery_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery_thumb_img6.jpg')" class="img-fluid">
                          </div>
                          <div class="gallery_content position-absolute">
                            <i class="far fa-search bc_text_36 bc_line_height_48 text-white"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="gallery_main position-relative">
                        <a href="#">
                          <div class="gallery_img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/gallery_thumb_img7.jpg')" class="img-fluid">
                          </div>
                          <div class="gallery_content position-absolute">
                            <i class="far fa-search bc_text_36 bc_line_height_48 text-white"></i>
                          </div>
                        </a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php get_footer();?>
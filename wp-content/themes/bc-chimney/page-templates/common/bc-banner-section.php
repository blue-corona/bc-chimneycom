
   <div class="container-fluid p-0 bc_hero_container bc_home_section_bg py-md-5 subpage_banner" <?php if (has_post_thumbnail() ) { $image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id() ), 'single-post-thumbnail' ); ?> style=" background-image: url('<?php echo $image[0]; ?>');" <?php }else{ ?> style="; background-image: url('<?php echo get_stylesheet_directory_uri();?>/img/sub_banner.jpg');" <?php }?>>
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


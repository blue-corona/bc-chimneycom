<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<main>
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
<div class="container-fluid py-5 m-0">
	<div class="container">
	  <div class="row no-gutters">
	    <div class="col-lg-8 sub_page_sidebar">
	     <h1><?php the_title()?></h1>
	     	<?php 
	     	if ( have_posts() ) :
	     		while ( have_posts() ) : the_post();
	     			get_template_part( 'loop-templates/content', get_post_format() );
				endwhile; else :
				get_template_part( 'loop-templates/content', 'none' );
			endif;
			?>
	      	<!-- Pagination -->
	      	<?php understrap_pagination(); ?>
	    </div>
	    <!-- rIGHT sidebar starts -->
	    <div class="col-lg-4 pl-lg-3">
	    	<?php get_template_part( 'sidebar-templates/sidebar', 'blogrightside' ); ?>
		</div>
	    <!-- right sidebar ends -->
	  </div>
	</div>
</div>
 <!--  Include Heating Services Features file here -->
    <?php get_template_part( 'page-templates/common/experience-the-chimney' ); ?>
</main>
<?php get_footer();
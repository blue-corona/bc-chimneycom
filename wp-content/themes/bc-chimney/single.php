<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<main>
<?php get_template_part( 'page-templates/common/bc-banner-section' ); ?> 
<div class="container-fluid py-5 m-0">
	<div class="container">
	  <div class="row no-gutters">

	    <div class="col-lg-8 subpage_content">

	    	<h1><?php the_title()?></h1>

	     	<?php 
	     	while ( have_posts() ) : the_post();
	     	get_template_part( 'loop-templates/content', 'single' ); 
	     	endwhile; // end of the loop.
	     	?>
	    </div>
	    <!-- rIGHT sidebar starts -->
	    <div class="col-lg-4 pl-lg-3">
	    	<?php get_template_part( 'sidebar-templates/sidebar', 'singleblogrightside' ); ?>
		</div>
	    <!-- right sidebar ends -->
	  </div>
	</div>
</div>
  <!--  Include Heating Services Features file here -->
    <?php get_template_part( 'page-templates/common/experience-the-chimney' ); ?>
</main>
<?php get_footer();

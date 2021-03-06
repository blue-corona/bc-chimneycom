<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="row pt-4">
	<div class="col-md-4 p-0 text-center pb-2">
	<?php
	if (has_post_thumbnail() ){
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( ), 'blogpost-thumbnail' );
	?>
		<img src="<?php echo $image[0]; ?>" alt="post img" class="img-responsive postImg">
	<?php }else{
		echo '<img src="'.get_stylesheet_directory_uri().'/img/logo_header.png" class="img-responsive postImg">';
	}?>
	</div>
	<div class="col-md-8 px-4 subpage_content">
		<article>
		<h2><?php the_title()?></h2>
		<p class="m-0"><strong><?php the_time( 'm/d/y' ); ?></strong></p>
		<p class="m-0">	<?php echo get_the_excerpt();?> ... <br>
		<a class="no_hover_underline" href="<?php echo get_permalink();?>"><span class="pr-1">READ MORE</span> <em aria-hidden="true" class="fa fa-chevron-circle-right"></em>
			</a>
		</p>
		</article>
	</div>
<div class="col-sm-12 p-0"><hr style="background-color:#4d4d4d" /></div>
</div>

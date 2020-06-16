<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );
$understrap_include = array(
    
    '/widgets.php',
    '/bc-shortcode-override.php',
    '/widgets/bc-footer-location.php',
    '/bc-locations-slug-rewrite.php',
  
);
foreach ( $understrap_include as $file ) {
    $filepath = locate_template( 'inc' . $file );
    if ( ! $filepath ) {
        trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
    }
    require_once $filepath;
}
remove_filter( 'the_content', 'wpautop' );


add_action('wp_footer', 'accordion_method');
function accordion_method(){?>
<script>

</script>
<?php }

add_shortcode( 'bc_accordion', 'accordion_shortcode' );
function accordion_shortcode( $atts, $content = null ) {
    $content = str_replace('<br>', '', $content);
    return '<div id="accordion" class="accordion w-100 border-bottom mt-5">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'bc_card', 'card_shortcode' );
function card_shortcode( $atts, $content = null ) {
    $title='';  
    if(isset($atts['title'])) {
        $title = $atts['title'];
    }
    $imgTag = '';
    if(isset($atts['image'])){
        $image = $atts['image'];
$imgTag = '<img src="'.$image.'"/>';
    }
    $iconClass = 'fal fa-plus-circle';
    $expanded = '';
    if(isset($atts['expanded'])) {
        $expanded = 'show';
        $iconClass = 'fal fa-minus-circle';
    }
    $id = 'collapse'.rand(0,100000);
        return '<div class="card  border-0 b_bottom">
        <div id="headingOne" class="card-header  position-relative border-bottom-0 bg-white service_head"><h5 class="card-title">'.$imgTag.$title.'<i class="'.$iconClass.' bc_color_primary float-right toggle_icon mt-2 ml-2" data-toggle="collapse" data-target="#'.$id.'" arivvvvvvvva-controls="'.$id.'"></i></h5></div><div id="'.$id.'" class="card-body collapse position-relative '.$expanded.'" aria-labelledby="headingOne" data-parent="#accordion"><p class="bc_font_alt_3 bc_text_16 bc_line_height_24 color_4 bc_text_normal">'.do_shortcode($content).'</p><a href="#" class="bc_text_14 bc_letter_spacing_0 bc_line_height_28 bc_color_brown bc_text_semibold learn_more position-relative bc_font_alt_1">Learn More <i class="fas fa-caret-right"></i></a></div>
        </div>';
}

//shortcode for phone number
//<a href="tel:[site_info_phone_number]">[site_info_phone_number]</a>
add_shortcode( 'site_info_phone_number', 'bc_site_info_phone_number' );
function bc_site_info_phone_number ( $atts ) {
    $anchor = true;
    if(isset($atts['anchor'])){
        $anchor = $atts['anchor'];
    }
    $tel = bc_get_theme_mod('bc_theme_options', 'bc_phone',false, '3334357</sub>');
    ob_start();
    if($anchor){
        echo "<a class='bc_text_18 bc_line_height_20 bc_font_alt_1 bc_text_light bc_color_primary bc_color_primary_hover mb-1 no_hover_underline' href='tel:$tel'>$tel</a>";
    }else{
     echo $tel;
    }
    return ob_get_clean();
}


add_action('pre_get_posts','change_limit_mobile');
function change_limit_mobile($query){
    $new_limit = 4;
    $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
    $ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
    $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
    $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

    if (( $iphone || $android || $ipad || $ipod || $berry ) && $query->is_main_query()){
        set_query_var('posts_per_page',$new_limit);
    }
}

add_action('admin_enqueue_scripts', 'bc_album_include_admin_css_js');
function bc_album_include_admin_css_js($hook){
  $current_screen = get_current_screen();
    if ( $current_screen->post_type == 'album_gallery') {
        wp_enqueue_script('bc-album-image-upload-js', get_stylesheet_directory_uri().'/src/js/bc-album-image-upload.js', array( 'jquery'));
    }
}


add_action( 'add_meta_boxes', 'bc_album_create_metabox' );
function bc_album_create_metabox() {
    add_meta_box(
        'bc_album_metabox',
        'Thumbnail Image', // Title to display
        'bc_album_metabox', // Function to call that contains the metabox content
        'album_gallery', // Post type to display metabox on
        'side', // Where to put it (normal = main colum, side = sidebar, etc.)
        'default' // Priority relative to other metaboxes
    );
}

add_action( 'edit_form_after_title', 'bc_team_run_after_title_meta_boxes' );
function bc_team_run_after_title_meta_boxes() {
    global $post, $wp_meta_boxes;
    # Output the `below_title` meta boxes:
    do_meta_boxes( get_current_screen(), 'test', $post );
    unset($wp_meta_boxes['bc_teams']['test']);
}

function bc_album_metabox() {
   global $post;
    $image = get_post_meta( $post->ID, 'bc_album_thumbnail_custom_image', true );
    ?>
    
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Custom Image</label>
        <div class="col-sm-10">
            <input type="text" name="bc_album_thumbnail_custom_image" class="meta-image col-sm-5" value="<?= $image;?>" required accept='image/*' style="margin-top: auto;">
            <input type="button" class="button bc-album-image-upload col-sm-5" value="Upload" style="margin-top: 20px;">

            <div class="image-preview col-sm-3" style="margin-right: 20%; max-width: 100%">
                <?php if(isset($image) && !empty($image)){?>
                <img src="<?php echo $image;?>" class="img-fluid" style="width:90px;margin-top: 20px;">
                <?php }else{?>
                <img src="http://placehold.it/100x100" class="rounded-circle" style="width: 90px; height: 63px;"/>
                <?php }?>
            </div>
        </div>
    </div>
 <?php wp_nonce_field( 'bc_album_form_metabox_nonce', 'bc_album_form_metabox_process' );
}

add_action( 'save_post', 'bc_album_save_metabox', 1, 2 );
function bc_album_save_metabox( $post_id, $post ) {
    if ( !isset( $_POST['bc_album_form_metabox_process'] ) ) return;
    if ( !wp_verify_nonce( $_POST['bc_album_form_metabox_process'], 'bc_album_form_metabox_nonce' ) ) {
        return $post->ID;
    }
    if ( !current_user_can( 'edit_post', $post->ID )) { return $post->ID;}

    if ( !isset( $_POST['bc_album_thumbnail_custom_image'] ) ) {return $post->ID;}
    $sanitizedcustomimage = wp_filter_post_kses( $_POST['bc_album_thumbnail_custom_image'] );

    update_post_meta( $post->ID, 'bc_album_thumbnail_custom_image', $sanitizedcustomimage );
}

// add_filter( 'auto_update_plugin', '__return_true' );
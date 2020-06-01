<?php
/**
 * Template Name: styleguide Template
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();?>

<main>
    <div class="container-fluid px-0 m-0 my-5">
      <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-12">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_header.png" class="img-fluid pl-3" alt="Site-Logo">
            </div>
            <div class="col-lg-12 mt-4">
                <div class="d-inline-block mr-3 p-98 bc_color_secondary_bg"></div>
                <div class="d-inline-block mr-3 p-98 bc_color_tertiary_bg"></div>
                <div class="d-inline-block mr-3 p-98 bc_color_primary_bg"></div>
                <div class="d-inline-block mr-3 p-98 bc_color_quaternary_bg"></div>
            </div>  
            <div class="col-lg-12 mt-4">
          		<span class="bc_text_26 bc_line_height_40 d-block mt-5 bc_font_alt_1 bc_text_bold bc_color_primary">DESKTOP STYLING</span>
          		<h1 class="mt-5">H1 - Oxygen Bold/700 48px 48LH #2a2a2a</h1>
          		<h2 class="mt-5">H2 - Oxygen Regular/400 48px 55LH #2a2a2a</h2>
          		<h2 class="mt-4">H2-alt - Oxygen Regular/400 48px 55LH #FFFFFF</h2>
          		<h3 class="mt-5">H3 - Oxygen Light/300 36px 43LH #2a2a2a</h3>
          		<h4 class="mt-5">H4 - Oxygen Bold/700 45px 48LH #2a2a2a</h4>
          		<h5 class="mt-5">H5 - Oxygen Bold/700 22px 26LH #2a2a2a</h5>
          		<h6 class="mt-5">H6 - Source Sans Pro Bold/700 20px 30LH #FFFFFF</h6>
          		<h6 class="h7 mt-5 mb-5">H7 - Open Sans Regular/400 18px 30LH #2a2a2a</h6>
          		<p class="mb-1">Body - Open Sans Regular/400 20px 30LH #2a2a2a</p>
          		<p>Body-alt - Open Sans Regular/400 20px 30LH #FFFFFF</p>
          		<p class="pr-5 mr-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora</p>
          		<p class="bc_font_alt_1 bc_text_normal bc_text_20 bc_line_height_30 bc_color_primary mb-5 text-uppercase">
          			<span class="d-block">Navigation - open sans regular/400 20px 30LH #2a2a2a & #FFFFFF</span>
	                <span class="d-flex flex-wrap">
                    <span class="pr-3">about us</span><span class="pr-3">services</span><span class="pr-3">resources</span><span class="pr-3">careers</span><span class="pr-3">contact us</span>
                  </span>
	            </p>
	            <p class="bc_font_default bc_text_normal bc_color_primary bc_line_height_24 bc_text_24 mb-2 text-uppercase">Footer Titles - Oxygen Regular/400 24px 24LH #2a2a2a</p>
	            <p>Footer Address - Open Sans Regular/400 20px 30LH #2a2a2a</p>
	            <p class="bc_font_default bc_text_normal bc_line_height_24 bc_text_22 text-uppercase mt-4">Buttons - Oxygen Regular/400 22px 24LH</p>
	            <div class="mt-5">
	            	<button class="btn btn-primary text-uppercase mr-4">button 1</button>
	            	<button class="btn text-uppercase bc_color_secondary_bg bc_color_secondary_hover_bg bc_color_white">button 1</button>
	            </div>
	            <div class="mt-4">
	            	<button class="btn btn-secondary text-uppercase mr-4">button 2</button>
	            	<button class="btn text-uppercase bc_color_brown_bg bc_color_brown_hover_bg bc_color_white brown_border">button 2</button>
	            </div>
            </div>   

            <div class="col-lg-12 mt-4">
          		<span class="bc_text_26 bc_line_height_40 d-block mt-5 bc_font_alt_1 bc_text_bold bc_color_primary">MOBILE STYLING</span>
          		<h1 class="mt-5 bc_text_32 bc_line_height_34">H1 - Oxygen Bold/700 32px 34LH #2a2a2a</h1>
          		<h2 class="mt-4 bc_text_26 bc_line_height_30">H2 - Oxygen Regular/400 26px 30LH #2a2a2a</h2>
          		<h2 class="mt-3 bc_text_26 bc_line_height_30">H2-alt - Oxygen Regular/400 26px 30LH #FFFFFF</h2>
          		<h3 class="mt-4 bc_text_22 bc_line_height_30">H3 - Oxygen Light/300 22px 30LH #2a2a2a</h3>
          		<h4 class="mt-4 bc_text_30 bc_line_height_32">H4 - Oxygen Bold/700 30px 32LH #2a2a2a</h4>
          		<h5 class="mt-4 bc_text_20 bc_line_height_24">H5 - Oxygen Bold/700 20px 24LH #2a2a2a</h5>
          		<h6 class="mt-4 bc_line_height_20 bc_text_18">H6 - Source Sans Pro Bold/700 18px 20LH #FFFFFF</h6>
          		<p class="mb-1 mt-4 bc_text_16">Body - Open Sans Regular/400 16px 30LH #2a2a2a</p>
          		<p class="bc_text_16">Body-alt - Open Sans Regular/400 16px 30LH #FFFFFF</p>
          		<p class="pr-5 mr-5 mb-5 bc_text_16">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
          		<p class="bc_font_alt_1 bc_text_normal bc_text_20 bc_line_height_30 bc_color_primary mb-5 text-uppercase">
          			<span class="d-block">Navigation - open sans regular/400 20px 60LH #2a2a2a & #2a2a2a</span>
	                <span class="d-flex flex-wrap">
                    <span class="pr-3">about us</span><span class="pr-3">services</span><span class="pr-3">resources</span><span class="pr-3">careers</span><span class="pr-3">contact us</span>
                  </span>
	            </p>
	            <p class="bc_font_default bc_text_normal bc_color_primary bc_text_17 bc_line_height_17 mb-2 text-uppercase">Footer Titles - Oxygen Regular/400 17px 17LH #2a2a2a</p>
	            <p class="bc_text_16 bc_line_height_20">Footer Address - Open Sans Regular/400 16px 20LH #2a2a2a</p>
	            <p class="bc_font_default bc_text_normal bc_line_height_20 bc_text_18 text-uppercase mt-4">Buttons - Oxygen Regular/400 18px 20LH </p>
	           
            </div>             
        </div>
      </div>
    </div>
</main>
<?php get_footer();?>
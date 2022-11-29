<?php

add_filter('use_block_editor_for_post', '__return_false', 10);

if ( !is_admin() ) wp_deregister_script('jquery');

add_action('init','add_cors_http_header');
function add_cors_http_header(){
    header("Access-Control-Allow-Origin: *");
}

// add_action( 'wp_enqueue_scripts', 'wp_enqueue_jquerycdn');

// Add scripts and stylesheets
function startwordpress_scripts() {
	// bootstrap css
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );

	// blog css
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );

	// owlCarousel.min css
	wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.min.css', '', '2.3.4');

	// owl.theme css
	wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/css/owl.theme.default.min.css' );

	// lightslider css
	wp_enqueue_style( 'lightslider', get_template_directory_uri() . '/css/lightslider.css', '', '1.1.3');

	// load jquery before other scripts
	wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', '', '3.3.1', true);

	// OwlCarousel js
	wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.min.js', '', '2.3.4');

	// bootstrap js
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery_b' ), '3.3.6', true );

	// JS script
	wp_enqueue_script( 'js', get_template_directory_uri() . '/js/script.js' );

	// lightslider js
//	wp_enqueue_script( 'lightslider', get_template_directory_uri() . '/js/lightslider.js', '', '1.1.3');
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );


// Enqueue Font Awesome 5 in WordPress
function enqueue_fa() {
	  wp_enqueue_script( 'load-fa', 'https://kit.fontawesome.com/44cb7345ca.js?ver=5.9.3' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_fa');

// Add Google Fonts
function startwordpress_google_fonts() {
	wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
	wp_enqueue_style( 'OpenSans');
}

add_action('wp_print_styles', 'startwordpress_google_fonts');

// WordPress Titles
add_theme_support( 'title-tag' );

// Custom settings
function custom_settings_add_menu() {
	add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
	<div class="wrap">
		<h1>Custom Settings</h1>
		<form method="post" action="options.php">
				<?php
						settings_fields( 'section' );
						do_settings_sections( 'theme-options' );
						submit_button();
				?>
		</form>
	</div>
<?php }
// Twitter
function setting_twitter() { ?>
	<input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

// Facebook
function setting_github() { ?>
	<input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
<?php }

//Facebook
function setting_facebook() { ?>
	<input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
<?php }

function custom_settings_page_setup() {
	add_settings_section( 'section', 'All Settings', null, 'theme-options' );
  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
  add_settings_field( 'github', 'GitHub URL', 'setting_github', 'theme-options', 'section' );
  add_settings_field( 'facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section' );

  register_setting( 'section', 'twitter' );
  register_setting( 'section', 'github' );
  register_setting( 'section', 'facebook' );
}
add_action( 'admin_init', 'custom_settings_page_setup' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Custom Post Type
function create_shutter_post() {
	register_post_type( 'shutter-post',
			array(
			'labels' => array(
	'name' => __( 'Shutter Collections' ),
	'singular_name' => __( 'Shutter Collection' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
	'title',
	'editor',
	'thumbnail',
	'custom-fields'
			)
	));
}
add_action( 'init', 'create_shutter_post' );

//add menu
function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

function wpb_footer_nav_one(){
	register_nav_menu('footer-nav-one',__( 'My Footer Nav One' ));
}
add_action( 'init', 'wpb_footer_nav_one' );

function wpb_footer_nav_two(){
	register_nav_menu('footer-nav-two',__( 'My Footer Nav Two' ));
}
add_action( 'init', 'wpb_footer_nav_two' );

function mytheme_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );

 ?>

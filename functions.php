<?php
/**
 * Theme functions and definitions
 */

if ( ! class_exists( 'ACF' ) ) {
	return;
}

/**
 * Initialize styles/scripts
 */
function add_theme_scripts() {
	$templateUri    = get_template_directory_uri();
	$googleFontsURI = 'https://fonts.googleapis.com/css2?display=swap';

	wp_enqueue_style( 'comfortaa', "{$googleFontsURI}&family=Comfortaa:wght@400;600" );

	wp_enqueue_style( 'main', "$templateUri/css/main.min.css", [],
		filemtime( get_stylesheet_directory() . '/css/main.min.css' ) );
	wp_enqueue_style( 'tailwind', "$templateUri/css/tailwind.min.css", [],
		filemtime( get_stylesheet_directory() . '/css/tailwind.min.css' ) );
	wp_enqueue_script( 'main', "$templateUri/js/app.min.js", [],
		filemtime( get_stylesheet_directory() . '/js/app.min.js' ), true );

	wp_localize_script( 'main', 'backend_data', [
		'ajaxurl' => admin_url( 'admin-ajax.php' ),
	] );
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


/**
 * Add features and image sizes
 */
add_action( 'after_setup_theme', function () {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );   // Gutenberg responsive embeds

	add_image_size( 'full-hd', 1920 );
} );


/**
 * Menus init
 */
function register_menus() {
	register_nav_menus( [
		'header'  => 'Header Menu',
		'sidebar' => 'Sidebar Menu',
		'footer'  => 'Footer Menu',
	] );
}

add_action( 'init', 'register_menus' );


function get_social_link( $social_name ) {
	$post_link  = urlencode( get_the_permalink() );
	$post_title = get_the_title();

	$share_links = [
		'vk'       => "https://vk.com/share.php?url=$post_link",
		'facebook' => "https://www.facebook.com/sharer/sharer.php?u=$post_link",
		'twitter'  => "https://twitter.com/intent/tweet?url=$post_link&text=$post_title",
		'ok'       => "https://connect.ok.ru/offer?url=$post_link&title=$post_title&imageUrl=" . get_the_post_thumbnail_url( 'large' ),
		'linkedin' => "https://www.linkedin.com/shareArticle?mini=true&url=$post_link&title=$post_title&source=LinkedIn",
	];

	return $share_links[ $social_name ];
}


function get_section( $args ) {
	ob_start();
	get_template_part( 'template-parts/section/' . $args['name'], '' );

	return ob_get_clean();
}

add_shortcode( 'section', 'get_section' );

function set_archive_title( $title ) {
	global $wp_query;

	if ( isset( $wp_query->query_vars['post_type'] ) ) {
		$title = get_post_type_labels( get_post_type_object( $wp_query->query_vars['post_type'] ) )->archives;
	}

	return $title;
}

add_action( 'get_the_archive_title', 'set_archive_title' );

function wrap_surname( $name ) {
	return substr_replace( $name, ' <span>', strpos( $name, ' ' ),
			1 ) . '</span>';
}

add_filter( 'wrap_surname', 'wrap_surname', 10, 1 );


function utm_inputs() {
	$utm_tags = [
		'utm_source',
		'utm_medium',
		'utm_campaign',
		'utm_content',
		'utm_term',
	];

	$html = '';
	foreach ( $utm_tags as $utm_tag ) {
		if ( isset( $_GET[ $utm_tag ] ) ) {
			$html .= "<input type='hidden' name='$utm_tag' value='$_GET[$utm_tag]'>\n";
		}
	}

	return $html;
}

add_shortcode( 'utm_inputs', 'utm_inputs' );


function the_cost() {
	echo get_field( 'pricelist' )['normal'] . "&#8381;";
}


function the_age() {
	echo get_field( 'age' ) . "+";
}


/**
 * System reconfiguration
 */
require get_parent_theme_file_path( '/inc/helpers.php' );
require get_parent_theme_file_path( '/inc/system-bans.php' );
require get_parent_theme_file_path( '/inc/type-attraction.php' );

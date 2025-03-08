<?php
/**
 * Martanda WordPress theme.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Set our theme version.
define( 'MARTANDA_VERSION', '1.1.3' );

if ( ! function_exists( 'martanda_setup' ) ) {
	add_action( 'after_setup_theme', 'martanda_setup' );
	// Sets up theme defaults and registers support for various WordPress features.
	function martanda_setup() {
		// Make theme available for translation.
		load_theme_textdomain( 'martanda' );

		// Add theme support for various features.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption' ) );
		
		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'custom-line-height' );
		add_theme_support( 'custom-spacing' );
		add_theme_support( 'block-template-parts' );
		add_theme_support( 'editor-styles' );

		add_editor_style( 'style.min.css' );
		
	}
}

if ( ! function_exists( 'martanda_background_setup' ) ) {
	add_action( 'after_setup_theme', 'martanda_background_setup' );
	// Sets up background defaults and registers support for WordPress features.
	function martanda_background_setup() {		
		add_theme_support( "custom-background",
			array(
				'default-color' 		 => 'ffffff',
				'default-image'          => '',
				'default-repeat'         => 'repeat',
				'default-position-x'     => 'left',
				'default-position-y'     => 'top',
				'default-size'           => 'auto',
				'default-attachment'     => '',
				'wp-head-callback'       => '_custom_background_cb',
				'admin-head-callback'    => '',
				'admin-preview-callback' => ''
			)
		);
	}
}

// Get all necessary theme files
get_template_part( 'inc/theme', 'functions' );
get_template_part( 'inc/defaults' );
get_template_part( 'inc/class', 'css' );
get_template_part( 'inc/css', 'output' );
get_template_part( 'inc/customizer' );
get_template_part( 'inc/markup' );
get_template_part( 'inc/element', 'classes' );
get_template_part( 'inc/typography' );
get_template_part( 'inc/class-tgm-plugin', 'activation' );

if ( is_admin() ) {
	require get_template_directory() . '/inc/meta-box.php';
	require get_template_directory() . '/inc/dashboard.php';
}

// Load our theme structure
get_template_part( 'inc/structure/footer' );
get_template_part( 'inc/structure/header' );
get_template_part( 'inc/structure/social', 'bar' );

if ( ! function_exists( 'martanda_theme_uri_link' ) ) {
	function martanda_theme_uri_link() {
		return 'https://wpkoi.com/martanda-wpkoi-wordpress-theme/';
	}
}

if ( ! function_exists( 'martanda_menu_docs_link' ) ) {
	function martanda_menu_docs_link() {
		return 'https://wpkoi.com/docs/edit-top-bar-and-header-template-parts/';
	}
}

define('MARTANDA_THEME_URL','https://wpkoi.com/martanda-wpkoi-wordpress-theme/');
define('MARTANDA_WPKOI_AUTHOR_URL','https://wpkoi.com/');
define('MARTANDA_WPKOI_SOCIAL_URL','https://www.facebook.com/wpkoithemes/');
define('MARTANDA_WPKOI_WPORG_URL','https://wordpress.org/themes/author/wpkoithemes/');
define('MARTANDA_WPKOI_DRIBBLE_URL','https://dribbble.com/wpkoi');
define('MARTANDA_WPKOI_BEHANCE_URL','https://www.behance.net/wpkoi');
define('MARTANDA_WORDPRESS_REVIEW','https://wordpress.org/support/theme/martanda/reviews/?filter=5');
define('MARTANDA_DOCUMENTATION','https://wpkoi.com/docs/');
define('MARTANDA_IMPORT','https://wpkoi.com/docs/import-free-content/');
define('MARTANDA_ELEMENTOR_DOCS','https://elementor.com/help/');
define('MARTANDA_SHOWCASE','https://wpkoi.com/docs/explore-our-wpkoi-wordpress-themes-with-template-parts/');
define('MARTANDA_FONT_AWESOME_LINK','https://fontawesome.com/icons');

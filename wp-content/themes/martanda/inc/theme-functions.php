<?php
/**
 * Main theme functions.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'martanda_get_setting' ) ) {
	// A wrapper function to get our settings.
	function martanda_get_setting( $setting ) {
		$martanda_settings = wp_parse_args(
			get_option( 'martanda_settings', array() ),
			martanda_get_defaults()
		);

		return $martanda_settings[ $setting ];
	}
}

if ( ! function_exists( 'martanda_scripts' ) ) {
	add_action( 'wp_enqueue_scripts', 'martanda_scripts' );
	/**
	 * Enqueue scripts and styles
	 */
	function martanda_scripts() {
		$martanda_settings = wp_parse_args(
			get_option( 'martanda_settings', array() ),
			martanda_get_defaults()
		);

		$dir_uri = get_template_directory_uri();

		wp_enqueue_style( 'martanda-style', $dir_uri . "/style.min.css", array( 'wp-block-library' ), MARTANDA_VERSION, 'all' );

		if ( is_child_theme() ) {
			wp_enqueue_style( 'martanda-child', get_stylesheet_uri(), array( 'martanda-style' ), filemtime( get_stylesheet_directory() . '/style.css' ), 'all' );
		}

		if ( 'enable' == $martanda_settings['back_to_top'] ) {
			wp_enqueue_script( 'martanda-back-to-top', $dir_uri . "/js/back-to-top.min.js", array(), MARTANDA_VERSION, true );
		}
	}
}


<?php
/**
 * Adds HTML markup.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'martanda_body_schema' ) ) {
	/**
	 * Figure out which schema tags to apply to the <body> element.
	 *
	 */
	function martanda_body_schema() {
		// Set up blog variable
		$blog = ( is_home() || is_archive() || is_attachment() || is_tax() || is_single() ) ? true : false;

		// Set up default itemtype
		$itemtype = 'WebPage';

		// Get itemtype for the blog
		$itemtype = ( $blog ) ? 'Blog' : $itemtype;

		// Get itemtype for search results
		$itemtype = ( is_search() ) ? 'SearchResultsPage' : $itemtype;

		// Get the result
		$result = apply_filters( 'martanda_body_itemtype', $itemtype );

		// Return our HTML
		echo "itemtype='https://schema.org/" . esc_html( $result ) . "' itemscope='itemscope'"; 
	}
}

if ( ! function_exists( 'martanda_body_classes' ) ) {
	add_filter( 'body_class', 'martanda_body_classes' );
	/**
	 * Adds custom classes to the array of body classes.
	 *
	 */
	function martanda_body_classes( $classes ) {
		// Get Customizer settings
		$martanda_settings = wp_parse_args(
			get_option( 'martanda_settings', array() ),
			martanda_get_defaults()
		);
		
		if ( $martanda_settings[ 'top_bar_mobile' ] == 'hide' ) {
			$classes[] = 'hide-mobile-top-bar';
		}
		
		if ( $martanda_settings[ 'enable_content_width' ] == 'enable' ) {
			$classes[] = 'martanda-content-container';
		}
		
		if ( $martanda_settings[ 'stylish_scrollbar' ] == 'enable' ) {
			$classes[] = 'martanda-scrollbar';
		}
		
		if ( ( $martanda_settings[ 'image_cursor' ] == 'enable' ) && ( $martanda_settings[ 'def_cursor_image' ] != '' ) && ( $martanda_settings[ 'pointer_cursor_image' ] != '' ) ) {
			$classes[] = 'martanda-image-cursor';
		}
		
		$content_link_dec = 'martanda-cld-enable'; 
		if ( isset( $martanda_settings['content_link_dec'] ) && ( $martanda_settings[ 'content_link_dec' ] == 'onhover' ) ) {
			$content_link_dec = 'martanda-cld-onhover';
		}
		if ( isset( $martanda_settings['content_link_dec'] ) && ( $martanda_settings[ 'content_link_dec' ] == 'disable' ) ) {
			$content_link_dec = 'martanda-cld-disable';
		}
		
		$classes[] = $content_link_dec;

		// Get the layout
		$layout = "no-sidebar";

		// Full width content
		// Used for page builders, sets the content to full width and removes the padding
		$full_width = get_post_meta( get_the_ID(), '_martanda-full-width-content', true );
		$classes[] = ( '' !== $full_width && false !== $full_width && is_singular() && 'true' == $full_width ) ? 'full-width-content' : '';

		// Contained content
		// Used for page builders, basically just removes the content padding
		$classes[] = ( '' !== $full_width && false !== $full_width && is_singular() && 'contained' == $full_width ) ? 'contained-content' : '';
	
		// Transparent header
		$transparent_header = get_post_meta( get_the_ID(), '_martanda-transparent-header', true );
		if ( $transparent_header == true ) {
			$classes[] = 'transparent-header';
		}

		return $classes;
	}
}

if ( ! function_exists( 'martanda_header_classes' ) ) {
	add_filter( 'martanda_header_class', 'martanda_header_classes' );
	// Adds custom classes to the header.
	function martanda_header_classes( $classes ) {
		$classes[] = 'site-header';

		return $classes;
	}
}

if ( ! function_exists( 'martanda_footer_classes' ) ) {
	add_filter( 'martanda_footer_class', 'martanda_footer_classes' );
	// Adds custom classes to the footer.
	function martanda_footer_classes( $classes ) {
		$classes[] = 'site-footer';

		return $classes;
	}
}

if ( ! function_exists( 'martanda_main_classes' ) ) {
	add_filter( 'martanda_main_class', 'martanda_main_classes' );
	// Adds custom classes to the <main> element
	function martanda_main_classes( $classes ) {
		$classes[] = 'site-main';
		return $classes;
	}
}

if ( ! function_exists( 'martanda_post_classes' ) ) {
	add_filter( 'post_class', 'martanda_post_classes' );
	function martanda_post_classes( $classes ) {
		if ( 'page' == get_post_type() ) {
			$classes = array_diff( $classes, array( 'hentry' ) );
		}

		return $classes;
	}
}

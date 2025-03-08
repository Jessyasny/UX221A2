<?php
/**
 * Builds filterable classes throughout the theme.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


if ( ! function_exists( 'martanda_content_class' ) ) {
	// Display the classes for the content.
	function martanda_content_class( $class = '' ) {
		// Separates classes with a single space, collates classes for post DIV
		echo 'class="' . esc_attr( join( ' ', martanda_get_content_class( $class ) ) ) . '"'; 
	}
}

if ( ! function_exists( 'martanda_get_content_class' ) ) {
	// Retrieve the classes for the content.
	function martanda_get_content_class( $class = '' ) {

		$classes = array();

		if ( !empty($class) ) {
			if ( !is_array( $class ) )
				$class = preg_split('#\s+#', $class);
			$classes = array_merge($classes, $class);
		}

		$classes = array_map('esc_attr', $classes);

		return apply_filters('martanda_content_class', $classes, $class);
	}
}

if ( ! function_exists( 'martanda_header_class' ) ) {
	// Display the classes for the header.
	function martanda_header_class( $class = '' ) {
		// Separates classes with a single space, collates classes for post DIV
		echo 'class="' . esc_attr( join( ' ', martanda_get_header_class( $class ) ) ) . '"'; 
	}
}

if ( ! function_exists( 'martanda_get_header_class' ) ) {
	// Retrieve the classes for the content.
	function martanda_get_header_class( $class = '' ) {

		$classes = array();

		if ( !empty($class) ) {
			if ( !is_array( $class ) )
				$class = preg_split('#\s+#', $class);
			$classes = array_merge($classes, $class);
		}

		$classes = array_map('esc_attr', $classes);

		return apply_filters('martanda_header_class', $classes, $class);
	}
}

if ( ! function_exists( 'martanda_container_class' ) ) {
	// Display the classes for the container.
	function martanda_container_class( $class = '' ) {
		// Separates classes with a single space, collates classes for post DIV
		echo 'class="' . esc_attr( join( ' ', martanda_get_container_class( $class ) ) ) . '"'; 
	}
}

if ( ! function_exists( 'martanda_get_container_class' ) ) {
	// Retrieve the classes for the content.
	function martanda_get_container_class( $class = '' ) {

		$classes = array();

		if ( !empty($class) ) {
			if ( !is_array( $class ) )
				$class = preg_split('#\s+#', $class);
			$classes = array_merge($classes, $class);
		}

		$classes = array_map('esc_attr', $classes);

		return apply_filters('martanda_container_class', $classes, $class);
	}
}

if ( ! function_exists( 'martanda_main_class' ) ) {
	// Display the classes for the <main> container.
	function martanda_main_class( $class = '' ) {
		// Separates classes with a single space, collates classes for post DIV
		echo 'class="' . esc_attr( join( ' ', martanda_get_main_class( $class ) ) ) . '"'; 
	}
}

if ( ! function_exists( 'martanda_get_main_class' ) ) {
	// Retrieve the classes for the footer.
	function martanda_get_main_class( $class = '' ) {

		$classes = array();

		if ( !empty($class) ) {
			if ( !is_array( $class ) )
				$class = preg_split('#\s+#', $class);
			$classes = array_merge($classes, $class);
		}

		$classes = array_map('esc_attr', $classes);

		return apply_filters('martanda_main_class', $classes, $class);
	}
}

if ( ! function_exists( 'martanda_footer_class' ) ) {
	// Display the classes for the footer.
	function martanda_footer_class( $class = '' ) {
		// Separates classes with a single space, collates classes for post DIV
		echo 'class="' . esc_attr( join( ' ', martanda_get_footer_class( $class ) ) ) . '"'; 
	}
}

if ( ! function_exists( 'martanda_get_footer_class' ) ) {
	// Retrieve the classes for the footer.
	function martanda_get_footer_class( $class = '' ) {

		$classes = array();

		if ( !empty($class) ) {
			if ( !is_array( $class ) )
				$class = preg_split('#\s+#', $class);
			$classes = array_merge($classes, $class);
		}

		$classes = array_map('esc_attr', $classes);

		return apply_filters('martanda_footer_class', $classes, $class);
	}
}


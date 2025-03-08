<?php
/**
 * Output all of our dynamic CSS.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'martanda_content_link_dec_default' ) ) {
	add_filter( 'martanda_option_defaults', 'martanda_content_link_dec_default', 10, 3 );
	/**
	 * Define defaults if is missing in earlier themes
	 */
	function martanda_content_link_dec_default( $martanda_defaults ) {
		
		$martanda_defaults['content_link_dec']	 = isset( $martanda_defaults['content_link_dec'] ) ? $martanda_defaults['content_link_dec'] : 'enable';
		
		// New font size values
		$martanda_defaults['mobile_body_font_size']	 = isset( $martanda_defaults['mobile_body_font_size'] ) ? $martanda_defaults['mobile_body_font_size'] : $martanda_defaults['body_font_size'];
		$martanda_defaults['mobile_fixed_side_font_size']	 = isset( $martanda_defaults['mobile_fixed_side_font_size'] ) ? $martanda_defaults['mobile_fixed_side_font_size'] : $martanda_defaults['fixed_side_font_size'];
		$martanda_defaults['mobile_buttons_font_size']	 = isset( $martanda_defaults['mobile_buttons_font_size'] ) ? $martanda_defaults['mobile_buttons_font_size'] : $martanda_defaults['buttons_font_size'];
		$martanda_defaults['mobile_heading_3_font_size']	 = isset( $martanda_defaults['mobile_heading_3_font_size'] ) ? $martanda_defaults['mobile_heading_3_font_size'] : $martanda_defaults['heading_3_font_size'];
		$martanda_defaults['mobile_heading_4_font_size']	 = isset( $martanda_defaults['mobile_heading_4_font_size'] ) ? $martanda_defaults['mobile_heading_4_font_size'] : $martanda_defaults['heading_4_font_size'];
		$martanda_defaults['mobile_heading_5_font_size']	 = isset( $martanda_defaults['mobile_heading_5_font_size'] ) ? $martanda_defaults['mobile_heading_5_font_size'] : $martanda_defaults['heading_5_font_size'];
		$martanda_defaults['mobile_heading_6_font_size']	 = isset( $martanda_defaults['mobile_heading_6_font_size'] ) ? $martanda_defaults['mobile_heading_6_font_size'] : $martanda_defaults['heading_6_font_size'];
		$martanda_defaults['mobile_footer_font_size']	 = isset( $martanda_defaults['mobile_footer_font_size'] ) ? $martanda_defaults['mobile_footer_font_size'] : $martanda_defaults['footer_font_size'];
		
		// Unit values if not defined
		$martanda_defaults['desktop_body_font_size_unit']	 = isset( $martanda_defaults['desktop_body_font_size_unit'] ) ? $martanda_defaults['desktop_body_font_size_unit'] : 'px';
		$martanda_defaults['mobile_body_font_size_unit']	 = isset( $martanda_defaults['mobile_body_font_size_unit'] ) ? $martanda_defaults['mobile_body_font_size_unit'] : 'px';
		$martanda_defaults['desktop_site_title_font_size_unit']	 = isset( $martanda_defaults['desktop_site_title_font_size_unit'] ) ? $martanda_defaults['desktop_site_title_font_size_unit'] : 'px';
		$martanda_defaults['mobile_site_title_font_size_unit']	 = isset( $martanda_defaults['mobile_site_title_font_size_unit'] ) ? $martanda_defaults['mobile_site_title_font_size_unit'] : 'px';
		$martanda_defaults['desktop_navigation_font_size_unit']	 = isset( $martanda_defaults['desktop_navigation_font_size_unit'] ) ? $martanda_defaults['desktop_navigation_font_size_unit'] : 'px';
		$martanda_defaults['tablet_navigation_font_size_unit']	 = isset( $martanda_defaults['tablet_navigation_font_size_unit'] ) ? $martanda_defaults['tablet_navigation_font_size_unit'] : 'px';
		$martanda_defaults['mobile_navigation_font_size_unit']	 = isset( $martanda_defaults['mobile_navigation_font_size_unit'] ) ? $martanda_defaults['mobile_navigation_font_size_unit'] : 'px';
		$martanda_defaults['desktop_fixed_side_font_size_unit']	 = isset( $martanda_defaults['desktop_fixed_side_font_size_unit'] ) ? $martanda_defaults['desktop_fixed_side_font_size_unit'] : 'px';
		$martanda_defaults['mobile_fixed_side_font_size_unit']	 = isset( $martanda_defaults['mobile_fixed_side_font_size_unit'] ) ? $martanda_defaults['mobile_fixed_side_font_size_unit'] : 'px';
		$martanda_defaults['desktop_buttons_font_size_unit']	 = isset( $martanda_defaults['desktop_buttons_font_size_unit'] ) ? $martanda_defaults['desktop_buttons_font_size_unit'] : 'px';
		$martanda_defaults['mobile_buttons_font_size_unit']	 = isset( $martanda_defaults['mobile_buttons_font_size_unit'] ) ? $martanda_defaults['mobile_buttons_font_size_unit'] : 'px';
		$martanda_defaults['desktop_heading_1_font_size_unit']	 = isset( $martanda_defaults['desktop_heading_1_font_size_unit'] ) ? $martanda_defaults['desktop_heading_1_font_size_unit'] : 'px';
		$martanda_defaults['mobile_heading_1_font_size_unit']	 = isset( $martanda_defaults['mobile_heading_1_font_size_unit'] ) ? $martanda_defaults['mobile_heading_1_font_size_unit'] : 'px';
		$martanda_defaults['desktop_heading_2_font_size_unit']	 = isset( $martanda_defaults['desktop_heading_2_font_size_unit'] ) ? $martanda_defaults['desktop_heading_2_font_size_unit'] : 'px';
		$martanda_defaults['mobile_heading_2_font_size_unit']	 = isset( $martanda_defaults['mobile_heading_2_font_size_unit'] ) ? $martanda_defaults['mobile_heading_2_font_size_unit'] : 'px';
		$martanda_defaults['desktop_heading_3_font_size_unit']	 = isset( $martanda_defaults['desktop_heading_3_font_size_unit'] ) ? $martanda_defaults['desktop_heading_3_font_size_unit'] : 'px';
		$martanda_defaults['mobile_heading_3_font_size_unit']	 = isset( $martanda_defaults['mobile_heading_3_font_size_unit'] ) ? $martanda_defaults['mobile_heading_3_font_size_unit'] : 'px';
		$martanda_defaults['desktop_heading_4_font_size_unit']	 = isset( $martanda_defaults['desktop_heading_4_font_size_unit'] ) ? $martanda_defaults['desktop_heading_4_font_size_unit'] : 'px';
		$martanda_defaults['mobile_heading_4_font_size_unit']	 = isset( $martanda_defaults['mobile_heading_4_font_size_unit'] ) ? $martanda_defaults['mobile_heading_4_font_size_unit'] : 'px';
		$martanda_defaults['desktop_heading_5_font_size_unit']	 = isset( $martanda_defaults['desktop_heading_5_font_size_unit'] ) ? $martanda_defaults['desktop_heading_5_font_size_unit'] : 'px';
		$martanda_defaults['mobile_heading_5_font_size_unit']	 = isset( $martanda_defaults['mobile_heading_5_font_size_unit'] ) ? $martanda_defaults['mobile_heading_5_font_size_unit'] : 'px';
		$martanda_defaults['desktop_heading_6_font_size_unit']	 = isset( $martanda_defaults['desktop_heading_6_font_size_unit'] ) ? $martanda_defaults['desktop_heading_6_font_size_unit'] : 'px';
		$martanda_defaults['mobile_heading_6_font_size_unit']	 = isset( $martanda_defaults['mobile_heading_6_font_size_unit'] ) ? $martanda_defaults['mobile_heading_6_font_size_unit'] : 'px';
		$martanda_defaults['desktop_footer_font_size_unit']	 = isset( $martanda_defaults['desktop_footer_font_size_unit'] ) ? $martanda_defaults['desktop_footer_font_size_unit'] : 'px';
		$martanda_defaults['mobile_footer_font_size_unit']	 = isset( $martanda_defaults['mobile_footer_font_size_unit'] ) ? $martanda_defaults['mobile_footer_font_size_unit'] : 'px';
		
		return $martanda_defaults;
	}
}

if ( ! function_exists( 'martanda_font_family_css' ) ) {
	function martanda_font_family_css() {
		
		// Get our settings
		$martanda_settings = wp_parse_args(
			get_option( 'martanda_settings', array() ),
			martanda_get_defaults()
		);

		// Initiate our class
		$css = new martanda_css;
		
		$og_defaults = martanda_get_defaults( false );
		
		$bodyclass = 'body';
		if ( is_admin() ) {
			$bodyclass = '.editor-styles-wrapper';
		}
		
		$bodyfont = $martanda_settings[ 'font_body' ];
		if ( $bodyfont == 'inherit' ) { $bodyfont = 'Josefin Sans'; }
		
		$font_site_title = $martanda_settings[ 'font_site_title' ];
		if ( $font_site_title == 'inherit' ) { $font_site_title = 'Josefin Sans'; }
		$font_navigation = $martanda_settings[ 'font_navigation' ];
		if ( $font_navigation == 'inherit' ) { $font_navigation = 'Josefin Sans'; }
		$font_buttons = $martanda_settings[ 'font_buttons' ];
		if ( $font_buttons == 'inherit' ) { $font_buttons = 'Josefin Sans'; }
		$font_heading_1 = $martanda_settings[ 'font_heading_1' ];
		if ( $font_heading_1 == 'inherit' ) { $font_heading_1 = 'Josefin Sans'; }
		$font_heading_2 = $martanda_settings[ 'font_heading_2' ];
		if ( $font_heading_2 == 'inherit' ) { $font_heading_2 = 'Josefin Sans'; }
		$font_heading_3 = $martanda_settings[ 'font_heading_3' ];
		if ( $font_heading_3 == 'inherit' ) { $font_heading_3 = 'Josefin Sans'; }
		$font_heading_4 = $martanda_settings[ 'font_heading_4' ];
		if ( $font_heading_4 == 'inherit' ) { $font_heading_4 = 'Josefin Sans'; }
		$font_heading_5 = $martanda_settings[ 'font_heading_5' ];
		if ( $font_heading_5 == 'inherit' ) { $font_heading_5 = 'Josefin Sans'; }
		$font_heading_6 = $martanda_settings[ 'font_heading_6' ];
		if ( $font_heading_6 == 'inherit' ) { $font_heading_6 = 'Josefin Sans'; }
		$font_footer = $martanda_settings[ 'font_footer' ];
		if ( $font_footer == 'inherit' ) { $font_footer = 'Josefin Sans'; }
		$font_fixed_side = $martanda_settings[ 'font_fixed_side' ];
		if ( $font_fixed_side == 'inherit' ) { $font_fixed_side = 'Josefin Sans'; }
		
		$css->set_selector( $bodyclass );
		$css->add_property( '--martanda--font-body', esc_attr( $bodyfont ) );
		$css->add_property( '--martanda--font-site-title', esc_attr( $font_site_title ) );
		$css->add_property( '--martanda--font-navigation', esc_attr( $font_navigation ) );
		$css->add_property( '--martanda--font-buttons', esc_attr( $font_buttons ) );
		$css->add_property( '--martanda--font-heading-1', esc_attr( $font_heading_1 ) );
		$css->add_property( '--martanda--font-heading-2', esc_attr( $font_heading_2 ) );
		$css->add_property( '--martanda--font-heading-3', esc_attr( $font_heading_3 ) );
		$css->add_property( '--martanda--font-heading-4', esc_attr( $font_heading_4 ) );
		$css->add_property( '--martanda--font-heading-5', esc_attr( $font_heading_5 ) );
		$css->add_property( '--martanda--font-heading-6', esc_attr( $font_heading_6 ) );
		$css->add_property( '--martanda--font-footer', esc_attr( $font_footer ) );
		$css->add_property( '--martanda--font-fixed-side', esc_attr( $font_fixed_side ) );
		
		// Allow us to hook CSS into our output
		do_action( 'martanda_font_family_css', $css );

		return apply_filters( 'martanda_font_family_css_output', $css->css_output() );
	}
}

if ( ! function_exists( 'martanda_base_css' ) ) {
	/**
	 * Generate the CSS in the <head> section using the Theme Customizer.
	 *
	 */
	function martanda_base_css() {
		// Get our settings
		$martanda_settings = wp_parse_args(
			get_option( 'martanda_settings', array() ),
			martanda_get_defaults()
		);
		$body_background = '#' . get_background_color();

		// Initiate our class
		$css = new martanda_css;
		
		$og_defaults = martanda_get_defaults( false );
		
		$bodyclass = 'body';
		if ( is_admin() ) {
			$bodyclass = '.editor-styles-wrapper';
		}
		
		$desktop_body_font_size_unit = isset( $martanda_settings['desktop_body_font_size_unit'] ) ? $martanda_settings['desktop_body_font_size_unit'] : $og_defaults[ 'desktop_body_font_size_unit' ];
		$mobile_body_font_size_unit = isset( $martanda_settings['mobile_body_font_size_unit'] ) ? $martanda_settings['mobile_body_font_size_unit'] : $og_defaults[ 'mobile_body_font_size_unit' ];
		$desktop_site_title_font_size_unit = isset( $martanda_settings['desktop_site_title_font_size_unit'] ) ? $martanda_settings['desktop_site_title_font_size_unit'] : $og_defaults[ 'desktop_site_title_font_size_unit' ];
		$mobile_site_title_font_size_unit = isset( $martanda_settings['mobile_site_title_font_size_unit'] ) ? $martanda_settings['mobile_site_title_font_size_unit'] : $og_defaults[ 'mobile_site_title_font_size_unit' ];
		$desktop_navigation_font_size_unit = isset( $martanda_settings['desktop_navigation_font_size_unit'] ) ? $martanda_settings['desktop_navigation_font_size_unit'] : $og_defaults[ 'desktop_navigation_font_size_unit' ];
		$tablet_navigation_font_size_unit = isset( $martanda_settings['tablet_navigation_font_size_unit'] ) ? $martanda_settings['tablet_navigation_font_size_unit'] : $og_defaults[ 'tablet_navigation_font_size_unit' ];
		$mobile_navigation_font_size_unit = isset( $martanda_settings['mobile_navigation_font_size_unit'] ) ? $martanda_settings['mobile_navigation_font_size_unit'] : $og_defaults[ 'mobile_navigation_font_size_unit' ];
		$desktop_buttons_font_size_unit = isset( $martanda_settings['desktop_buttons_font_size_unit'] ) ? $martanda_settings['desktop_buttons_font_size_unit'] : $og_defaults[ 'desktop_buttons_font_size_unit' ];
		$mobile_buttons_font_size_unit = isset( $martanda_settings['mobile_buttons_font_size_unit'] ) ? $martanda_settings['mobile_buttons_font_size_unit'] : $og_defaults[ 'mobile_buttons_font_size_unit' ];
		$desktop_heading_1_font_size_unit = isset( $martanda_settings['desktop_heading_1_font_size_unit'] ) ? $martanda_settings['desktop_heading_1_font_size_unit'] : $og_defaults[ 'desktop_heading_1_font_size_unit' ];
		$mobile_heading_1_font_size_unit = isset( $martanda_settings['mobile_heading_1_font_size_unit'] ) ? $martanda_settings['mobile_heading_1_font_size_unit'] : $og_defaults[ 'mobile_heading_1_font_size_unit' ];
		$desktop_heading_2_font_size_unit = isset( $martanda_settings['desktop_heading_2_font_size_unit'] ) ? $martanda_settings['desktop_heading_2_font_size_unit'] : $og_defaults[ 'desktop_heading_2_font_size_unit' ];
		$mobile_heading_2_font_size_unit = isset( $martanda_settings['mobile_heading_2_font_size_unit'] ) ? $martanda_settings['mobile_heading_2_font_size_unit'] : $og_defaults[ 'mobile_heading_2_font_size_unit' ];
		$desktop_heading_3_font_size_unit = isset( $martanda_settings['desktop_heading_3_font_size_unit'] ) ? $martanda_settings['desktop_heading_3_font_size_unit'] : $og_defaults[ 'desktop_heading_3_font_size_unit' ];
		$mobile_heading_3_font_size_unit = isset( $martanda_settings['mobile_heading_3_font_size_unit'] ) ? $martanda_settings['mobile_heading_3_font_size_unit'] : $og_defaults[ 'mobile_heading_3_font_size_unit' ];
		$desktop_heading_4_font_size_unit = isset( $martanda_settings['desktop_heading_4_font_size_unit'] ) ? $martanda_settings['desktop_heading_4_font_size_unit'] : $og_defaults[ 'desktop_heading_4_font_size_unit' ];
		$mobile_heading_4_font_size_unit = isset( $martanda_settings['mobile_heading_4_font_size_unit'] ) ? $martanda_settings['mobile_heading_4_font_size_unit'] : $og_defaults[ 'mobile_heading_4_font_size_unit' ];
		$desktop_heading_5_font_size_unit = isset( $martanda_settings['desktop_heading_5_font_size_unit'] ) ? $martanda_settings['desktop_heading_5_font_size_unit'] : $og_defaults[ 'desktop_heading_5_font_size_unit' ];
		$mobile_heading_5_font_size_unit = isset( $martanda_settings['mobile_heading_5_font_size_unit'] ) ? $martanda_settings['mobile_heading_5_font_size_unit'] : $og_defaults[ 'mobile_heading_5_font_size_unit' ];
		$desktop_heading_6_font_size_unit = isset( $martanda_settings['desktop_heading_6_font_size_unit'] ) ? $martanda_settings['desktop_heading_6_font_size_unit'] : $og_defaults[ 'desktop_heading_6_font_size_unit' ];
		$mobile_heading_6_font_size_unit = isset( $martanda_settings['mobile_heading_6_font_size_unit'] ) ? $martanda_settings['mobile_heading_6_font_size_unit'] : $og_defaults[ 'mobile_heading_6_font_size_unit' ];
		$desktop_footer_font_size_unit = isset( $martanda_settings['desktop_footer_font_size_unit'] ) ? $martanda_settings['desktop_footer_font_size_unit'] : $og_defaults[ 'desktop_footer_font_size_unit' ];
		$mobile_footer_font_size_unit = isset( $martanda_settings['mobile_footer_font_size_unit'] ) ? $martanda_settings['mobile_footer_font_size_unit'] : $og_defaults[ 'mobile_footer_font_size_unit' ];
		$desktop_fixed_side_font_size_unit = isset( $martanda_settings['desktop_fixed_side_font_size_unit'] ) ? $martanda_settings['desktop_fixed_side_font_size_unit'] : $og_defaults[ 'desktop_fixed_side_font_size_unit' ];
		$mobile_fixed_side_font_size_unit = isset( $martanda_settings['mobile_fixed_side_font_size_unit'] ) ? $martanda_settings['mobile_fixed_side_font_size_unit'] : $og_defaults[ 'mobile_fixed_side_font_size_unit' ];
		
		$css->set_selector( $bodyclass );
		$css->add_property( '--martanda--body-background', esc_attr( $body_background ) );
		$css->add_property( '--martanda--text-color', esc_attr( $martanda_settings[ 'text_color' ] ) );
		$css->add_property( '--martanda--link-color', esc_attr( $martanda_settings[ 'link_color' ] ) );
		$css->add_property( '--martanda--link-color-hover', esc_attr( $martanda_settings[ 'link_color_hover' ] ) );
		$css->add_property( '--martanda--side-inside-color', esc_attr( $martanda_settings[ 'side_inside_color' ] ) );
		$css->add_property( '--martanda--header-background-color', esc_attr( $martanda_settings[ 'header_background_color' ] ) );
		$css->add_property( '--martanda--header-text-color', esc_attr( $martanda_settings[ 'header_text_color' ] ) );
		$css->add_property( '--martanda--header-link-color', esc_attr( $martanda_settings[ 'header_link_color' ] ) );
		$css->add_property( '--martanda--header-link-hover-color', esc_attr( $martanda_settings[ 'header_link_hover_color' ] ) );
		$css->add_property( '--martanda--sticky-header-background-color', esc_attr( $martanda_settings[ 'sticky_header_background_color' ] ) );
		$css->add_property( '--martanda--site-title-color', esc_attr( $martanda_settings[ 'site_title_color' ] ) );
		
		$css->add_property( '--martanda--navigation-background-color', esc_attr( $martanda_settings[ 'navigation_background_color' ] ) );
		$css->add_property( '--martanda--navigation-text-color', esc_attr( $martanda_settings[ 'navigation_text_color' ] ) );
		$css->add_property( '--martanda--navigation-background-hover-color', esc_attr( $martanda_settings[ 'navigation_background_hover_color' ] ) );
		$css->add_property( '--martanda--navigation-text-hover-color', esc_attr( $martanda_settings[ 'navigation_text_hover_color' ] ) );
		$css->add_property( '--martanda--navigation-text-current_color', esc_attr( $martanda_settings[ 'navigation_text_current_color' ] ) );
		$css->add_property( '--martanda--navigation-background-current-color', esc_attr( $martanda_settings[ 'navigation_background_current_color' ] ) );
		
		$css->add_property( '--martanda--subnavigation-background-color', esc_attr( $martanda_settings[ 'subnavigation_background_color' ] ) );
		$css->add_property( '--martanda--subnavigation-text-color', esc_attr( $martanda_settings[ 'subnavigation_text_color' ] ) );
		$css->add_property( '--martanda--subnavigation-background-hover-color', esc_attr( $martanda_settings[ 'subnavigation_background_hover_color' ] ) );
		$css->add_property( '--martanda--subnavigation-text-hover-color', esc_attr( $martanda_settings[ 'subnavigation_text_hover_color' ] ) );
		$css->add_property( '--martanda--subnavigation-text-current-color', esc_attr( $martanda_settings[ 'subnavigation_text_current_color' ] ) );
		$css->add_property( '--martanda--subnavigation-background-current-color', esc_attr( $martanda_settings[ 'subnavigation_background_current_color' ] ) );		
		$css->add_property( '--martanda--form-button-background-color', esc_attr( $martanda_settings[ 'form_button_background_color' ] ) );
		$css->add_property( '--martanda--form-button-background-color-hover', esc_attr( $martanda_settings[ 'form_button_background_color_hover' ] ) );
		$css->add_property( '--martanda--form-button-text-color', esc_attr( $martanda_settings[ 'form_button_text_color' ] ) );
		$css->add_property( '--martanda--form-button-text-color-hover', esc_attr( $martanda_settings[ 'form_button_text_color_hover' ] ) );
		$css->add_property( '--martanda--form-button-border-color', esc_attr( $martanda_settings[ 'form_button_border_color' ] ) );
		$css->add_property( '--martanda--form-button-border-color-hover', esc_attr( $martanda_settings[ 'form_button_border_color_hover' ] ) );
		$css->add_property( '--martanda--fixed-side-content-background-color', esc_attr( $martanda_settings[ 'fixed_side_content_background_color' ] ) );
		$css->add_property( '--martanda--fixed-side-content-text-color', esc_attr( $martanda_settings[ 'fixed_side_content_text_color' ] ) );
		$css->add_property( '--martanda--fixed-side-content-link-color', esc_attr( $martanda_settings[ 'fixed_side_content_link_color' ] ) );
		$css->add_property( '--martanda--fixed-side-content-link-hover-color', esc_attr( $martanda_settings[ 'fixed_side_content_link_hover_color' ] ) );
		$css->add_property( '--martanda--back-to-top-background-color', esc_attr( $martanda_settings[ 'back_to_top_background_color' ] ) );
		$css->add_property( '--martanda--back-to-top-text-color', esc_attr( $martanda_settings[ 'back_to_top_text_color' ] ) );
		$css->add_property( '--martanda--back-to-top-background-color-hover', esc_attr( $martanda_settings[ 'back_to_top_background_color_hover' ] ) );
		$css->add_property( '--martanda--back-to-top-text-color-hover', esc_attr( $martanda_settings[ 'back_to_top_text_color_hover' ] ) );
		$css->add_property( '--martanda--form-text-color', esc_attr( $martanda_settings[ 'form_text_color' ] ) );
		$css->add_property( '--martanda--form-background-color', esc_attr( $martanda_settings[ 'form_background_color' ] ) );
		$css->add_property( '--martanda--form-border-color', esc_attr( $martanda_settings[ 'form_border_color' ] ) );
		$css->add_property( '--martanda--form-background-color-focus', esc_attr( $martanda_settings[ 'form_background_color_focus' ] ) );
		$css->add_property( '--martanda--form-text-color-focus', esc_attr( $martanda_settings[ 'form_text_color_focus' ] ) );
		$css->add_property( '--martanda--form-border-color-focus', esc_attr( $martanda_settings[ 'form_border_color_focus' ] ) );
		$css->add_property( '--martanda--footer-text-color', esc_attr( $martanda_settings[ 'footer_text_color' ] ) );
		$css->add_property( '--martanda--footer-background-color', esc_attr( $martanda_settings[ 'footer_background_color' ] ) );
		$css->add_property( '--martanda--footer-link-color', esc_attr( $martanda_settings[ 'footer_link_color' ] ) );
		$css->add_property( '--martanda--footer-link-hover-color', esc_attr( $martanda_settings[ 'footer_link_hover_color' ] ) );
		$css->add_property( '--martanda--scrollbar-track-color', esc_attr( $martanda_settings[ 'scrollbar_track_color' ] ) );
		$css->add_property( '--martanda--scrollbar-thumb-color', esc_attr( $martanda_settings[ 'scrollbar_thumb_color' ] ) );
		$css->add_property( '--martanda--scrollbar-thumb-hover-color', esc_attr( $martanda_settings[ 'scrollbar_thumb_hover_color' ] ) );		
		$css->add_property( '--martanda--wc-sale-sticker-background', esc_attr( $martanda_settings[ 'wc_sale_sticker_background' ] ) );
		$css->add_property( '--martanda--wc-sale-sticker-text', esc_attr( $martanda_settings[ 'wc_sale_sticker_text' ] ) );
		$css->add_property( '--martanda--wc-price-color', esc_attr( $martanda_settings[ 'wc_price_color' ] ) );
		$css->add_property( '--martanda--wc-product-tab', esc_attr( $martanda_settings[ 'wc_product_tab' ] ) );
		$css->add_property( '--martanda--wc-product-tab-highlight', esc_attr( $martanda_settings[ 'wc_product_tab_highlight' ] ) );		
		$css->add_property( '--martanda--button-border-style', esc_attr( $martanda_settings[ 'button_border_style' ] ), $og_defaults[ 'button_border_style' ] );
		$css->add_property( '--martanda--button-border', esc_attr( $martanda_settings[ 'button_border' ] ), $og_defaults[ 'button_border' ], 'px' );
		$css->add_property( '--martanda--button-radius', esc_attr( $martanda_settings[ 'button_radius' ] ), $og_defaults[ 'button_radius' ], 'px' );
		$css->add_property( '--martanda--button-rotate', 'rotate(' . esc_attr( $martanda_settings[ 'button_rotate' ] ), 'rotate(' . esc_attr( $og_defaults[ 'button_rotate' ] ), 'deg)' );
		$css->add_property( '--martanda--fixed-side-margin-top', absint( $martanda_settings[ 'fixed_side_margin_top' ] ), $og_defaults[ 'fixed_side_margin_top' ], 'px' );
		$css->add_property( '--martanda--fixed-side-margin-right', absint( $martanda_settings[ 'fixed_side_margin_right' ] ), $og_defaults[ 'fixed_side_margin_right' ], 'px' );
		$css->add_property( '--martanda--fixed-side-margin-bottom', absint( $martanda_settings[ 'fixed_side_margin_bottom' ] ), $og_defaults[ 'fixed_side_margin_bottom' ], 'px' );
		$css->add_property( '--martanda--fixed-side-margin-left', absint( $martanda_settings[ 'fixed_side_margin_left' ] ), $og_defaults[ 'fixed_side_margin_left' ], 'px' );
		$css->add_property( '--martanda--fixed-side-top', absint( $martanda_settings[ 'fixed_side_top' ] ), $og_defaults[ 'fixed_side_top' ], 'px' );
		$css->add_property( '--martanda--fixed-side-right', absint( $martanda_settings[ 'fixed_side_right' ] ), $og_defaults[ 'fixed_side_right' ], 'px' );
		$css->add_property( '--martanda--fixed-side-bottom', absint( $martanda_settings[ 'fixed_side_bottom' ] ), $og_defaults[ 'fixed_side_bottom' ], 'px' );
		$css->add_property( '--martanda--fixed-side-left', absint( $martanda_settings[ 'fixed_side_left' ] ), $og_defaults[ 'fixed_side_left' ], 'px' );
		$css->add_property( '--martanda--button-top', absint( $martanda_settings[ 'button_top' ] ), $og_defaults[ 'button_top' ], 'px' );
		$css->add_property( '--martanda--button-right', absint( $martanda_settings[ 'button_right' ] ), $og_defaults[ 'button_right' ], 'px' );
		$css->add_property( '--martanda--button-bottom', absint( $martanda_settings[ 'button_bottom' ] ), $og_defaults[ 'button_bottom' ], 'px' );
		$css->add_property( '--martanda--button-left', absint( $martanda_settings[ 'button_left' ] ), $og_defaults[ 'button_left' ], 'px' );
		$css->add_property( '--martanda--container-width', absint( $martanda_settings[ 'container_width' ] ), $og_defaults[ 'container_width' ], 'px' );
		$css->add_property( '--martanda--content-top', absint( $martanda_settings[ 'content_top' ] ), $og_defaults[ 'content_top' ], 'vw' );
		$css->add_property( '--martanda--content-right', absint( $martanda_settings[ 'content_right' ] ), $og_defaults[ 'content_right' ], 'vw' );
		$css->add_property( '--martanda--content-bottom', absint( $martanda_settings[ 'content_bottom' ] ), $og_defaults[ 'content_bottom' ], 'vw' );
		$css->add_property( '--martanda--content-left', absint( $martanda_settings[ 'content_left' ] ), $og_defaults[ 'content_left' ], 'vw' );
		$css->add_property( '--martanda--mobile-content-top', absint( $martanda_settings[ 'mobile_content_top' ] ), $og_defaults[ 'mobile_content_top' ], 'vw' );
		$css->add_property( '--martanda--mobile-content-right', absint( $martanda_settings[ 'mobile_content_right' ] ), $og_defaults[ 'mobile_content_right' ], 'vw' );
		$css->add_property( '--martanda--mobile-content-bottom', absint( $martanda_settings[ 'mobile_content_bottom' ] ), $og_defaults[ 'mobile_content_bottom' ], 'vw' );
		$css->add_property( '--martanda--mobile-content-left', absint( $martanda_settings[ 'mobile_content_left' ] ), $og_defaults[ 'mobile_content_left' ], 'vw' );
		$css->add_property( '--martanda--side-top', absint( $martanda_settings[ 'side_top' ] ), $og_defaults[ 'side_top' ], 'px' );
		$css->add_property( '--martanda--side-right', absint( $martanda_settings[ 'side_right' ] ), $og_defaults[ 'side_right' ], 'px' );
		$css->add_property( '--martanda--side-bottom', absint( $martanda_settings[ 'side_bottom' ] ), $og_defaults[ 'side_bottom' ], 'px' );
		$css->add_property( '--martanda--side-left', absint( $martanda_settings[ 'side_left' ] ), $og_defaults[ 'side_left' ], 'px' );
		$css->add_property( '--martanda--mobile-side-top', absint( $martanda_settings[ 'mobile_side_top' ] ), $og_defaults[ 'mobile_side_top' ], 'px' );
		$css->add_property( '--martanda--mobile-side-right', absint( $martanda_settings[ 'mobile_side_right' ] ), $og_defaults[ 'mobile_side_right' ], 'px' );
		$css->add_property( '--martanda--mobile-side-bottom', absint( $martanda_settings[ 'mobile_side_bottom' ] ), $og_defaults[ 'mobile_side_bottom' ], 'px' );
		$css->add_property( '--martanda--mobile-side-left', absint( $martanda_settings[ 'mobile_side_left' ] ), $og_defaults[ 'mobile_side_left' ], 'px' );
		$css->add_property( '--martanda--side-padding-radius', absint( $martanda_settings[ 'side_padding_radius' ] ), $og_defaults[ 'side_padding_radius' ], 'px' );
		$css->add_property( '--martanda--body-font-weight', esc_attr( $martanda_settings[ 'body_font_weight' ], $og_defaults[ 'body_font_weight' ] ) );
		$css->add_property( '--martanda--body-font-transform', esc_attr( $martanda_settings[ 'body_font_transform' ], $og_defaults[ 'body_font_transform' ] ) );
		$css->add_property( '--martanda--body-font-size', floatval( $martanda_settings[ 'body_font_size' ] ), $og_defaults[ 'body_font_size' ], esc_attr( $desktop_body_font_size_unit ) );
		$css->add_property( '--martanda--mobile-body-font-size', floatval( $martanda_settings[ 'mobile_body_font_size' ] ), $og_defaults[ 'mobile_body_font_size' ], esc_attr( $mobile_body_font_size_unit ) );
		$css->add_property( '--martanda--body-line-height', floatval( $martanda_settings['body_line_height'] ), $og_defaults['body_line_height'] );
		$css->add_property( '--martanda--site-title-font-weight', esc_attr( $martanda_settings[ 'site_title_font_weight' ] ), $og_defaults[ 'site_title_font_weight' ] );
		$css->add_property( '--martanda--site-title-font-transform', esc_attr( $martanda_settings[ 'site_title_font_transform' ] ), $og_defaults[ 'site_title_font_transform' ] );
		$css->add_property( '--martanda--site-title-font-size', floatval( $martanda_settings[ 'site_title_font_size' ] ), $og_defaults[ 'site_title_font_size' ], esc_attr( $desktop_site_title_font_size_unit ) );
		$css->add_property( '--martanda--mobile-site-title-font-size', floatval( $martanda_settings[ 'mobile_site_title_font_size' ] ), $og_defaults[ 'mobile_site_title_font_size' ], esc_attr( $mobile_site_title_font_size_unit ) );
		$css->add_property( '--martanda--navigation-font-weight', esc_attr( $martanda_settings[ 'navigation_font_weight' ] ), $og_defaults[ 'navigation_font_weight' ] );
		$css->add_property( '--martanda--navigation-font-transform', esc_attr( $martanda_settings[ 'navigation_font_transform' ] ), $og_defaults[ 'navigation_font_transform' ] );
		$css->add_property( '--martanda--navigation-font-size', floatval( $martanda_settings[ 'navigation_font_size' ] ), $og_defaults[ 'navigation_font_size' ], esc_attr( $desktop_navigation_font_size_unit ) );
		$css->add_property( '--martanda--tablet-navigation-font-size', floatval( $martanda_settings[ 'tablet_navigation_font_size' ] ), $og_defaults[ 'tablet_navigation_font_size' ], esc_attr( $tablet_navigation_font_size_unit ) );
		$css->add_property( '--martanda--mobile-navigation-font-size', floatval( $martanda_settings[ 'mobile_navigation_font_size' ] ), $og_defaults[ 'mobile_navigation_font_size' ], esc_attr( $mobile_navigation_font_size_unit ) );
		$css->add_property( '--martanda--buttons-font-weight', esc_attr( $martanda_settings[ 'buttons_font_weight' ] ), $og_defaults[ 'buttons_font_weight' ] );
		$css->add_property( '--martanda--buttons-font-transform', esc_attr( $martanda_settings[ 'buttons_font_transform' ] ), $og_defaults[ 'buttons_font_transform' ] );
		$css->add_property( '--martanda--buttons-font-size', floatval( $martanda_settings[ 'buttons_font_size' ] ), $og_defaults[ 'buttons_font_size' ], esc_attr( $desktop_buttons_font_size_unit ) );
		$css->add_property( '--martanda--mobile-buttons-font-size', floatval( $martanda_settings[ 'mobile_buttons_font_size' ] ), $og_defaults[ 'mobile_buttons_font_size' ], esc_attr( $mobile_buttons_font_size_unit ) );
		$css->add_property( '--martanda--heading-1-weight', esc_attr( $martanda_settings[ 'heading_1_weight' ] ), $og_defaults[ 'heading_1_weight' ] );
		$css->add_property( '--martanda--heading-1-transform', esc_attr( $martanda_settings[ 'heading_1_transform' ] ), $og_defaults[ 'heading_1_transform' ] );
		$css->add_property( '--martanda--heading-1-font-size', floatval( $martanda_settings[ 'heading_1_font_size' ] ), $og_defaults[ 'heading_1_font_size' ], esc_attr( $desktop_heading_1_font_size_unit ) );
		$css->add_property( '--martanda--mobile-heading-1-font-size', floatval( $martanda_settings[ 'mobile_heading_1_font_size' ] ), $og_defaults[ 'mobile_heading_1_font_size' ], esc_attr( $mobile_heading_1_font_size_unit ) );
		$css->add_property( '--martanda--heading-1-line-height', floatval( $martanda_settings['heading_1_line_height'] ), $og_defaults['heading_1_line_height'], 'em' );
		$css->add_property( '--martanda--heading-2-weight', esc_attr( $martanda_settings[ 'heading_2_weight' ] ), $og_defaults[ 'heading_2_weight' ] );
		$css->add_property( '--martanda--heading-2-transform', esc_attr( $martanda_settings[ 'heading_2_transform' ] ), $og_defaults[ 'heading_2_transform' ] );
		$css->add_property( '--martanda--heading-2-font-size', floatval( $martanda_settings[ 'heading_2_font_size' ] ), $og_defaults[ 'heading_2_font_size' ], esc_attr( $desktop_heading_2_font_size_unit ) );
		$css->add_property( '--martanda--mobile-heading-2-font-size', floatval( $martanda_settings[ 'mobile_heading_2_font_size' ] ), $og_defaults[ 'mobile_heading_2_font_size' ], esc_attr( $mobile_heading_2_font_size_unit ) );
		$css->add_property( '--martanda--heading-2-line-height', floatval( $martanda_settings['heading_2_line_height'] ), $og_defaults['heading_2_line_height'], 'em' );
		$css->add_property( '--martanda--heading-3-weight', esc_attr( $martanda_settings[ 'heading_3_weight' ] ), $og_defaults[ 'heading_3_weight' ] );
		$css->add_property( '--martanda--heading-3-transform', esc_attr( $martanda_settings[ 'heading_3_transform' ] ), $og_defaults[ 'heading_3_transform' ] );
		$css->add_property( '--martanda--heading-3-font-size', floatval( $martanda_settings[ 'heading_3_font_size' ] ), $og_defaults[ 'heading_3_font_size' ], esc_attr( $desktop_heading_3_font_size_unit ) );
		$css->add_property( '--martanda--mobile-heading-3-font-size', floatval( $martanda_settings[ 'mobile_heading_3_font_size' ] ), $og_defaults[ 'mobile_heading_3_font_size' ], esc_attr( $mobile_heading_3_font_size_unit ) );
		$css->add_property( '--martanda--heading-3-line-height', floatval( $martanda_settings['heading_3_line_height'] ), $og_defaults['heading_3_line_height'], 'em' );
		$css->add_property( '--martanda--heading-4-weight', esc_attr( $martanda_settings[ 'heading_4_weight' ] ), $og_defaults[ 'heading_4_weight' ] );
		$css->add_property( '--martanda--heading-4-transform', esc_attr( $martanda_settings[ 'heading_4_transform' ] ), $og_defaults[ 'heading_4_transform' ] );
		$css->add_property( '--martanda--heading-4-font-size', floatval( $martanda_settings[ 'heading_4_font_size' ] ), $og_defaults[ 'heading_4_font_size' ], esc_attr( $desktop_heading_4_font_size_unit ) );
		$css->add_property( '--martanda--mobile-heading-4-font-size', floatval( $martanda_settings[ 'mobile_heading_4_font_size' ] ), $og_defaults[ 'mobile_heading_4_font_size' ], esc_attr( $mobile_heading_4_font_size_unit ) );
		$css->add_property( '--martanda--heading-4-line-height', floatval( $martanda_settings['heading_4_line_height'] ), $og_defaults['heading_4_line_height'], 'em' );
		$css->add_property( '--martanda--heading-5-weight', esc_attr( $martanda_settings[ 'heading_5_weight' ] ), $og_defaults[ 'heading_5_weight' ] );
		$css->add_property( '--martanda--heading-5-transform', esc_attr( $martanda_settings[ 'heading_5_transform' ] ), $og_defaults[ 'heading_5_transform' ] );
		$css->add_property( '--martanda--heading-5-font-size', floatval( $martanda_settings[ 'heading_5_font_size' ] ), $og_defaults[ 'heading_5_font_size' ], esc_attr( $desktop_heading_5_font_size_unit ) );
		$css->add_property( '--martanda--mobile-heading-5-font-size', floatval( $martanda_settings[ 'mobile_heading_5_font_size' ] ), $og_defaults[ 'mobile_heading_5_font_size' ], esc_attr( $mobile_heading_5_font_size_unit ) );
		$css->add_property( '--martanda--heading-5-line-height', floatval( $martanda_settings['heading_5_line_height'] ), $og_defaults['heading_5_line_height'], 'em' );
		$css->add_property( '--martanda--heading-6-weight', esc_attr( $martanda_settings[ 'heading_6_weight' ] ), $og_defaults[ 'heading_6_weight' ] );
		$css->add_property( '--martanda--heading-6-transform', esc_attr( $martanda_settings[ 'heading_6_transform' ] ), $og_defaults[ 'heading_6_transform' ] );
		$css->add_property( '--martanda--heading-6-font-size', floatval( $martanda_settings[ 'heading_6_font_size' ] ), $og_defaults[ 'heading_6_font_size' ], esc_attr( $desktop_heading_6_font_size_unit ) );
		$css->add_property( '--martanda--mobile-heading-6-font-size', floatval( $martanda_settings[ 'mobile_heading_6_font_size' ] ), $og_defaults[ 'mobile_heading_6_font_size' ], esc_attr( $mobile_heading_6_font_size_unit ) );
		$css->add_property( '--martanda--heading-6-line-height', floatval( $martanda_settings['heading_6_line_height'] ), $og_defaults['heading_6_line_height'], 'em' );
		$css->add_property( '--martanda--footer-weight', esc_attr( $martanda_settings[ 'footer_weight' ] ), $og_defaults[ 'footer_weight' ] );
		$css->add_property( '--martanda--footer-transform', esc_attr( $martanda_settings[ 'footer_transform' ] ), $og_defaults[ 'footer_transform' ] );
		$css->add_property( '--martanda--footer-font-size', floatval( $martanda_settings['footer_font_size'] ), $og_defaults['footer_font_size'], esc_attr( $desktop_footer_font_size_unit ) );
		$css->add_property( '--martanda--mobile-footer-font-size', floatval( $martanda_settings[ 'mobile_footer_font_size' ] ), $og_defaults[ 'mobile_footer_font_size' ], esc_attr( $mobile_footer_font_size_unit ) );
		$css->add_property( '--martanda--fixed-side-font-weight', esc_attr( $martanda_settings[ 'fixed_side_font_weight' ] ), $og_defaults[ 'fixed_side_font_weight' ] );
		$css->add_property( '--martanda--fixed-side-font-transform', esc_attr( $martanda_settings[ 'fixed_side_font_transform' ] ), $og_defaults[ 'fixed_side_font_transform' ] );
		$css->add_property( '--martanda--fixed-side-font-size', floatval( $martanda_settings['fixed_side_font_size'] ), $og_defaults['fixed_side_font_size'], esc_attr( $desktop_fixed_side_font_size_unit ) );
		$css->add_property( '--martanda--mobile-fixed-side-font-size', floatval( $martanda_settings[ 'mobile_fixed_side_font_size' ] ), $og_defaults[ 'mobile_fixed_side_font_size' ], esc_attr( $mobile_fixed_side_font_size_unit ) );
		$css->add_property( '--martanda--def-cursor-image', 'url(' . esc_url( $martanda_settings['def_cursor_image'] ) . '), auto' );
		$css->add_property( '--martanda--pointer-cursor-image', 'url(' . esc_url( $martanda_settings['pointer_cursor_image'] ) . '), auto' );
		$css->add_property( '--martanda--form-padding-top', esc_attr( $og_defaults['form_padding_top'] ) );
		$css->add_property( '--martanda--form-padding-right', esc_attr( $og_defaults['form_padding_right'] ) );
		$css->add_property( '--martanda--form-padding-bottom', esc_attr( $og_defaults['form_padding_bottom'] ) );
		$css->add_property( '--martanda--form-padding-left', esc_attr( $og_defaults['form_padding_left'] ) );
		$css->add_property( '--martanda--form-border-radius', esc_attr( $og_defaults['form_border_radius'] ) );
		$css->add_property( '--martanda--form-border-width', esc_attr( $og_defaults['form_border_width'] ) );
		$css->add_property( '--martanda--form-border-style', esc_attr( $og_defaults['form_border_style'] ) );
		$css->add_property( '--martanda--form-checkbox-size', esc_attr( $og_defaults['form_checkbox_size'] ) );
		$css->add_property( '--martanda--form-checkbox-innersize', esc_attr( $og_defaults['form_checkbox_innersize'] ) );
		$css->add_property( '--martanda--form-checkbox-padding', esc_attr( $og_defaults['form_checkbox_padding'] ) );
		$css->add_property( '--martanda--form-checkbox-bordersize', esc_attr( $og_defaults['form_checkbox_bordersize'] ) );
		$css->add_property( '--martanda--scrollbar-width', esc_attr( $og_defaults['scrollbar_width'] ) );
		$css->add_property( '--martanda--scrollbar-radius', esc_attr( $og_defaults['scrollbar_radius'] ) );
		
	
		
		if ( ( $martanda_settings[ 'side_top' ] != 0 ) || ( $martanda_settings[ 'side_right' ] != 0 ) || ( $martanda_settings[ 'side_bottom' ] != 0 ) || ( $martanda_settings[ 'side_left' ] != 0 ) ) {
		if ( get_background_image() ) {
			$css->set_selector( '.martanda-body-padding-content' );
			$css->add_property( 'background-image', 'url("' . esc_url( get_background_image() ) . '")' );
			$css->add_property( 'background-repeat', esc_attr( get_theme_mod( 'background_repeat', get_theme_support( 'custom-background', 'default-repeat' ) ) ) );
			$css->add_property( 'background-position', esc_attr( get_theme_mod( 'background_position_y', get_theme_support( 'custom-background', 'default-position-y' ) ) ) . ' ' . esc_attr( get_theme_mod( 'background_position_x', get_theme_support( 'custom-background', 'default-position-x' ) ) ) );
			$css->add_property( 'background-size', esc_attr( get_theme_mod( 'background_size', get_theme_support( 'custom-background', 'default-size' ) ) ) );
			$css->add_property( 'background-attachment', esc_attr( get_theme_mod( 'background_attachment', get_theme_support( 'custom-background', 'default-attachment' ) ) ) );
		}
		}

		// Allow us to hook CSS into our output
		do_action( 'martanda_base_css', $css );

		return apply_filters( 'martanda_base_css_output', $css->css_output() );
	}
}

if ( ! function_exists( 'martanda_enqueue_dynamic_css' ) ) {
	// Enqueue our dynamic CSS.
	function martanda_enqueue_dynamic_css() {
		$css = martanda_get_font_face_styles() . martanda_font_family_css() . martanda_base_css();
	
		wp_add_inline_style( 'martanda-style', $css );
	}
}
add_action( 'wp_enqueue_scripts', 'martanda_enqueue_dynamic_css', 50 );

if ( ! function_exists( 'martanda_enqueue_dynamic_editor_styles' ) ) {
	// Enqueue editor styles.
	function martanda_enqueue_dynamic_editor_styles() {
		// Add styles inline.
		$css = martanda_get_font_face_styles() . martanda_font_family_css() . martanda_base_css();
		wp_add_inline_style( 'wp-block-library', $css );
	}
}
add_action( 'admin_init', 'martanda_enqueue_dynamic_editor_styles', 10 );
<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

if ( ! function_exists( 'kamana_setup' ) ) {
	add_action( 'after_setup_theme', 'kamana_setup' );
	// Sets up theme defaults and registers support for various WordPress features.
	function kamana_setup() {
		
		add_editor_style( 'style.css' );
		
	}
}

// Overwrite parent theme background defaults and registers support for WordPress features.
add_action( 'after_setup_theme', 'martanda_background_setup' );
function martanda_background_setup() {
	add_theme_support( "custom-background",
		array(
			'default-color' 		 => 'fcc3d5',
			'default-image'          => '',
			'default-repeat'         => 'repeat',
			'default-position-x'     => 'center',
			'default-position-y'     => 'top',
			'default-size'           => 'auto',
			'default-attachment'     => '',
			'wp-head-callback'       => '_custom_background_cb',
			'admin-head-callback'    => '',
			'admin-preview-callback' => ''
		)
	);
}

// Replace default fonts from parent theme
function martanda_get_font_face_styles() {
	return "
	@font-face{
		font-family: 'Rubik';
		font-weight: 100;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Rubik.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Rubik';
		font-weight: 200;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Rubik.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Rubik';
		font-weight: 300;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Rubik.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Rubik';
		font-weight: 400;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Rubik.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Rubik';
		font-weight: 500;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Rubik.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Rubik';
		font-weight: 600;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Rubik.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Rubik';
		font-weight: 700;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Rubik.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Rubik';
		font-weight: 800;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Rubik.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Rubik';
		font-weight: 900;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Rubik.woff2') format('woff2');
	}
	";
}

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
	if ( $bodyfont == 'inherit' ) { $bodyfont = 'Rubik'; }
	
	$font_site_title = $martanda_settings[ 'font_site_title' ];
	if ( $font_site_title == 'inherit' ) { $font_site_title = 'Rubik'; }
	$font_navigation = $martanda_settings[ 'font_navigation' ];
	if ( $font_navigation == 'inherit' ) { $font_navigation = 'Rubik'; }
	$font_buttons = $martanda_settings[ 'font_buttons' ];
	if ( $font_buttons == 'inherit' ) { $font_buttons = 'Rubik'; }
	$font_heading_1 = $martanda_settings[ 'font_heading_1' ];
	if ( $font_heading_1 == 'inherit' ) { $font_heading_1 = 'Rubik'; }
	$font_heading_2 = $martanda_settings[ 'font_heading_2' ];
	if ( $font_heading_2 == 'inherit' ) { $font_heading_2 = 'Rubik'; }
	$font_heading_3 = $martanda_settings[ 'font_heading_3' ];
	if ( $font_heading_3 == 'inherit' ) { $font_heading_3 = 'Rubik'; }
	$font_heading_4 = $martanda_settings[ 'font_heading_4' ];
	if ( $font_heading_4 == 'inherit' ) { $font_heading_4 = 'Rubik'; }
	$font_heading_5 = $martanda_settings[ 'font_heading_5' ];
	if ( $font_heading_5 == 'inherit' ) { $font_heading_5 = 'Rubik'; }
	$font_heading_6 = $martanda_settings[ 'font_heading_6' ];
	if ( $font_heading_6 == 'inherit' ) { $font_heading_6 = 'Rubik'; }
	$font_footer = $martanda_settings[ 'font_footer' ];
	if ( $font_footer == 'inherit' ) { $font_footer = 'Rubik'; }
	$font_fixed_side = $martanda_settings[ 'font_fixed_side' ];
	if ( $font_fixed_side == 'inherit' ) { $font_fixed_side = 'Rubik'; }
	
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
	
	$css->set_selector( '.editor-styles-wrapper .top-bar-socials button' );
	$css->add_property( 'background-color', 'inherit' );
	
	// Allow us to hook CSS into our output
	do_action( 'martanda_font_family_css', $css );

	return apply_filters( 'martanda_font_family_css_output', $css->css_output() );
}

// Overwrite theme URL
function martanda_theme_uri_link() {
	return 'https://wpkoi.com/kamana-wpkoi-wordpress-theme/';
}

// Extra cutomizer functions
if ( ! function_exists( 'kamana_customize_register' ) ) {
	add_action( 'customize_register', 'kamana_customize_register' );
	function kamana_customize_register( $wp_customize ) {
				
		// Add Kamana customizer section
		$wp_customize->add_section(
			'kamana_layout_effects',
			array(
				'title' => __( 'Navigation effect', 'kamana' ),
				'priority' => 24,
			)
		);
		
		// Navigation effect
		$wp_customize->add_setting(
			'kamana_settings[nav_effect]',
			array(
				'default' => 'enable',
				'type' => 'option',
				'sanitize_callback' => 'kamana_sanitize_choices'
			)
		);

		$wp_customize->add_control(
			'kamana_settings[nav_effect]',
			array(
				'type' => 'select',
				'label' => __( 'Navigation effect', 'kamana' ),
				'choices' => array(
					'enable' => __( 'Enable', 'kamana' ),
					'disable' => __( 'Disable', 'kamana' )
				),
				'settings' => 'kamana_settings[nav_effect]',
				'section' => 'kamana_layout_effects',
				'priority' => 30
			)
		);
		
		// Social border
		$wp_customize->add_setting(
			'kamana_settings[soc_border]',
			array(
				'default' => 'enable',
				'type' => 'option',
				'sanitize_callback' => 'kamana_sanitize_choices'
			)
		);

		$wp_customize->add_control(
			'kamana_settings[soc_border]',
			array(
				'type' => 'select',
				'label' => __( 'Border for social icons', 'kamana' ),
				'choices' => array(
					'enable' => __( 'Enable', 'kamana' ),
					'disable' => __( 'Disable', 'kamana' )
				),
				'settings' => 'kamana_settings[soc_border]',
				'section' => 'kamana_layout_effects',
				'priority' => 35
			)
		);
		
	}
}

//Sanitize choices.
if ( ! function_exists( 'kamana_sanitize_choices' ) ) {
	function kamana_sanitize_choices( $input, $setting ) {
		// Ensure input is a slug
		$input = sanitize_key( $input );

		// Get list of choices from the control
		// associated with the setting
		$choices = $setting->manager->get_control( $setting->id )->choices;

		// If the input is a valid key, return it;
		// otherwise, return the default
		return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
	}
}

//Adds custom classes to the array of body classes.
if ( ! function_exists( 'kamana_body_classes' ) ) {
	add_filter( 'body_class', 'kamana_body_classes' );
	function kamana_body_classes( $classes ) {
		// Get Customizer settings
		$kamana_settings = get_option( 'kamana_settings' );
		
		$nav_effect     = 'enable';
		
		if ( isset( $kamana_settings['nav_effect'] ) ) {
			$nav_effect = $kamana_settings['nav_effect'];
		}
		
		$soc_border     = 'enable';
		
		if ( isset( $kamana_settings['soc_border'] ) ) {
			$soc_border = $kamana_settings['soc_border'];
		}
		
		// Navigation effect
		if ( $nav_effect != 'disable' ) {
			$classes[] = 'kamana-nav-effect';
		}
		
		// Social border
		if ( $soc_border != 'disable' ) {
			$classes[] = 'kamana-soc-border';
		}
		
		return $classes;
	}
}

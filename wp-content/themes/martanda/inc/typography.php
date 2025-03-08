<?php
/**
 * Typography related functions.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Get font face styles.
if ( ! function_exists( 'martanda_get_font_face_styles' ) ) {
	function martanda_get_font_face_styles() {
		return "
		@font-face{
			font-family: 'Josefin Sans';
			font-weight: 100;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_template_directory_uri() . "/fonts/JosefinSans-Thin.woff2') format('woff2');
		}@font-face{
			font-family: 'Josefin Sans';
			font-weight: 100;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_template_directory_uri() . "/fonts/JosefinSans-ThinItalic.woff2') format('woff2');
		}
		@font-face{
			font-family: 'Josefin Sans';
			font-weight: 200;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_template_directory_uri() . "/fonts/JosefinSans-ExtraLight.woff2') format('woff2');
		}
		@font-face{
			font-family: 'Josefin Sans';
			font-weight: 200;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_template_directory_uri() . "/fonts/JosefinSans-ExtraLightItalic.woff2') format('woff2');
		}
		@font-face{
			font-family: 'Josefin Sans';
			font-weight: 300;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_template_directory_uri() . "/fonts/JosefinSans-Light.woff2') format('woff2');
		}
		@font-face{
			font-family: 'Josefin Sans';
			font-weight: 300;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_template_directory_uri() . "/fonts/JosefinSans-LightItalic.woff2') format('woff2');
		}
		@font-face{
			font-family: 'Josefin Sans';
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_template_directory_uri() . "/fonts/JosefinSans-Regular.woff2') format('woff2');
		}
		@font-face{
			font-family: 'Josefin Sans';
			font-weight: 400;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_template_directory_uri() . "/fonts/JosefinSans-Italic.woff2') format('woff2');
		}
		@font-face{
			font-family: 'Josefin Sans';
			font-weight: 500;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_template_directory_uri() . "/fonts/JosefinSans-Medium.woff2') format('woff2');
		}
		@font-face{
			font-family: 'Josefin Sans';
			font-weight: 500;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_template_directory_uri() . "/fonts/JosefinSans-MediumItalic.woff2') format('woff2');
		}
		@font-face{
			font-family: 'Josefin Sans';
			font-weight: 600;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_template_directory_uri() . "/fonts/JosefinSans-SemiBold.woff2') format('woff2');
		}
		@font-face{
			font-family: 'Josefin Sans';
			font-weight: 600;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_template_directory_uri() . "/fonts/JosefinSans-SemiBoldItalic.woff2') format('woff2');
		}
		@font-face{
			font-family: 'Josefin Sans';
			font-weight: 700;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_template_directory_uri() . "/fonts/JosefinSans-Bold.woff2') format('woff2');
		}
		@font-face{
			font-family: 'Josefin Sans';
			font-weight: 700;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_template_directory_uri() . "/fonts/JosefinSans-BoldItalic.woff2') format('woff2');
		}
		@font-face{
			font-family: 'Josefin Sans';
			font-weight: 800;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_template_directory_uri() . "/fonts/JosefinSans-Bold.woff2') format('woff2');
		}
		@font-face{
			font-family: 'Josefin Sans';
			font-weight: 800;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_template_directory_uri() . "/fonts/JosefinSans-BoldItalic.woff2') format('woff2');
		}
		@font-face{
			font-family: 'Josefin Sans';
			font-weight: 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_template_directory_uri() . "/fonts/JosefinSans-Bold.woff2') format('woff2');
		}
		@font-face{
			font-family: 'Josefin Sans';
			font-weight: 900;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_template_directory_uri() . "/fonts/JosefinSans-BoldItalic.woff2') format('woff2');
		}
		";
	}
}

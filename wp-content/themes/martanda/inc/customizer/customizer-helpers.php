<?php
/**
 * Load necessary Customizer controls and functions.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Controls
get_template_part( 'inc/customizer/controls/class', 'template-parts-section' );
get_template_part( 'inc/customizer/controls/class', 'upsell-section' );
get_template_part( 'inc/customizer/controls/class', 'upsell-control' );

// Helper functions
get_template_part( 'inc/customizer/helpers' );

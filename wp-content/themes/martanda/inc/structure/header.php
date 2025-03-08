<?php
/**
 * Header elements.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'martanda_construct_header' ) ) {
	add_action( 'martanda_header', 'martanda_construct_header' );
	// Build the header.
	function martanda_construct_header() {
		$martanda_settings = wp_parse_args(
			get_option( 'martanda_settings', array() ),
			martanda_get_defaults()
		);
		
		$stickydata = '781';
		if ( $martanda_settings['sticky_header'] == 'enablemobile' ) {
			$stickydata = '0';
		}
		?>
        <div class="site-header-holder" data-minwidth="<?php echo esc_attr( $stickydata ); ?>">
		<?php
		do_action( 'martanda_before_header_content' );

		// Add our main header items.
		block_template_part( 'header' );

		do_action( 'martanda_after_header_content' );
		?>
        </div>
        <?php
	}
}

if ( ! function_exists( 'martanda_pingback_header' ) ) {
	add_action( 'wp_head', 'martanda_pingback_header' );
	// Add a pingback url auto-discovery header for singularly identifiable articles.
	function martanda_pingback_header() {
		if ( is_singular() && pings_open() ) {
			printf( '<link rel="pingback" href="%s">' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
		}
	}
}

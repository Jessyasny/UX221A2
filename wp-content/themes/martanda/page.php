<?php
/**
 * The template for displaying all pages.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div id="primary" <?php martanda_content_class();?>>
		<main id="main" <?php martanda_main_class(); ?>>
			<?php
			// martanda_before_main_content hook.
			do_action( 'martanda_before_main_content' );

			block_template_part( 'page' );

			// martanda_after_main_content hook.
			do_action( 'martanda_after_main_content' );
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	// martanda_after_primary_content_area hook.
	 do_action( 'martanda_after_primary_content_area' );

get_footer();

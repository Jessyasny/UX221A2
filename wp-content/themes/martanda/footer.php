<?php
/**
 * The template for displaying the footer.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
            </div><!-- #content -->
		</div><!-- #page -->
        
        <?php
        // martanda_before_footer hook.
        do_action( 'martanda_before_footer' );
        ?>

        <div <?php martanda_footer_class(); ?>>
            <?php
            // martanda_before_footer_content hook.
            do_action( 'martanda_before_footer_content' );
        
            // martanda_footer hook.
            do_action( 'martanda_footer' );
        
            // martanda_after_footer_content hook.
            do_action( 'martanda_after_footer_content' );
            ?>
        </div><!-- .site-footer -->
        
        <?php
        // martanda_after_footer hook.
        do_action( 'martanda_after_footer' );
        
        wp_footer();
        ?>
	</div><!-- .martanda-body-padding-content -->
</body>
</html>

<?php
/**
 * Footer elements.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'martanda_construct_footer' ) ) {
	add_action( 'martanda_footer', 'martanda_construct_footer' );
	// Build our footer.
	function martanda_construct_footer() {
		$martanda_settings = wp_parse_args(
			get_option( 'martanda_settings', array() ),
			martanda_get_defaults()
		);
		
		if ( $martanda_settings[ 'disable_site_info' ] != 'disable'  ) {
		?>
		<footer class="site-info" itemtype="https://schema.org/WPFooter" itemscope="itemscope">
			<div class="inside-site-info">
				<?php
				// martanda_before_copyright hook.
				do_action( 'martanda_before_copyright' );
				?>
				<div class="copyright-bar">
					<?php do_action( 'martanda_credits' ); ?>
				</div>
			</div>
		</footer><!-- .site-info -->
		<?php
		}
	}
}

if ( ! function_exists( 'martanda_add_footer_info' ) ) {
	add_action( 'martanda_credits', 'martanda_add_footer_info' );
	// Add the copyright to the footer
	function martanda_add_footer_info() {
		echo '<span class="copyright">&copy; ' . esc_html( date( 'Y' ) ) . ' ' . esc_html( get_bloginfo( 'name' ) ) . '</span> &bull; ' . esc_html__( 'Powered by', 'martanda' ) . ' <a href="' . esc_url( martanda_theme_uri_link() ) . '" itemprop="url">' . esc_html__( 'WPKoi', 'martanda' ) . '</a>';
	}
}

if ( ! function_exists( 'martanda_construct_footer_widgets' ) ) {
	add_action( 'martanda_footer', 'martanda_construct_footer_widgets', 5 );
	function martanda_construct_footer_widgets() {
		
		block_template_part( 'footer' );
		
		// martanda_after_footer_widgets hook.
		do_action( 'martanda_after_footer_widgets' );
	}
}

if ( ! function_exists( 'martanda_back_to_top' ) ) {
	add_action( 'martanda_after_footer', 'martanda_back_to_top', 2 );
	// Build the back to top button
	function martanda_back_to_top() {
		$martanda_settings = wp_parse_args(
			get_option( 'martanda_settings', array() ),
			martanda_get_defaults()
		);

		if ( 'enable' !== $martanda_settings[ 'back_to_top' ] ) {
			return;
		}

		echo '<a title="' . esc_attr__( 'Scroll back to top', 'martanda' ) . '" rel="nofollow" href="#" class="martanda-back-to-top" style="opacity:0;visibility:hidden;" data-scroll-speed="' . absint( apply_filters( 'martanda_back_to_top_scroll_speed', 400 ) ) . '" data-start-scroll="' . absint( apply_filters( 'martanda_back_to_top_start_scroll', 300 ) ) . '">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M201.4 137.4c12.5-12.5 32.8-12.5 45.3 0l160 160c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L224 205.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l160-160z"/></svg>
				<span class="screen-reader-text">' . esc_html__( 'Scroll back to top', 'martanda' ) . '</span>
			</a>';
	}
}

add_action( 'martanda_after_footer', 'martanda_fixed_side_content_footer', 5 );
function martanda_fixed_side_content_footer() { 
	$martanda_settings = wp_parse_args(
		get_option( 'martanda_spacing_settings', array() ),
		martanda_get_defaults()
	);
	
	$fixed_side_content   		=  martanda_get_setting( 'fixed_side_content' ); 
	$socials_facebook_url  		=  martanda_get_setting( 'socials_facebook_url' );
	$socials_twitter_url   		=  martanda_get_setting( 'socials_twitter_url' );
	$socials_instagram_url    	=  martanda_get_setting( 'socials_instagram_url' );
	$socials_youtube_url   		=  martanda_get_setting( 'socials_youtube_url' );
	$socials_tiktok_url   		=  martanda_get_setting( 'socials_tiktok_url' );
	$socials_twitch_url   		=  martanda_get_setting( 'socials_twitch_url' );
	$socials_tumblr_url    		=  martanda_get_setting( 'socials_tumblr_url' );
	$socials_pinterest_url 		=  martanda_get_setting( 'socials_pinterest_url' );
	$socials_linkedin_url  		=  martanda_get_setting( 'socials_linkedin_url' );
	$socials_custom_icon_1  	=  martanda_get_setting( 'socials_custom_icon_1' );
	$socials_custom_icon_url_1  =  martanda_get_setting( 'socials_custom_icon_url_1' );
	$socials_custom_icon_2  	=  martanda_get_setting( 'socials_custom_icon_2' );
	$socials_custom_icon_url_2  =  martanda_get_setting( 'socials_custom_icon_url_2' );
	$socials_custom_icon_3  	=  martanda_get_setting( 'socials_custom_icon_3' );
	$socials_custom_icon_url_3  =  martanda_get_setting( 'socials_custom_icon_url_3' );
	$socials_mail_url     		=  martanda_get_setting( 'socials_mail_url' );
	
	
	if ( ( $fixed_side_content != '' ) || ( $socials_facebook_url != '' ) || ( $socials_twitter_url != '' ) || ( $socials_instagram_url != '' ) || ( $socials_youtube_url != '' ) || ( $socials_tiktok_url != '' ) || ( $socials_twitch_url != '' ) || ( $socials_tumblr_url != '' ) || ( $socials_pinterest_url != '' ) || ( $socials_linkedin_url != '' ) || ( $socials_custom_icon_url_1 != '' ) || ( $socials_custom_icon_1 != '' ) || ( $socials_custom_icon_url_2 != '' ) || ( $socials_custom_icon_2 != '' ) || ( $socials_custom_icon_url_3 != '' ) || ( $socials_custom_icon_3 != '' ) || ( $socials_mail_url != '' ) ) { ?>
    <div class="martanda-side-left-content">
        <div class="martanda-side-left-socials">
        <?php do_action( 'martanda_social_bar_action' ); ?>
        </div>
        <?php if ( $fixed_side_content != '' ) { ?>
    	<div class="martanda-side-left-text">
        	<div class="martanda-side-left-text-content"><?php echo wp_kses_post( $fixed_side_content ); ?></div>
        </div>
        <?php } ?>
    </div>
    <?php
	}
}

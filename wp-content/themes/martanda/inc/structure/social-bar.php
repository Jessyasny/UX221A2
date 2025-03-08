<?php
/**
 * Social bar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'martanda_social_bar' ) ) {
	add_action( 'martanda_social_bar_action', 'martanda_social_bar' );
	function martanda_social_bar() {
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
		
		if ( ( $socials_facebook_url != '' ) || ( $socials_twitter_url != '' ) || ( $socials_instagram_url != '' ) || ( $socials_youtube_url != '' ) || ( $socials_tiktok_url != '' ) || ( $socials_twitch_url != '' ) || ( $socials_tumblr_url != '' ) || ( $socials_pinterest_url != '' ) || ( $socials_linkedin_url != '' ) || ( $socials_custom_icon_url_1 != '' ) || ( $socials_custom_icon_1 != '' ) || ( $socials_custom_icon_url_2 != '' ) || ( $socials_custom_icon_2 != '' ) || ( $socials_custom_icon_url_3 != '' ) || ( $socials_custom_icon_3 != '' ) || ( $socials_mail_url != '' ) ) {
	?>
    <div class="martanda-social-bar">
    	<ul class="martanda-socials-list">
        <?php if ( $socials_facebook_url != '' ) { ?>
        	<li><a href="<?php echo esc_url( $socials_facebook_url ); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></a></li>
        <?php } ?>
        <?php if ( $socials_twitter_url != '' ) { ?>
        	<li><a href="<?php echo esc_url( $socials_twitter_url ); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg></a></li>
        <?php } ?>
        <?php if ( $socials_instagram_url != '' ) { ?>
        	<li><a href="<?php echo esc_url( $socials_instagram_url ); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a></li>
        <?php } ?>
        <?php if ( $socials_youtube_url != '' ) { ?>
        	<li><a href="<?php echo esc_url( $socials_youtube_url ); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg></a></li>
        <?php } ?>
        <?php if ( $socials_tiktok_url != '' ) { ?>
        	<li><a href="<?php echo esc_url( $socials_tiktok_url ); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg></a></li>
        <?php } ?>
        <?php if ( $socials_twitch_url != '' ) { ?>
        	<li><a href="<?php echo esc_url( $socials_twitch_url ); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M391.17,103.47H352.54v109.7h38.63ZM285,103H246.37V212.75H285ZM120.83,0,24.31,91.42V420.58H140.14V512l96.53-91.42h77.25L487.69,256V0ZM449.07,237.75l-77.22,73.12H294.61l-67.6,64v-64H140.14V36.58H449.07Z"/></svg></a></li>
        <?php } ?>
        <?php if ( $socials_tumblr_url != '' ) { ?>
        	<li><a href="<?php echo esc_url( $socials_tumblr_url ); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M309.8 480.3c-13.6 14.5-50 31.7-97.4 31.7-120.8 0-147-88.8-147-140.6v-144H17.9c-5.5 0-10-4.5-10-10v-68c0-7.2 4.5-13.6 11.3-16 62-21.8 81.5-76 84.3-117.1.8-11 6.5-16.3 16.1-16.3h70.9c5.5 0 10 4.5 10 10v115.2h83c5.5 0 10 4.4 10 9.9v81.7c0 5.5-4.5 10-10 10h-83.4V360c0 34.2 23.7 53.6 68 35.8 4.8-1.9 9-3.2 12.7-2.2 3.5.9 5.8 3.4 7.4 7.9l22 64.3c1.8 5 3.3 10.6-.4 14.5z"/></svg></a></li>
        <?php } ?>
        <?php if ( $socials_pinterest_url != '' ) { ?>
        	<li><a href="<?php echo esc_url( $socials_pinterest_url ); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z"/></svg></a></li>
        <?php } ?>
        <?php if ( $socials_linkedin_url != '' ) { ?>
        	<li><a href="<?php echo esc_url( $socials_linkedin_url ); ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a></li>
        <?php } ?>
        <?php do_action( 'martanda_after_socials' ); ?>
        <?php if ( $socials_mail_url != '' ) { ?>
        	<li><a href="mailto:<?php echo esc_attr( $socials_mail_url ); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg></a></li>
        <?php } ?>
        </ul>
    </div>    
	<?php
		}
	}
}

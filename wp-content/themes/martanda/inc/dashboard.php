<?php
/**
 * Builds our admin page.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'martanda_create_menu' ) ) {
	add_action( 'admin_menu', 'martanda_create_menu' );
	// Adds our "Martanda" dashboard menu item
	function martanda_create_menu() {
		$theme_name = wp_get_theme();
		$martanda_page = add_theme_page( esc_html( $theme_name ), esc_html( $theme_name ), apply_filters( 'martanda_dashboard_page_capability', 'edit_theme_options' ), 'martanda-options', 'martanda_settings_page' );
		add_action( "admin_print_styles-$martanda_page", 'martanda_options_styles' );
	}
}

if ( ! function_exists( 'martanda_options_styles' ) ) {
	// Adds any necessary scripts to the Martanda dashboard page
	function martanda_options_styles() {
		wp_enqueue_style( 'martanda-options', get_template_directory_uri() . '/css/admin/admin-style.css', array(), MARTANDA_VERSION );
	}
}

if ( ! function_exists( 'martanda_admin_add_scripts' ) ) {
	// Add script to Editor
	add_action( 'admin_enqueue_scripts', 'martanda_admin_add_scripts');
	function martanda_admin_add_scripts(){
		
		// Check if we are on the custom admin page
		$screen = get_current_screen();
		
		// Load styles and scripts only on the 'WPKoi Templates for Elementor' admin page
		if ( $screen->id === 'appearance_page_martanda-options' ) {
			wp_enqueue_script( 'martanda-admin-script', get_template_directory_uri() . '/js/admin/admin-script.js', array( 'jquery' ), MARTANDA_VERSION );
		}
	}
}

// Disable admin notices on the specific page
if ( ! function_exists( 'martanda_disable_admin_notices' ) ) {

	add_action( 'admin_head', 'martanda_disable_admin_notices' );
	function martanda_disable_admin_notices() {
		$current_screen = get_current_screen();
		// Check if we are on the Martanda admin page
		if ( isset( $current_screen->id ) && $current_screen->id === 'appearance_page_martanda-options' ) {
			remove_all_actions( 'admin_notices' );
        	remove_all_actions( 'all_admin_notices' );
		}
	}
}

if ( ! function_exists( 'martanda_settings_page_sidebar' ) ) {
	function martanda_settings_page_sidebar( $martanda_activator ) {
		
		if ( $martanda_activator == 'activate' ) {
			do_action( 'martanda_admin_right_panel' );
		}
		
		if ( ! defined( 'MARTANDA_PREMIUM_VERSION' ) ) :
	?>
<div class="wpkoi-upgrade martanda-sidebar-element martanda-sc">
	<h3><?php esc_html_e( 'Need more features?', 'martanda' ); ?></h3>
	<p><?php esc_html_e( 'Unlock the full potential of your site! Enjoy advanced functionality and design options that elevate your website to the next level.', 'martanda' ); ?></p>
	<a href="<?php echo esc_url(martanda_theme_uri_link()); ?>" class="wpkoi-admin-button" target="_blank"><?php esc_html_e( 'Upgrade to Premium', 'martanda' ); ?></a>
</div>
	<?php endif; ?>
<div class="wpkoi-review martanda-sidebar-element martanda-sc">
	<h3><?php esc_html_e( 'Support Us with Your Review', 'martanda' ); ?></h3>
	<p><?php esc_html_e( 'Love the Martanda theme? Share your experience with the world! Your review helps others discover and enjoy the theme, and we truly appreciate your feedback.', 'martanda' ); ?></p>
	<a href="<?php echo esc_url(MARTANDA_WORDPRESS_REVIEW); ?>" class="wpkoi-admin-button" target="_blank"><?php esc_html_e( 'Add my review', 'martanda' ); ?></a>
</div>

<div class="wpkoi-social martanda-sidebar-element martanda-sc">
	<h3><?php esc_html_e( 'Stay Updated with WPKoi on Facebook', 'martanda' ); ?></h3>
	<p><?php esc_html_e( 'Want the latest tips, news, and updates on WPKoi products? Follow us on Facebook for exclusive content and useful insights that help you make the most of your themes.', 'martanda' ); ?></p>
	<a href="<?php echo esc_url(MARTANDA_WPKOI_SOCIAL_URL); ?>" class="wpkoi-admin-button" target="_blank"><?php esc_html_e( 'Go to Facebook', 'martanda' ); ?></a>
</div>
	<?php
	}
}

if ( ! function_exists( 'martanda_settings_page' ) ) {
	// Builds the content of our Martanda dashboard page
	function martanda_settings_page() {
		$theme_name = wp_get_theme();
		$premiumclass = '';
		if ( defined( 'MARTANDA_PREMIUM_VERSION' ) ) {
			$premiumclass = ' premium-wrap';
		}
		?>
<div class="wrap<?php echo esc_attr( $premiumclass ); ?>">
	<header id="martanda-new-header">
		<div class="martanda-pagelogo"><a href="<?php echo esc_url(martanda_theme_uri_link()); ?>" target="_blank"><h1><?php echo esc_html( $theme_name ); ?><br><span><?php esc_html_e( 'WPKoi Theme', 'martanda' ); ?></span></h1></a></div>
		<button class="nav-btn" data-target="martanda-page-features">Features</button>
		<button class="nav-btn" data-target="martanda-page-templates">Templates</button>
		<button class="nav-btn" data-target="martanda-page-info">How to use</button>
		<a href="<?php echo esc_url(MARTANDA_DOCUMENTATION); ?>" target="_blank" class="martanda-new-header-p"><?php esc_html_e( 'Documentation', 'martanda' ); ?></a>
		<div class="martanda-page-rm">
			<div class="martanda-page-social">
				<a target="_blank" href="<?php echo esc_url(MARTANDA_WPKOI_WPORG_URL); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M61.7 169.4l101.5 278C92.2 413 43.3 340.2 43.3 256c0-30.9 6.6-60.1 18.4-86.6zm337.9 75.9c0-26.3-9.4-44.5-17.5-58.7-10.8-17.5-20.9-32.4-20.9-49.9 0-19.6 14.8-37.8 35.7-37.8.9 0 1.8.1 2.8.2-37.9-34.7-88.3-55.9-143.7-55.9-74.3 0-139.7 38.1-177.8 95.9 5 .2 9.7.3 13.7.3 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l77.5 230.4L249.8 247l-33.1-90.8c-11.5-.7-22.3-2-22.3-2-11.5-.7-10.1-18.2 1.3-17.5 0 0 35.1 2.7 56 2.7 22.2 0 56.7-2.7 56.7-2.7 11.5-.7 12.8 16.2 1.4 17.5 0 0-11.5 1.3-24.3 2l76.9 228.7 21.2-70.9c9-29.4 16-50.5 16-68.7zm-139.9 29.3l-63.8 185.5c19.1 5.6 39.2 8.7 60.1 8.7 24.8 0 48.5-4.3 70.6-12.1-.6-.9-1.1-1.9-1.5-2.9l-65.4-179.2zm183-120.7c.9 6.8 1.4 14 1.4 21.9 0 21.6-4 45.8-16.2 76.2l-65 187.9C426.2 403 468.7 334.5 468.7 256c0-37-9.4-71.8-26-102.1zM504 256c0 136.8-111.3 248-248 248C119.2 504 8 392.7 8 256 8 119.2 119.2 8 256 8c136.7 0 248 111.2 248 248zm-11.4 0c0-130.5-106.2-236.6-236.6-236.6C125.5 19.4 19.4 125.5 19.4 256S125.6 492.6 256 492.6c130.5 0 236.6-106.1 236.6-236.6z"></path></svg></a>
				<a target="_blank" href="<?php echo esc_url(MARTANDA_WPKOI_SOCIAL_URL); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg></a>
				<a target="_blank" href="<?php echo esc_url(MARTANDA_WPKOI_DRIBBLE_URL); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 8C119.252 8 8 119.252 8 256s111.252 248 248 248 248-111.252 248-248S392.748 8 256 8zm163.97 114.366c29.503 36.046 47.369 81.957 47.835 131.955-6.984-1.477-77.018-15.682-147.502-6.818-5.752-14.041-11.181-26.393-18.617-41.614 78.321-31.977 113.818-77.482 118.284-83.523zM396.421 97.87c-3.81 5.427-35.697 48.286-111.021 76.519-34.712-63.776-73.185-116.168-79.04-124.008 67.176-16.193 137.966 1.27 190.061 47.489zm-230.48-33.25c5.585 7.659 43.438 60.116 78.537 122.509-99.087 26.313-186.36 25.934-195.834 25.809C62.38 147.205 106.678 92.573 165.941 64.62zM44.17 256.323c0-2.166.043-4.322.108-6.473 9.268.19 111.92 1.513 217.706-30.146 6.064 11.868 11.857 23.915 17.174 35.949-76.599 21.575-146.194 83.527-180.531 142.306C64.794 360.405 44.17 310.73 44.17 256.323zm81.807 167.113c22.127-45.233 82.178-103.622 167.579-132.756 29.74 77.283 42.039 142.053 45.189 160.638-68.112 29.013-150.015 21.053-212.768-27.882zm248.38 8.489c-2.171-12.886-13.446-74.897-41.152-151.033 66.38-10.626 124.7 6.768 131.947 9.055-9.442 58.941-43.273 109.844-90.795 141.978z"></path></svg></a>
				<a target="_blank" href="<?php echo esc_url(MARTANDA_WPKOI_BEHANCE_URL); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M232 237.2c31.8-15.2 48.4-38.2 48.4-74 0-70.6-52.6-87.8-113.3-87.8H0v354.4h171.8c64.4 0 124.9-30.9 124.9-102.9 0-44.5-21.1-77.4-64.7-89.7zM77.9 135.9H151c28.1 0 53.4 7.9 53.4 40.5 0 30.1-19.7 42.2-47.5 42.2h-79v-82.7zm83.3 233.7H77.9V272h84.9c34.3 0 56 14.3 56 50.6 0 35.8-25.9 47-57.6 47zm358.5-240.7H376V94h143.7v34.9zM576 305.2c0-75.9-44.4-139.2-124.9-139.2-78.2 0-131.3 58.8-131.3 135.8 0 79.9 50.3 134.7 131.3 134.7 61.3 0 101-27.6 120.1-86.3H509c-6.7 21.9-34.3 33.5-55.7 33.5-41.3 0-63-24.2-63-65.3h185.1c.3-4.2.6-8.7.6-13.2zM390.4 274c2.3-33.7 24.7-54.8 58.5-54.8 35.4 0 53.2 20.8 56.2 54.8H390.4z"></path></svg></a>
			</div>
			<?php if ( ! defined( 'MARTANDA_PREMIUM_VERSION' ) ) : ?>
			<div class="martanda-page-more"><a href="<?php echo esc_url(martanda_theme_uri_link()); ?>" target="_blank"><h3><?php esc_html_e( 'Get premium', 'martanda' ); ?></h3></a></div>
			<?php endif; ?>
		</div>
	</header>
	<?php
	 do_action( 'martanda_dashboard_after_header' );
	 ?>
	<div id="martanda-page-body">
		<div id="martanda-page-features" style="display: block;">
			<div class="martanda-element-col-flex">
				
				<div class="wpkoi-disable-elements martanda-element-col-1">
					<div class="martanda-sidebar-element">
						<div class="martanda-element-col-50h">
							<div class="martanda-element-col-50">
								<h3><?php esc_html_e( 'Welcome to Your', 'martanda' ); ?> <?php echo esc_html( $theme_name ); ?> <?php esc_html_e( 'Dashboard!', 'martanda' ); ?></h3>
								<p class="martanda-de-p"><?php esc_html_e( 'Get the most out of your WPKoi theme! Here, you’ll find everything you need to elevate your website—whether you’re using the free version or exploring premium features. Quickly access the customizer, open the editor, or watch short video tutorials that guide you through each step. Building your dream site has never been easier!', 'martanda' ); ?></p>
								<div class="customize-button">
									<?php
									printf( '<a id="martanda_customize_button" class="button button-primary" href="%1$s">%2$s</a>',
										esc_url( admin_url( 'customize.php' ) ),
										esc_html__( 'Customize', 'martanda' )
									);
									?>
								</div>
							</div>
							<div class="martanda-element-col-50">
								<div class="martanda-video">
								</div>
							</div>
						</div>
						
						<?php 
						do_action( 'martanda_dashboard_inside_container' ); 
						do_action( 'martanda_new_inside_options_form' );
						?>
						
						<div class="martanda-qe">
							<h3><?php esc_html_e( 'Quick Access to Customize and Build Your Site', 'martanda' ); ?></h3>
							<p><?php esc_html_e( 'Navigate your site effortlessly with these handy shortcuts. Edit your site’s identity, tweak colors, and refine your top bar in just a few clicks. Quickly access the header and footer builders to ensure every part of your site aligns with your vision. Everything you need to customize and build your site is right at your fingertips!', 'martanda' ); ?></p>
							<?php
							$quicklinks = array(
								'Site Identity' => array( 'url' => admin_url( 'customize.php' ), 'button' => esc_html( 'Customize', 'martanda' ) ),
								'General' => array( 'url' => admin_url( 'customize.php' ), 'button' => esc_html( 'Customize', 'martanda' ) ),
								'Colors' => array( 'url' => admin_url( 'customize.php' ), 'button' => esc_html( 'Customize', 'martanda' ) ),
								'Top Bar' => array( 'url' => admin_url( 'site-editor.php?postType=wp_template_part&postId=' . esc_html( wp_get_theme()->get( 'TextDomain' ) ) .'%2F%2Ftopbar&canvas=edit' ), 'button' => esc_html( 'Build', 'martanda' ) ),
								'Header' => array( 'url' => admin_url( 'site-editor.php?postType=wp_template_part&postId=' . esc_html( wp_get_theme()->get( 'TextDomain' ) ) .'%2F%2Fheader&canvas=edit' ), 'button' => esc_html( 'Build', 'martanda' ) ),
								'Footer' => array( 'url' => admin_url( 'site-editor.php?postType=wp_template_part&postId=' . esc_html( wp_get_theme()->get( 'TextDomain' ) ) .'%2F%2Ffooter&canvas=edit' ), 'button' => esc_html( 'Build', 'martanda' ) ),

							);
							?>
							<div class="martanda-de-h martanda-qe-h">	
								<?php foreach( $quicklinks as $quicklink => $info ) { ?>
								<div class="martanda-de-e">
									<a href="<?php echo $info[ 'url' ] ; ?>" target="_blank" class="martanda-switch-link">
										<div class="martanda-de-e-premium-i">
											<p><?php echo esc_html( $quicklink ); ?></p>
											<div class="martanda-de-d">

												<div class="martanda-de-di"><h4><?php echo esc_html( $info[ 'button' ] ); ?></h4></div>
											</div>
										</div>
									</a>
								</div>
								<?php } ?>
							</div>
						</div>
						
						<?php if ( ! defined( 'MARTANDA_PREMIUM_VERSION' ) ) : ?>
						<h3><?php echo esc_html( $theme_name ); ?> <?php esc_html_e( 'Unlock Powerful Premium Modules', 'martanda' ); ?></h3>
						<p><?php esc_html_e( 'Take your website to the next level with these exclusive premium features. From advanced color and typography options to extra Elementor elements, you’ll have the tools to create a truly unique site. Simplify setup with one-click demo imports, customize your footer, and enhance performance by disabling unused elements. With the premium modules, you’re in full control of every detail!', 'martanda' ); ?></p>
						
						<?php
						$modules = array(
							'Demo Import' => array( 'url' => martanda_theme_uri_link(), 'desc' => esc_html( 'Simplify website setup with one-click, full-demo imports.', 'martanda' ) ),
							'Colors' => array( 'url' => martanda_theme_uri_link(), 'desc' => esc_html( 'Choose from a spectrum of colors to create a unique and captivating visual identity.', 'martanda' ) ),
							'Typography' => array( 'url' => martanda_theme_uri_link(), 'desc' => esc_html( 'Choose the perfect fonts for your website to create a unique and professional look.', 'martanda' ) ),
							'Copyright Footer' => array( 'url' => martanda_theme_uri_link(), 'desc' => esc_html( 'Customize your site&#39;s copyright footer with ease.', 'martanda' ) ),
							'Elementor Addon' => array( 'url' => martanda_theme_uri_link(), 'desc' => esc_html( 'Enhance your design options with additional Elementor elements for a unique touch.', 'martanda' ) ),
							'Disable Elements' => array( 'url' => martanda_theme_uri_link(), 'desc' => esc_html( 'Turn off the modules that You don&#39;t use for better performance.', 'martanda' ) ),
							'Hooks' => array( 'url' => martanda_theme_uri_link(), 'desc' => esc_html( 'Fine-tune your website with code filter inputs for added customization and codes.', 'martanda' ) ),
							'Spacing' => array( 'url' => martanda_theme_uri_link(), 'desc' => esc_html( 'Easily control the padding and margin of the elements on your website.', 'martanda' ) ),
							'Button Functions' => array( 'url' => martanda_theme_uri_link(), 'desc' => esc_html( 'Customize the style of Your buttons to make them unique.', 'martanda' ) ),
							'Fixed Side Content Functions' => array( 'url' => martanda_theme_uri_link(), 'desc' => esc_html( 'Define the size of Your Fixed Side panel for better design.', 'martanda' ) )
						);
						?>
						
						<div class="martanda-de-h">	
							<?php foreach( $modules as $module => $info ) { ?>
							<div class="martanda-de-e martanda-de-e-premium">
								<a href="<?php echo esc_url( $info[ 'url' ] ); ?>" target="_blank" class="martanda-switch-link">
									<div class="martanda-de-e-premium-i">
										<label class="switch">
											<span class="slider"></span>
										</label>
										<p><?php echo esc_html( $module ); ?></p>
										<p class="martanda-de-desc"><?php echo esc_html( $info[ 'desc' ] ); ?></p>
										<div class="martanda-de-d">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"></path></svg>
											<div class="martanda-de-di"><h4><?php esc_html_e( 'Premium', 'martanda' ); ?></h4></div>
										</div>
									</div>
								</a>
							</div>
							<?php } ?>
						</div>
							
						<div class="customize-button">
							<?php
							printf( '<a id="martanda_customize_button" class="button button-primary" href="%1$s" target="_blank">%2$s</a>',
								esc_url( MARTANDA_SHOWCASE ),
								esc_html__( 'Check a premium showcase', 'martanda' )
							);
							?>
						</div>
						<?php
						endif;
						do_action( 'martanda_options_items' );
						?>
					</div>
				</div>
				<div class="martanda-element-col-2 martanda-activator-col">
					<?php 
					$martanda_activator = 'activate';
					martanda_settings_page_sidebar( $martanda_activator ); 
					?>
				</div>
			</div>
		</div>
		<div id="martanda-page-templates">
			<div class="martanda-pthh">
			<h3 class="martanda-pth"><?php esc_html_e( 'Discover Your Perfect Design!', 'martanda' ); ?></h3>
			<p class="martanda-ptp">
				<?php if ( $theme_name == 'Martanda' ) { ?>
				<?php esc_html_e( 'Martanda WPKoi WordPress offers several child themes that share the same great functionality but feature different design styles.', 'martanda' ); ?>
				<?php } else { ?>
				<?php 
				echo esc_html( $theme_name );
				esc_html_e( ' is a child theme of the Martanda WPKoi WordPress theme. Martanda offers several other child themes that share the same great functionality but feature different design styles.', 'martanda' ); ?>
				<?php } ?>
				<?php esc_html_e( ' If You find the theme useful, but want to change the feeling, try some other child themes.', 'martanda' ); ?>
			</p>
			</div>
			<div class="martanda-templates-loop">
		<?php
		
		$templatelist = array(
			'martanda' => array(),
			'dorje' => array(),
			'tarana' => array(),
			'mahan' => array(),
			'jalpa' => array(),
			'mukta' => array(),
			'bhuta' => array(),
			'pinaka' => array(),
			'harsha' => array(),
			'manolaya' => array(),
			'sadhu' => array(),
			'tapana' => array(),
			'nigamana' => array(),
			'upamana' => array(),
			'gudha' => array(),
			'charana' => array(),
			'nabhi' => array(),
			'paragati' => array(),
			'manana' => array(),
			'achala' => array(),
			'sakara' => array(),
			'nivritti' => array(),
			'tripti' => array(),
			'rakta' => array(),
			'bheda' => array(),
			'murti' => array(),
			'pluta' => array(),
			'agami' => array(),
			'sahaja' => array(),
			'rasana' => array(),
			'droha' => array(),
			'uttama' => array(),
			'bhana' => array(),
			'medha' => array(),
			'rachana' => array(),
			'tandra' => array()
		);
		foreach( $templatelist as $template => $info ) { ?>
				<div class="martanda-l-template">
				<div class="wpkoi-home-preview-effect"></div>
				<div class="martanda-l-template-inner">
					<div class="wpkoi-ptemp">
						<a href="<?php echo esc_url( MARTANDA_WPKOI_AUTHOR_URL ) . esc_attr( $template ) . '-wpkoi-wordpress-theme/'; ?>" target="_blank">
							<div class="wpkoi-home-preview">
								<img height="auto" src="<?php echo esc_url( get_template_directory_uri() . '/img/themes/' . esc_attr( $template ) . '.webp' ); ?>" style="transition: top 3s ease-out 0s; top: 0px;">
							</div>
						</a>
						<div class="wpkoi-ptemp-main-title">
							<h3><?php echo esc_html( $template ); ?></h3>
							<a class="martanda-template-details" href="<?php echo esc_url( MARTANDA_WPKOI_AUTHOR_URL ) . esc_attr( $template ) . '-wpkoi-wordpress-theme/'; ?>" target="_blank"><?php _e( 'Details', 'martanda' );?></a>
						</div>
						<div class="home-explore">
							<a href="<?php echo esc_url( MARTANDA_WPKOI_AUTHOR_URL ) . esc_attr( $template ) . '-wpkoi-wordpress-theme/'; ?>" target="_blank">
								<div class="home-explore-i"><h5 class="home-explore-t"><?php esc_html_e( 'Preview', 'martanda' );?></h5></div>
							</a>
						</div>

					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		<?php } ?>
			</div>
		</div>
		<div id="martanda-page-info">
			<div class="martanda-element-col-flex">
				<div class="wpkoi-disable-elements martanda-element-col-1">
					<div class="martanda-sidebar-element">
						<div class="martanda-pis">
							<h3><?php echo esc_html( 'Getting Started with ', 'martanda' ) . esc_html( $theme_name );?></h3>
							<p><?php esc_html_e( 'WPKoi themes are built to offer flexibility and customization without requiring technical expertise. Here&#39;s how to get started:', 'martanda' );?></p>
							<div class="martanda-element-col-50h">
								<div class="martanda-element-col-50">
									<ul>
										<li>
											<h5><?php echo esc_html( 'Install ', 'martanda' ) . esc_html( $theme_name );?></h5>
											<p><?php esc_html_e( 'Go to your WordPress admin dashboard. Navigate to Appearance -> Themes -> Add New, search for', 'martanda' );?> <strong><?php echo esc_html( $theme_name );?></strong><?php esc_html_e( ', install the theme, and activate it.', 'martanda' );?><?php if ( $theme_name != 'Martanda' ) { echo '<br><em>' . esc_html( 'Note: ', 'martanda' ) . esc_html( $theme_name ) . esc_html( ' is a child theme of Martanda. The installation process automatically adds the parent theme to your site.', 'martanda' ) . '</em>'; }?></p>
										</li>
									</ul>
								</div>
								<div class="martanda-element-col-50">
									<img src="<?php echo esc_url( get_template_directory_uri() . '/img/how-to-use-1.gif' ); ?>" >
								</div>
							</div>
							<ul>
								<li>
									<h5><?php esc_html_e( 'Activate Recommended Plugins', 'martanda' );?></h5>
									<p><?php echo esc_html( 'After activation, install the recommended plugins, such as', 'martanda' );?> <strong><?php echo esc_html( 'Elementor', 'martanda' );?></strong> <?php echo esc_html( 'and', 'martanda' );?> <strong><?php echo esc_html( 'WPKoi Templates for Elementor', 'martanda' );?></strong><?php echo esc_html( ', to unlock additional functionality.', 'martanda' );?></p>
								</li>
								<li>
									<h5><?php esc_html_e( 'Install the Premium Version', 'martanda' );?></h5>
									<p><?php esc_html_e( 'If you&#39;re using the premium version of a WPKoi theme, install it as a plugin while the free theme is active. It extends the basic features. Go to Plugins -> Add New, upload the premium addons, and activate them.', 'martanda' );?></p>
								</li>
							</ul>
						</div>
						
						<div class="martanda-pis">
							<h3><?php esc_html_e( 'Customizing Your Website with the Customizer', 'martanda' );?></h3>
							<p><?php esc_html_e( 'The Customizer allows you to make general visual changes to your website.', 'martanda' );?></p>
							<ul>
								<li>
									<h5><?php esc_html_e( 'Accessing the Customizer', 'martanda' );?></h5>
									<p><?php esc_html_e( 'Navigate to Appearance -> Customize.', 'martanda' );?></p>
								</li>
								<li>
									<h5><?php esc_html_e( 'Change General and Color Settings', 'martanda' );?></h5>
									<p><?php esc_html_e( 'Use the Customizer to update the colors, back-to-top element, fixed side content, etc. The premium version offers additional features like typography options, advanced color settings, copyright area customization, sticky header, spacings, and more.', 'martanda' );?></p>
								</li>
							</ul>
							
							<?php
							$quicklinkcustomizer = array(
								'Site Identity' => array( 'url' => admin_url( 'customize.php' ), 'button' => esc_html( 'Customize', 'martanda' ) ),
								'General' => array( 'url' => admin_url( 'customize.php' ), 'button' => esc_html( 'Customize', 'martanda' ) ),
								'Colors' => array( 'url' => admin_url( 'customize.php' ), 'button' => esc_html( 'Customize', 'martanda' ) ),
							);
							?>
							<div class="martanda-de-h martanda-qe-h martanda-de-pis">	
								<?php foreach( $quicklinkcustomizer as $quicklink => $info ) { ?>
								<div class="martanda-de-e">
									<a href="<?php echo $info[ 'url' ] ; ?>" target="_blank" class="martanda-switch-link">
										<div class="martanda-de-e-premium-i">
											<p><?php echo esc_html( $quicklink ); ?></p>
											<div class="martanda-de-d">

												<div class="martanda-de-di"><h4><?php echo esc_html( $info[ 'button' ] ); ?></h4></div>
											</div>
										</div>
									</a>
								</div>
								<?php } ?>
							</div>
						</div>
						
						<div class="martanda-pis">
							<h3><?php esc_html_e( 'Template Parts and Block Editor Integration', 'martanda' );?></h3>
							<p><?php esc_html_e( 'Martanda and its child themes, support Template Parts, giving you more control over your site’s layout and structure.', 'martanda' );?></p>
							<div class="martanda-element-col-50h">
								<div class="martanda-element-col-50">
									<ul>
										<li>
											<h5><?php esc_html_e( 'Edit Template Parts', 'martanda' );?></h5>
											<p><?php esc_html_e( 'Access Template Parts via Appearance -> Edit Header & Footer or Appearance -> Patterns. You can also directly reach specific Template Parts from the links below.', 'martanda' );?></p>
										</li>
										<li>
											<h5><?php esc_html_e( 'Edit Parts in the Block Editor', 'martanda' );?></h5>
											<p><?php esc_html_e( 'You can modify the Top Bar, Header, Footer, Archives, and Default Page/Post structures using WordPress&#39;s block-based site editor.', 'martanda' );?></p>
										</li>
									</ul>
								</div>
								<div class="martanda-element-col-50">
									<img src="<?php echo esc_url( get_template_directory_uri() . '/img/how-to-use-2.gif' ); ?>" >
								</div>
							</div>
							<ul>
								<li>
									<h5><?php esc_html_e( 'Edit the Menu in the Header Editor', 'martanda' );?></h5>
									<p><?php esc_html_e( 'To edit your menu, go to the Header Template Part editor. Click on the navigation block and add your menu items.', 'martanda' );?></p>
								</li>
							</ul>
							<?php
							$quicklinkparts = array(
								'Top Bar' => array( 'url' => admin_url( 'site-editor.php?postType=wp_template_part&postId=' . esc_html( wp_get_theme()->get( 'TextDomain' ) ) .'%2F%2Ftopbar&canvas=edit' ), 'button' => esc_html( 'Build', 'martanda' ) ),
								'Header' => array( 'url' => admin_url( 'site-editor.php?postType=wp_template_part&postId=' . esc_html( wp_get_theme()->get( 'TextDomain' ) ) .'%2F%2Fheader&canvas=edit' ), 'button' => esc_html( 'Build', 'martanda' ) ),
								'Footer' => array( 'url' => admin_url( 'site-editor.php?postType=wp_template_part&postId=' . esc_html( wp_get_theme()->get( 'TextDomain' ) ) .'%2F%2Ffooter&canvas=edit' ), 'button' => esc_html( 'Build', 'martanda' ) ),
							);
							?>
							<div class="martanda-de-h martanda-qe-h martanda-de-pis">	
								<?php foreach( $quicklinkparts as $quicklink => $info ) { ?>
								<div class="martanda-de-e">
									<a href="<?php echo $info[ 'url' ] ; ?>" target="_blank" class="martanda-switch-link">
										<div class="martanda-de-e-premium-i">
											<p><?php echo esc_html( $quicklink ); ?></p>
											<div class="martanda-de-d">

												<div class="martanda-de-di"><h4><?php echo esc_html( $info[ 'button' ] ); ?></h4></div>
											</div>
										</div>
									</a>
								</div>
								<?php } ?>
							</div>
						</div>
						
						<div class="martanda-pis">
							<h3><?php esc_html_e( 'Importing a Demo Layout', 'martanda' );?></h3>
							<p><?php esc_html_e( 'The premium version includes an easy, full demo content import feature, but you can also import a demo homepage with the free version.', 'martanda' );?></p>
							<ul>
								<li>
									<h5><?php esc_html_e( 'Import Free Partial Homepage', 'martanda' );?></h5>
									<p><?php esc_html_e( 'Install and activate the free Elementor and WPKoi Templates for Elementor plugins. Navigate to WPKoi Templates in the admin menu, choose your preferred template, and import it.', 'martanda' );?></p>
									<a href="<?php echo esc_url( MARTANDA_IMPORT ); ?>" class="wpkoi-admin-button" target="_blank"><?php esc_html_e( 'How to use WPKoi Templates for Elementor', 'martanda' );?></a>
								</li>
								<li>
									<h5><?php esc_html_e( 'Import Full Demo (Premium)', 'martanda' );?></h5>
									<p><?php esc_html_e( 'If you’re using the premium version of the theme, install and activate the recommended plugins, including the One Click Demo Import plugin. After that go to Appearance -> Import Demo Data and import the demo.', 'martanda' );?></p>
								</li>
							</ul>
						</div>
						
						<div class="martanda-pis martanda-pis-last">
							<h3><?php esc_html_e( 'Working with Elementor', 'martanda' );?></h3>
							<p><?php esc_html_e( 'WPKoi themes are fully compatible with Elementor, allowing you to edit pages and posts with a drag-and-drop interface.', 'martanda' );?></p>
							<ul>
								<li>
									<h5><?php esc_html_e( 'Edit a Page or Posts', 'martanda' );?></h5>
									<p><?php esc_html_e( 'Navigate to Pages -> All Pages. Select the page you want to edit and click Edit with Elementor. Use the Elementor editor to customize your layout, add widgets, and style your content.', 'martanda' );?></p>
								</li>
								<li>
									<h5><?php esc_html_e( 'Check the Elementor Help Center', 'martanda' );?></h5>
									<p><?php esc_html_e( 'If you&#39;re unsure how to use Elementor, visit their help center for detailed guides.', 'martanda' );?></p>
									<a href="<?php echo esc_url( MARTANDA_ELEMENTOR_DOCS ); ?>" class="wpkoi-admin-button" target="_blank"><?php esc_html_e( 'How to use Elementor', 'martanda' );?></a>
								</li>
							</ul>
						</div>
						
					</div>
				</div>
				<div class="martanda-element-col-2">
					<?php 
					$martanda_noactivator = 'noactivate';
					martanda_settings_page_sidebar( $martanda_noactivator ); 
					?>
				</div>
			</div>
		
		</div>
	</div>
</div>
		<?php
	}
}

if ( ! function_exists( 'martanda_admin_errors' ) ) {
	add_action( 'admin_notices', 'martanda_admin_errors' );
	/**
	 * Add our admin notices
	 *
	 */
	function martanda_admin_errors() {
		$screen = get_current_screen();

		if ( 'appearance_page_martanda-options' !== $screen->base ) {
			return;
		}

		if ( isset( $_GET['settings-updated'] ) && 'true' == $_GET['settings-updated'] ) {
			 add_settings_error( 'martanda-notices', 'true', esc_html__( 'Settings saved.', 'martanda' ), 'updated' );
		}

		settings_errors( 'martanda-notices' );
	}
}

if ( ! function_exists( 'martanda_add_edit_header_submenu' ) ) {
	add_action('admin_menu', 'martanda_add_edit_header_submenu', 5);
	/**
	 * Adds a direct link to template parts to help the users to find the editor for menu, logo etc...
	 *
	 */

	function martanda_add_edit_header_submenu() {
		// Check if the WordPress version is newer than defined
        if ( version_compare( get_bloginfo('version'), '6.6', '<' ) ) {
            return; // Exit if WordPress version is less than defined
        }
		
		global $submenu;

		// Define the parent menu slug
		$parent_slug = 'themes.php';

		// Define the submenu item
		$submenu[$parent_slug][] = array(
			esc_html( 'Edit Header & Footer', 'martanda' ), // Menu title
			apply_filters( 'martanda_dashboard_page_capability', 'edit_theme_options' ), // Capability required to see this menu item
			'site-editor.php?postType=wp_template_part'  // URL to the page
		);
	}
}

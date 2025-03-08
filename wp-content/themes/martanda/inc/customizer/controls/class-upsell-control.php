<?php
/**
 * The upsell Customizer controll.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'Martanda_Customize_Misc_Control' ) ) {
	/**
	 * Create our in-section upsell controls.
	 * Escape your URL in the Customizer using esc_url().
	 *
	 */
	class Martanda_Customize_Misc_Control extends WP_Customize_Control {
		public $description = '';
		public $url = '';
		public $type = 'addon';
		public $label = '';

		public function enqueue() {
			wp_enqueue_style( 'martanda-customizer-controls-css', trailingslashit( get_template_directory_uri() ) . 'inc/customizer/controls/css/upsell-customizer.css', array(), MARTANDA_VERSION );
		}

		public function to_json() {
			parent::to_json();
			$this->json[ 'url' ] = esc_url( $this->url );
		}

		public function content_template() {
			?>
			<div class="wpkoi-addon">
				<svg class="get-wpkoi-addon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M180.5 141.5C219.7 108.5 272.6 80 336 80s116.3 28.5 155.5 61.5c39.1 33 66.9 72.4 81 99.8c4.7 9.2 4.7 20.1 0 29.3c-14.1 27.4-41.9 66.8-81 99.8C452.3 403.5 399.4 432 336 432s-116.3-28.5-155.5-61.5c-16.2-13.7-30.5-28.5-42.7-43.1L48.1 379.6c-12.5 7.3-28.4 5.3-38.7-4.9S-3 348.7 4.2 336.1L50 256 4.2 175.9c-7.2-12.6-5-28.4 5.3-38.6s26.1-12.2 38.7-4.9l89.7 52.3c12.2-14.6 26.5-29.4 42.7-43.1zM448 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/></svg>
				<p class="wpkoi-addon-description">{{{ data.description }}}</p>
				<ul class="get-wpkoi-addon-list">
					<li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg> <?php echo esc_html( 'Full demo import', 'martanda' ); ?></p></li>
					<li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg> <?php echo esc_html( 'Customizable colors', 'martanda' ); ?></p></li>
					<li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg> <?php echo esc_html( 'Customizable typography', 'martanda' ); ?></p></li>
					<li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg> <?php echo esc_html( 'Margin controls', 'martanda' ); ?></p></li>
					<li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg> <?php echo esc_html( 'Sticky header', 'martanda' ); ?></p></li>
					<li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg> <?php echo esc_html( 'Extra Elementor features', 'martanda' ); ?></p></li>
					<li><p><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg> <?php echo esc_html( 'Much more...', 'martanda' ); ?></p></li>
				</ul>
				<span class="get-addon get-wpkoi-addon">
					<a href="{{{ data.url }}}" class="get-wpkoi-addon-button" target="_blank">{{ data.label }}</a>
				</span>
			</div>
			<?php
		}
	}
}

if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'Martanda_Customize_Help_Control' ) ) {
	/**
	 * Create our in-section upsell controls.
	 * Escape your URL in the Customizer using esc_url().
	 *
	 */
	class Martanda_Customize_Help_Control extends WP_Customize_Control {
		public $description = '';
		public $url = '';
		public $type = 'addonhelp';
		public $label = '';

		public function enqueue() {
			wp_enqueue_style( 'martanda-customizer-controls-css', trailingslashit( get_template_directory_uri() ) . 'inc/customizer/controls/css/upsell-customizer.css', array(), MARTANDA_VERSION );
		}

		public function to_json() {
			parent::to_json();
			$this->json[ 'url' ] = esc_url( $this->url );
		}

		public function content_template() {
			?>
			<p class="wpkoi-addon-description">{{{ data.description }}}</p>
			<span class="get-addon get-wpkoi-addon">
				<a href="{{{ data.url }}}" class="get-wpkoi-addon-button" target="_blank">{{ data.label }}</a>
			</span>
			<?php
		}
	}
}

<?php
/**
 * The template parts Customizer section.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( class_exists( 'WP_Customize_Section' ) && ! class_exists( 'Martanda_Template_Parts_Section' ) ) {
	/**
	 * Create our template parts section.
	 * Escape your URL in the Customizer using esc_url().
	 *
	 */
	class Martanda_Template_Parts_Section extends WP_Customize_Control {
		public $type = 'martanda-template-parts-section';
		public $tp_url = '';
		public $tp_text = '';
		public $id = '';

		public function json() {
			$json = parent::json();
			$json['tp_text'] = $this->tp_text;
			$json['tp_url']  = esc_url( $this->tp_url );
			$json['id'] = $this->id;
			return $json;
		}

		protected function content_template() {
			?>
			<a href="{{{ data.tp_url }}}" target="_blank"><h3 class="accordion-section-title">{{ data.tp_text }}</h3></a>
			<?php
		}
	}
}
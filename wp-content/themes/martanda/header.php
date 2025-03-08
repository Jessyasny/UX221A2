<?php
/**
 * The template for displaying the header.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php martanda_body_schema();?> <?php body_class(); ?>>
	<?php do_action( 'wp_body_open' ); ?>
    <div class="martanda-body-padding-content">
    	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'martanda' ); ?></a>
    	<div class="martanda-top-bar-content">
        	<?php 
				// Add topbar template.
				block_template_part( 'topbar' );
			?>
        </div>
		<?php
        // martanda_before_header hook.
        do_action( 'martanda_before_header' );
        
        // martanda_header hook.
        do_action( 'martanda_header' );
        
        // martanda_after_header hook.
        do_action( 'martanda_after_header' );
        ?>
    
		<div id="page">
            <div id="content" class="site-content">
                <?php
                // martanda_inside_container hook.
                do_action( 'martanda_inside_container' );

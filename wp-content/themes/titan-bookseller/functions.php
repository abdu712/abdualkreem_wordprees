<?php
/**
 * Titan Bookseller functions
 */

if ( ! function_exists( 'mobile_app_company_styles' ) ) :
	function mobile_app_company_styles() {
		// Register theme stylesheet.
		wp_register_style('titan-bookseller-style',
			get_template_directory_uri() . '/style.css',array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'titan-bookseller-style' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'mobile_app_company_styles' );


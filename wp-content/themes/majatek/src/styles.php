<?php

if ( ! function_exists( 'develtio_register_styles' ) ) {
	function develtio_register_styles() {
		wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/dist/css/main.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'develtio_register_styles' );

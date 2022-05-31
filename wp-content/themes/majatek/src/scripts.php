<?php

if ( ! function_exists( 'develtio_register_scripts' ) ) {
	function develtio_register_scripts() {
		wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/dist/js/all.js', array( 'jquery' ), null, true );
	}
}
add_action( 'wp_enqueue_scripts', 'develtio_register_scripts' );

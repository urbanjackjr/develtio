<?php

if ( ! function_exists( 'develtio_register_thumbnails' ) ) {
	function develtio_register_thumbnails() {
		add_image_size( 'custom-thumbnail', 800, 600, true );
	}
}
add_action( 'after_setup_theme', 'develtio_register_thumbnails' );

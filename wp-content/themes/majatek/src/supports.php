<?php

if ( ! function_exists( 'develtio_add_theme_supports' ) ) {

	function develtio_add_theme_supports() {
		add_theme_support( 'custom-logo', array(
			'width' => 242,
			'height' => 83
		) );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		add_theme_support(
			'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
	}
}
add_action( 'after_setup_theme', 'develtio_add_theme_supports' );

if ( ! function_exists( 'develtio_load_textdomain' ) ) {
	function develtio_load_textdomain() {
		load_theme_textdomain( 'develtio', get_template_directory() . '/resources/languages' );
	}
}
add_action( 'after_setup_theme', 'develtio_load_textdomain' );

<?php

if ( ! function_exists( 'develtio_register_navigations' ) ) {
	function develtio_register_navigations() {
		register_nav_menus(
			array(
				'header'    => __( 'Header Navigation', 'develtio' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'develtio_register_navigations' );

// Custom "add_li_class" wp_nav_menu() function argument to add li classes
if ( ! function_exists( 'add_additional_class_on_li' )) {
	function add_additional_class_on_li($classes, $item, $args) {
		if(isset($args->add_li_class)) {
			$classes[] = $args->add_li_class;
		}
		return $classes;
	}
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
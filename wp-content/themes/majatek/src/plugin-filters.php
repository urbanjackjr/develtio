<?php

if ( ! function_exists( 'develtio_plugin_filters' ) ) {
	function develtio_plugin_filters() {
		add_filter('wpcf7_autop_or_not', '__return_false');
	}
}
add_action( 'init', 'develtio_plugin_filters' );
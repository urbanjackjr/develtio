<?php

if ( ! function_exists( 'ujj_plugin_filters' ) ) {
	function ujj_plugin_filters() {
		add_filter('wpcf7_autop_or_not', '__return_false');
	}
}
add_action( 'init', 'ujj_plugin_filters' );
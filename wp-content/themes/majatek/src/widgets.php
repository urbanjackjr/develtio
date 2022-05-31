<?php

if ( ! function_exists( 'develtio_register_widgets' ) ) {
	function develtio_register_widgets() {
        for($i = 1; $i < 5; $i++) {
            register_sidebar( array(
                'name' => 'Footer ' . $i,
                'id' => 'footer_' . $i,
                'before_widget' => '',
                'after_widget' => '',
                'before_title' => '<h4 class="widget__title">',
                'after_title' => '</h4>',
                'before_sidebar' => '<div class="widget-area footer__column">',
                'after_sidebar' => '</div>'
            ) );
        }
	}
}
add_action( 'widgets_init', 'develtio_register_widgets' );
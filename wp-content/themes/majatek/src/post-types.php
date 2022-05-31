<?php

if ( ! function_exists( 'develtio_register_book_post_type' ) ) {
	function develtio_register_book_post_type() {
		// register_post_type(
		// 	'book', array(
		// 		'public'      => true,
		// 		'supports'    => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
		// 		'description' => __( 'Collection of books.', 'develtio' ),
		// 		'labels'      => array(
		// 			'name'               => _x( 'Books', 'post type general name', 'develtio' ),
		// 			'singular_name'      => _x( 'Book', 'post type singular name', 'develtio' ),
		// 			'menu_name'          => _x( 'Books', 'admin menu', 'develtio' ),
		// 			'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'develtio' ),
		// 			'add_new'            => _x( 'Add New', 'book', 'develtio' ),
		// 			'add_new_item'       => __( 'Add New Book', 'develtio' ),
		// 			'new_item'           => __( 'New Book', 'develtio' ),
		// 			'edit_item'          => __( 'Edit Book', 'develtio' ),
		// 			'view_item'          => __( 'View Book', 'develtio' ),
		// 			'all_items'          => __( 'All Books', 'develtio' ),
		// 			'search_items'       => __( 'Search Books', 'develtio' ),
		// 			'parent_item_colon'  => __( 'Parent Books: ', 'develtio' ),
		// 			'not_found'          => __( 'No books found.', 'develtio' ),
		// 			'not_found_in_trash' => __( 'No books found in Trash.', 'develtio' ),
		// 		),
		// 	)
		// );
	}
}
add_action( 'init', 'develtio_register_book_post_type' );

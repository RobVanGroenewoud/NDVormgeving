<?php 
	wp_enqueue_script("jquery");

	function custom_navigation_menus() {
		$locations = 		array(
			'header-menu' => __( 'Header Menu' ),
			'extra-menu' => __( 'Extra Menu' )
		);

		register_nav_menus($locations);
	}

	add_action( 'init', 'custom_navigation_menus' );	
?>
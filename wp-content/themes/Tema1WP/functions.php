<?php 

function register_my_menus(){

	// register_nav_menu('header-nav', __('Header Navigation'));
	
	register_nav_menus(
		array(
			'header-nav' => __('Header Navigation'),
			'footer-nav' => __('Footer Navigation')
		)
	);
}
add_action('init', 'register_my_menus' );

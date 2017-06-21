<?php 



/*+++++++++++++++++++++++++++
+++++++++++++++++++++++++++++
Funcion que agrega los menus
+++++++++++++++++++++++++++++
+++++++++++++++++++++++++++++*/

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


/*+++++++++++++++++++++++++++
+++++++++++++++++++++++++++++
Funcion que añade sidebar
+++++++++++++++++++++++++++++
+++++++++++++++++++++++++++++*/

function miplugin_register_sidebar(){
	register_sidebar(
			array(
				'id' => 'sidebar__footer',
				'name' => 'Sidebar footer',
				'description' => 'Sidebar para links del footer',
				'before_widget' => '<div class="sidebar__item">',
				'after_widget' => '</div>',
				'before_title' => '<strong class="title__widget">',
				'after_title' => '</strong>'
			)
		);
}
add_action('widgets_init', 'miplugin_register_sidebar');


<?php 
	wp_nav_menu(
		array(
			//Ubicacion del menu
			'theme_location' => 'footer-nav',
			//cambiar contenedor a un <nav>
			'container' => 'nav',
			//clase del contenedor <nav>
			'container_class' => 'footer__nav',
			//clase del <ul> dentro del <nav>
			'menu_class' => 'footer__nav__list'
			)
		);
 ?>
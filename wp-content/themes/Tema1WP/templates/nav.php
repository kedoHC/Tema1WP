<?php 
	wp_nav_menu(
		array(
			//Ubicacion del menu
			'theme_location' => 'header-nav',
			//cambiar contenedor a un <nav>
			'container' => 'nav',
			//clase del contenedor <nav>
			'container_class' => 'header__nav',
			//clase del <ul> dentro del <nav>
			'menu_class' => 'header__nav__list'
			)
		);
 ?>
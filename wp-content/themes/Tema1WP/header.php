<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name') ?></title>
	
	<!-- OG tags -->
    <meta property="og:image" content="http://vitalinea.com.mx/images/share.png"/>
    <meta property="og:title" content="VITALINEA"/>
    <meta property="og:description" content="Nuevos Tiempos. ¡Nuevas Reglas!, #DisfrutandoEsMásFácil"/>

    <!--Twitter tags-->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="http://vitalinea.com.mx/">
    <meta name="twitter:creator" content="@moon_stroker">
    <meta name="twitter:title" content="VITALINEA">
    <meta name="twitter:description" content="Nuevos Tiempos. ¡Nuevas Reglas!, #DisfrutandoEsMásFácil">
    <meta name="twitter:image" content="http://vitalinea.com.mx/images/share.png">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo(stylesheet_url); ?>">
 	<script src="<?php echo get_template_directory_uri(); ?>/js/vendors.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bundle.js"></script>

</head>
<body>
	<header id="header" class="header">

		<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name') ?></a></h1>
		<h2><?php bloginfo('description') ?></h2>
        <?php include TEMPLATEPATH . "/templates/nav.php" ?>
	</header>
    <div class="main__container">
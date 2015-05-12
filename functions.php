<?php
define('TEMPPATH', get_bloginfo('stylesheet_directory'));
define('img',TEMPPATH. "/img");
define('css',TEMPPATH. "/css");
define('css',TEMPPATH. "/js");
add_theme_support( 'post-thumbnails' ); //soporte para imagens en miniatura.

// SOPORTANDO EL FORMULARIO BUSCAR EN HTML5
add_theme_support( 'html5', array( 'search-form' ) );

// SOPORTANDO MENUS
if (function_exists('register_nav_menus')) {
	register_nav_menus(
		array('main' => 'Main Nav')
		);
}


<?php
define('TEMPPATH', get_bloginfo('stylesheet_directory'));
define('img',TEMPPATH. "/img");
define('css',TEMPPATH. "/css");
define('js',TEMPPATH. "/js");
add_theme_support( 'post-thumbnails' ); //soporte para imagens en miniatura.

// SOPORTANDO EL FORMULARIO BUSCAR EN HTML5
add_theme_support( 'html5', array( 'search-form' ) );

// SOPORTANDO MENUS
if (function_exists('register_nav_menus')) {
	register_nav_menus(
		array('main' => 'Main Nav')
		);
}


/********************************
    REMOVER LA BASURA DEL HEADER
*********************************/
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


?>


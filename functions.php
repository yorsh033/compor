<?php
// DECLARACION DE LOS DIRECTORIOS PARA LOS ASSETS DEL TEMA
define('TEMPPATH', get_bloginfo('stylesheet_directory'));
define('img',TEMPPATH. "/img");
define('css',TEMPPATH. "/css");
define('js',TEMPPATH. "/js");
// SOPORTE PARA LAS IMAGENES DE LOS POSTS
add_theme_support( 'post-thumbnails' ); 

// SOPORTANDO EL FORMULARIO BUSCAR EN HTML5
add_theme_support( 'html5', array( 'search-form' ) );

// AÑÁDIENDO SOPORTE PARA LOS MENUS
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




/****************************************
    FUNCION PARA ELIMINAR MARGIN EN HTML
*****************************************/
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

?>

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
		array('menu' => 'Main Nav'));

	register_nav_menus(
		array('menu-secundario' => 'Second Nav')
		);
	register_nav_menus(
		array('menu-footer' => 'Footer Nav')
		);				

}


// remove_filter( 'the_content', 'wpautop' ); 



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




/********************************************
    FUNCION INSERTAR EL TITULO EN <TITLE>
*********************************************/

/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function theme_name_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}
	
	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name ', ' display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'theme_name_wp_title', 10, 2 );



add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}


/***********************************************************************/
/***********************************************************************/
add_action('phpmailer_init','send_smtp_email');
function send_smtp_email( $phpmailer )
{
    // Define que estamos enviando por SMTP
    $phpmailer->isSMTP();
 
    // La dirección del HOST del servidor de correo SMTP p.e. smtp.midominio.com
    $phpmailer->Host = "your server smtp address";
 
    // Uso autenticación por SMTP (true|false)
    $phpmailer->SMTPAuth = true;
 
    // Puerto SMTP - Suele ser el 25, 465 o 587
    $phpmailer->Port = "587";
 
    // Usuario de la cuenta de correo
    $phpmailer->Username = "user name";
 
    // Contraseña para la autenticación SMTP
    $phpmailer->Password = "password";
 
    // El tipo de encriptación que usamos al conectar - ssl (deprecated) o tls
    $phpmailer->SMTPSecure = "tls";
 
    $phpmailer->From = "tucuenta@decorreo.com";
    $phpmailer->FromName = "Tu nombre";
}


?>


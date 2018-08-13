<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );

// removing editor from sub-menus
function inhabitent_remove_submenus() {
	remove_submenu_page( 'themes.php', 'theme-editor.php' );
	remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );

function inhabitent_change_login() {
	echo '<style type="text/css">                                                                   
			h1 a { background-image:url("'.get_stylesheet_directory_uri().'/images/inhabitent-logo-text-dark.svg") !important; 
			height: 60px !important;
			width: 300px !important;
			background-size: 300px !important;}                            
	</style>';
}
add_action('login_head', 'inhabitent_change_login');

function inhabitent_url( $url ) {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'inhabitent_url' );



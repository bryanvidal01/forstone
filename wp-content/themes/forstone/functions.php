<?php


function bbx_theme_setup() {
	if ( ! isset( $content_width ) ) $content_width = 1200;
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_filter( 'show_admin_bar', '__return_false' );
}
add_action( 'after_setup_theme', 'bbx_theme_setup' );


function bbx_enqueue_scripts() {
	$js_directory = get_template_directory_uri() . '/javascript/';
	wp_register_script( 'global', $js_directory . 'global.js', 'jquery', '1.0' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'global' );
}
add_action( 'wp_enqueue_scripts', 'bbx_enqueue_scripts' );


register_nav_menus( array(
	'nav_principal' => 'Navigation Principale',
	'nav_home' => 'Navigation Home',
) );


// Thumbsize
add_image_size( '1900x1400', 1900, 1400, true);
add_image_size( '200x200', 200, 200, true );


// POST type

function create_post_type() {
  register_post_type( 'equipe',
    array(
      'labels' => array(
        'name' => __( 'Équipes' ),
        'singular_name' => __( 'Équipe' )
      ),
      'public' => true,
      'has_archive' => true,
	  'menu_icon' => 'dashicons-groups'
    )
  );
}
add_action( 'init', 'create_post_type' );



// Get background

function get_background($imgBackground) {
	if ($imgBackground) {
	    $imgURL = wp_get_attachment_image_src($imgBackground, '1900x1400')[0];
	}else{
	    $imgURL = get_template_directory_uri() . '/assets/images/background-home.jpg';
	}

	return $imgURL;
}

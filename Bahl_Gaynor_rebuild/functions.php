<?php 

function load_j4c_scripts(){

//loadi style.csss
	wp_enqueue_script("jquery");
    wp_enqueue_script('j4c_scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery') );
	wp_enqueue_style( 'bootstrapstyle', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'master-style', get_template_directory_uri() . '/css/master.css?_dc='.strtotime("now") );
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), true );
    wp_enqueue_style( 'style', get_stylesheet_uri(), array('bootstrapstyle') );
	wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );

}
add_action('wp_enqueue_scripts', 'load_j4c_scripts');

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
 // register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );

register_nav_menus( array(
	'menu' => 'Main Menu',
	'contentMenu' => 'Content Menu'
) );
}

add_theme_support( 'post-thumbnails' );


?>
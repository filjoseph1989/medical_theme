<?php
/**
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * @package WordPress
 * @subpackage mmfc
 * @since mmfc 1.0.0
 */
if ( ! function_exists( 'mmfc_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function mmfc_setup() {
  	/*
  	 * Make theme available for translation.
  	 * Translations can be filed in the /languages/ directory.
  	 * If you're building a theme based on Twenty Sixteen, use a find and replace
  	 * to change 'twentysixteen' to the name of your theme in all the template files
  	 */

  	// Add default posts and comments RSS feed links to head.
  	add_theme_support( 'automatic-feed-links' );

  	/*
  	 * Let WordPress manage the document title.
  	 * By adding theme support, we declare that this theme does not use a
  	 * hard-coded <title> tag in the document head, and expect WordPress to
  	 * provide it for us.
  	 */
  	add_theme_support( 'title-tag' );

  	/*
  	 * Enable support for Post Thumbnails on posts and pages.
  	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
  	 */
  	add_theme_support( 'post-thumbnails' );
  	set_post_thumbnail_size( 1200, 0, true );

  	// This theme uses wp_nav_menu() in two locations.
  	register_nav_menus( array(
  		'primary' => __( 'Primary Menu', 'mmfc' ),
  		'Secondary' => __( 'Secondary Menu', 'mmfc' ),
  		'social'  => __( 'Social Links Menu', 'mmfc' ),
  	) );

  	/*
  	 * Switch default core markup for search form, comment form, and comments
  	 * to output valid HTML5.
  	 */
  	add_theme_support( 'html5', array(
  		'search-form',
  		'comment-form',
  		'comment-list',
  		'gallery',
  		'caption',
  	) );

  	/*
  	 * Enable support for Post Formats.
  	 * See: https://codex.wordpress.org/Post_Formats
  	 */
  	add_theme_support( 'post-formats', array(
  		'aside',
  		'image',
  		'video',
  		'quote',
  		'link',
  		'gallery',
  		'status',
  		'audio',
  		'chat',
  	) );

  }
endif; # mmfc_setup
add_action( 'after_setup_theme', 'mmfc_setup' );

/**
 * Enqueues scripts and styles.
 * @since mmfc 1.0
 */
function mmfc_scripts() {
	wp_enqueue_style( 'mmfc-style', get_stylesheet_uri() );
  wp_enqueue_script( 'mmfc-script', get_template_directory_uri() . '/js/jquery-1.11.3.js', array( 'jquery' ), '', false );
  wp_enqueue_script( 'mmfc-material', get_template_directory_uri() . '/js/materialize.min.js', array( 'jquery' ), '', true );
  wp_enqueue_script( 'colorbox', get_template_directory_uri() . '/js/jquery.colorbox.js', array( 'jquery' ), '', false );
  wp_enqueue_script( 'responsive', get_template_directory_uri() . '/js/responsive.js', array( 'jquery' ), '', true );
  wp_enqueue_script( 'modal', get_template_directory_uri() . '/js/modal.js', array( 'jquery' ), '', true );
  wp_enqueue_script( 'material', 'https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js', array( 'jquery' ), '', false );
  wp_enqueue_script( 'google', 'http://maps.googleapis.com/maps/api/js', array( 'jquery' ), '', false );
  wp_enqueue_script( 'maps', get_template_directory_uri() . '/js/maps.js', array( 'jquery' ), '', true );
  // wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'mmfc_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/custom_function.php';

/**
 * Function to call custom login template
 */
function my_custom_login() {
  echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/mmfc-login.css" />';
}
add_action('login_head', 'my_custom_login');

/**
 * Function to change login logo url
 */
function my_login_logo_url() {
  return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
return 'Mindanao Medical Foundation College ';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

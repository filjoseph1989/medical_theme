<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @author fil joseph elman {beluan}
 * @contact fil.elman@greyandgreentech.com - business
 *				  filjoseph22@gmail.com - personal
 * @date 12-18-2015 - created
 * @date 01-27-2016 - Updated
 * @package WordPress
 * @subpackage mmfctheme
 * @since mmfctheme 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_url'); ?>/img/favicon/manifest.json">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" media="screen" title="no title">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/img/favicon/ms-icon-150x150.png">
	<meta name="theme-color" content="#ffffff">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="navbar-fixed">
		<nav id="navi" class="margin-50 pink accent-1">
	    <div class="nav-wrapper">
	      <a href="<?php echo site_url(); ?>" class="brand-logo"><img src="<?php echo bloginfo('template_url'); ?>/img/logo.png" alt="" /></a>
	      <a id="nav-bar" class="button-collapse" href="#" data-activates="mobile-demo"><i class="fa fa-bars"></i></a>
				<?php
					# list of links
					$home = get_bloginfo('wpurl');
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'container'			 => '',
							'items_wrap'		 => '<ul id="nav" class="hide-on-med-and-down">%3$s</ul>'
						)
					);
					# mobile navigation
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'container'			 => '',
							'items_wrap'		 => '<ul id="mobile-demo" class="side-nav"><li id="home"><a href="'.$home.'">Home</a></li>%3$s<li><a href="http://www.mmfcstudents.com/">Student Portal</a></li></ul>'
						)
					);
				?>
	    </div>
	  </nav>
	</div>
		<div class="mmfc-border mmfc-container row">
		  <div id="content" class="col s12">
				<?php if (is_home() ) {
					# Display the header assign for home page
					get_template_part( 'template/content', 'header' );
				} elseif (is_page()) {
					# Display banner for page
					get_template_part( 'template/content', 'header_page');
				} elseif (is_single()) {
					# Display banner for single
					get_template_part( 'template/content', 'header_single');
				} ?>

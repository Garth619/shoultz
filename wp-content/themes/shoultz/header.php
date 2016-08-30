<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=3" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/fonts/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick/slick-theme.css"/>
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/js/wow/css/libs/animate.css">
<link href='https://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet' type='text/css'>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
			<?php // wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>

<header>
	
	<div class="inner_header">
		
		<div class="logo_wrapper">
		
			<a href="<?php bloginfo('url');?>">
				<img class="logo" src="<?php bloginfo('template_directory');?>/images/logo_stevenshoultz.png"/>
			</a>
		
		</div><!-- logo_wrapper -->
	
	
		<div class="menu_wrapper">
		
			<span class="menu_text">Menu</span>
		
			<div class="menu_bars">
			
				<div class="single_bars"></div><!-- single_bars -->
				<div class="single_bars"></div><!-- single_bars -->
				<div class="single_bars"></div><!-- single_bars -->
		
			</div><!-- menu_bars -->
		
		</div><!-- menu_wrapper -->
	
		<div class="large_monitor">
	
			<nav class="desktop_nav">
		
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		
			</nav><!-- desktop_nav -->
	
			<a class="desktop_phone" href="tel:2149601551">214.960.1551</a>
	
		</div><!-- large_monitor -->
	
	</div><!-- inner_header -->
	
</header>

<nav class="mobile_dropdown">
	
	<div class="inner_mobile_dropdown">
		
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
	
	</div><!-- inner_mobile_dropdown -->
	
</nav><!-- mobile_dropdown -->










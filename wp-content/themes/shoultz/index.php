<?php
/**
 * Main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<?php include('banner.php');?>


<div id="main">
	
	<img class="inner_page_img svg" src="<?php bloginfo('template_directory');?>/images/desktop/internal_sidebar_experience.svg"/>

<div id="content">
	<?php include('sidebar-blog.php'); ?>
	
	<div id="container">
	
	<h1>Blog</h1>

	
	<div class="mypostfeed">
	
		<?php get_template_part( 'loop', 'index' ); ?>
	
	</div><!-- mypostfeed -->

	</div><!-- container -->
	
</div><!-- content -->

</div><!-- main -->




<?php get_footer(); ?>

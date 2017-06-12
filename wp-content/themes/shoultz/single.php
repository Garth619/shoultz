<?php
/**
 * Template for displaying all single posts
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
	
	
	<div class="mypostfeed">
	
		<?php get_template_part( 'loop', 'single' ); ?>
	
	</div><!-- mypostfeed -->

	</div><!-- container -->
	
</div><!-- content -->

</div><!-- main -->




<?php get_footer(); ?>

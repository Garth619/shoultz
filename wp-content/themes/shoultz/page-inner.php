<?php
/**
 * Template Name: Practice Area Inner Page

 */

get_header(); ?>

		
<?php include('banner.php');?>

			


			
<div id="main">
	
	<img class="inner_page_img svg" src="<?php bloginfo('template_directory');?>/images/desktop/internal_sidebar_experience.svg"/>

<div id="content">
	<?php get_sidebar(); ?>
	
	<div id="container" class="wow fadeInUp" data-wow-delay="1s">
	
	<h1><?php the_title();?></h1>
	
	<?php get_template_part( 'loop', 'page' ); ?>

	</div><!-- container -->
	
	
	
</div><!-- content -->

</div><!-- main -->



<?php get_footer(); ?>

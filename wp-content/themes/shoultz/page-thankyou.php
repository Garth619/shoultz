<?php
/**
 * Template Name: Thank You

 */

get_header(); ?>


<?php include('banner.php');?>


<div id="main">
	
	
	<img class="inner_page_img svg" src="<?php bloginfo('template_directory');?>/images/desktop/internal_sidebar_experience.svg"/>
	
	<span class="large_header about_us_header">Thank You For Contacting Us</span><!-- large_header -->
	
	
	<div id="content">
	
		
		<div id="container">
			
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				
				<?php the_content(); ?>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					
			
			<?php endwhile; // end of the loop. ?>

				     
		</div><!-- container -->

	
	
	</div><!-- content -->
	
	
	
</div><!-- main -->



<?php get_footer(); ?>

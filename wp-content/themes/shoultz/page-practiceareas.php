<?php
/**
 * Template Name: Practice Areas

 */

get_header(); ?>


<?php include('banner.php');?>


<div id="main">
	
	
	<img class="dedicated_img svg" src="<?php bloginfo('template_directory');?>/images/desktop/internal_pa_dedicated.svg"/>
	
	<span class="large_header about_us_header">Practice Areas</span><!-- large_header -->
	
	
	<div id="content" class="wow fadeInUp" data-wow-delay=".25s">
	
		
		<div id="container">
			
			
			<?php if(get_field('practice_areas')): ?>
 
				<ul class="practice_area">
				
				<?php while(has_sub_field('practice_areas')): ?>
 
				
					<li>
						<a href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a>
					</li>
				
				
				<?php endwhile; ?>
 
				</ul>
			
			<?php endif; ?>

			
			
		</div><!-- container -->


	
	
	</div><!-- content -->
	
		
</div><!-- main -->



<?php get_footer(); ?>

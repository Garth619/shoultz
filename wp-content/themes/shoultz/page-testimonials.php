<?php
/**
 * Template Name: Testimonials

 */

get_header(); ?>


<?php include('banner.php');?>


<div id="main">
	
	
	<img class="inner_testimonial_img svg" src="<?php bloginfo('template_directory');?>/images/shoultz_test_testimonials.svg"/>
	
	<span class="large_header about_us_header wow fadeInUp" data-wow-delay=".25s">What Our CLients are saying</span><!-- large_header -->
	
	
	<div id="content">
	
		
		<div id="container" class="wow fadeInUp" data-wow-delay=".25s">
			
			
			<?php if(get_field('testimonials')): ?>
			
			
 
				
				<?php while(has_sub_field('testimonials')): ?>
				
				
 
				
					<div class="single_test_wrapper">
					
					<div class="stars_wrapper">
						
						<img class="stars" src="<?php bloginfo('template_directory');?>/images/shoultz_test_star.svg"/>
						<img class="stars" src="<?php bloginfo('template_directory');?>/images/shoultz_test_star.svg"/>
						<img class="stars" src="<?php bloginfo('template_directory');?>/images/shoultz_test_star.svg"/>
						<img class="stars" src="<?php bloginfo('template_directory');?>/images/shoultz_test_star.svg"/>
						<img class="stars" src="<?php bloginfo('template_directory');?>/images/shoultz_test_star.svg"/>
					
					</div><!-- stars_wrapper -->
					
					<span class="test_title"><?php the_sub_field('testimonial_title');?></span>
					
					<span class="test_content"><?php the_sub_field('testimonial_content');?></span>
					
					
					<span class="test_name"><?php the_sub_field('testimonial_name');?></span>
					
				</div><!-- single_test_wrapper -->
							
				
				<?php endwhile; ?>
			
			
 
			
		<?php endif; ?>
			

		</div><!-- container -->

	</div><!-- content -->
	
		
</div><!-- main -->



<?php get_footer(); ?>

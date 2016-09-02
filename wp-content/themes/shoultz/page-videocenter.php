<?php
/**
 * Template Name: Video Center

 */

get_header(); ?>


<?php include('banner.php');?>


<div id="main">
	
	
	<img class="inner_video_img svg" src="<?php bloginfo('template_directory');?>/images/desktop/internal_video_reliable.svg"/>
	
	<span class="large_header about_us_header wow fadeInUp" data-wow-delay=".25s">Video Center</span><!-- large_header -->
	
	
	<div id="content">
	
		
		<div id="container" class="wow fadeInUp" data-wow-delay=".25s">
			
			
			
			<?php if(get_field('video_center')): ?>
			
				<?php while(has_sub_field('video_center')): ?>
 
					<div class="single_video">
				
						<?php the_sub_field('wistia_code');?>
				
						<a class="video_title" href=""><?php the_sub_field('video_title');?></a>
				
					</div><!-- single_video -->

				<?php endwhile; ?>
			
			<?php endif; ?>
			

			
		</div><!-- container -->


	
	
	</div><!-- content -->
	
		
</div><!-- main -->



<?php get_footer(); ?>

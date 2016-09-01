<?php
/**
 * Template Name: Bio

 */

get_header(); ?>


<?php include('banner.php');?>


<div id="main">
	
	
	<img class="strong svg" src="<?php bloginfo('template_directory');?>/images/desktop/internal_bio_strong.svg"/>
	
	<span class="large_header wow fadeInUp" data-wow-delay=".25s"><?php the_field('main_header_bio');?></span><!-- large_header -->
	
	
	<div id="content">
	
		<div class="bio_sidebar wow fadeInUp" data-wow-delay=".25s">
		
			<img src="<?php bloginfo('template_directory');?>/images/desktop/internal_bio_attorneypic.jpg"/>
		
			
			
			<?php if(get_field('sidebar_bio')): ?>
 
				<?php while(has_sub_field('sidebar_bio')): ?>
 
				
					<div class="sidebar_wrap">
					
						<h2><?php the_sub_field('sidebar_title');?></h2>
			
						<p><?php the_sub_field('sidebar_information');?></p>
			
					<hr/>
					
					</div>
				
				
				<?php endwhile; ?>
 
			<?php endif; ?>
			
			
		</div><!-- bio_sidebar -->
		
		<div id="container" class="wow fadeInUp" data-wow-delay=".25s">
			
			<?php get_template_part( 'loop', 'page' ); ?>
				     			
		</div><!-- container -->
	
	
	</div><!-- content -->
	
	
	
</div><!-- main -->



<?php get_footer(); ?>

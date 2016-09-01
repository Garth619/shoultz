<?php
/**
 * Template Name: Firm Overview

 */

get_header(); ?>


<?php include('banner.php');?>


<div id="main">
	
	
	<img class="about_img svg" src="<?php bloginfo('template_directory');?>/images/desktop/internal_firmoverview_about.svg"/>
	
	<span class="large_header about_us_header wow fadeInUp" data-wow-delay=".25s"><?php the_field('main_header');?></span><!-- large_header -->
	
	
	<div id="content" class="wow fadeInUp" data-wow-delay=".25s">
	
		
		<div id="container">
			
			<?php get_template_part( 'loop', 'page' ); ?>
				     
			</div><!-- container -->

			<span class="pull_quote"><?php the_field('pull_quote');?></span><!-- pull_quote -->
	
	</div><!-- content -->
	
	<section class="logos">
			
			<div class="logo_slider">
				
				<div class="single_logo">
					
					<img src="<?php bloginfo('template_directory');?>/images/shoultz_awards_1.png"/>
					
				</div><!-- single_logo -->
				
				<div class="single_logo">
					
					<img src="<?php bloginfo('template_directory');?>/images/shoultz_awards_2.png"/>
					
				</div><!-- single_logo -->
				
				<div class="single_logo">
					
					<img src="<?php bloginfo('template_directory');?>/images/shoultz_awards_1.png"/>
					
				</div><!-- single_logo -->
				
				<div class="single_logo">
					
					<img src="<?php bloginfo('template_directory');?>/images/shoultz_awards_2.png"/>
					
				</div><!-- single_logo -->
				
			</div><!-- logo_slider -->
			
		</section><!-- logos -->
	
</div><!-- main -->



<?php get_footer(); ?>

<?php
/**
 * Template Name: Contact Us

 */

get_header(); ?>


<?php include('banner.php');?>


<div id="main">
	
	
	<img class="inner_contact_img svg" src="<?php bloginfo('template_directory');?>/images/desktop/internal_contact.svg"/>
	
	
	<div class="contact_wrapper">
	
		<div class="contact_sidebar">
		
			<span class="large_header about_us_header">Contact</span><!-- large_header -->
			
			<span class="title">Address</span><!-- title -->
			
			<span class="contact_content"><?php the_field('address');?></span>
			
			<span class="title">Phone</span><!-- title -->
			
			<a href="tel:<?php the_field('phone');?>" class="contact_content"><?php the_field('phone');?></a>
			
			<span class="title">Fax</span><!-- title -->
			
			<a href="tel:<?php the_field('phone');?>" class="contact_content"><?php the_field('fax');?></a>
			
			<span class="title">Email</span><!-- title -->
			
			<a href="mailto:<?php the_field('email');?>" class="contact_content"><?php the_field('email');?></a>
		
		</div><!-- contact_wrapper -->
		
		<div class="map">
			
		
			<?php the_field('map_iframe');?>
			
		
			<a href="<?php the_field('map_get_direction_url');?>" target="_blank" class="get_directions_bar">Get Directions</a><!-- get_directions_bar -->
		
		
		</div><!-- map -->
		
		</div><!-- contact_wrapper -->
		
		
</div><!-- main -->



<?php get_footer(); ?>

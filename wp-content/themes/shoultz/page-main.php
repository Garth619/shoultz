<?php
/**
 * Template Name: Main
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	
	<div class="main">
		
		<section class="main_banner">
			
			<a class="tel" href="tel:2149601551">214.960.1551</a>
			
			<div class="banner_content">
			
				<a href="">
					<img class="play" src="<?php bloginfo('template_directory');?>/images/mobile/play.png"/>
				</a>
				
				<span class="main_banner_header">Over <span class="thirty_five">35 years</span> of<br/>legal experience</span>
				<span class="main_banner_sub_header">We are not afraid of taking a stand against insurance companies to protext your rights to fair compensation.</span>
				
				<a class="button" href="">CLICK HERE FOR A FREE CONSULTATION</a>
			
			</div><!-- banner_content -->
			
		</section><!-- main_banner -->
		
		<section class="what_we_do">
			
			<div class="single_box">
				
				<img class="icon" src="<?php bloginfo('template_directory');?>/images/shoultz_sp_icon1.svg"/>
				
				<span class="large_header">SIGNIFICANT LITIGATION <br/>& TRIAL EXPERIENCE<div class="arrow_right"></div></span><!-- large_header -->
				
			</div><!-- single_box -->
			
			<div class="single_box">
				
				<img class="icon" src="<?php bloginfo('template_directory');?>/images/shoultz_sp_icon3.svg"/>
				
				<span class="large_header">We assume <br/>all the risk<div class="arrow_right"></div></span><!-- large_header -->
				
			</div><!-- single_box -->
			
			<div class="single_box">
				
				<img class="icon" src="<?php bloginfo('template_directory');?>/images/shoultz_sp_icon2.svg"/>
				
				<span class="large_header">Asscess to A<br/>Large Network<div class="arrow_right"></div></span><!-- large_header -->
				
			</div><!-- single_box -->
			
			<div class="single_box">
				
				<img class="icon" src="<?php bloginfo('template_directory');?>/images/shoultz_sp_icon4.svg"/>
				
				<span class="large_header">Energy & Passion<br/>For Each Case<div class="arrow_right"></div></span><!-- large_header -->
				
			</div><!-- single_box -->
			
						
			
		</section><!-- what_we_do -->
		
		
	</div><!-- main -->
	


<?php get_footer(); ?>

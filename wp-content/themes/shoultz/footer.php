<footer>
			
		<section class="request">
			
			<a name="free-consultation"></a>
			
			<div class="request_left">
				
				<span class="large_header"><?php the_field( 'footer_request_verbiage','option'); ?></span><!-- large_header -->
			
				<span class="description"><?php the_field( 'footer_request_subheader','options'); ?></span><!-- description -->
				<span class="all_fields">ALL FIELDS ARE REQUIRED* </span><!-- all_fields -->
				
				
				<div class="office_desktop">
				
					<div class="address_wrapper">
			
						<span class="address"><?php the_field('address', 19); ?></span>
						<a class="get_directions" href="<?php the_field('map_get_direction_url', 19); ?>" target="_blank">Get Directions <div class="arrow_right"></div></a><!-- get_directions -->
			
					</div><!-- address_wrapper -->
			
					<div class="office_info_wrapper">
				
						<div class="single_office_info">
				
							<img src="<?php bloginfo('template_directory');?>/images/shoultz_request_icon_phone.png"/>
							<a class="office_info" href="tel:<?php the_field('phone', 19); ?>"><?php the_field('phone', 19); ?></a>
				
						</div><!-- single_office_info -->
				
				
					</div><!-- office_info -->
			
				</div><!-- office_desktop -->

				
			</div><!-- request_left -->
			
			
			<div class="request_right">
				
				
				<div class="forms">
					
					<?php gravity_form( 1, false, false, false, '', true); ?>
			
				</div><!-- forms -->
				
				<span class="all_fields desktop">ALL FIELDS ARE REQUIRED* </span><!-- all_fields -->
				
				
				<div class="office_mobile">
				
					<div class="address_wrapper">
			
						<span class="address"><?php the_field('address', 19); ?></span>
						<a class="get_directions" href="<?php the_field('map_get_direction_url', 19); ?>" target="_blank">Get Directions <div class="arrow_right"></div></a><!-- get_directions -->
			
					</div><!-- address_wrapper -->
			
					<div class="office_info_wrapper">
				
						<div class="single_office_info">
				
							<img src="<?php bloginfo('template_directory');?>/images/shoultz_request_icon_phone.png"/>
							<a class="office_info" href="tel:<?php the_field('phone', 19); ?>"><?php the_field('phone', 19); ?></a>
				
						</div><!-- single_office_info -->
				
				
					</div><!-- office_info -->
			
				</div><!-- office_mobile -->
				
				
				
			</div><!-- request_right -->
			
			
			
	
			
			
		</section><!-- request -->
			
	
		<div class="social_icons_wrapper">
		
			<a href="<?php the_field('fb_icon', 4); ?>" target="_blank">
				<img class="icon_reg" src="<?php bloginfo('template_directory');?>/images/shoultz_social_facebook.png"/>
				<img class="icon_hover" src="<?php bloginfo('template_directory');?>/images/shoultz_social_facebook_hover.png"/>
			</a>				
		
		</div><!-- social_icons_wrapper -->
		
		<div class="social_icons_wrapper">
		
			<a href="<?php the_field('twitter_icon', 4); ?>" target="_blank">
				<img class="icon_reg" src="<?php bloginfo('template_directory');?>/images/shoultz_social_twitter.png"/>
				<img class="icon_hover" src="<?php bloginfo('template_directory');?>/images/shoultz_social_twitter_hover.png"/>
			</a>				
		
		</div><!-- social_icons_wrapper -->
		
		<div class="social_icons_wrapper">
		
			<a href="<?php the_field('linkedin_icon', 4); ?>" target="_blank">
				<img class="icon_reg" src="<?php bloginfo('template_directory');?>/images/shoultz_social_linkedin.png"/>
				<img class="icon_hover" src="<?php bloginfo('template_directory');?>/images/shoultz_social_linkedin_hover.png"/>
			</a>				
		
		</div><!-- social_icons_wrapper -->
		
		<div class="social_icons_wrapper">
		
			<a href="<?php the_field('google_plus_icon', 4); ?>" target="_blank">
				<img class="icon_reg" src="<?php bloginfo('template_directory');?>/images/shoultz_social_google.png"/>
				<img class="icon_hover" src="<?php bloginfo('template_directory');?>/images/shoultz_social_google_hover.png"/>
			</a>				
		
		</div><!-- social_icons_wrapper -->
		
		<div class="social_icons_wrapper">
		
			<a href="<?php the_field('yelp_icon', 4); ?>" target="_blank">
				<img class="icon_reg" src="<?php bloginfo('template_directory');?>/images/shoultz_social_yelp.png"/>
				<img class="icon_hover" src="<?php bloginfo('template_directory');?>/images/shoultz_social_yelp_hover.png"/>
			</a>				
		
		</div><!-- social_icons_wrapper -->
		
		
		
		
		<div class="copy_logo_wrapper">
		
			<span class="copyright">&copy; <?php echo date("Y"); ?> <?php the_field( 'footer_firm_name','options'); ?> 
			<br class="copy_break"/><?php the_field( 'all_rights_reserved','options'); ?> &nbsp;|&nbsp;  <a href="<?php the_field( 'footer_page_link','option'); ?>"><?php the_field( 'footer_page_title','option'); ?></a><span class="copyright_bar">&nbsp;&nbsp;|&nbsp;&nbsp;</span></span>
	
			<div class="ilawyer_wrapper">
			
			<a href="//ilawyermarketing.com" target="_blank">
				<img class="ilawyer_reg" src="<?php bloginfo('template_directory');?>/images/shoultz_footer_ilawyer.png"/>
				<img class="ilawyer_hover" src="<?php bloginfo('template_directory');?>/images/logo_hover.png"/>
			</a>
			
			</div>
	
		</div><!-- copy_logo_wrapper -->
			
	</footer>
		
	<img class="preload" src="<?php bloginfo('template_directory');?>/images/shoultz_social_facebook_hover.png"/>
	<img class="preload" src="<?php bloginfo('template_directory');?>/images/shoultz_social_twitter_hover.png"/>
	<img class="preload" src="<?php bloginfo('template_directory');?>/images/shoultz_social_linkedin_hover.png"/>
	<img class="preload" src="<?php bloginfo('template_directory');?>/images/shoultz_social_google_hover.png"/>
	<img class="preload" src="<?php bloginfo('template_directory');?>/images/shoultz_social_yelp_hover.png"/>
	<img class="preload" src="<?php bloginfo('template_directory');?>/images/shoultz_header_playbutton_hover.png"/>
	<img class="preload" src="<?php bloginfo('template_directory');?>/images/shoultz_results_arrowleft_hover.png"/>
	<img class="preload" src="<?php bloginfo('template_directory');?>/images/shoultz_results_arrowright_hover.png"/>
	
	
	

<?php wp_footer(); ?>


<?php the_field( 'body_text_area','option'); ?>




</body>
</html>

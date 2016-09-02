<?php
/**
 * Template Name: Case Results

 */

get_header(); ?>


<?php include('banner.php');?>
 

<div id="main">
	
	
	<img class="inner_caseresults_img svg" src="<?php bloginfo('template_directory');?>/images/desktop/internal_results_successful.svg"/>
	
	<span class="large_header about_us_header wow fadeInUp" data-wow-delay=".25s"><?php the_title();?></span><!-- large_header -->
	
	
		
				
				
				
			<?php if(get_field('case_results')): ?>
			
			<div class="case_results_wrapper wow fadeInUp" data-wow-delay=".25s">
 
				
				<?php while(has_sub_field('case_results')): ?>
 
				<div class="single_case_wrapper">
				
					<div class="single_case">
					
						<div class="case_content">
						
							<span class="case_header"><?php the_sub_field('money_amount');?></span><!-- large_header -->
						
							<span class="case_sub_header"><?php the_sub_field('sub_header');?></span><!-- case_sub_header -->
					
						</div><!-- case_content -->
					
						</div><!-- single_case -->
				
					<div class="single_case_click">
					
					<div class="case_content">
						
						<span class="click_header"><?php the_sub_field('gold_box_title');?></span><!-- large_header -->
						<span class="click_content"><?php the_sub_field('gold_box_content');?></span>
						
					</div><!-- case_content -->
					
				</div><!-- single_case_click -->
				
			</div><!-- single_case_wrapper -->
							
				
			<?php endwhile; ?>
			
			</div><!-- case_results_wrapper -->
 
			
		<?php endif; ?>
				
				

		
</div><!-- main -->



<?php get_footer(); ?>

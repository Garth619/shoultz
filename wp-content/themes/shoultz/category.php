<?php
/**
 * Template for displaying Category Archive pages
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>



<?php include('banner.php');?>


<div id="main">
	
	<img class="inner_page_img svg" src="<?php bloginfo('template_directory');?>/images/desktop/internal_sidebar_experience.svg"/>

<div id="content">
	<?php include('sidebar-blog.php'); ?>
	
	<div id="container">
	
		<h1 class="page-title"><?php printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' );?></h1>
				
		<div class="mypostfeed">
	
		<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				/*
				 * Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>

	
	</div><!-- mypostfeed -->

	</div><!-- container -->
	
</div><!-- content -->

</div><!-- main -->




<?php get_footer(); ?>	
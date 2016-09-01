<?php
/**
 * The loop that displays a page
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>
						
		<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
				
<?php endwhile; // end of the loop. ?>

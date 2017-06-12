
<?php if ( ! have_posts() ) : ?>
	
	
	<div id="post-0" class="post error404 not-found">
		<h2><?php _e( 'Not Found', 'twentyten' ); ?></h2>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found', 'twentyten' ); ?></p>
			
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->


<?php endif; ?>


<?php while ( have_posts() ) : the_post(); ?>


		<div class="mypost">
			
			<h2 class="myposts_title">
				<a class="" href="<?php the_permalink();?>"><?php the_title();?></a>
			</h2><!-- myposts_title -->
			
			<span class="mypost_content">
			
				<?php echo wp_trim_words( get_the_content(), 70, '...' );?>
			
			</span><!-- mypost_content -->
			
			<a class="my_read_more" href="<?php the_permalink();?>">Read More</a><!-- read_more -->
			
			<div><?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?></div>
			
		</div><!-- mypost -->


<?php endwhile; ?>


<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<div id="nav-below" class="navigation">
					<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
					<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
				</div><!-- #nav-below -->
<?php endif; ?>
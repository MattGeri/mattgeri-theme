<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} ?>
		</a>
		<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
		<?php the_excerpt(); ?>
	</div>
</article>
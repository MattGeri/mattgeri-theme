<?php get_header(); ?>

	<main id="main" role="main">

		<div id="content">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					get_template_part( 'parts/content', get_post_format() );
				endwhile;
			else :
				get_template_part( 'parts/content', 'none' );
			endif; ?>
		</div>

		<div id="archive">
			<?php
			global $post;
			$posts = get_posts( array( 'posts_per_page' => -1, 'post_type' => 'post' ) );
			foreach ( $posts as $post ) :
				setup_postdata( $post );
				get_template_part( 'parts/archive' );
			endforeach;
			?>
		</div>

	</main>

<?php get_footer(); ?>
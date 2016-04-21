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

	</main>

<?php get_footer(); ?>
<?php get_header(); ?>

	<div id="hero">
		<div class="inner">
			<?php get_template_part( 'parts/header' ); ?>

			<div id="hero-content">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						get_template_part( 'parts/only-content', get_post_format() );
					endwhile;
				else :
					get_template_part( 'parts/content', 'none' );
				endif;
				?>
			</div>
		</div>
	</div>

	<main id="main" role="main">
		<div id="feature">
			<?php mattgeritheme_latest_article(); ?>
		</div>

		<div id="more">
			<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>articles/" rel="bookmark"><?php esc_html_e( 'More WordPress development articles &rarr;', 'mattgeritheme' ); ?></a></p>
		</div>

	</main>

<?php get_footer(); ?>
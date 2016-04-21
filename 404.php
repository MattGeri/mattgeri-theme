<?php get_header(); ?>

	<main id="main" role="main">

		<div id="content">
			<h2><?php _e( 'Unfortunately, this page no longer exists and it\'s probably my fault! :(', 'mattgeritheme' ); ?></h2>
			<p><?php _e( 'The most likely reason for you landing on this page, is because I\'ve recently redone my entire website.', 'mattgeritheme' ); ?></p>
			<p><?php _e( 'That meant that I removed a whole bunch of old articles and in some cases, repurposed old content in to new articles.', 'mattgeritheme' ); ?></p>
			<p><?php _e( 'So, what I suggest that you do is checkout my <a href="' . esc_url( home_url( '/' ) ) . 'articles/" rel="bookmark">articles</a> page where you will find a whole bunch of articles on WordPress development and potentially find the information you intended to..', 'mattgeritheme' ); ?></p>
			<p><?php _e( 'If not, <a href="' . esc_url( home_url( '/' ) ) . 'about/" rel="bookmark">shoot me a mail</a> and I will be happy to help you out.', 'mattgeritheme' ); ?></p>
			<p><?php _e( 'Lastly! If you\'re interest in high quality, in-depth WordPress content, then sign up to my newsletter below.', 'mattgeritheme' ); ?></p>
			<?php echo do_shortcode( '[convertkit form="26457"]' ); ?>
		</div>

	</main>

<?php get_footer(); ?>
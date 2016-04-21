<?php
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

function mattgeritheme_enqueue_styles() {
	wp_enqueue_style( 'mattgeritheme-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );
	wp_enqueue_style( 'highlightjs', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.2.0/styles/monokai-sublime.min.css' );
}

add_action( 'wp_enqueue_scripts', 'mattgeritheme_enqueue_styles' );

function mattgeritheme_enqueue_scripts() {
	wp_register_script( 'convertkit', 'https://app.convertkit.com/assets/CKJS4.js?v=21' );
	wp_register_script( 'typekit', 'https://use.typekit.net/lri7obl.js' );
	wp_register_script( 'highlightjs', '//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.2.0/highlight.min.js' );

	wp_enqueue_script( 'typekit-init', get_template_directory_uri() . '/js/typekit.js', array( 'typekit' ) );
	wp_enqueue_script( 'convertkit' );
	wp_enqueue_script( 'highlightjs' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'mattgeritheme_enqueue_scripts' );

function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu', 'mattgeritheme' ),
			'footer-menu' => __( 'Footer Menu', 'mattgeritheme' ),
			'social-menu'  => __( 'Social Menu', 'mattgeritheme' ),
		)
	);
}

add_action( 'init', 'register_my_menus' );

function render_convertkit_form( $args ) {
	ob_start();
?>
<div id="ck_success_msg" style="display: none;">
	<p><?php esc_html_e( 'Success! Now check your email to confirm your subscription.', 'mattgeritheme' ); ?></p>
</div>
<form id="ck_subscribe_form" class="signup ck_subscribe_form" action="https://app.convertkit.com/landing_pages/<?php echo intval( $args['form'] ); ?>/subscribe" data-remote="true">
	<div class="ck_errorArea">
		<div id="ck_error_msg" style="display: none">
			<p><?php esc_html_e( 'There was an error submitting your subscription. Please try again.', 'mattgeritheme' ); ?></p>
		</div>
	</div>
	<input type="hidden" value="{&quot;form_style&quot;:&quot;naked&quot;,&quot;embed_style&quot;:&quot;inline&quot;,&quot;embed_trigger&quot;:&quot;scroll_percentage&quot;,&quot;scroll_percentage&quot;:&quot;70&quot;,&quot;delay_seconds&quot;:&quot;10&quot;,&quot;display_position&quot;:&quot;br&quot;,&quot;display_devices&quot;:&quot;all&quot;,&quot;days_no_show&quot;:&quot;15&quot;,&quot;converted_behavior&quot;:&quot;show&quot;}" id="ck_form_options">
	<input type="hidden" name="id" value="<?php echo intval( $args['form'] ); ?>" id="landing_page_id">
	<input type="email" name="email" class="ck_email_address" id="ck_emailField" placeholder="<?php esc_attr_e( 'Email address...', 'mattgeritheme' ); ?>" required>
	<input type="submit" class="subscribe_button ck_subscribe_button btn fields" id='ck_subscribe_button' value="<?php esc_attr_e( 'Improve your WordPress skills', 'mattgeritheme' ); ?>" />
</form>
<?php
	return ob_get_clean();
}

add_shortcode( 'convertkit', 'render_convertkit_form' );

function mattgeritheme_latest_article() {
	global $post;
	?>
	<h3><?php esc_html_e( 'Latest article', 'mattgeritheme' ); ?></h3>
	<?php
	$posts = get_posts( array( 'posts_per_page' => 1, 'post_type' => 'post' ) );
	foreach ( $posts as $post ) :
		setup_postdata( $post );
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<a href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				} ?>
			</a>
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
			<?php the_excerpt(); ?>
		</div>
	</article>
	<?php
	endforeach;
	wp_reset_postdata();
}

function mattgeritheme_excerpt_more( $more ) {
	$link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
		esc_url( get_permalink( get_the_ID() ) ),
		__( 'continue reading &rarr;', 'mattgeritheme' )
	);
	return ' // ' . $link;
}

add_filter( 'excerpt_more', 'mattgeritheme_excerpt_more' );

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	} ?>

	<header>
		<h1 class="page-title"><?php single_post_title(); ?></h1>
	</header>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', '_s' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );
		?>
	</div>
</article>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages(
			array(
				'before'   => '<nav class="page-links">',
				'after'    => '</nav>',
				'pagelink' => esc_html('Page %'),
			)
		);
		?>
	</div>
</article>

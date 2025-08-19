<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title default-max-width text-break"><?php the_title() ?></h1>
		<p class="mb-1"><?php the_tags(); ?></p>
		<p><?php the_category(', '); ?></p>
		<?php if (has_post_thumbnail()): ?>
			<?php the_post_thumbnail( 'large', array('class' => 'w-100 h-auto rounded-3 mb-3') ); ?>
		<?php endif; ?>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
	<footer class="entry-footer default-max-width">
		<?php wp_link_pages(); ?>
	</footer>
</article>

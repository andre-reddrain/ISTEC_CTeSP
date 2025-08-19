<section class="no-results not-found">
	<header class="page-header">
		<?php if (is_search()) : ?>
			<h1 class="page-title">
				<?php echo esc_html('Results for '); ?><span class="page-description search-term"><?php echo esc_html(get_search_query()); ?></span>
			</h1>
		<?php else : ?>
			<h1 class="page-title"><?php echo esc_html('Nothing here'); ?></h1>
		<?php endif; ?>
	</header><!-- .page-header -->
	<div class="page-content default-max-width">
		<?php if (is_search()): ?>
			<p><?php echo esc_html('Sorry, but nothing matched your search terms. Please try again with some different keywords.'); ?></p>
			<?php get_search_form(); ?>
		<?php else: ?>
			<p><?php echo esc_html('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.'); ?></p>
			<?php get_search_form(); ?>
		<?php endif; ?>
	</div><!-- .page-content -->
</section>

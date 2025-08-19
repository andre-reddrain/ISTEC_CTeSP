<article id="post-<?php the_ID(); ?>" <?php post_class('card h-100 shadow-sm'); ?>>
	<?php if (has_post_thumbnail()): ?>
	<header class="entry-header">
		<a href="<?php the_permalink(); ?>" title="<?php esc_attr(the_title()); ?>">
			<?php the_post_thumbnail('thumbnail', array('class' => 'card-img-top h-auto')); ?>
		</a>
	</header>
	<?php endif; ?>
	<div class="entry-content card-body">
		<h3 class="card-title h5 mb-0">
			<a href="<?php the_permalink(); ?>" class="text-decoration-none text-body" title="<?php esc_attr(the_title()); ?>">
				<?php the_title(); ?>
			</a>
		</h3>
		<p class="mb-0">
			<a href="<?php the_permalink(); ?>" class="text-decoration-none text-body" title="<?php esc_attr(the_title()); ?>">
				<?php echo get_the_excerpt(); ?>
			</a>
		</p>
	</div>
	<footer class="entry-footer card-footer d-flex justify-content-between">
		<small class="d-inline-block text-truncate pe-3">
			<?php the_author_posts_link(); ?>
		</small>
		<small class="d-inline-block text-truncate"><?php the_date('j M, Y'); ?></small>
	</footer>
</article>

<?php

/**
 * @package byvex-woocommerce-starter
 */

if (post_password_required()) {
	return;
}

?>

<div id="comments" class="comments-area">
	<?php if (have_comments()) { ?>
		<h3 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ('1' === $comments_number) {
				/* translators: %s: post title */
				printf(_x('One Comment &ldquo;%s&rdquo;', 'comments title', 'byvex-woocommerce-starter'), get_the_title());
			} else {
				printf(
					/* translators: 1: number of comments, 2: post title */
					_nx(
						'%1$s Comment on &ldquo;%2$s&rdquo;',
						'%1$s Comments on &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'byvex-woocommerce-starter'
					),
					number_format_i18n($comments_number),
					get_the_title()
				);
			}
			?>
		</h3><!-- .comments-title -->

		<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) { ?>
			<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
				<h3 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'byvex-woocommerce-starter'); ?></h3>
				<div class="nav-links">
					<div class="nav-previous"><?php previous_comments_link(esc_html__('Older Comments', 'byvex-woocommerce-starter')); ?></div>
					<div class="nav-next"><?php next_comments_link(esc_html__('Newer Comments', 'byvex-woocommerce-starter')); ?></div>
				</div><!-- .nav-links -->
			</nav><!-- #comment-nav-above -->
		<?php } ?>

		<ul class="comment-list">
			<?php
			wp_list_comments(array(
				'callback' => 'bootscore_comment',
				'avatar_size' => 64
			));
			?>
		</ul><!-- .comment-list -->


		<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) { ?>
			<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
				<h3 class="screen-reader-text"><?php esc_html_e('Comment navigation', 'byvex-woocommerce-starter'); ?></h3>
				<div class="nav-links pagination justify-content-center">
					<div class="nav-previous page-item"><?php previous_comments_link(esc_html__('Older Comments', 'byvex-woocommerce-starter')); ?></div>
					<div class="nav-next page-item"><?php next_comments_link(esc_html__('Newer Comments', 'byvex-woocommerce-starter')); ?></div>
				</div><!-- .nav-links -->
			</nav>
		<?php
		}
	}


	if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) { ?>
		<p class="no-comments alert alert-info mb-0"><?php esc_html_e('Comments are closed.', 'byvex-woocommerce-starter'); ?></p>
	<?php
	}


	comment_form($args = array(
		'id_form'           => 'commentform',  // that's the wordpress default value! delete it or edit it ;)
		'id_submit'         => 'commentsubmit',
		'class_submit' => 'btn btn-primary',
		'title_reply'       => __('Leave a Comment', 'byvex-woocommerce-starter'),  // that's the wordpress default value! delete it or edit it ;)
		'title_reply_to'    => __('Leave a Comment to %s', 'byvex-woocommerce-starter'),  // that's the wordpress default value! delete it or edit it ;)
		'cancel_reply_link' => __('Cancel', 'byvex-woocommerce-starter'),  // that's the wordpress default value! delete it or edit it ;)
		'label_submit'      => __('Post Comment', 'byvex-woocommerce-starter'),  // that's the wordpress default value! delete it or edit it ;)

		'comment_field' =>  '<p><textarea placeholder="' . __('Start typing...', 'byvex-woocommerce-starter') . '" id="comment" class="form-control" required name="comment" cols="45" rows="5" aria-required="true"></textarea></p>',

		/*'comment_notes_after' => '<p class="form-allowed-tags">' .
            __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:', 'byvex-woocommerce-starter' ) .
            '</p><div class="alert alert-info">' . allowed_tags() . '</div>'*/

		// So, that was the needed stuff to have bootstrap basic styles for the form elements and buttons

		// Basically you can edit everything here!
		// Checkout the docs for more: http://codex.wordpress.org/Function_Reference/comment_form
		// Another note: some classes are added in the bootstrap-wp.js - ckeck from line 1


		// Custom Bootstrap Formfields
		'fields' => apply_filters(
			'comment_form_default_fields',
			array(
				'author' => '<p class="comment-form-author">' . '<input id="author" class="form-control" placeholder="' . __('Name*', 'byvex-woocommerce-starter') . '" name="author" type="text" value="' .
					esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req = '' . ' />' .
					'</p>',
				'email'  => '<p class="comment-form-email">' . '<input class="form-control "id="email" placeholder="' . __('Email* (will not be published)', 'byvex-woocommerce-starter') . '" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) .
					'" size="30"' . $aria_req = '' . ' />'  .

					'</p>',
				'url'    => '<p class="comment-form-url">' .
					'<input class="form-control" id="url" name="url" placeholder="' . __('Website', 'byvex-woocommerce-starter') . '" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /> ' .

					'</p>'
			)

		),
		// Custom Formfields End

	));

	?>

</div><!-- #comments -->

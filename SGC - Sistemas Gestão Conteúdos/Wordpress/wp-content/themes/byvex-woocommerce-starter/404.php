<?php

/**
 * @package byvex-woocommerce-starter
 */

get_header();

?>

<section class="error-404 not-found">
	<div class="container-xxl">
		<header class="page-header alignwide">
			<h1 class="page-title"><?php esc_html_e('Nothing here', 'byvex-woocommerce-starter'); ?></h1>
		</header>
		<div class="page-content">
			<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'byvex-woocommerce-starter'); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</section>

<?php
get_footer();

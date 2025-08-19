<?php

/**
 * @package byvex-woocommerce-starter
 */


function hex2rgb($hex = '#ffffff', $alpha = 1, $bare = false)
{
	$hex = trim($hex, '#');
	$r = $g = $b = 255;
	if (strlen($hex) === 3) {
		$r = hexdec(substr($hex, 0, 1) . substr($hex, 0, 1));
		$g = hexdec(substr($hex, 1, 1) . substr($hex, 1, 1));
		$b = hexdec(substr($hex, 2, 1) . substr($hex, 2, 1));
	} elseif (strlen($hex) === 6) {
		$r = hexdec(substr($hex, 0, 2));
		$g = hexdec(substr($hex, 2, 2));
		$b = hexdec(substr($hex, 4, 2));
	}
	if ($bare) {
		return $r . ',' . $g . ',' . $b;
	} else {
		return 'rgba(' . $r . ',' . $g . ',' . $b . ',' . $alpha . ')';
	}
}


// allow HTML in author bio start
remove_filter('pre_user_description', 'wp_filter_kses');
add_filter('pre_user_description', 'wp_filter_post_kses');
// allow HTML in author bio end


// password protected form start
if (!function_exists('bws_password_form')) {
	function bws_password_form()
	{
		$output = '<form action="' . get_option('siteurl') . '/wp-login.php?action=postpass" method="post" class="form-inline input-group mb-3">';
		$output .= '<input name="post_password" type="password" size="" class="form-control" required placeholder="' . __('Password', 'byvex-woocommerce-starter') . '"/>';
		$output .= '<input type="submit" class="btn btn-outline-primary" name="Submit" value="' . __('Submit', 'byvex-woocommerce-starter') . '" />';
		$output .= '</form>';
		return $output;
	}
	add_filter('the_password_form', 'bws_password_form');
}
// password protected form end


// pagination start
if (!function_exists('bws_pagination')) {
	function bws_pagination($pages = '', $range = 2)
	{
		$showitems = ($range * 2) + 1;
		global $paged;
		// default page to one if not provided
		if (empty($paged)) $paged = 1;
		if ($pages == '') {
			global $wp_query;
			$pages = $wp_query->max_num_pages;
			if (!$pages) {
				$pages = 1;
			}
		}

		if (1 != $pages) {
			echo '<nav aria-label="Page navigation" role="navigation">';
			echo '<span class="sr-only">Page navigation</span>';
			echo '<ul class="pagination justify-content-center ft-wpbs mb-4">';

			if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) {
				echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link(1) . '" aria-label="First Page">&laquo;</a></li>';
			}

			if ($paged > 1 && $showitems < $pages) {
				echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($paged - 1) . '" aria-label="Previous Page">&lsaquo;</a></li>';
			}

			for ($i = 1; $i <= $pages; $i++) {
				if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
					echo ($paged == $i) ? '<li class="page-item active"><span class="page-link"><span class="sr-only">Current Page </span>' . $i . '</span></li>' : '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($i) . '"><span class="sr-only">Page </span>' . $i . '</a></li>';
				}
			}

			if ($paged < $pages && $showitems < $pages) {
				echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link(($paged === 0 ? 1 : $paged) + 1) . '" aria-label="Next Page">&rsaquo;</a></li>';
			}

			if ($paged < $pages - 1 &&  $paged + $range - 1 < $pages && $showitems < $pages) {
				echo '<li class="page-item"><a class="page-link" href="' . get_pagenum_link($pages) . '" aria-label="Last Page">&raquo;</a></li>';
			}

			echo '</ul>';
			echo '</nav>';

			// Uncomment this if you want to show [Page 2 of 30]
			// echo '<div class="pagination-info mb-5 text-center">[ <span class="text-muted">Page</span> '.$paged.' <span class="text-muted">of</span> '.$pages.' ]</div>';
		}
	}
}
// pagination end

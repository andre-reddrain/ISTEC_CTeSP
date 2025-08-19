<?php
get_header();
?>
<div class="container-xxl py-4">
	<?php if (have_posts()) : ?>
		<div class="row gy-4">
			<?php
			while (have_posts()) :
				the_post();
				?><div class="col-12 col-sm-6 col-lg-4"><?php
				get_template_part('template-parts/content-excerpt');
				?></div><?php
			endwhile;
			?>
		</div>
	<?php
		bws_pagination();
	else :
		get_template_part('template-parts/content-none');
	endif; ?>
</div>
<?php
get_footer();

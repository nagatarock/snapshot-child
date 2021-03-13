<?php get_header() ?>
<?php global $paged;
if ((empty($paged) || $paged == 1) && siteorigin_setting('slider_enabled')) : get_template_part('slider', 'home'); ?>
<?php else : ?>
	<div id="page-title" class="archive-title">
		<div class="container">
			<h1><?php echo esc_html(siteorigin_setting('general_latest_posts')) ?></h1>
		</div>
	</div>
	<div id="home-slider-below"></div>
<?php endif; ?>
<section class="p-home__service">
	<div class="c-home__title">
		<h2>
		<?php $page_data = get_page_by_path('service');
			$page = get_post($page_data);
			echo $page->post_title;
			?></h2>
	</div>
	<div class="c-home__content">
	<?php $page_data = get_page_by_path('service');
			$page = get_post($page_data);
			$content = $page->post_content;

			echo apply_filters('the_content', $content);
			?>
	</div>
</section>
<section class="p-home__product">
	<div class="c-home__title">
		<h2>作品集</h2>
	</div>
	<?php get_template_part('loop', 'index') ?>
</section>
<section class="p-home__flow">
	<div class="c-home__title">
	<h2><?php $page_data = get_page_by_path('flow');
			$page = get_post($page_data);
			echo $page->post_title;
			?></h2>
			</div>
			<div class="c-home__content">
		<?php $page_data = get_page_by_path('flow');
			$page = get_post($page_data);
			$content = $page->post_content;

			echo apply_filters('the_content', $content);
			?>
		</div>
</section>
<section class="p-home__contact">
	<div class="c-home__title">
	<h2><?php $page_data = get_page_by_path('contact');
			$page = get_post($page_data);
			echo $page->post_title;
			?></h2>		<div class="c-home__content">
			<?php $page_data = get_page_by_path('contact');
			$page = get_post($page_data);
			$content = $page->post_content;

			echo apply_filters('the_content', $content);
			?>
		</div>
	</div>
</section>
<?php get_footer() ?>
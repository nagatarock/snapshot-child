<?php get_header(); the_post() ?>

<div id="page-title" class="archive-title">
	<div class="container">
	<div class="c-page__title"><h1><?php the_title(' ') ?></h1></div>
	</div>
</div>

<div id="post-<?php the_ID() ?>" <?php post_class() ?>>
		<div id="post-main">
			<div class="entry-content">
				<?php the_field('delivery');?>
				
				<?php global $numpages; if(empty($numpages)) : ?>
					<div class="clear"></div>
				<?php endif; ?>
				<?php wp_link_pages() ?>
			</div>

			<?php comments_template() ?>
		</div>
	<div class="clear"></div>
</div>

<?php get_footer() ?>
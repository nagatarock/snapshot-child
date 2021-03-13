<?php get_header() ?>

<div id="page-title" class="archive-title">
	<div class="container">
		<div class="c-page__title"><h1><?php the_title(' ') ?></h1></div>
	</div>
</div>
<?php get_template_part('loop', 'index') ?>

<?php get_footer() ?>

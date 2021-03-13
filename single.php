<?php get_header(); the_post(); ?>

<div id="page-title" class="post-title">
	<div class="container">
		<div class="post-info">
			<div class="date">
				<em></em>
				<a href="<?php the_permalink() ?>"><?php echo get_the_date() ?></a>
			</div>			
			<?php $category = get_the_category(); if(!empty($category)) : ?>
				<div class="category">
					<em></em>
					<?php the_category(', '); ?>
				</div>
			<?php endif ?>
		</div>
		
		<h1><?php the_title() ?></h1>
		
		<div class="nav">
			<?php next_post_link('%link') ?>
			<?php previous_post_link('%link') ?>
		</div>
	</div>
</div>

<?php get_template_part('viewer') ?>
	
<div id="post-<?php the_ID() ?>" <?php post_class() ?>>
	<div class="container">

		
		<div id="post-main" <?php if(!siteorigin_setting('posts_sidebar_images')) echo 'class="no-sidebar"' ?>>
			<div class="entry-content">
				<?php the_content() ?>
				
				<?php global $numpages; if(!empty($numpages) || get_the_tag_list() != '') : ?><div class="clear"></div><?php endif; ?>
				
				<?php wp_link_pages() ?>
				<?php the_tags() ?>
			</div>
			<div class="clear"></div>
			
			<div id="single-comments-wrapper">
				<?php comments_template() ?>
			</div>
		</div>

	</div>
	<div class="clear"></div>
</div>

<?php get_footer() ?>

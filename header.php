<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
	<div class="p-header__menu__background"></div>
	<div id="top-area">
		<div id="top-area-wrapper">
			<div id="logo">
				<h1><a href="<?php echo esc_url(home_url()) ?>" title="<?php echo esc_attr(get_bloginfo('title', 'display') . ' - ' . get_bloginfo('description', 'display')) ?>">
						<?php bloginfo('title', 'display') ?></a></h1>
			</div>

			<nav>
				<div class="p-header__menu__btn">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<ul class="p-header__menu">
					<li><a href="<?php echo esc_url(home_url()) ?>">トップ</a></li>
					<li><a href="<?php echo get_page_link('107'); ?>">プロフィール</a></li>
					<li><a href="<?php echo get_page_link('104'); ?>">ご注文の流れ</a></li>
					<li><a href="<?php echo get_page_link('35'); ?>">料金表</a></li>
					<li><a href="<?php echo get_page_link('61'); ?>">作品集</a></li>
					<li><a href="<?php echo get_page_link('63'); ?>">お問い合わせ</a></li>
				</ul>
			</nav>
		</div>
		<ul class="p-drop__menu">
			<li><a href="<?php echo esc_url(home_url()) ?>">トップ</a></li>
			<li><a href="<?php echo get_page_link('107'); ?>">プロフィール</a></li>
			<li><a href="<?php echo get_page_link('104'); ?>">ご注文の流れ</a></li>
			<li><a href="<?php echo get_page_link('35'); ?>">料金表</a></li>
			<li><a href="<?php echo get_page_link('61'); ?>">作品集</a></li>
			<li><a href="<?php echo get_page_link('63'); ?>">お問い合わせ</a></li>
		</ul>
	</div><!-- top-area -->
	<?php if (siteorigin_setting('general_search') && function_exists('snapshot_plus_search_bar')) snapshot_plus_search_bar(); ?>
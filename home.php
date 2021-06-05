<?php get_header() ?>
<div id="c-home__slider">
	<?php echo do_shortcode('[metaslider id="179"]'); ?>
</div>
<section class="p-home__service ">
	<div class="c-home__title wow animate__animated animate__fadeIn " data-wow-duration="2s">
		<h2>似顔絵を大切なあの人へ</h2>
	</div>
	<div class="p-home__content content1 wow animate__animated animate__fadeIn " data-wow-duration="2s">
		<div class="c-home__content_img">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top_01.jpg" alt="">
		</div>
		<div class="c-home__content_sentence wow animate__animated animate__fadeIn " data-wow-duration="2s" data-wow-delay=".5s">
			家族を祝う母の日、父の日、敬老の日に。
			<br>結婚するお2人のお祝いに。我が子の誕生日に。愛するペットに。
			<br>退職する仲間に。今の自分を肖像画に。
			<br>似顔絵は贈りたいと思った時が贈りどき。
			<br>絵描き屋ゆーきの似顔絵は、贈り主の想いをイラストに込めることを心掛けております。
		</div>
	</div>
	<div class="p-home__content content2 wow animate__animated animate__fadeIn " data-wow-duration="2s" data-wow-delay=".25s">
		<div class="c-home__content_img">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top_02.jpg" alt="">
		</div>
		<div class="c-home__content_sentence wow animate__animated animate__fadeIn " data-wow-duration="2s" data-wow-delay=".5s">
			もらった方が喜ぶことはもちろん贈り主の想いまで伝わるとより嬉しいもんですよね。
			<br>お写真や画像から忠実にイラストにしていきます。
			<br>写実的でありながら写真とイラストの中間、イラストの味を残した似顔絵を制作しています。
			<br>納期やリクエストにも柔軟に対応いたしますのでお気軽にご相談ください。
		</div>
	</div>
	<div class="p-home__delivery wow animate__animated animate__fadeIn">
		<h3>現在納期は
			<span>
				<?php echo get_field('delivery', 308); ?>
			</span>
			日です
		</h3>
	</div>
		<div class="c-contact__button">
		<a href="<?php echo get_page_link('63'); ?>">お問い合わせはコチラ</a>
		</div>
</section>
<section class="p-home__product wow animate__animated animate__fadeIn " data-wow-duration="2s">
	<div class="c-home__title product">
		<h2>作品集</h2>
		<p><i class="far fa-lightbulb"></i> 画像タップで詳細ページにジャンプします</p>
	</div>
	<?php get_template_part('loop', 'index') ?>
</section>
<section class="p-home__flow wow animate__animated animate__fadeIn " data-wow-duration="2s">
	<div class="c-home__title flow">
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
<section class="p-home__price">
	<div class="c-home__title price">
		<h2><?php $page_data = get_page_by_path('price');
			$page = get_post($page_data);
			echo $page->post_title;
			?></h2>
	</div>
	<div class="c-home__content">
		<?php $page_data = get_page_by_path('price');
		$page = get_post($page_data);
		$content = $page->post_content;
		echo apply_filters('the_content', $content);
		?>
	</div>
</section>
<section class="p-home__contact">
	<div class="c-home__title contact">
		<h2><?php $page_data = get_page_by_path('contact');
			$page = get_post($page_data);
			echo $page->post_title;
			?></h2>
	</div>
	<div class="c-home__contact">
		<?php $page_data = get_page_by_path('contact');
		$page = get_post($page_data);
		$content = $page->post_content;
		echo apply_filters('the_content', $content);
		?>
	</div>
</section>
<?php get_footer() ?>
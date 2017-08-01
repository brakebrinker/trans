<?php get_header(); ?>

<?php 
$sliderPosts = get_field('выбор_слайдов', get_queried_object_id());

$productPosts = get_field('выбор_продуктов', get_queried_object_id());

$partners = get_field('партнеры', get_queried_object_id());

$args = array(
    'posts_per_page' => 4,
    'cat'            => 5,
    'order'          => 'DESC'
);

$newsPosts = get_posts($args);
?>
<main>
	<div class="container">
		<div id="slider" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<?php foreach($sliderPosts as $post) { setup_postdata($post); ?>
					<div class="item">
						<img src="<?php echo get_field('изображение_слайда', $post->ID); ?>" alt="">
						<div class="carousel-caption">
							<h4><?php echo get_field('заголовок_слайда', $post->ID); ?></h4>
							<span><?php echo get_field('подзаголовок_слайда', $post->ID); ?></span>
						</div>
					</div>
				<?php } ?>
			</div>
		  <a class="left carousel-control" href="#slider" data-slide="prev">
			<span class="fa-angle-left"></span>
		  </a>
		  <a class="right carousel-control" href="#slider" data-slide="next">
			<span class="fa-angle-right"></span>
		  </a>
		</div> 
		<div class="row">
			<?php foreach($productPosts as $post) { setup_postdata($post); ?>
			<div class="col-md-4 col-sm-6 actual">
				<div class="pic ramka"><?php echo get_the_post_thumbnail($post->ID, array(360,230), array('alt' => get_the_title($post->ID))); ?>
				</div>
				<h4><?php the_title(); ?></h4>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="details">Подробнее &#187;</a>
			</div>
			<?php } ?>
		</div>
		<hr>

		<div class="row">
			<div class="col-md-6 col-sm-6">
				<div class="row">
					<div class="col-md-12">
						<h4>Важная информация</h4>
					</div>
				</div>
				<div class="row container-fluid info-block">
					<div class="loop row">
						<div class="pic col-md-4"><img src="img/object4.jpg" alt=""></div>
						<div class="text col-md-8">
							<h6>Реализованные проекты</h6>
							<p>С другой стороны сложившаяся структура органи зации позволяет выполнять важные задания по разработке соответствующий условий активизац. Значимость этих проблем настолько очевидна, что консультация с широким активом способствует подготовки и реализации дальнейших направлений развития. Задача организации, в особенности же укрепление и развитие структуры играет важную роль в формировании новых предложений. С другой стороны постоянный количественный рост и сфера нашей активности способствует подготовки и реализации модели развития. С другой стороны сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач. С другой стороны дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание существенных финансовых и административных условий.</p>
							<span class="date">16.03.2017</span>
							<a href="objects.php" class="more">Подробнее все проекты »</a>
						</div>
					</div>
					<hr>
					<div class="loop row">
						<div class="pic col-md-4"><img src="img/review1.jpg" alt=""></div>
						<div class="text col-md-8">
							<h6>Отзывы клиентов</h6>
							<p>С другой стороны сложившаяся структура органи зации позволяет выполнять важные задания по разработке соответствующий условий активизац. Значимость этих проблем настолько очевидна, что консультация с широким активом способствует подготовки и реализации дальнейших направлений развития. Задача организации, в особенности же укрепление и развитие структуры играет важную роль в формировании новых предложений. С другой стороны постоянный количественный рост и сфера нашей активности способствует подготовки и реализации модели развития. С другой стороны сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач. С другой стороны дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание существенных финансовых и административных условий.</p>
							<span class="date">16.03.2017</span>
							<a href="reviews.php" class="more">Подробнее все отзывы »</a>
						</div>
					</div>
					<hr>
					<div class="loop row">
						<div class="pic col-md-4"><img src="img/license1.jpg" alt=""></div>
						<div class="text col-md-8">
							<h6>Сертификаты и лицензии</h6>
							<p>С другой стороны сложившаяся структура органи зации позволяет выполнять важные задания по разработке соответствующий условий активизац. Значимость этих проблем настолько очевидна, что консультация с широким активом способствует подготовки и реализации дальнейших направлений развития. Задача организации, в особенности же укрепление и развитие структуры играет важную роль в формировании новых предложений. С другой стороны постоянный количественный рост и сфера нашей активности способствует подготовки и реализации модели развития. С другой стороны сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач. С другой стороны дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание существенных финансовых и административных условий.</p>
							<span class="date">16.03.2017</span>
							<a href="certificate.php" class="more">Подробнее все »</a>
						</div>
					</div>
					<hr>
					<div class="loop row">
						<div class="pic col-md-4"><img src="img/object4.jpg" alt=""></div>
						<div class="text col-md-8">
							<h6>Реализованные проекты</h6>
							<p>С другой стороны сложившаяся структура органи зации позволяет выполнять важные задания по разработке соответствующий условий активизац. Значимость этих проблем настолько очевидна, что консультация с широким активом способствует подготовки и реализации дальнейших направлений развития. Задача организации, в особенности же укрепление и развитие структуры играет важную роль в формировании новых предложений. С другой стороны постоянный количественный рост и сфера нашей активности способствует подготовки и реализации модели развития. С другой стороны сложившаяся структура организации влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач. С другой стороны дальнейшее развитие различных форм деятельности в значительной степени обуславливает создание существенных финансовых и административных условий.</p>
							<span class="date">16.03.2017</span>
							<a href="jbjects.php" class="more">Подробнее все проекты »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6">
				<div class="row">
					<div class="col-md-12">
						<h4>Новости</h4>
					</div>
				</div>
				<div class="row container-fluid info-block">
					<?php foreach($newsPosts as $post){ setup_postdata($post); ?>
					<div class="loop row">
						<div class="pic col-md-4"><?php echo get_the_post_thumbnail($post->ID, array(160,150), array('alt' => get_the_title($post->ID))); ?></div>
						<div class="text col-md-8">
							<span class="date"><?php echo get_the_date(); ?></span>
							<h6><?php if (get_field('заголовок_для_главной', $post->ID)) {
									echo get_field('заголовок_для_главной', $post->ID);
								} else {
									the_title(); 
								} ?>
							</h6>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="more">Подробнее »</a>
						</div>
					</div>
					<hr>
					<?php } 
					wp_reset_postdata();
					?>
				</div>
				<div class="row">
					<div class="col-md-12">
						<a href="<?php echo get_category_link(5); ?>" class="more">Все новости »</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="partners">
		<div class="container">
			<?php if ($partners) { ?>
			<div class="row">
				<h2>Наши партнеры</h2>
				<?php foreach($partners as $img) { ?>
				<img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>">
				<?php } ?>
			</div>
			<?php } ?>
		</div>
	</div>
</main>
<?php get_footer(); ?>
<?php get_header(); ?>
<?php if (have_posts()): while( have_posts() ) : the_post(); ?>
<main>
	<div class="container">
		<div class="breadcrumbs">
			<a href="index.php">Главная</a>/
			<span>Контакты</span>
		</div>
		<h3><?php the_title(); ?></h3>
		<?php the_content(); ?>
		<div class="row contacts">
			<?php if (get_field('адрес_1', get_queried_object_id())) { ?>
			<div class="col-md-3 col-sm-6"><i class="fa-map-marker"></i> <b>Адрес:</b> <?php echo get_field('адрес_1', get_queried_object_id()); ?></div>
			<?php } ?>
			<?php if (get_field('телефон_1', get_queried_object_id())) { ?>
			<div class="col-md-3 col-sm-6 "><i class="fa-phone"></i> <b>тел:</b> <a href="tel:<?php echo preg_replace("/[^0-9]/", '', get_field('телефон_1', get_queried_object_id())); ?>"><?php echo get_field('телефон_1', get_queried_object_id()); ?></a></div>
			<?php } ?>
			<?php if (get_field('факс_1', get_queried_object_id())) { ?>
			<div class="col-md-3 col-sm-6"><i class="fa-print"></i> <b>Факс:</b> <span><?php echo get_field('факс_1', get_queried_object_id()); ?></span></div>
			<?php } ?>
			<?php if (get_field('e-mail_1', get_queried_object_id())) { ?>
			<div class="col-md-3 col-sm-6"><i class="fa-envelope"></i> <b>Email:</b> <a href="mailto:<?php echo get_field('e-mail_1', get_queried_object_id()); ?>"><?php echo get_field('e-mail_1', get_queried_object_id()); ?></a></div>
			<?php } ?>
		</div>
		<div class="map"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad09f94bc57bbdbaf1bf1a9f690122c4806a6bf209c77de6d046d68239ecef915&amp;width=100%25&amp;height=370&amp;lang=ru_RU&amp;scroll=true"></script></div>
		<div class="row contacts">
			<?php if (get_field('адрес_2', get_queried_object_id())) { ?>
			<div class="col-md-3 col-sm-6"><i class="fa-map-marker"></i> <b>Адрес:</b> <?php echo get_field('адрес_2', get_queried_object_id()); ?></div>
			<?php } ?>
			<?php if (get_field('телефон_2', get_queried_object_id())) { ?>
			<div class="col-md-3 col-sm-6 "><i class="fa-phone"></i> <b>тел:</b> <a href="tel:<?php echo preg_replace("/[^0-9]/", '', get_field('телефон_2', get_queried_object_id())); ?>"><?php echo get_field('телефон_2', get_queried_object_id()); ?></a></div>
			<?php } ?>
			<?php if (get_field('факс_2', get_queried_object_id())) { ?>
			<div class="col-md-3 col-sm-6"><i class="fa-print"></i> <b>Факс:</b> <span><?php echo get_field('факс_2', get_queried_object_id()); ?></span></div>
			<?php } ?>
			<?php if (get_field('e-mail_2', get_queried_object_id())) { ?>
			<div class="col-md-3 col-sm-6"><i class="fa-envelope"></i> <b>Email:</b> <a href="mailto:<?php echo get_field('e-mail_2', get_queried_object_id()); ?>"><?php echo get_field('e-mail_2', get_queried_object_id()); ?></a></div>
			<?php } ?>
		</div>
		<div class="map"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad8dea8fda8fe62926106e9a8ddc15b710c33c0ae269296c93e39ccc21f81f835&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script></div>
		<h3>Свяжитесь с нами</h3>
		<?php echo do_shortcode('[contact-form-7 id="107" title="Контактная форма (контакты)" html_class="contact-form"]'); ?>
	</div>
	<hr>
</main>
<?php endwhile; endif;?>
<?php get_footer(); ?>

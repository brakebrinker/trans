<?php get_header(); ?>
<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'posts_per_page' => 4,
    'cat'            => 22,
    'order'          => 'DESC',
    'paged'          => $paged
);

$reviewPosts = query_posts($args);

require_once ABSPATH . 'wp-content/themes/trans/recaptchalib.php';
?>

<main>
	<div class="container">
		<div class="breadcrumbs">
			<a href="index.php">Главная</a>/
			<span>Отзывы</span>
		</div>
		<h3>Отзывы клиентов</h3>
		<?php foreach($reviewPosts as $post){ setup_postdata($post); ?>
		<div class="row review">
			<div class="col-md-2 col-sm-3 col-xs-8">
				<div class="pic ramka"><?php echo get_the_post_thumbnail($post->ID, array(161,157), array('alt' => get_the_title($post->ID))); ?></div>
			</div>
			<div class="col-md-10 col-sm-9 col-xs-12">
				<h5><?php echo get_field('имя', $post->ID); ?></h5>
				<span class="date"><?php echo get_the_date(); ?></span>
				<div class="text">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<hr>
		<?php } ?>
		<?php
		   get_template_part( 'pagination' );
		   wp_reset_query(); // сброс
		?>
		<h3>Оставить отзыв</h3>
		<form action="<?php bloginfo('template_url'); ?>/reviews_controller.php" class="review-form" enctype="multipart/form-data" method="post">
			<span>Ваше Имя<sup>*</sup></span>
			<input type="text" name="name" id="name" required="required" placeholder=" ">
			<span>Сообщение<sup>*</sup></span>
			<textarea name="message" id="message" rows="5" required="required"  placeholder=" "></textarea>
			<input type="file" name="photo" id="photo" accept="image/*" multiple="false">
			<div class="g-recaptcha" data-sitekey="6Lc4OysUAAAAAHfCfYAcNwjH5iLvObqffg5TKsOE"></div>
			<div>
				<button id="send" name="send" type="submit">Отправить</button>
			</div>
			<input type="hidden" class="send-email" name="send_email" value="<?php echo get_option('admin_email'); ?>">
		</form>
	</div>
	<hr>
</main>
<?php get_footer(); ?>
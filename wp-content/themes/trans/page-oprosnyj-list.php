<?php get_header(); ?>
<main>
	<div class="container">
		<div class="breadcrumbs">
			<a href="index.php">Главная</a>/
			<span>Новости</span>
		</div>
		<h3><?php the_title(); ?></h3>
		<?php the_content(); ?>
		<div class="form-container">
			<?php echo do_shortcode('[contact-form-7 id="281" title="Опросный лист" html_class="ask-list"]'); ?>
		</div>
	</div>
	<hr>
</main>
<?php get_footer(); ?>
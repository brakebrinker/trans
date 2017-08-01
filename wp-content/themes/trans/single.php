<?php get_header(); ?>
<?php if (have_posts()): 
	while (have_posts()): the_post(); ?>
	<main>
		<div class="container">
			<div class="breadcrumbs">
				<a href="index.php">Главная</a>/
				<span>Новости</span>
			</div>
			<h3>Новость</h3>
			<div class="post-image ramka"></div>
			<h6><?php the_title(); ?></h6>
			<p class="date"><?php echo get_the_date(); ?></p>
			<?php the_content(); ?>
		</div>
		<hr>
	</main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
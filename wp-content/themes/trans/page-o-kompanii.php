<?php get_header(); ?>

<?php 

$args = array(
    'posts_per_page' => 0,
    'numberposts' => -1,
    'cat'            => 7,
    'order'          => 'ASC',
);

$aboutPosts = get_posts($args);

$countPosts = 0;
?>

<main>
	<div class="container">
		<div class="breadcrumbs">
			<a href="index.php">Главная</a>/
			<span>О компании</span>
		</div>
		<?php foreach($aboutPosts as $post){ setup_postdata($post); 
			$countPosts ++;
		?>
		<?php if ($countPosts % 2 == 0) { ?>
		<div class="row about">
			<div class="col-md-4 col-sm-4">
				<div class="pic ramka"><?php echo get_the_post_thumbnail($post->ID, array(360,320), array('alt' => get_the_title($post->ID))); ?></div>
			</div>
			<div class="col-md-8 col-sm-8">
				<h3><?php the_title(); ?></h3>
				<div class="text"><?php the_content(); ?></div>
				<a href="<?php the_permalink(); ?>" class="more">Подробнее »</a>
			</div>
		</div>
		<?php } else { ?>
		<div class="row about">
			<div class="col-md-8 col-sm-8">
				<h3><?php the_title(); ?></h3>
				<div class="text"><?php the_content(); ?></div>
				<a href="<?php the_permalink(); ?>" class="more">Подробнее »</a>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="pic ramka"><?php echo get_the_post_thumbnail($post->ID, array(360,320), array('alt' => get_the_title($post->ID))); ?></div>
			</div>
		</div>
		<?php } ?>
		<?php } 
		wp_reset_postdata();
		?>
	</div>
	<hr>
</main>
<?php get_footer(); ?>
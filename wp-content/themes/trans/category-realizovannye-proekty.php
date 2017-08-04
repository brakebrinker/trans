<?php get_header(); ?>
<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'posts_per_page' => 4,
    'cat'            => 23,
    'order'          => 'DESC',
    'paged'          => $paged
);

$ojectsPosts = query_posts($args);

$countItems = 0;
?>
<main>
	<div class="container">
		<div class="breadcrumbs">
			<a href="index.php">Главная</a>/
			<span>Наши объекты</span>
		</div>
		<?php foreach($ojectsPosts as $post) { setup_postdata($post); 
			$countItems ++;
		?>
		<?php if ($countItems % 2 == 0) { ?>
		<div class="row object">
			<div class="col-md-3 col-sm-4">
				<div class="pic ramka"><?php echo get_the_post_thumbnail($post->ID, array(260,246), array('alt' => get_the_title($post->ID))); ?></div>
			</div>
			<div class="col-md-9 col-sm-8">
				<h5><?php the_title(); ?></h5>
				<div class="text"<?php the_content(); ?></div>
			</div>
		</div>
		<?php } else { ?>
		<div class="row object">
			<div class="col-md-9 col-sm-8">
				<h5><?php the_title(); ?></h5>
				<div class="text"><?php the_content(); ?></div>
			</div>
			<div class="col-md-3 col-sm-4">
				<div class="pic ramka"><?php echo get_the_post_thumbnail($post->ID, array(260,246), array('alt' => get_the_title($post->ID))); ?>
				</div>
			</div>
		</div>
		<?php } ?>
		<?php } ?>
		<?php
		   get_template_part( 'pagination' );
		   wp_reset_query(); // сброс
		?>
	</div>
	<hr>
</main>
<?php get_footer(); ?>
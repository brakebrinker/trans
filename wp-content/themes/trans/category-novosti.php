<?php get_header(); ?>

<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'posts_per_page' => 8,
    'cat'            => 5,
    'order'          => 'DESC',
    'paged'          => $paged
);

$newsPosts = query_posts($args);
?>
<main>
	<div class="container">
		<div class="breadcrumbs">
			<a href="index.php">Главная</a> /
			<span>Новости</span>
		</div>
		<h3>Новости</h3>			
		<div class="row">
			<?php foreach($newsPosts as $post){ setup_postdata($post); ?>
			<div class="col-md-3 col-sm-4 post-loop">
				<div class="ramka">
					<?php echo get_the_post_thumbnail($post->ID, array(259,230), array('alt' => get_the_title($post->ID))); ?>
				</div>
				<div class="h7"><?php the_title(); ?></div>					
				<span class="date"><?php echo get_the_date(); ?></span>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="more">Подробнее »</a>
			</div>
			<?php } ?>
		</div>
		<?php
		   get_template_part( 'pagination' );
		   wp_reset_query(); // сброс
		?>
	</div>
	<hr>
</main>
<?php get_footer(); ?>
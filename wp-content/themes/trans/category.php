<?php get_header(); ?>
<?php
$categories = get_categories(array(
	'orderby' => 'name',
	'order' => 'ASC',
	'parent' => get_queried_object_id(),
	'hide_empty'   => 0,
));

$products = get_posts(array(
	'posts_per_page' => 0,
	'numberposts' => -1,
	'cat'            => get_queried_object_id(),
	'order'          => 'ASC',
));
?>
<main>
	<div class="container">
		<div class="breadcrumbs">
			<a href="index.php">Главная</a> /
			<span>Оборудование</span>
		</div>
		<h3><?php single_cat_title(); ?></h3>
		<?php if ($categories) { ?>
			<div class="row">
				<?php foreach ( $categories as $cat ) { ?>
					<?php $img = get_field("изображение", $cat); ?>
					<div class="col-md-3 col-sm-4 good-loop">
						<a href="<?php echo get_category_link( $cat->term_id ); ?>" id="equip1" class="pic ramka" style="background-image: url(
						<?php if($img) echo $img['sizes']['medium']; ?>
							)"></a>
						<div class="h7"><?php echo $cat->name; ?></div>
						<a href="<?php echo get_category_link( $cat->term_id ); ?>" class="more">Подробнее »</a>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
		<?php if ($products) { ?>
			<div class="row">
				<?php foreach ( $products as $product ) {
					$thisCat = get_the_category($product->ID);
					if (get_queried_object_id() == $thisCat[0]->term_id) {
				?>
					<div class="col-md-3 col-sm-4 good-loop">
						<a href="<?php the_permalink(); ?>" id="equip1" class="pic ramka" style="background-image: url(
						<?php echo get_the_post_thumbnail_url($product->ID, 'medium'); ?>)"></a>
						<div class="h7"><?php the_title(); ?></div>
						<a href="<?php the_permalink(); ?>" class="more">Подробнее »</a>
					</div>
					<?php } ?>
				<?php }
				wp_reset_postdata();
				?>
			</div>
		<?php } ?>
	</div>
	<hr>
</main>
<?php get_footer(); ?>
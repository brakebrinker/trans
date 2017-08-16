<?php get_header(); ?>

<?php if (have_posts()):
	while (have_posts()): the_post(); ?>
	<?php $thisCat = get_the_category(get_queried_object_id()); ?>
	<pre><?php print_r($thisCat); ?></pre>
	<main>
		<div class="container">
			<div class="breadcrumbs">
				<a href="index.php">Главная</a>/
				<span>Новости</span>
			</div>
			<?php if ($thisCat[0]->category_parent == 5) { ?>
				<h3>Новость</h3>
				<?php if (get_the_post_thumbnail_url(get_queried_object_id(), 'full')) {?>
				<div class="post-image ramka" style="background-image: url(
				<?php echo get_the_post_thumbnail_url(get_queried_object_id(), 'full'); ?>)"></div>
				<?php } ?>
				<h6><?php the_title(); ?></h6>
				<p class="date"><?php echo get_the_date(); ?></p>
				<?php the_content(); ?>
			<?php } else if ($thisCat[0]->category_parent == 9) { ?>
			<?php echo $thisCat[0]->category_parent; ?>
				<?php 
				  $keyName = 'option:';
				  $options = array();

				  $optionsAll = get_post_meta(get_queried_object_id());

				  foreach ($optionsAll as $op_name => $op_content ) {
				   if (strpos($op_name, $keyName) !== FALSE) {
				     $repl_name = trim(ereg_replace ( $keyName, '', $op_name));
				     $options[$repl_name] = $op_content;
				   } 
				  }
				?>
				<h3><?php the_title(); ?></h3>
				<div class="row good">
					<div class="col-md-4 col-sm-4">
						<?php if (get_the_post_thumbnail_url(get_queried_object_id(), 'full')) {?>
						<div class="good-image ramka" style="background-image: url(
						<?php echo get_the_post_thumbnail_url(get_queried_object_id(), 'medium'); ?>)"></div>
						<?php } ?>
					</div>
					<div class="col-md-8 col-sm-8">
						<?php echo get_field('верхнее_описание', get_queried_object_id()); ?>
						<a href="<?php echo get_page_link( 279 ); ?>" class="details">Опросный лист</a>
					</div>
				</div>
				<div class="row tabs">
					<div class="col-md-2 col-sm-4 col-xz-6"><span id="descr-tab" class="details active">Описание</span></div>
					<div class="col-md-2 col-sm-4 col-xz-6"><span id="tth-tab" class="details">Характеристики</span></div>
				</div>
				<div class="description">
					<?php the_content(); ?>
				</div>
				<div class="tth">
					<table>
						<tbody>
							<?php foreach ($options as $option_name => $option_content) { ?>
							<tr>
								<td><?php echo $option_name; ?>:</td>
								<td><?php echo $option_content[0]; ?></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			<?php } else {?>
			<h3><?php the_title(); ?></h3>
				<?php if (get_the_post_thumbnail_url(get_queried_object_id(), 'full')) {?>
				<div class="post-image ramka" style="background-image: url(
				<?php echo get_the_post_thumbnail_url(get_queried_object_id(), 'full'); ?>)"></div>
				<?php } ?>
				<?php the_content(); ?>
				<?php } ?>
		</div>
		<hr>
	</main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
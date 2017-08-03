<?php get_header(); ?>
<?php $certificates = get_field('выбор_сертификатов', get_queried_object_id()); ?>
<?php $countCert = 0 ?>

<main>
	<div class="container">
		<div class="breadcrumbs">
			<a href="index.php">Главная</a>/
			<span>Сертификаты и лицензии</span>
		</div>
		<h3><?php the_title(); ?></h3>
		<!-- <pre><?php //print_r($certificates); ?></pre> -->
		<div class="row">
			<?php if ($certificates) { ?>
				<?php foreach($certificates as $img) {
					$countCert ++;
				?>
				<div class="col-md-2 col-sm-3 col-xs-6 cert">
					<a href="#cert<?php echo $countCert;?>" class="cert-loop" data-toggle="modal">
						<div class="ramka">
							<img src="<?php echo $img['sizes']['medium'] ?>" alt="<?php echo $img['alt'] ?>">
						</div>
						<span>Подробнее »</span>
					</a>
				</div>
				<div id="cert<?php echo $countCert;?>" class="modal fade">
					<div class="modal-dialog">
						<div class="modal-content">				
							<div class="modal-body">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								<img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>">
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
	<hr>
</main>
<?php get_footer(); ?>
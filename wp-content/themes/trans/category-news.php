<?php get_header(); ?>

<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'posts_per_page' => 2,
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
				<img class="ramka" src="img/post4.jpg" alt="">
				<div class="h7">Разнообразный и богатый опыт рамки и место обучения</div>					
				<span class="date">13.03.2017</span>
				<p>Не следует, однако забывать, что дальнейшее развитие различных деятельности требуют определения  уточнения дальнейших направлений развития. Не следует, однако забывать, что дальнейшее развитие различных форм деятельности обеспечивает широкому кругу (специалистов) участие в формировании форм развития. Значимость этих проблем настолько очевидна, что дальнейшее развитие различных форм деятельности представляет собой интересный эксперимент проверки модели развития.</p>
				<a href="post.php" class="more">Подробнее »</a>
			</div>
			<?php } ?>
		</div>
		<?php
		   get_template_part( 'pagination' );
		   wp_reset_query(); // сброс
		?>
		<div class="pagination1">
			<a href="#">1</a>
			<a href="#">2</a>
			<a href="#">3</a>
			<span>...</span>
			<a href="#">7</a>
			<a href="#">8</a>
			<a href="#">9</a>
		</div>
	</div>
	<hr>
</main>
<?php get_footer(); ?>
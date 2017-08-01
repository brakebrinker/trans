<?php get_header(); ?>

<?php $args = array(
    'posts_per_page' => 0,
    'numberposts' => -1,
    'cat'            => 4,
    'order'          => 'DESC'
);

$productPosts = get_posts($args); ?>
<?php if (have_posts()): while( have_posts() ) : the_post(); ?>
<main>
    <div class="container">
        <div class="breadcrumbs">
            <a href="index.php">Главная</a>/
            <span>Продукты</span>
        </div>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
        <div class="row">
        <?php foreach($productPosts as $post) { setup_postdata($post); ?>
            <div class="col-md-3 col-sm-4">
                <a href="<?php the_permalink(); ?>" class="product">
                    <div class="ramka">
                        <?php echo get_the_post_thumbnail($post->ID, array(263,230), array('alt' => get_the_title($post->ID))); ?>
                    </div>
                    <span><?php the_title(); ?></span>
                </a>
            </div>
        <?php }
        wp_reset_postdata();
        ?>
        </div>
    </div>
    <hr>
</main>
<?php endwhile; endif;?>
<?php get_footer(); ?>

<?php get_header(); ?>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
    <main>
        <div class="container">
            <div class="breadcrumbs">
                <a href="index.php">Главная</a>/
                <span>Поддержка</span>
            </div> 
            <hr>
            <h3><?php the_title(); ?></h3>
            <?php if (get_the_post_thumbnail_url(get_queried_object_id(), 'full')) {?>
            <div class="post-image ramka" style="background-image: url(
            <?php echo get_the_post_thumbnail_url(get_queried_object_id(), 'full'); ?>)"></div>
            <?php } ?>
            <?php the_content(); ?>
        </div>
    </main>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>
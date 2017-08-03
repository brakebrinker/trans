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
            <?php the_content(); ?>
        </div>
    </main>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>
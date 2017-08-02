<?php get_header(); ?>
<?php
$categories = get_categories(array(
    'orderby' => 'name',
    'order' => 'ASC',
    'parent' => '8',
    'hide_empty'   => 0,
));
?>
<main>
    <div class="container">
        <div class="breadcrumbs">
            <a href="index.php">Главная</a> /
            <span>Оборудование</span>
        </div>
        <h3>Оборудование</h3>
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
    </div>
    <hr>
</main>
<?php get_footer(); ?>

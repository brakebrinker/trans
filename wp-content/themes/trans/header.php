<!doctype html>
<html lang="ru">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width; initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&amp; subset=cyrillic" rel="stylesheet"> 
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a class="logo" href="index.php"></a>
                </div>
                <div class="col-md-8">
                    <? wp_nav_menu(
                        array(
                        'menu' => 'top-menu',
                        'container' => 'nav',
                        'menu_class' => 'menu',
                        'menu_id' => FALSE,
                        )
                    ); ?>
                </div>
            </div>          
        </div>
    </header>
    <hr>
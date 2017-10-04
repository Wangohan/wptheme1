<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <?php wp_head(); ?>
</head>

<body>
    <header class="site-header">
        <div class="container">
            <div class="row site-logo">
                <div class="col-sm-4 text-left">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </div>
                <div class="col-sm-8 text-right">
                    <button type="button" class="btn">Войти</button>
                    <button type="button" class="btn">Зарегистрироваться</button>
                </div>
            </div>
        </div>
    </header>
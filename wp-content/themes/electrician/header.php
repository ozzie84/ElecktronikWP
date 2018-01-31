<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="title" content="">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <title>Электронник</title>
    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/manifest.json">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/safari-pinned-tab.svg"
          color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <?php wp_head(); ?>

    <link href="<?php echo get_template_directory_uri(); ?>/css/main.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/color/<?php
    $options = get_option('sample_theme_options');
    echo $options['selectinput']; ?>.min.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <div class="header">
            <div class="header__burger baseBG">
                <div class="hamburger"><span></span><span></span><span></span><span></span><span></span><span></span>
                </div>
            </div>
            <ul id="menu" class="header__menu">
                <li data-menuanchor="firstPage" class="header__menu__items"><a href="#firstPage">
                        <?php dynamic_sidebar('logo'); ?>
                    </a></li>
                <?php if (have_posts()) : query_posts('p=76');
                    while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <? endwhile; endif;
                wp_reset_query(); ?>
                <?php if (have_posts()) : query_posts('p=44');
                    while (have_posts()) : the_post(); ?>
                        <li class="header__menu__items"><a
                                    href="tel:<?php echo get_post_meta($post->ID, 'my_phone_link', true); ?>"
                                    class="header__cabinet__tel">
                                <?php the_title(); ?></a></li>
                    <? endwhile; endif;
                wp_reset_query(); ?>
            </ul>
            <?php if (have_posts()) : query_posts('p=44');
                while (have_posts()) : the_post(); ?>
                    <div class="header__cabinet"><a
                                href="tel:<?php echo get_post_meta($post->ID, 'my_phone_link', true); ?>"
                                class="header__cabinet__tel"><?php the_title(); ?></a>
                    </div>
                <? endwhile; endif;
            wp_reset_query(); ?>
        </div>
        <div class="recall"><a href="#" class="recall__link">
                <?php dynamic_sidebar('call'); ?>
            </a>
            <form class="recall__form">Мы вам перезвоним
                <label>
                    <input type="text" name="name" placeholder="Ваше имя" required>
                </label>
                <label>
                    <input type="text" name="phone" placeholder="Ваш телефон" required class="phone_mask">
                </label>
                <label>
                    <input type="submit" value="Отправить">
                </label>
            </form>
        </div>
    </div>
</header>
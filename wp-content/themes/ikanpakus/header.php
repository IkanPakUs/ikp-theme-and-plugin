<!DOCTYPE html>

<html lang="<?php language_attributes(); ?>">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php wp_head(); ?>
    </head>
<body>

<div id="ikp-main-container">
    <nav id="ikp-navbar">
        <div class="ikp-navbar__content">
            <div class="ikp-content__logo">
                <?php 
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                ?>
            </div>

            <?php 
                wp_nav_menu( [
                    'menu' => 'primary',
                    'menu_class' => 'ikp-menu__item',
                    'items_wrap' => '%3$s',
                    'container_class' => 'ikp-content__menu',
                    'depth' => 2
                ] )
            ?>
        </div>
    </nav>
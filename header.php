<!DOCTYPE html>
<html class="m-0" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head();?>
<body class="body">
<header class="header">
    <div class="container">
        <div class="row">
            <div class="coll-12">
                <div class="header_wrapper">
                    <?php
                        $image = get_field('header_logo', 'option');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        }
                    ?>
                    <button class="menu-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="navbar-menu">
                        <?php $header_nav_menu = get_field("header_nav_menu", 'option');
                        wp_nav_menu( array(
                            'menu' => $header_nav_menu,
                            'container' => false,
                            'menu_class' => 'header_nav-menu menu',
                            'fallback_cb'=> ''
                        ));?>
                        <?php $header_log = get_field("header_log", 'option');
                        wp_nav_menu( array(
                            'menu' => $header_log,
                            'container' => false,
                            'menu_class' => 'header_nav-menu-log menu',
                            'fallback_cb'=> ''
                        ));?>
                        <?php the_field('header_button', 'option'); ?>
                    </div>
                </div>
             </div>
        </div>
    </div>
</header>


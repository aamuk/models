<?php

wp_enqueue_style( 'style', get_stylesheet_uri() );

add_theme_support('menus');

// Menus
register_nav_menus(
    array(
        'top-menu' => 'Main Menu',
        'footer-menu' => 'Footer Menu',
    )
);
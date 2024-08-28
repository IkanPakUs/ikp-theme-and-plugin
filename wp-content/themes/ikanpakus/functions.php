<?php

// Function

function ikp_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

function ikp_enqueue() {
    wp_enqueue_style( 'ikp-main-style', get_template_directory_uri() . '/style.css', [], '1.0', "all");
    wp_enqueue_script('ikp-main-script', get_template_directory_uri() . '/main.js', [], '1.0', true);
}

function ikp_menus() {
    $locations = [
        'primary' => 'primary navbar',
    ];

    register_nav_menus($locations);
} 

function ikp_special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

// Call function
add_action('after_setup_theme', 'ikp_theme_support');
add_action('wp_enqueue_scripts', 'ikp_enqueue');
add_action('init', 'ikp_menus');
add_filter('nav_menu_css_class' , 'ikp_special_nav_class', 10 , 2);
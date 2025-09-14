<?php

function demoTheme_theme_support() {
    add_theme_support('title-tag');
}
add_action("after_setup_theme","demoTheme_theme_support");



function demoTheme_register_styles() {
// FontAwesome
    wp_enqueue_style(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');

    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css', array(), '5.3.8', 'all');

    // Theme CSS (make sure css/style.css exists in your theme directory)
    wp_enqueue_style(
        'demoTheme-style', get_template_directory_uri() . '/style.css', array('bootstrap-css'), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'demoTheme_register_styles');
function demoTheme_enqueue_scripts() {
    

    // jQuery (WordPress includes jQuery by default, but we'll use Slim from CDN here if you prefer)
    wp_enqueue_script(
        'jquery-slim',
        'https://code.jquery.com/jquery-3.4.1.slim.min.js',
        array(),
        '3.4.1',
        true
    );

    // Popper.js
    wp_enqueue_script(
        'popper',
        'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
        array('jquery-slim'),
        '1.16.0',
        true
    );

    // Bootstrap JS
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js',
        array('jquery-slim', 'popper'),
        '5.3.8',
        true
    );

    // Theme JS (make sure js/main.js exists in your theme directory)
    wp_enqueue_script(
        'theme-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery-slim'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'demoTheme_enqueue_scripts');

<?php
function register_style() {
    $version=wp_get_theme()->get('Version');
    // Main theme style.css
    wp_enqueue_style('theme-style', get_stylesheet_uri(), array('bootstrap'), $version, 'all');

    // Bootstrap CDN
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');

    // Font Awesome CDN
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');
}
add_action('wp_enqueue_scripts', 'register_style');
?>

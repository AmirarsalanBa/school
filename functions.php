<?php 

function custom_theme_enqueue_styles() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');
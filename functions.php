<?php 

function custom_theme_enqueue_styles() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap', false);
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');

/**
* Custom Post Types & Custom Taxonomies
*/

// Change the itle to add student
function change_student_title_placeholder($title, $post) {
    if ($post->post_type === 'fwd-students') {
        return 'Add student name';
    }
    return $title;
}
add_filter('enter_title_here', 'change_student_title_placeholder', 10, 2);

require get_template_directory() . '/inc/post-types-taxonomies.php';

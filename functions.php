<?php 

function custom_theme_enqueue_styles() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap', false);

    // Load style.css on front-end
    wp_enqueue_style( 
		'school-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' ),
		'all'
	);

    // Load normalize.css
    wp_enqueue_style( 
        'school-normalize', 
        'https://unpkg.com/@csstools/normalize.css', 
        array(), 
        '12.1.0'
    );

    // enqueue aos
    wp_enqueue_style(
        'aos-css',
        'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css',
        array(),
        '2.3.4'
    );
    wp_enqueue_script(
        'aos-js',
        'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css',
        array(),
        '2.3.4',
        array( 'strategy' => 'defer' )
    );
    wp_enqueue_script(
        'aos-init',
        get_template_directory_uri() . '/assets/js/aos-init.js',
        array('aos-js'),
        '1.0',
        array( 'strategy' => 'defer' )
    );
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');


// Load style.css on back-end
function school_setup() {
	add_editor_style( get_stylesheet_uri() );
}
add_action( 'after_setup_theme', 'school_setup' );

/**
* Custom Post Types & Custom Taxonomies
*/

// Change the title to add student
function change_student_title_placeholder($title, $post) {
    if ($post->post_type === 'fwd-students') {
        return 'Add student name';
    }
    return $title;
}
add_filter('enter_title_here', 'change_student_title_placeholder', 10, 2);

// Change the title to add staff name
function change_staff_title_placeholder($title, $post) {
    if ($post->post_type === 'fwd-staff') {
        return 'Add staff name';
    }
    return $title;
}
add_filter('enter_title_here', 'change_staff_title_placeholder', 10, 2);

function fwd_blocks_register_blocks() {
    register_block_type(get_template_directory() . '/school-aos/build');
}
add_action('init', 'fwd_blocks_register_blocks');

require get_template_directory() . '/inc/post-types-taxonomies.php';

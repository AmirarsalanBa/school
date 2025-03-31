<?php
function school_register_custom_post_types() {
    $labels = array(
        'name'                     => _x( 'students', 'post type general name', 'school' ),
        'singular_name'            => _x( 'students', 'post type singular name', 'school' ),
        'add_new'                  => _x( 'Add New', 'students', 'school' ),
        'add_new_item'             => __( 'Add New students', 'school' ),
        'edit_item'                => __( 'Edit students', 'school' ),
        'new_item'                 => __( 'New students', 'school' ),
        'view_item'                => __( 'View students', 'school' ),
        'view_items'               => __( 'View students', 'school' ),
        'search_items'             => __( 'Search students', 'school' ),
        'not_found'                => __( 'No students found.', 'school' ),
        'not_found_in_trash'       => __( 'No students found in Trash.', 'school' ),
        'parent_item_colon'        => __( 'Parent students:', 'school' ),
        'all_items'                => __( 'All students', 'school' ),
        'archives'                 => __( 'students Archives', 'school' ),
        'attributes'               => __( 'students Attributes', 'school' ),
        'insert_into_item'         => __( 'Insert into students', 'school' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this students', 'school' ),
        'featured_image'           => __( 'students featured image', 'school' ),
        'set_featured_image'       => __( 'Set students featured image', 'school' ),
        'remove_featured_image'    => __( 'Remove students featured image', 'school' ),
        'use_featured_image'       => __( 'Use as featured image', 'school' ),
        'menu_name'                => _x( 'students', 'admin menu', 'school' ),
        'filter_items_list'        => __( 'Filter students list', 'school' ),
        'items_list_navigation'    => __( 'students list navigation', 'school' ),
        'items_list'               => __( 'students list', 'school' ),
        'item_published'           => __( 'students published.', 'school' ),
        'item_published_privately' => __( 'students published privately.', 'school' ),
        'item_revereted_to_draft'  => __( 'students reverted to draft.', 'school' ),
        'item_trashed'             => __( 'students trashed.', 'school' ),
        'item_scheduled'           => __( 'students scheduled.', 'school' ),
        'item_updated'             => __( 'students updated.', 'school' ),
        'item_link'                => __( 'students link.', 'school' ),
        'item_link_description'    => __( 'A link to a students.', 'school' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'students' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-archive',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
    register_post_type( 'fwd-students', $args );


    $labels = array(
        'name'                     => _x( 'staff', 'post type general name', 'school' ),
        'singular_name'            => _x( 'staff', 'post type singular name', 'school' ),
        'add_new'                  => _x( 'Add New', 'staff', 'school' ),
        'add_new_item'             => __( 'Add New staff', 'school' ),
        'edit_item'                => __( 'Edit staff', 'school' ),
        'new_item'                 => __( 'New staff', 'school' ),
        'view_item'                => __( 'View staff', 'school' ),
        'view_items'               => __( 'View staff', 'school' ),
        'search_items'             => __( 'Search staff', 'school' ),
        'not_found'                => __( 'No staff found.', 'school' ),
        'not_found_in_trash'       => __( 'No staff found in Trash.', 'school' ),
        'parent_item_colon'        => __( 'Parent staff:', 'school' ),
        'all_items'                => __( 'All staff', 'school' ),
        'archives'                 => __( 'staff Archives', 'school' ),
        'attributes'               => __( 'staff Attributes', 'school' ),
        'insert_into_item'         => __( 'Insert into staff', 'school' ),
        'uploaded_to_this_item'    => __( 'Uploaded to this staff', 'school' ),
        'featured_image'           => __( 'staff featured image', 'school' ),
        'set_featured_image'       => __( 'Set staff featured image', 'school' ),
        'remove_featured_image'    => __( 'Remove staff featured image', 'school' ),
        'use_featured_image'       => __( 'Use as featured image', 'school' ),
        'menu_name'                => _x( 'staff', 'admin menu', 'school' ),
        'filter_items_list'        => __( 'Filter staff list', 'school' ),
        'items_list_navigation'    => __( 'staff list navigation', 'school' ),
        'items_list'               => __( 'staff list', 'school' ),
        'item_published'           => __( 'staff published.', 'school' ),
        'item_published_privately' => __( 'staff published privately.', 'school' ),
        'item_revereted_to_draft'  => __( 'staff reverted to draft.', 'school' ),
        'item_trashed'             => __( 'staff trashed.', 'school' ),
        'item_scheduled'           => __( 'staff scheduled.', 'school' ),
        'item_updated'             => __( 'staff updated.', 'school' ),
        'item_link'                => __( 'staff link.', 'school' ),
        'item_link_description'    => __( 'A link to a staff.', 'school' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'staff' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-businessman',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );
    register_post_type( 'fwd-staff', $args );
}
add_action( 'init', 'school_register_custom_post_types' );

function school_register_taxonomies() {
    // Add Speciality Category taxonomy
    $labels = array(
        'name'                  => _x( 'speciality Categories', 'taxonomy general name', 'school' ),
        'singular_name'         => _x( 'speciality Category', 'taxonomy singular name', 'school' ),
        'search_items'          => __( 'Search speciality Categories', 'school' ),
        'all_items'             => __( 'All speciality Category', 'school' ),
        'parent_item'           => __( 'Parent speciality Category', 'school' ),
        'parent_item_colon'     => __( 'Parent speciality Category:', 'school' ),
        'edit_item'             => __( 'Edit speciality Category', 'school' ),
        'view_item'             => __( 'View speciality Category', 'school' ),
        'update_item'           => __( 'Update speciality Category', 'school' ),
        'add_new_item'          => __( 'Add New speciality Category', 'school' ),
        'new_item_name'         => __( 'New speciality Category Name', 'school' ),
        'template_name'         => __( 'speciality Category Archives', 'school' ),
        'menu_name'             => __( 'speciality Category', 'school' ),
        'not_found'             => __( 'No speciality categories found.', 'school' ),
        'no_terms'              => __( 'No speciality categories', 'school' ),
        'items_list_navigation' => __( 'speciality Categories list navigation', 'school' ),
        'items_list'            => __( 'speciality Categories list', 'school' ),
        'item_link'             => __( 'speciality Category Link', 'school' ),
        'item_link_description' => __( 'A link to a speciality category.', 'school' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'speciality-categories' ),
    );
    register_taxonomy( 'fwd-speciality-category', array( 'fwd-students' ), $args );

    // staff faculty
    $labels = array(
        'name'                  => _x( 'Faculty Categories', 'taxonomy general name', 'mindset-theme' ),
        'singular_name'         => _x( 'Faculty Category', 'taxonomy singular name', 'mindset-theme' ),
        'search_items'          => __( 'Search Faculty Categories', 'mindset-theme' ),
        'all_items'             => __( 'All Faculty Category', 'mindset-theme' ),
        'parent_item'           => __( 'Parent Faculty Category', 'mindset-theme' ),
        'parent_item_colon'     => __( 'Parent Faculty Category:', 'mindset-theme' ),
        'edit_item'             => __( 'Edit Faculty Category', 'mindset-theme' ),
        'view_item'             => __( 'View Faculty Category', 'mindset-theme' ),
        'update_item'           => __( 'Update Faculty Category', 'mindset-theme' ),
        'add_new_item'          => __( 'Add New Faculty Category', 'mindset-theme' ),
        'new_item_name'         => __( 'New Faculty Category Name', 'mindset-theme' ),
        'template_name'         => __( 'Faculty Category Archives', 'mindset-theme' ),
        'menu_name'             => __( 'Faculty Category', 'mindset-theme' ),
        'not_found'             => __( 'No Faculty categories found.', 'mindset-theme' ),
        'no_terms'              => __( 'No Faculty categories', 'mindset-theme' ),
        'items_list_navigation' => __( 'Faculty Categories list navigation', 'mindset-theme' ),
        'items_list'            => __( 'Faculty Categories list', 'mindset-theme' ),
        'item_link'             => __( 'Faculty Category Link', 'mindset-theme' ),
        'item_link_description' => __( 'A link to a faculty category.', 'mindset-theme' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menu'  => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'faculty-categories' ),
    );
    register_taxonomy( 'fwd-faculty-category', array( 'fwd-staff' ), $args );
}
add_action( 'init', 'school_register_taxonomies' );

function school_rewrite_flush()
{
    school_register_custom_post_types();
    school_register_taxonomies();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'school_rewrite_flush');
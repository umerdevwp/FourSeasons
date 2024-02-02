<?php

// Register Custom Post Type "REVIEWS"
if (!function_exists('reviews_custom_post_type')) {

    // Register Custom Post Type
    function reviews_custom_post_type()
    {

        $labels = array(
            'name' => _x('Reviews', 'Post Type General Name', 'fshp'),
            'singular_name' => _x('Review', 'Post Type Singular Name', 'fshp'),
            'menu_name' => __('Reviews', 'fshp'),
            'name_admin_bar' => __('Reviews', 'fshp'),
            'archives' => __('Reviews Archives', 'fshp'),
            'attributes' => __('Reviews Attributes', 'fshp'),
            'parent_item_colon' => __('Parent Review:', 'fshp'),
            'all_items' => __('All Reviews', 'fshp'),
            'add_new_item' => __('Add New Review', 'fshp'),
            'add_new' => __('Add New', 'fshp'),
            'new_item' => __('New Review', 'fshp'),
            'edit_item' => __('Edit Review', 'fshp'),
            'update_item' => __('Update Review', 'fshp'),
            'view_item' => __('View Review', 'fshp'),
            'view_items' => __('View Reviews', 'fshp'),
            'search_items' => __('Search Review', 'fshp'),
            'not_found' => __('Not found', 'fshp'),
            'not_found_in_trash' => __('Not found in Trash', 'fshp'),
            'featured_image' => __('Featured Image', 'fshp'),
            'set_featured_image' => __('Set featured image', 'fshp'),
            'remove_featured_image' => __('Remove featured image', 'fshp'),
            'use_featured_image' => __('Use as featured image', 'fshp'),
            'insert_into_item' => __('Insert into eview', 'fshp'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'fshp'),
            'items_list' => __('Reviews list', 'fshp'),
            'items_list_navigation' => __('Reviews list navigation', 'fshp'),
            'filter_items_list' => __('Filter reviews list', 'fshp'),
        );
        $args = array(
            'label' => __('Reviews', 'fshp'),
            'description' => __('Four Season Home Products reviews list.', 'fshp'),
            'labels' => $labels,
            'supports' => array('title', 'revisions'),
            'taxonomies' => array(),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-excerpt-view',
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => false,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        );
        register_post_type('review', $args);
    }

    add_action('init', 'reviews_custom_post_type', 0);
}



?>
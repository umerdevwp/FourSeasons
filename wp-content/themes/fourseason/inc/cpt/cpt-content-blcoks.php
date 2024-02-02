<?php

// Register Custom Post Type "Content Blocks"
if (!function_exists('content_blocks_custom_post_type')) {

    // Register Custom Post Type
    function content_blocks_custom_post_type()
    {

        $labels = array(
            'name' => _x('Content Blocks', 'Post Type General Name', 'fshp'),
            'singular_name' => _x('Content Block', 'Post Type Singular Name', 'fshp'),
            'menu_name' => __('Content Blocks', 'fshp'),
            'name_admin_bar' => __('Content Blocks', 'fshp'),
            'archives' => __('Content Blocks Archives', 'fshp'),
            'attributes' => __('Content Blocks Attributes', 'fshp'),
            'parent_item_colon' => __('Parent Content Block:', 'fshp'),
            'all_items' => __('All Content Blocks', 'fshp'),
            'add_new_item' => __('Add New Content Block', 'fshp'),
            'add_new' => __('Add New', 'fshp'),
            'new_item' => __('New Content Block', 'fshp'),
            'edit_item' => __('Edit Content Block', 'fshp'),
            'update_item' => __('Update Content Block', 'fshp'),
            'view_item' => __('View Content Block', 'fshp'),
            'view_items' => __('View Content Blocks', 'fshp'),
            'search_items' => __('Search Content Block', 'fshp'),
            'not_found' => __('Not found', 'fshp'),
            'not_found_in_trash' => __('Not found in Trash', 'fshp'),
            'featured_image' => __('Featured Image', 'fshp'),
            'set_featured_image' => __('Set featured image', 'fshp'),
            'remove_featured_image' => __('Remove featured image', 'fshp'),
            'use_featured_image' => __('Use as featured image', 'fshp'),
            'insert_into_item' => __('Insert into eview', 'fshp'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'fshp'),
            'items_list' => __('Content Blocks list', 'fshp'),
            'items_list_navigation' => __('Content Blocks list navigation', 'fshp'),
            'filter_items_list' => __('Filter Content Blocks list', 'fshp'),
        );
        $args = array(
            'label' => __('Content Blocks', 'fshp'),
            'description' => __('Four Season Home Products Content Blocks list.', 'fshp'),
            'labels' => $labels,
            'supports' => array('title', 'editor', 'author', 'page-attributes'),
            'taxonomies' => array(),
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 10,
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-list-view',
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => false,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'page',
        );
        register_post_type('content-blocks', $args);
    }

    add_action('init', 'content_blocks_custom_post_type', 0);
}



?>
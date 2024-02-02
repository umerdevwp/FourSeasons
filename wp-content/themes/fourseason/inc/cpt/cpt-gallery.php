<?php
// Register Custom Post Type "GALARIES"
if (!function_exists('gallery_custom_post_type')) {

    // Register Custom Post Type
    function gallery_custom_post_type()
    {

        $labels = array(
            'name' => _x('Gallery Items', 'Post Type General Name', 'fshp'),
            'singular_name' => _x('Gallery Item', 'Post Type Singular Name', 'fshp'),
            'menu_name' => __('Gallery Items', 'fshp'),
            'name_admin_bar' => __('Gallery Items', 'fshp'),
            'archives' => __('Gallery Items Archives', 'fshp'),
            'attributes' => __('Gallery Items Attributes', 'fshp'),
            'parent_item_colon' => __('Parent Gallery Item:', 'fshp'),
            'all_items' => __('All Gallery Items', 'fshp'),
            'add_new_item' => __('Add New Gallery Item', 'fshp'),
            'add_new' => __('Add New', 'fshp'),
            'new_item' => __('New Gallery Item', 'fshp'),
            'edit_item' => __('Edit Gallery Item', 'fshp'),
            'update_item' => __('Update Gallery Item', 'fshp'),
            'view_item' => __('View Gallery Item', 'fshp'),
            'view_items' => __('View Gallery Items', 'fshp'),
            'search_items' => __('Search Gallery Items', 'fshp'),
            'not_found' => __('Not found', 'fshp'),
            'not_found_in_trash' => __('Not found in Trash', 'fshp'),
            'featured_image' => __('Featured Image', 'fshp'),
            'set_featured_image' => __('Set featured image', 'fshp'),
            'remove_featured_image' => __('Remove featured image', 'fshp'),
            'use_featured_image' => __('Use as featured image', 'fshp'),
            'insert_into_item' => __('Insert into eview', 'fshp'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'fshp'),
            'items_list' => __('Gallery Items list', 'fshp'),
            'items_list_navigation' => __('Gallery Items list navigation', 'fshp'),
            'filter_items_list' => __('Filter gallery items list', 'fshp'),
        );
        $args = array(
            'label' => __('Gallries', 'fshp'),
            'description' => __('Four Season Home Products gallery list.', 'fshp'),
            'labels' => $labels,
            'supports' => array('title', 'revisions'),
            'taxonomies' => array(),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 7,
            'menu_icon' => 'dashicons-media-spreadsheet',
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => false,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
            'taxonomies' => array('gallery-tags'),
        );
        register_post_type('gallery', $args);
    }

    add_action('init', 'gallery_custom_post_type', 0);
}

//hook into the init action and call create_topics_nonhierarchical_taxonomy when it fires
/* 
add_action('init', 'create_gallery_nonhierarchical_taxonomy', 0);

function create_gallery_nonhierarchical_taxonomy()
{

// Labels part for the GUI

    $labels = array(
        'name' => _x('Gallery Filterable', 'taxonomy general name'),
        'singular_name' => _x('Gallery Filterable', 'taxonomy singular name'),
        'search_items' => __('Search Gallery Filterables'),
        'popular_items' => __('Popular Gallery Filterables'),
        'all_items' => __('All Gallery Filterables'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Edit Gallery Filterable'),
        'update_item' => __('Update Gallery Filterable'),
        'add_new_item' => __('Add New Gallery Filterable'),
        'new_item_name' => __('New Gallery Filterable Name'),
        'separate_items_with_commas' => __('Separate topics with commas'),
        'add_or_remove_items' => __('Add or remove topics'),
        'choose_from_most_used' => __('Choose from the most used topics'),
        'menu_name' => __('Gallery Filterable'),
    );

// Now register the non-hierarchical taxonomy like tag

    register_taxonomy('gallery-tags', 'gallery', array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var' => true,
        'rewrite' => array('slug' => 'gallery-tags'),
    ));
} */

?>
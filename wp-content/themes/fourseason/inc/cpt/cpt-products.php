<?php
/* Custom Post Type Products */
//////////////////////////////
// Register Custom Post Type "PRODUCTS"
if (!function_exists('custom_post_type')) {

    // Register Custom Post Type
    function custom_post_type()
    {

        $labels = array(
            'name' => _x('Products', 'Post Type General Name', 'fshp'),
            'singular_name' => _x('Product', 'Post Type Singular Name', 'fshp'),
            'menu_name' => __('Products', 'fshp'),
            'name_admin_bar' => __('Products', 'fshp'),
            'archives' => __('Products Archives', 'fshp'),
            'attributes' => __('Products Attributes', 'fshp'),
            'parent_item_colon' => __('Parent Product:', 'fshp'),
            'all_items' => __('All Products', 'fshp'),
            'add_new_item' => __('Add New Product', 'fshp'),
            'add_new' => __('Add New', 'fshp'),
            'new_item' => __('New Product', 'fshp'),
            'edit_item' => __('Edit Product', 'fshp'),
            'update_item' => __('Update Product', 'fshp'),
            'view_item' => __('View Product', 'fshp'),
            'view_items' => __('View Products', 'fshp'),
            'search_items' => __('Search Product', 'fshp'),
            'not_found' => __('Not found', 'fshp'),
            'not_found_in_trash' => __('Not found in Trash', 'fshp'),
            'featured_image' => __('Featured Image', 'fshp'),
            'set_featured_image' => __('Set featured image', 'fshp'),
            'remove_featured_image' => __('Remove featured image', 'fshp'),
            'use_featured_image' => __('Use as featured image', 'fshp'),
            'insert_into_item' => __('Insert into product', 'fshp'),
            'uploaded_to_this_item' => __('Uploaded to this item', 'fshp'),
            'items_list' => __('Products list', 'fshp'),
            'items_list_navigation' => __('Products list navigation', 'fshp'),
            'filter_items_list' => __('Filter products list', 'fshp'),
        );
        $args = array(
            'label' => __('Product', 'fshp'),
            'description' => __('Four Sesaons Home Products featured products list.', 'fshp'),
            'labels' => $labels,
            'supports' => array('title', 'revisions'),
            'taxonomies' => array(),
            'hierarchical' => false,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-tickets-alt',
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
        );
        register_post_type('product', $args);
    }

    add_action('init', 'custom_post_type', 0);
}
?>
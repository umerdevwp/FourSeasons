<?php
/**
 * Four Season Home Products functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Best_Made
 * @since 1.0.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.7', '<')) {
    require get_template_directory() . '/inc/back-compat.php';
    return;
}

if (!function_exists('fshp_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function fshp_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Twenty Nineteen, use a find and replace
         * to change 'twentynineteen' to the name of your theme in all the template files.
         */
        //load_theme_textdomain( 'twentynineteen', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size( 1920, 1320 );

        add_image_size('small-featured-image', 1000, 800, true);
        add_image_size('post-featured-image', 1920, 990, true);
        add_image_size('medium-featured-image', 1920, 1320, true);
        add_image_size('large-featured-image', 2560, 1750, true);
        //add_image_size( 'post-list-image', 230, 250, true );
        //add_image_size( 'post-archive-image', 600, 400, true  );
        //add_image_size( 'block-item-image', 510, 310 );
        //add_image_size( 'more-item-image', 410, 310 );


        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height' => 190,
                'width' => 190,
                'flex-width' => false,
                'flex-height' => false,
            )
        );

        // Add support for Block Styles.
        add_theme_support('wp-block-styles');

        // Add support for responsive embedded content.
        add_theme_support('responsive-embeds');
        // Add support for Wordpress Menus.
        add_theme_support('menus');
    }
endif;
add_action('after_setup_theme', 'fshp_setup');


function fshp_remove_emojis_assets() {
    // REMOVE WP EMOJI
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'fshp_remove_emojis_assets' );

/**
* Register Sidebar.
*/
function fshp_widgets_init() {

register_sidebar(
    array(
        'name'          => __( 'Right Sidebar', 'fshp' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your blog pages.', 'fshp' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    )
);

}
add_action( 'widgets_init', 'fshp_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function fshp_css_styles()
{
    //wp_enqueue_style('fshp-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), wp_get_theme()->get('Version'), 'all');
    //wp_enqueue_style('fshp-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), wp_get_theme()->get('Version'), 'all');
    //wp_enqueue_style('fshp-fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), wp_get_theme()->get('Version'), 'all');
    //wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), wp_get_theme()->get('Version'), 'all');
    //wp_enqueue_style('animate-on-scroll', get_template_directory_uri() . '/assets/css/aos.css', array(), wp_get_theme()->get('Version'), 'all');

    //wp_enqueue_style('mmenu-css', get_template_directory_uri() . '/assets/css/mmenu.css', array(), wp_get_theme()->get('Version'), 'all');

    wp_enqueue_style('all-styles', get_template_directory_uri() . '/assets/css/styles.all.min.css', array(), wp_get_theme()->get('Version'), 'all');

    wp_enqueue_style('fshp-styles', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));
    //wp_enqueue_style('fshp-blog-styles', get_template_directory_uri() . '/assets/css/blog-styles.css', array(), wp_get_theme()->get('Version'), 'all');
}

add_action('wp_enqueue_scripts', 'fshp_css_styles');

function fshp_js_scripts()
{
    //wp_enqueue_script('fshp-vendor-jquery', '//code.jquery.com/jquery-3.4.1.min.js', array('jquery'), '3.4.1', true);
   // wp_enqueue_script('fshp-pooper-script', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('jquery'), '1.0', true);
   // wp_enqueue_script('fshp-bootstrap-script', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('fontawsome', 'https://kit.fontawesome.com/2cf9d9b95a.js', array('jquery'), '1.0', false);
   // wp_enqueue_script('fshp-fancybox-script', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), '1.0', true);
    //wp_enqueue_script('owl-carousel-script', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true);
    //wp_enqueue_script('owl-carousel-script', get_template_directory_uri() . '/assets/js/owl-carousel.js', array('jquery'), '1.0', true);
   // wp_enqueue_script('animate-on-scroll-script', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), '1.0', true);
   // wp_enqueue_script('mmenu-script', get_template_directory_uri() . '/assets/js/mmenu.js', array('jquery'), '1.0', true);

   wp_enqueue_script('all-scripts', get_template_directory_uri() . '/assets/js/jquery.all.min.js', array('jquery'), '1.0', true);
    
    wp_enqueue_script('fshp-main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'fshp_js_scripts', 999);


// Set excerpt length
function excerpt($limit)
{
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
    return $excerpt;
}


// Custom Post Types
require get_template_directory() . '/inc/cpt/cpt-content-blcoks.php';
require get_template_directory() . '/inc/cpt/cpt-products.php';
require get_template_directory() . '/inc/cpt/cpt-reviews.php';
require get_template_directory() . '/inc/cpt/cpt-gallery.php';
// Recent Posts Widget
require get_template_directory() . '/inc/widgets/widget-recent-posts.php';
// Comments Form Custom Template & Validations
require get_template_directory() . '/inc/comments/template-comment-form.php';



// Add Options Page
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Global Options',
        'menu_title' => 'Global Options',
        'menu_slug' => 'theme-global-options',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

}


// Remnove ACF plugin update notificATION
function filter_plugin_updates($value)
{
    unset($value->response['advanced-custom-fields-pro/acf.php']);
    return $value;
}
add_filter('site_transient_update_plugins', 'filter_plugin_updates');

// Remnove <p> tag from Category description
remove_filter('term_description', 'wpautop');


/* Remove image width height attributes */
function remove_img_attr ($html) {
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}
add_filter( 'post_thumbnail_html', 'remove_img_attr' );


/* Add custom classes to list item "li" */
function _namespace_menu_item_class( $classes, $item ) {       
    $classes[] = "nav-item"; 
    return $classes;
} 
add_filter( 'nav_menu_css_class' , '_namespace_menu_item_class' , 10, 2 );

?>

<?php
/* Require Includes */
include_once get_template_directory().'/includes/gutenburg.php';
include_once get_template_directory().'/includes/helper-functions.php';
include_once get_template_directory().'/includes/bootstrap-wp-navwalker.php';
//include_once get_template_directory().'/includes/acf-custom-widget.php';

/* Hooks */
if (!function_exists('enqueue_scripts')) {

    add_action('wp_enqueue_scripts', 'enqueue_scripts');

    // Cache bust constants
    define('THEMESTYLE_VERSION', filemtime(get_stylesheet_directory().'/style/style.css'));
    define('HEADERBUNDLE_VERSION', filemtime(get_stylesheet_directory().'/js/header-bundle.js'));
    define('FOOTERBUNDLE_VERSION', filemtime(get_stylesheet_directory().'/js/footer-bundle.js'));

    function enqueue_scripts()
    {
        // Register our own jquery
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');

        wp_enqueue_style('style_file', get_stylesheet_directory_uri().'/style/style.css', [], THEMESTYLE_VERSION);
        wp_enqueue_script('header_js', get_stylesheet_directory_uri().'/js/header-bundle.js', null, HEADERBUNDLE_VERSION, false);
        wp_enqueue_script('footer_js', get_stylesheet_directory_uri().'/js/footer-bundle.js', null, FOOTERBUNDLE_VERSION, true);
    }
}

if (!function_exists('custom_after_setup_theme')) {

    add_action('after_setup_theme', 'custom_after_setup_theme', 11);

    function custom_after_setup_theme()
    {
        remove_theme_support('custom-background');
        add_theme_support('post-thumbnails');
        add_post_type_support( 'page', 'excerpt' );

        register_nav_menus([
            'primary' => 'Primary Menu',
            'about' => 'About',
            'community' => 'Community',
            'programs' => 'Programs & Services',
            'updates' => 'Updates and News',
            'contact' => 'Contact Menu'
        ]);

        // Style Gutenberg
        add_theme_support('editor-styles');
        add_editor_style('style-editor.css');
    }
}

/* trim that excerpt */
function get_excerpt()
{
    $excerpt = get_the_excerpt();
    $excerpt = preg_replace(" ([.*?])", '', $excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 20);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = trim(preg_replace('/\s+/', ' ', $excerpt));
    $excerpt = $excerpt . '...';
    return $excerpt;
}

/* use get_excerpt() instead of the_excerpt() */

/* Misc */
remove_action('wp_head', 'wp_generator');
add_filter('allow_dev_auto_core_updates', '__return_false');
add_filter('auto_update_plugin', '__return_true');

/* Gravity Forms */
add_filter('gform_init_scripts_footer', '__return_true');
add_filter('gform_confirmation_anchor', '__return_false');
//add_filter('gform_enable_field_label_visibility_settings', '__return_true');

/* ACF - Theme Options */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Theme Options',
        'menu_title' => 'Theme Options',
        'menu_slug' => 'theme-options',
        'capability' => 'edit_posts',
        'position' => 80,
        'redirect' => false
    ]);
}

//redirect subscribers account out of admin and onto portal page
add_action('wp_login', 'redirectToFrontend');

function redirectToFrontend($user_login) {
    $user = get_user_by('login', $user_login);
    //we check for two users because of the forum adds a 2nd user role
    if(count($user->roles) == 2 AND $user->roles[0] == 'subscriber') {
        wp_redirect(site_url('/member-portal'));
        exit;
    }
}

// hide_admin_bar_from_front_end by default on the frontend
function hide_admin_bar_from_front_end()
{
    if (is_blog_admin()) {
        return true;
    }
    return false;
}
add_filter('show_admin_bar', 'hide_admin_bar_from_front_end');

// Hide the event calendar subscribe box on all event pages.
add_filter( 'tec_views_v2_subscribe_links',
    function( $subscribe_links ) {
        // When passed an empty array, the template will bail and not display.
        return [];
    },
    100
);

//redirect to be able to select Events in QUick Links
add_action( 'template_redirect', 'redirect_events_page' );

function redirect_events_page() {
    if ( is_page( 'events-page' ) ) {
        wp_redirect( '/events/', 301 );
        exit;
    }
}

//  move Yoast to bottom
function yoast_to_bottom()
{
    return 'low';
}
add_filter('wpseo_metabox_prio', 'yoast_to_bottom');
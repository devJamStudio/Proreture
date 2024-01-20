<?php

/**
 * Theme setup.
 */

namespace App;

use function Roots\bundle;

/**
 * Register the theme assets.
 *
 * @return void
 */
add_action('wp_enqueue_scripts', function () {
    bundle('swiperBundle')->enqueue();
}, 200);

add_action('wp_enqueue_scripts', function () {
    bundle('app')->enqueue();
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
    bundle('editor')->enqueue();
}, 100);

/**
 * Register the theme assets with the block editor.
 *
 * @return void
 */

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Enable features from the Soil plugin if activated.
     *
     * @link https://roots.io/plugins/soil/
     */
    add_theme_support('soil', [
        'clean-up',
        'nav-walker',
        'nice-search',
        'relative-urls',
    ]);

    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Add Tailwind classes in editor
    * Conflict with default styling in admin pages // leave it for now

    add_action('admin_enqueue_scripts', function () {
        bundle('app')->enqueue();
    }, 100);
    */
    /**
     * Register the navigation menus.
     *
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
    ]);
    register_nav_menus([
        'footer_navigation' => __('Footer Navigation', 'sage'),
    ]);
    register_nav_menus([
        'footer_navigation_2' => __('Footer Navigation 2', 'sage'),
    ]);

    /**
     * Disable the default block patterns.
     *
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     *
     * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);
      /**
     * Custom logo support
     *
     *
     */
    add_theme_support('custom-logo');

    /**
     * Enable selective refresh for widgets in customizer.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#customize-selective-refresh-widgets
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary',
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer',
    ] + $config);
});

/**
 * Custom Post Typee Integrations

 * Register a custom post type called "Integrations".
 *
 * @see get_post_type_labels() for label keys.
 */
add_action('init', function () {
    $labels = array(
    'name'                  => _x('Integrations', 'Post type general name', 'textdomain'),
    'singular_name'         => _x('Integration', 'Post type singular name', 'textdomain'),
    'plural_name'         => _x('Integration', 'Post type singular name', 'textdomain'),
    'menu_name'             => _x('Integrations', 'Admin Menu text', 'textdomain'),
    'name_admin_bar'        => _x('Integracje', 'Add New on Toolbar', 'textdomain'),
    'add_new'               => __('Add New Integration', 'textdomain'),
    'add_new_item'          => __('Add New Integration', 'textdomain'),
    'new_item'              => __('New Integration', 'textdomain'),
    'edit_item'             => __('Edit Integration', 'textdomain'),
    'view_item'             => __('View Integration', 'textdomain'),
    'all_items'             => __('All Integrations', 'textdomain'),
    'search_items'          => __('Search Integrations', 'textdomain'),
    'parent_item_colon'     => __('Parent Integrations:', 'textdomain'),
    'not_found'             => __('No Integrations found.', 'textdomain'),
    'not_found_in_trash'    => __('No Integrations found in Trash.', 'textdomain'),
    'featured_image'        => _x('Integration Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
    'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
    'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
    'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
    'archives'              => _x('Integration archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
    'insert_into_item'      => _x('Insert into Integration', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
    'uploaded_to_this_item' => _x('Uploaded to this Integration', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
    'filter_items_list'     => _x('Filter Integrations list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
    'items_list_navigation' => _x('Integrations list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
    'items_list'            => _x('Integrations list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
    );
    $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'Integrations'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', ),
    );
    register_post_type('Integration', $args);
});

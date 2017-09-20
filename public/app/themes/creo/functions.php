<?php

add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('daily', get_template_directory_uri() . '/style.css');
});

add_action( 'wp_enqueue_scripts', function() {
    $parent_style = 'daily';

    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        [$parent_style],
        wp_get_theme()->get('Version')
    );
});

show_admin_bar(false);

add_action('init', function() {
    register_post_type('project', [
        'labels'             => [
        'name'               => _x('Portfolio', 'post type general name', 'creo'),
        'singular_name'      => _x('Project', 'post type singular name', 'creo'),
        'menu_name'          => _x('Projects', 'admin menu', 'creo'),
        'name_admin_bar'     => _x('Project', 'add new on admin bar', 'creo'),
        'add_new'            => _x('Add New', 'project', 'creo'),
        'add_new_item'       => __('Add New Project', 'creo'),
        'new_item'           => __('New Project', 'creo'),
        'edit_item'          => __('Edit Project', 'creo'),
        'view_item'          => __('View Project', 'creo'),
        'all_items'          => __('All Projects', 'creo'),
        'search_items'       => __('Search Projects', 'creo'),
        'parent_item_colon'  => __('Parent Projects:', 'creo'),
        'not_found'          => __('No projects found.', 'creo'),
        'not_found_in_trash' => __('No projects found in Trash.', 'creo'),
    ],
    'description'        => __('Description.', 'creo'),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => ['slug' => 'portfolio'],
    'capability_type'    => 'post',
    'has_archive'        => false,
    'menu_icon'          => 'dashicons-awards',
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => ['title', 'editor', 'thumbnail']
    ]);
});

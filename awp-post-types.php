<?php

/**
 * Plugin Name: AWP Post Types & Taxonomies
 * Description: Adds custom post types and taxonomies to site
 * Version: 1.0
 * License: GPL2
 * 
 */

add_action('init', 'awp_recipe_post_type', 0);

function awp_recipe_post_type()
{
    $labels = array(
        'name'                  => _x('Recipes', 'Post Type General Name', 'advanced-wp'),
        'singular_name'         => _x('Recipe', 'Post Type Singular Name', 'advanced-wp'),
        'menu_name'             => __('Recipes', 'advanced-wp'),
        'parent_item_colon'     => __('Parent Recipe', 'advanced-wp'),
        'all_items'             => __('All Recipes', 'advanced-wp'),
        'view_item'             => __('View Recipe', 'advanced-wp'),
        'add_new_item'          => __('Add New Recipe', 'advanced-wp'),
        'add_new'               => __('Add New Recipe', 'advanced-wp'),
        'edit_item'             => __('Edit Recipe', 'advanced-wp'),
        'update_item'           => __('Update Recipe', 'advanced-wp'),
        'search_items'          => __('Search Recipes', 'advanced-wp'),
        'not_found'             => __('No recipes found', 'advanced-wp'),
        'not_found_in_trash'    => __('No recipes found in trash', 'advanced-wp'),
    );

    $args = array(
        'label'                 => __('Recipes', 'advanced-wp'),
        'description'           => __('Recipes for AdvancedWP', 'advanced-wp'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'author', 'thumbnail', 'revisions', 'custom-fields'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menus'         => true,
        'show_in_admin'         => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-page',
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'capability_type'       => 'page',

    );

    // Register the recipe post type
    register_post_type('recipes', $args);
}

add_action('init', 'awp_event_post_type', 0);

function awp_event_post_type()
{
    $labels = array(
        'name'                  => _x('Events', 'Post Type General Name', 'advanced-wp'),
        'singular_name'         => _x('Event', 'Post Type Singular Name', 'advanced-wp'),
        'menu_name'             => __('Events', 'advanced-wp'),
        'parent_item_colon'     => __('Parent Event', 'advanced-wp'),
        'all_items'             => __('All Events', 'advanced-wp'),
        'view_item'             => __('View Event', 'advanced-wp'),
        'add_new_item'          => __('Add New Event', 'advanced-wp'),
        'add_new'               => __('Add New Event', 'advanced-wp'),
        'edit_item'             => __('Edit Event', 'advanced-wp'),
        'update_item'           => __('Update Event', 'advanced-wp'),
        'search_items'          => __('Search Events', 'advanced-wp'),
        'not_found'             => __('No Events found', 'advanced-wp'),
        'not_found_in_trash'    => __('No Events found in trash', 'advanced-wp'),
    );

    $args = array(
        'label'                 => __('Events', 'advanced-wp'),
        'description'           => __('Events for AdvancedWP', 'advanced-wp'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'author', 'revisions', 'custom-fields'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menus'         => true,
        'show_in_admin'         => true,
        'show_in_admin_bar'     => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-calendar-alt',
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'capability_type'       => 'page',

    );

    // Register the recipe post type
    register_post_type('events', $args);
}


add_action('init', 'awp_event_type_taxonomy');

function awp_event_type_taxonomy()
{
    $labels = array(
        'name'                  => _x('Event Type', 'Post Type General Name', 'advanced-wp'),
        'singular_name'         => _x('Event Type', 'Post Type Singular Name', 'advanced-wp'),
        'menu_name'             => __('Event Type', 'advanced-wp'),
        'parent_item'           => __('Parent Event Type', 'advanced-wp'),
        'parent_item_colon'     => __('Parent Event Type:', 'advanced-wp'),
        'all_items'             => __('All Event Types', 'advanced-wp'),
        'view_item'             => __('View Event Type', 'advanced-wp'),
        'add_new_item'          => __('Add New Event Type', 'advanced-wp'),
        'add_new'               => __('Add New Event Type', 'advanced-wp'),
        'edit_item'             => __('Edit Event Type', 'advanced-wp'),
        'update_item'           => __('Update Event Type', 'advanced-wp'),
        'search_items'          => __('Search Event Type', 'advanced-wp'),
        'not_found'             => __('No Event Type found', 'advanced-wp'),
        'not_found_in_trash'    => __('No Event Type found in trash', 'advanced-wp'),
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'event-type'),
    );

    register_taxonomy('event-type', 'events', $args);
}


add_action('init', 'awp_meal_type_taxonomy');

function awp_meal_type_taxonomy()
{
    $labels = array(
        'name'                  => _x('Meal Type', 'Taxonomy Type General Name', 'advanced-wp'),
        'singular_name'         => _x('Meal Type', 'Taxonomy Type Singular Name', 'advanced-wp'),
        'menu_name'             => __('Meal Type', 'advanced-wp'),
        'parent_item'           => __('Parent Meal Type', 'advanced-wp'),
        'parent_item_colon'     => __('Parent Meal Type:', 'advanced-wp'),
        'all_items'             => __('All Meal Type', 'advanced-wp'),
        'view_item'             => __('View Meal Type', 'advanced-wp'),
        'add_new_item'          => __('Add New Meal Type', 'advanced-wp'),
        'add_new'               => __('Add New Meal Type', 'advanced-wp'),
        'edit_item'             => __('Edit Meal Type', 'advanced-wp'),
        'update_item'           => __('Update Meal Type', 'advanced-wp'),
        'search_items'          => __('Search Meal Type', 'advanced-wp'),
        'not_found'             => __('No Meal Type found', 'advanced-wp'),
        'not_found_in_trash'    => __('No Meal Type found in trash', 'advanced-wp'),
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'    => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'meal-type'),
    );

    register_taxonomy('meal-type', 'recipes', $args);
}


add_action('init', 'awp_course_taxonomy');

function awp_course_taxonomy()
{
    $labels = array(
        'name'                  => _x('Course', 'Taxonomy Type General Name', 'advanced-wp'),
        'singular_name'         => _x('Course', 'Taxonomy Type Singular Name', 'advanced-wp'),
        'menu_name'             => __('Course', 'advanced-wp'),
        'parent_item'           => __('Parent Course', 'advanced-wp'),
        'parent_item_colon'     => __('Parent Course:', 'advanced-wp'),
        'all_items'             => __('All Courses', 'advanced-wp'),
        'view_item'             => __('View Course', 'advanced-wp'),
        'add_new_item'          => __('Add New Course', 'advanced-wp'),
        'add_new'               => __('Add New Course', 'advanced-wp'),
        'edit_item'             => __('Edit Course', 'advanced-wp'),
        'update_item'           => __('Update Course', 'advanced-wp'),
        'search_items'          => __('Search Course', 'advanced-wp'),
        'not_found'             => __('No Course found', 'advanced-wp'),
        'not_found_in_trash'    => __('No Course found in trash', 'advanced-wp'),
    );

    $args = array(
        'hierarchical'          => true,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'    => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'course'),
    );

    register_taxonomy('course', 'recipes', $args);
}

add_action('init', 'awp_mood_taxonomy');

function awp_mood_taxonomy()
{
    $labels = array(
        'name'                  => _x('Mood', 'Taxonomy Type General Name', 'advanced-wp'),
        'singular_name'         => _x('Mood', 'Taxonomy Type Singular Name', 'advanced-wp'),
        'menu_name'             => __('Mood', 'advanced-wp'),
        'parent_item'           => __('Parent Mood', 'advanced-wp'),
        'parent_item_colon'     => __('Parent Mood:', 'advanced-wp'),
        'all_items'             => __('All Moods', 'advanced-wp'),
        'view_item'             => __('View Mood', 'advanced-wp'),
        'add_new_item'          => __('Add New Mood', 'advanced-wp'),
        'add_new'               => __('Add New Mood', 'advanced-wp'),
        'edit_item'             => __('Edit Mood', 'advanced-wp'),
        'update_item'           => __('Update Mood', 'advanced-wp'),
        'search_items'          => __('Search Mood', 'advanced-wp'),
        'not_found'             => __('No Mood found', 'advanced-wp'),
        'not_found_in_trash'    => __('No Mood found in trash', 'advanced-wp'),
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'    => true,
        'query_var'             => true,
        'rewrite'               => array('slug' => 'mood'),
    );

    register_taxonomy('mood', 'recipes', $args);
}

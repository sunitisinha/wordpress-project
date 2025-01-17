<?php

function university_post_types()
{
  //Campus Post Type
  register_post_type('campus', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'campuses'),
    'has_archive' => true,
    'public' => true,
    'labels' => array('name' => 'Campuses', 'add_new_item' => 'Add New Campus', 'edit_event' => 'Edit Campus', 'all_items' => 'All Campuses', 'singular_name' => 'Campus'),
    'menu_icon' => 'dashicons-location-alt',
    'show_in_rest' => true,

  ));


  //Event post type
  register_post_type('event', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'labels' => array('name' => 'Events', 'add_new_item' => 'Add New Event', 'edit_event' => 'Edit Event', 'all_items' => 'All Events', 'singular_name' => 'Event'),
    'menu_icon' => 'dashicons-calendar',
    'show_in_rest' => true,

  ));

  //Professor post type

  register_post_type('program', array(
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'programs'),
    'has_archive' => true,
    'public' => true,
    'labels' => array('name' => 'Programs', 'add_new_item' => 'Add New Program', 'edit_event' => 'Edit Program', 'all_items' => 'All Programs', 'singular_name' => 'Program'),
    'menu_icon' => 'dashicons-awards',
    'show_in_rest' => true,

  ));


  //Professor post type

  register_post_type('professor', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array('name' => 'Professors', 'add_new_item' => 'Add New Professor', 'edit_event' => 'Edit Professor', 'all_items' => 'All Professors', 'singular_name' => 'Professor'),
    'menu_icon' => 'dashicons-welcome-learn-more',
    'show_in_rest' => true,

  ));
}
add_action('init', 'university_post_types');
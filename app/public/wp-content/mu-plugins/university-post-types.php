<?php

function university_post_types() {
  // Event post type
  register_post_type('event', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true, // forces the use of the new block editor
    'menu_icon' => 'dashicons-calendar-alt',
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    )
  ));

  // Program post type
  register_post_type('course', array(
    'supports' => array('title', 'editor', 'excerpt'), // adds support to custom post type page
    'rewrite' => array('slug' => 'courses'),
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true, // forces the use of the new block editor
    'menu_icon' => 'dashicons-awards',
    'labels' => array(
      'name' => 'Courses',
      'add_new_item' => 'Add New Course',
      'edit_item' => 'Edit Course',
      'all_items' => 'All Courses',
      'singular_name' => 'Course'
    )
  ));

  // Professor post type
  register_post_type('professor', array(
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'), // thumbnail adds festured image (aso needs code in functions.php)
    'has_archive' => true,
    'public' => true,
    'show_in_rest' => true, // forces the use of the new block editor
    'menu_icon' => 'dashicons-welcome-learn-more',
    'labels' => array(
      'name' => 'Professors',
      'add_new_item' => 'Add New Professor',
      'edit_item' => 'Edit Professor',
      'all_items' => 'All Professors',
      'singular_name' => 'Professor'
    )
  ));
}

add_action('init', 'university_post_types');

?>
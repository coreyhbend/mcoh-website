<?php

add_action('after_setup_theme', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('custom-logo');

  register_nav_menus([
    'primary' => 'Primary Navigation',
    'footer' => 'Footer Navigation'
  ]);
});

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style(
    'mcoh-fonts',
    'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Inter:wght@300;400;500;600&display=swap',
    [],
    null
  );

  wp_enqueue_style(
    'mcoh-style',
    get_template_directory_uri() . '/assets/css/main.css',
    [],
    '0.2.0'
  );

  wp_enqueue_script(
    'mcoh-main',
    get_template_directory_uri() . '/assets/js/main.js',
    [],
    '0.2.0',
    true
  );
});

add_action('init', function () {
  $items = [
    'community' => ['Communities', 'Community', 'dashicons-location-alt'],
    'destination' => ['Destinations', 'Destination', 'dashicons-palmtree'],
    'local_intel' => ['Local Intel', 'Local Intel Item', 'dashicons-megaphone'],
    'event' => ['Events', 'Event', 'dashicons-calendar-alt'],
    'brewery' => ['Breweries', 'Brewery', 'dashicons-beer']
  ];

  foreach ($items as $slug => $data) {
    register_post_type($slug, [
      'labels' => [
        'name' => $data[0],
        'singular_name' => $data[1]
      ],
      'public' => true,
      'has_archive' => true,
      'menu_icon' => $data[2],
      'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
      'show_in_rest' => true,
      'rewrite' => ['slug' => str_replace('_', '-', $slug) . 's']
    ]);
  }

  register_taxonomy('region', ['community', 'destination', 'event', 'brewery'], [
    'label' => 'Regions',
    'public' => true,
    'hierarchical' => true,
    'show_in_rest' => true
  ]);

  register_taxonomy('guide_type', ['destination', 'local_intel', 'event', 'brewery'], [
    'label' => 'Guide Types',
    'public' => true,
    'hierarchical' => true,
    'show_in_rest' => true
  ]);
});

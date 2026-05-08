<?php

function mcoh_site_schema() {
  $schema = [
    '@context' => 'https://schema.org',
    '@type' => 'WebSite',
    'name' => 'Make Central Oregon Home',
    'url' => home_url('/'),
    'description' => 'Central Oregon lifestyle, destination, relocation, and community resource platform.'
  ];

  echo '<script type="application/ld+json">' . wp_json_encode($schema) . '</script>';
}

add_action('wp_head', 'mcoh_site_schema');

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav class="site-nav" id="siteNav">
  <div class="nav-inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
      <span class="nav-logo-primary">Make Central Oregon Home</span>
      <span class="nav-logo-sub">Central Oregon's Guide</span>
    </a>
    <ul class="nav-links">
      <li><a href="<?php echo esc_url( home_url( '/explore' ) ); ?>">Explore</a></li>
      <li><a href="<?php echo esc_url( home_url( '/destinations' ) ); ?>">Destinations</a></li>
      <li><a href="<?php echo esc_url( home_url( '/communities' ) ); ?>">Communities</a></li>
      <li><a href="<?php echo esc_url( home_url( '/events' ) ); ?>">What&#8217;s On</a></li>
      <li><a href="<?php echo esc_url( home_url( '/local-intel' ) ); ?>">Local Intel</a></li>
    </ul>
    <a href="<?php echo esc_url( home_url( '/visit-central-oregon' ) ); ?>" class="nav-cta">Plan Your Visit</a>
  </div>
</nav>

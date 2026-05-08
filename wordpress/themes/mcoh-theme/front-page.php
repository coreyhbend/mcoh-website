<?php get_header(); ?>

<main id="primary" class="site-main">

<?php get_template_part('template-parts/hero/hero-home'); ?>

<?php get_template_part('template-parts/home/latest-intel'); ?>

<?php get_template_part('template-parts/explore/explore-grid'); ?>

<?php get_template_part('template-parts/home/latest-destinations'); ?>

<?php get_template_part('template-parts/home/latest-communities'); ?>

<section class="section-explore">
  <div class="section-inner">
    <span class="section-tag">Moving to Central Oregon</span>

    <h2 class="section-title">
      Thinking about making the move?
    </h2>

    <p class="card-text">
      Explore community guides, local insights, neighborhoods, and relocation resources throughout Bend and Central Oregon.
    </p>

    <div class="hero-actions">
      <a class="btn-primary" href="https://centralorproperties.com">
        Search Homes
      </a>

      <a class="btn-ghost" href="/moving-to-central-oregon">
        Relocation Guides
      </a>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>

<?php get_header(); ?>

<main class="site-main">
  <section class="section-communities">
    <div class="section-inner">
      <span class="section-tag">Community Guides</span>
      <h1 class="section-title">Explore Central Oregon communities.</h1>

      <div class="communities-grid">
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <article class="community-card">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
              <?php endif; ?>

              <h2 class="community-card-title">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h2>

              <div class="community-card-text">
                <?php the_excerpt(); ?>
              </div>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>

<?php
$community_query = new WP_Query([
  'post_type' => 'community',
  'posts_per_page' => 4
]);
?>

<?php if ($community_query->have_posts()) : ?>
<section class="section-communities">
  <div class="section-inner">
    <span class="section-tag">Community Guides</span>

    <h2 class="section-title">
      Explore communities across Central Oregon.
    </h2>

    <div class="communities-grid">
      <?php while ($community_query->have_posts()) : $community_query->the_post(); ?>
        <article class="community-card">
          <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('large'); ?>
            </a>
          <?php endif; ?>

          <h3 class="community-card-title">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h3>

          <div class="community-card-text">
            <?php the_excerpt(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php wp_reset_postdata(); ?>

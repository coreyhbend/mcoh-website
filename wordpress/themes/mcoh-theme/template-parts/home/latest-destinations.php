<?php
$destination_query = new WP_Query([
  'post_type' => 'destination',
  'posts_per_page' => 4
]);
?>

<?php if ($destination_query->have_posts()) : ?>
<section class="section-destinations">
  <div class="section-inner">
    <span class="section-tag">Featured Destinations</span>

    <h2 class="section-title">
      Lakes, mountains, trails, and high desert escapes.
    </h2>

    <div class="explore-grid">
      <?php while ($destination_query->have_posts()) : $destination_query->the_post(); ?>
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

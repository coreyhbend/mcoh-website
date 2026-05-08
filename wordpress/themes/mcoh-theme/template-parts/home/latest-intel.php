<?php
$intel_query = new WP_Query([
  'post_type' => 'local_intel',
  'posts_per_page' => 4
]);
?>

<?php if ($intel_query->have_posts()) : ?>
<section class="section-intel">
  <div class="section-inner">
    <span class="section-tag">Local Intel</span>

    <h2 class="section-title">
      What is happening around Central Oregon right now.
    </h2>

    <div class="intel-grid">
      <?php while ($intel_query->have_posts()) : $intel_query->the_post(); ?>
        <article class="intel-card">
          <h3 class="intel-card-headline">
            <a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
            </a>
          </h3>

          <div class="intel-card-text">
            <?php the_excerpt(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php wp_reset_postdata(); ?>

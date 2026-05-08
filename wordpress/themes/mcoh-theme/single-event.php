<?php get_header(); ?>

<main class="site-main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="section-intel">
      <div class="section-inner">
        <span class="section-tag">Central Oregon Event</span>
        <h1 class="section-title"><?php the_title(); ?></h1>

        <div class="card-text">
          <?php the_content(); ?>
        </div>
      </div>
    </section>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>

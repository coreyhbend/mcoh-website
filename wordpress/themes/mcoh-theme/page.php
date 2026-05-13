<?php
/**
 * Generic page template
 */
get_header(); ?>

<main style="padding: 120px 40px 80px; max-width: 1200px; margin: 0 auto;">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 style="font-family: 'Cormorant Garamond', serif; font-size: 2.5rem; color: #050E36; margin-bottom: 24px;"><?php the_title(); ?></h1>
            <div class="entry-content"><?php the_content(); ?></div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>

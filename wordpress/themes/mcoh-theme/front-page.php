<?php
/**
 * Homepage template
 */
get_header();
?>

<?php get_template_part( 'template-parts/home/hero' ); ?>
<?php get_template_part( 'template-parts/home/intel-bar' ); ?>
<?php get_template_part( 'template-parts/home/intel-cards' ); ?>
<?php get_template_part( 'template-parts/home/explore' ); ?>
<?php get_template_part( 'template-parts/home/destinations' ); ?>
<?php get_template_part( 'template-parts/home/favorites' ); ?>
<?php get_template_part( 'template-parts/home/communities' ); ?>
<?php get_template_part( 'template-parts/home/re-bridge' ); ?>
<?php get_template_part( 'template-parts/home/newsletter' ); ?>

<?php get_footer(); ?>

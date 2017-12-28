<!-- Header -->
<?php get_header(); ?>
<!-- Header Ends -->

<!-- Sidebar -->
<?php get_sidebar(); ?>
<!-- Sidebar Ends -->

<!-- Content Section -->
<main>
    <?php the_field('branze'); ?>
    <?php the_field('produkty'); ?>
    <?php the_field('uslugi'); ?>
    <?php dynamic_sidebar( 'custom-side-bar' ); ?>
</main>
<!-- Content Ends -->

<!-- Footer -->
<?php get_footer(); ?>
<!-- Footer ends -->
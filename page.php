<?php 
/* 
Template name: Pojedyncza strona
*/
?>

<?php 
if(!is_front_page()) {
 get_header('new');
}
else {
 get_header();
}
?>

<div class="wrapper" style="background-color: #fefefe;">
	<div class="center-cont">
		<main>
			<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

		</main>
		<!-- .site-main -->
	</div>
</div>
<!-- .wrapper-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
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
			while ( have_posts() ) : the_post();
		?>
				<?php
			get_template_part( 'template-parts/content', 'page' );
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			endwhile;
		?>
		</main>
	</div>
</div>
<!-- .wrapper-->

<?php get_sidebar(); ?>
<?php get_footer('sub'); ?>
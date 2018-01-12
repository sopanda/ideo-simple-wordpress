<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * Template name: Wpisy
 * @package WordPress
 * @subpackage Simple
 * @since 1.0
 * @version 1.0
 */
	if(!is_front_page()) {
	get_header('new');
	}
	else {
	get_header();
	}
?>
	<div class="wrap">
		<div class="center-cont" style="padding-top: 20px; padding-bottom: 20px;">
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
	
			endwhile; endif; 
			?>
			<?php wp_pagenavi(); ?>
			<?php get_sidebar(); ?>
		</div>
	</div>

	<!-- .wrap -->

	<?php get_footer('sub');
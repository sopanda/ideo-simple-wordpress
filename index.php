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

	<div class="center-cont">
		<div class="text-center">
			<h2 class="subpage-h2">
					<span class="subpage-title">
						<?php single_post_title(); ?>
					</span>
			</h2>
		</div>
	</div>

	<div class="wrap">
		<div class="center-cont" style="padding-top: 20px; padding-bottom: 20px;">
			<?php echo do_shortcode("[pt_view id=0c31265ga4]"); ?>
			<?php get_sidebar(); ?>
		</div>
	</div>

	<!-- .wrap -->

	<?php get_footer('sub');
<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Simple
 * @since 1.0
 * @version 1.0
 */

get_header('new'); ?>

	<div class="wrap">
		<div class="center-cont" style="padding-top: 20px; padding-bottom: 20px; min-height: 270px;">
			<header>
				<?php if ( have_posts() ) : ?>
				<h3>
					<?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span class="search-query">' . get_search_query() . '</span>' ); ?>
				</h3>
				<?php else : ?>
				<h3>
					<?php _e( 'Nothing Found for: '); printf( '<span class="search-query">' . get_search_query() . '</span>' );?>
				</h3>
				<?php endif; ?>
			</header>

			<div>
				<main>
					<?php
						if ( have_posts() ) :
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/post/content', 'excerpt' );
						endwhile; 
							wp_pagenavi();
						else : ?>
						<p>
							<?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.'); ?>
						</p>
			</div>
			<?php
		endif;
		?>
			</main>
		</div>
		<?php get_sidebar(); ?>
	</div>

	<?php get_footer('sub');
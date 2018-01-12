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
					while ( have_posts() ) : the_post();
					?>
						<div class="center-cont">
							<div class="post">
								<h2>
									<?php the_title(); ?>
								</h2>
								<p>
									<?php echo get_the_date() ?> by
									<a href="#">
										<?php the_author(); ?>
									</a>
								</p>
								<div>
									<?php the_post_thumbnail( $size = 'thumbnail'); ?>
									<?php the_content(); ?>
								</div>
								<div class="clearfix"></div>
								<p class="tags">
									<?php the_tags(); ?>
								</p>
							</div>
						</div>
						<?php
					endwhile;
					wp_pagenavi();
				?>
				</main>
			</div>
			<?php get_sidebar(); ?>
		</div>

		<?php get_footer('sub'); ?>
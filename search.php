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
					<?php printf( __( '<span class="search-result-title">Search Results for: %s </span>' ), '<span class="search-query">' . get_search_query() . '</span>' ); ?>
					<div class="sub-search-exist">
						<?php 
							add_filter( 'get_search_form', 'post_search_form' );
							get_search_form();
							remove_filter( 'get_search_form', 'post_search_form' );
						?>
					</div>
				</h3>
				<?php else : ?>
				<h3>
					<?php 
					_e( '<span class="search-result-title">Nothing Found for: </span>'); 
					printf( '<span class="search-query">' . get_search_query() . '</span>' );
					?>
					<div class="sub-search-non-exist">
						<?php 
							add_filter( 'get_search_form', 'non_post_search_form' );
							get_search_form();
							remove_filter( 'get_search_form', 'non_post_search_form' );
						?>
					</div>
				</h3>
				<?php endif; ?>
			</header>

			<main>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
					<?php if ( have_posts() ) : ?>
						<?php
					while ( have_posts() ) : the_post();
					?>
							<div class="posts-wrap">
								<div class="post">
									<h2>
										<a href="<?php echo get_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h2>
									<p>
										<?php echo get_the_date() ?> by
										<a href="#">
											<?php the_author(); ?>
										</a>
									</p>
									<div>
										<a href="<?php echo get_permalink(); ?>" class="img-link">
											<?php the_post_thumbnail( $size = 'thumbnail'); ?>
										</a>
										<?php the_excerpt(); ?>
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
				<?php else : ?>
				<?php endif; ?>
					</div>
				</div>
			</main>
			<?php get_sidebar(); ?>
		</div>

		<?php get_footer('sub'); ?>
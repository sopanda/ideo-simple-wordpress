<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Simple
 * @since 1.0
 * @version 1.0
 */

get_header('new'); ?>

	<div class="wrap">
		<div>
			<main>
				<div class="center-cont">
					<div class="text-center">
						<h2 class="subpage-h2" style="border: none;">
								<span class="subpage-title">
									Aktualności
								</span>
						</h2>
					</div>
				</div>

				<div class="center-cont">
					<div class="text-center">
						<h4 class="single-title">
							<?php echo get_the_date() ?> -
							<?php the_title(); ?>
						</h4>
					</div>
				</div>

				<div class="center-cont">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="content-post">
								<div class="post-image-wrap">
									<?php the_post_thumbnail( $size = 'large'); ?>
								</div>
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
									the_content(); 
									endwhile; 
									endif;
								?>
							</div>
						</div>
					</div>
				</div>

			</main>
			<!-- #main -->
		</div>
		<!-- #primary -->
		<?php get_sidebar(); ?>
	</div>
	<!-- .wrap -->

	<?php get_footer('sub');
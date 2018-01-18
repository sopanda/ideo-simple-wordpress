<?php get_header('new'); ?>

<?php if (have_posts()) : ?>

<div class="wrap">
    <div class="center-cont" style="padding-top: 20px; padding-bottom: 20px; min-height: 270px;">
        <header>
            <h3>
                <span class="search-result-title">
                    Category archives for:
                </span>
                <span class="search-query">
                    <?php single_cat_title(); ?>
                </span>
                <div class="sub-search-exist">
                    <?php 
							add_filter( 'get_search_form', 'post_search_form' );
							get_search_form();
							remove_filter( 'get_search_form', 'post_search_form' );
						?>
                </div>
            </h3>
        </header>
        <div>
            <main>
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
                                Category: <?php the_category(', '); ?>
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
    <?php endif; ?>
    <?php get_footer('sub'); ?>
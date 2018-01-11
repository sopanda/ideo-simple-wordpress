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
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
        <?php the_content(); ?>
        
        <p> <?php the_tags(); ?></p>
    </div>
</div>

<div class="center-cont">
    <div class="post">
        <h2>
            <?php the_title(); ?>
        </h2>
        <p>
            <?php echo get_the_date() ?> by
            <?php 
                global $user_ID;
                $user_info = get_userdata($user_ID);
                $current_link = get_author_posts_url($user_id, $user_info->display_name);
                $username = get_the_author_meta('nickname');
                $final_link = $current_link . $username;
            ?>
            <a href="<?php echo $final_link ?>">
                <?php the_author(); ?>
            </a>
        </p>
        <div>
            <?php the_post_thumbnail( $size = 'thumbnail'); ?>
            <?php the_content(); ?>
        </div>
        <div class="clearfix"></div>
        <p class="tags">
            <?php the_tags(); ?> Category:
            <?php the_category(', '); ?>
        </p>
    </div>
</div>
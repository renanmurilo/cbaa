<div class="card">
    <a href="<?php the_permalink(); ?>">
        <div class="image">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        </div>

        <div class="description">
            <h2><?php $excerpt = the_title(); echo substr($excerpt, 0, 30); ?></h2>
            <div class="text">
                <?php $text = get_the_content(); echo substr($text, 0, 135), '...'; ?>
            </div>
        </div>
    </a>
</div>
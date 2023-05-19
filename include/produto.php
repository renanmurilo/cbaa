<div class="produto">
    <a href="<?php the_permalink(); ?>" class="link">
        <div class="image">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
        </div>

        <h3><?php the_field('nome'); ?></h3>

        <p>Saiba mais</p>
    </a>
</div>
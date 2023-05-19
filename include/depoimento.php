<div class="depoimento">
    <div class="image">
        <img src="<?php the_field('foto'); ?>" alt="<?php the_field('nome'); ?>">
    </div>

    <div class="description">
        <h2><?php the_field('nome'); ?></h2>
        <h3><?php the_field('cargo'); ?></h3>
        <div class="text">
            <span class="aspas-top">"</span> <?php the_field('texto'); ?>
        </div>
    </div>
</div>
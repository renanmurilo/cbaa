<?php
// Template Name: Compliance
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <section class="banner">
                <div class="content__banner">
                    <img class="imagem__desktop" src="<?php the_field('banner'); ?>" alt="<?php the_title(); ?>">
                    <img class="imagem__mobile" src="<?php the_field('banner_mobile'); ?>" alt="<?php the_title(); ?>">
                    
                    <div class="shell">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </section>

            <section class="compliance">
                <div class="shell">
                    <div class="content__compliance">
                        <h2><?php the_field('titulo'); ?></h2>

                        <div class="text">
                            <?php the_field('texto'); ?>
                        </div>

                        <div class="accordeon">
                            <?php if(have_rows('programas')): while(have_rows('programas')) : the_row(); ?>
                                <details>
                                    <summary>
                                        <h3><?php the_sub_field('titulo'); ?></h3>

                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                        </div>
                                    </summary>

                                    <div class="content__details">
                                        <div class="text">
                                            <?php the_sub_field('texto'); ?>
                                        </div>
                                    </div>
                                </details>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>
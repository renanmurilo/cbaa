<?php
// Template Name: Compliance
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <section class="banner">
                <div class="content__banner">
                    <img class="imagem__desktop" src="<?php the_field('banner_internas_black', 'option'); ?>" alt="<?php the_title(); ?>">
                    <img class="imagem__mobile" src="<?php the_field('banner_internas_mobile_black', 'option'); ?>" alt="<?php the_title(); ?>">
                    
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

            <section class="canais__informacoes">
                <div class="shell">
                    <div class="content__canais__informacoes">
                        <?php if(have_rows('canais_de_informacoes')): while(have_rows('canais_de_informacoes')) : the_row(); ?>
                            <div class="box">
                                <div class="image">
                                    <img class="imagem__desktop" src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                                    <img class="imagem__mobile" src="<?php the_sub_field('imagem_mobile'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                                </div>
                                <div class="description">
                                    <h3><?php the_sub_field('titulo'); ?></h3>
                                    <div class="text">
                                        <?php the_sub_field('texto'); ?>
                                    </div>

                                    <a href="<?php echo get_home_url(); ?>/<?php the_sub_field('link_da_pagina'); ?>" class="btn btn__secondary">Saiba mais</a>
                                </div>
                            </div>
                        <?php endwhile; else : endif; ?>
                    </div>
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>
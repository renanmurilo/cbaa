<?php
// Template Name: Logística
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

            <section class="content__logistica">
                <div class="shell">
                    <div class="inner__logistica">
                        <h2><?php the_field('texto'); ?></h2>

                        <div class="informacoes">
                            <?php if(have_rows('informacoes')): while(have_rows('informacoes')) : the_row(); ?>
                                <div class="widget">
                                    <div class="image">
                                        <img src="<?php the_sub_field('icone'); ?>" alt="<?php the_sub_field('texto'); ?>">
                                    </div>
                                    <h3><?php the_sub_field('texto'); ?></h3>
                                </div>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>

                <div class="banner__bottom">
                    <div class="shell">
                        <div class="description">
                            <h2><?php the_field('texto_em_cima_da_imagem'); ?></h2>
                            <a href="<?php echo get_home_url(); ?>/contato" class="btn btn__secondary">Entre em contato</a>
                        </div>
                    </div>

                    <div class="image">
                        <img src="<?php the_field('imagem_encontre'); ?>" alt="<?php the_field('texto_em_cima_da_imagem'); ?>">
                    </div>

                    <div class="image__mobile">
                        <img src="<?php the_field('imagem_encontre_mobile'); ?>" alt="<?php the_field('texto_em_cima_da_imagem'); ?>">
                    </div>
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>
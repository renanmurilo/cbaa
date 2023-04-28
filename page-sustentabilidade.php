<?php
// Template Name: Sustentabilidade
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <section class="banner">
                <div class="content__banner">
                    <img class="imagem__desktop" src="<?php the_field('banner'); ?>" alt="<?php the_title(); ?>">
                    <img class="imagem__mobile" src="<?php the_field('banner_mobile'); ?>" alt="<?php the_title(); ?>">
                    
                    <div class="shell">
                        <h1 class="sustentabilidade"><?php the_title(); ?></h1>
                    </div>
                </div>
            </section>

            <section class="responsabilidade">
                <div class="shell">
                    <div class="content__responsabilidade">
                        <h2><?php the_field('titulo_responsabilidade'); ?></h2>
                        <h3><?php the_field('texto_responsabilidade'); ?></h3>
                    </div>
                </div>
            </section>

            <section class="acoes__sociais">
                <div class="shell">
                    <div class="content__acoes__sociais">
                        <h2><?php the_field('titulo_acoes_sociais'); ?></h2>

                        <div class="inner__acoes__sociais">
                            <div class="description">
                                <h3><?php the_field('sub_titulo_acoes_sociais'); ?></h3>
                                <div class="text">
                                    <?php the_field('texto_acoes_sociais'); ?>
                                </div>
                            </div>

                            <div class="slider__acoes slide-banners">
                                <?php if(have_rows('imagens_acoes_sociais')): while(have_rows('imagens_acoes_sociais')) : the_row(); ?>
                                    <div class="image">
                                        <img src="<?php the_sub_field('imagem'); ?>" alt="">
                                    </div>
                                <?php endwhile; else : endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="doacoes">
                <div class="shell">
                    <div class="content__doacoes">
                        <div class="image">
                            <img src="<?php the_field('imagem_doacoes'); ?>" alt="">
                        </div>

                        <div class="description">
                            <h3><?php the_field('titulo_doacoes'); ?></h3>

                            <div class="text">
                                <?php the_field('texto_doacoes'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="acoes__ambientais">
                <div class="shell">
                    <div class="content__acoes__ambientais">
                        <h2><?php the_field('titulo_acoes_ambientais'); ?></h2>

                        <div class="inner__acoes__ambientais">
                            <?php if(have_rows('acoes')): while(have_rows('acoes')) : the_row(); ?>
                                <div class="widget">
                                    <div class="image">
                                        <img src="<?php the_sub_field('icone'); ?>" alt="">
                                    </div>
                                    <h3><?php the_sub_field('titulo'); ?></h3>
                                    <div class="text">
                                        <?php the_sub_field('texto'); ?>
                                    </div>
                                </div>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>

                <div class="image__background">
                    <img src="<?php the_field('mascara_sustentabilidade', 'option'); ?>" alt="<?php the_field('titulo_acoes_ambientais'); ?>">
                </div>

                <div class="image__background__mobile">
                    <img src="<?php the_field('mascara_sustentabilidade_mobile', 'option'); ?>" alt="<?php the_field('titulo_acoes_ambientais'); ?>">
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>
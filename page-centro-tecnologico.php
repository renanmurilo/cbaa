<?php
// Template Name: Centro tecnológico
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

            <section class="nosso__laboratorio">
                <div class="shell">
                    <div class="content__nosso__laboratorio">
                        <div class="description">
                            <h2><span>Nossos</span><br>Laboratórios</h2>

                            <div class="text">
                                <?php the_field('descricao'); ?>
                            </div>
                        </div>

                        <div class="slider slide-banners">
                            <?php if(have_rows('imagens_slider')): while(have_rows('imagens_slider')) : the_row(); ?>
                                <div class="image">
                                    <img src="<?php the_sub_field('imagem'); ?>" alt="Imagem">
                                </div>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="nosso__equipamento">
                <div class="shell">
                    <div class="content__nosso__equipamento">
                        <div class="image">
                            <img src="<?php the_field('imagem_nossos_equipamentos'); ?>" alt="Nossos Equipamentos">
                        </div>

                        <div class="description">
                            <h2><?php the_field('titulo_nossos_equipamentos'); ?></h2>
                            
                            <div class="text">
                                <?php the_field('descricao_nossos_equipamentos'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="inner__equipamentos">
                        <div class="accordeon">
                            <?php if(have_rows('principais_equipamentos')): while(have_rows('principais_equipamentos')) : the_row(); ?>
                                <details>
                                    <summary>
                                        <h3><?php the_sub_field('titulo'); ?></h3>

                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                        </div>
                                    </summary>

                                    <div class="content__details">
                                        <div class="text">
                                            <?php the_sub_field('texto_esquerda'); ?>
                                        </div>

                                        <div class="text">
                                            <?php the_sub_field('texto_centro'); ?>
                                        </div>

                                        <div class="text">
                                            <?php the_sub_field('texto_direita'); ?>
                                        </div>
                                    </div>
                                </details>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="servicos__oferecidos">
                <div class="shell">
                    <h2>SERVIÇOS <span>OFERECIDOS</span></h2>

                    <div class="content__servicos__oferecidos">
                        <?php if(have_rows('servicos_oferecidos')): while(have_rows('servicos_oferecidos')) : the_row(); ?>
                            <div class="row">
                                <div class="description">
                                    <h3><?php the_sub_field('titulo'); ?></h3>

                                    <div class="text">
                                        <?php the_sub_field('texto'); ?>
                                    </div>
                                </div>

                                <div class="image">
                                    <img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                                </div>
                            </div>
                        <?php endwhile; else : endif; ?>
                    </div>
                </div>
            </section>

            <section class="lista__servicos">
                <div class="shell">
                    <h2>Lista completa de serviços</h2>

                    <div class="content__lista__servicos">
                        <div class="accordeon">
                            <?php if(have_rows('lista_completa_de_servicos')): while(have_rows('lista_completa_de_servicos')) : the_row(); ?>
                                <details>
                                    <summary>
                                        <h3><?php the_sub_field('titulo'); ?></h3>

                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                        </div>
                                    </summary>

                                    <div class="content__details">
                                        <div class="text">
                                            <?php the_sub_field('texto_esquerda'); ?>
                                        </div>

                                        <div class="text">
                                            <?php the_sub_field('texto_direira'); ?>
                                        </div>
                                    </div>
                                </details>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <!--section class="tour">
                <div class="shell">
                    <h2><span>FAÇA UM</span> TOUR VIRTUAL</h2>

                    <div class="content__tour">
                        <div class="video">
                            <?php the_field('link_tour'); ?>
                        </div>
                    </div>
                </div>
            </section-->
        </main>
    <?php } } ?>

<?php get_footer(); ?>
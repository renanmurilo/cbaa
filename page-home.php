<?php
// Template Name: Home
get_header();
?>

    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <section class="section__banner">
                <div class="content__banner slide-banners">
                    <?php if(have_rows('banners')): while(have_rows('banners')) : the_row(); ?>
                        <div class="banner__image">
                            <img class="banner__desktop" src="<?php the_sub_field('imagem_desktop'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                            <img class="banner__mobile" src="<?php the_sub_field('imagem_mobile'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                            
                            <div class="description">
                                <h1><?php the_sub_field('titulo'); ?></h1>
                                <h3><?php the_sub_field('sub_titulo'); ?></h3>
                            </div>
                        </div>
                    <?php endwhile; else : endif; ?>
                </div>
            </section>

            <section class="sua__obra">
                <div class="shell">
                    <div class="content__sua__obra">
                        <div class="title">
                            <h2><?php the_field('titulo'); ?></h2>
                        </div>

                        <div class="description">
                            <div class="text">
                                <?php the_field('texto_descritivo'); ?>
                            </div>

                            <a href="<?php echo get_home_url(); ?>/quem-somos" class="btn btn__primary">
                                Conheça mais
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="conheca__nossas__linhas">
                <div class="image__background">
                    <img class="imagem__desktop" src="<?php the_field('imagem_conheca_nossos_produtos', 'option'); ?>" alt="<?php the_field('titulo_nossas_linhas'); ?>">
                    <img class="imagem__mobile" src="<?php the_field('imagem_conheca_nossos_produtos_mobile', 'option'); ?>" alt="<?php the_field('titulo_nossas_linhas'); ?>">
                </div>

                <div class="shell">
                    <div class="content__conheca__nossas__linhas">
                        <h2><?php the_field('titulo_nossas_linhas'); ?></h2>

                        <div class="produtos">
                            <?php if(have_rows('produtos')): while(have_rows('produtos')) : the_row(); ?>
                                <div class="produto">
                                    <div class="image">
                                        <img src="<?php the_sub_field('icone'); ?>" alt="<?php the_field('titulo_nossas_linhas'); ?>">
                                    </div>

                                    <h3><?php the_sub_field('nome'); ?></h3>
                                </div>
                            <?php endwhile; else : endif; ?>
                        </div>

                        <a href="<?php echo get_home_url(); ?>/produtos-e-servicos" class="btn btn__secondary">
                            Saiba mais
                        </a>
                    </div>
                </div>
            </section>

            <section class="excelencia">
                <div class="shell">
                    <div class="content__excelencia">
                        <div class="image__background__left">
                            <img src="<?php the_field('imagem_excelencia_1', 'option'); ?>" alt="<?php the_field('titulo_nossas_linhas'); ?>">
                        </div>

                        <h2><?php the_field('titulo_excelencia'); ?></h2>

                        <div class="image__background__left__mobile">
                            <img src="<?php the_field('imagem_excelencia_1_mobile', 'option'); ?>" alt="<?php the_field('titulo_nossas_linhas'); ?>">
                        </div>

                        <h3><?php the_field('sub_titulo_excelencia'); ?></h3>

                        <div class="text">
                            <?php the_field('texto_excelencia'); ?>
                        </div>

                        <a href="<?php echo get_home_url(); ?>/centro-tecnologico" class="btn btn__secondary">
                            Conheça nosso centro tecnológico
                        </a>

                        <div class="image__background__right__mobile">
                            <img src="<?php the_field('imagem_excelencia_2_mobile', 'option'); ?>" alt="<?php the_field('titulo_nossas_linhas'); ?>">
                        </div>
                    </div>

                    <div class="content__excelencia">
                        <h3><?php the_field('sub_titulo_excelencia_2'); ?></h3>

                        <div class="text">
                            <?php the_field('texto_excelencia_2'); ?>
                        </div>

                        <div class="image__background__right">
                            <img src="<?php the_field('imagem_excelencia_2', 'option'); ?>" alt="<?php the_field('titulo_nossas_linhas'); ?>">
                        </div>

                        <div class="image__background__bottom__mobile">
                        <img src="<?php the_field('imagem_excelencia_3_mobile', 'option'); ?>" alt="<?php the_field('titulo_nossas_linhas'); ?>">
                    </div>
                    </div>
                    
                    <div class="content__flutuant">
                        <h2><?php the_field('texto_do_banner_final_excelencia'); ?></h2>

                        <a href="<?php echo get_home_url(); ?>/contato" class="btn btn__secondary">
                            Entre em contato
                        </a>
                    </div>

                    <div class="image__background__bottom">
                        <img src="<?php the_field('imagem_excelencia_3', 'option'); ?>" alt="<?php the_field('titulo_nossas_linhas'); ?>">
                    </div>
                </div>
            </section>

            <section class="nossas__conquistas">
                <div class="shell">
                    <div class="content__nossas__conquistas">
                        <h2><?php the_field('titulo_nossas_conquistas'); ?></h2>
                        <h3><?php the_field('sub_titulo_nossas_conquistas'); ?></h3>

                        <div class="quantidade">
                            <?php if(have_rows('quantidade')): while(have_rows('quantidade')) : the_row(); ?>
                                <div class="widget">
                                    <p class="numero"><?php the_sub_field('numeros'); ?></p>
                                    <p class="text"><?php the_sub_field('texto'); ?></p>
                                </div>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>

                    <div class="premiacao">
                        <div class="image">
                            <img src="<?php the_field('icone_nossas_conquistas'); ?>" alt="">
                        </div>

                        <div class="description">
                            <h2><?php the_field('titulo_destaque_premio_nossa_conquista'); ?></h2>

                            <div class="text">
                                <?php the_field('texto_destaque_premio_nossa_conquista'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image__background">
                    <img src="<?php the_field('imagem_nossas_conquistas', 'option'); ?>" alt="<?php the_field('titulo_destaque_premio_nossa_conquista'); ?>">
                </div>

                <div class="image__background__mobile">
                    <img src="<?php the_field('imagem_nossas_conquistas_mobile', 'option'); ?>" alt="<?php the_field('titulo_destaque_premio_nossa_conquista'); ?>">
                </div>
            </section>

            <section class="onde__estamos">
                <div class="shell">
                    <div class="content__onde__estamos">
                        <div class="description">
                            <h2><?php the_field('titulo_grande_distribuidora'); ?></h2>
                            <h3><?php the_field('sub_titulo_grande_distribuidora'); ?></h3>

                            <div class="image__mobile">
                                <img src="<?php the_field('imagem_mapa_mobile'); ?>" alt="">
                            </div>

                            <a href="<?php echo get_home_url(); ?>/filiais" class="btn btn__primary">
                                Saiba mais
                            </a>
                        </div>

                        <div class="image">
                            <img src="<?php the_field('imagem_mapa'); ?>" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="nossos__cases">
            </section>

            <section class="certificacao">
                <div class="shell">
                    <div class="content__certificacao">
                        <div class="description">
                            <h2><?php the_field('titulo_certificacao'); ?></h2>

                            <div class="text">
                                <?php the_field('texto_certificacao'); ?>
                            </div>
                        </div>

                        <div class="image">
                            <img src="<?php the_field('imagem_certificacao'); ?>" alt="">
                        </div>
                    </div>
                </div>

                <div class="image__background">
                    <img src="<?php the_field('imagem_certificado', 'option'); ?>" alt="<?php the_field('titulo_certificacao'); ?>">
                </div>

                <div class="image__background__mobile">
                    <img src="<?php the_field('imagem_certificado_mobile', 'option'); ?>" alt="<?php the_field('titulo_certificacao'); ?>">
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>
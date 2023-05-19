<?php
// Template Name: Quem somos
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <section class="banner">
                <div class="content__banner">
                    <img class="imagem__desktop" src="<?php the_field('banner_internas_black', 'option'); ?>" alt="<?php the_title(); ?>">
                    <img class="imagem__mobile" src="<?php the_field('banner_internas_mobile_black', 'option'); ?>" alt="<?php the_title(); ?>">
                    
                    <div class="shell">
                        <h1 class="canal"><?php the_title(); ?></h1>
                    </div>
                </div>
            </section>

            <section class="quem__somos">
                <div class="shell">
                    <div class="content__quem__somos">
                        <div class="description">
                            <h2><?php the_field('titulo'); ?></h2>
                            <div class="text">
                                <?php the_field('sub_titulo'); ?>
                            </div>
                        </div>

                        <div class="image">
                            <img src="<?php the_field('imagem_quem_somos'); ?>" alt="<?php the_field('titulo'); ?>">
                        </div>
                    </div>
                </div>
            </section>

            <section class="quem__somos__background">
                <div class="shell">
                    <div class="content__quem__somos__background">
                        <?php if(have_rows('quem_somos')): while(have_rows('quem_somos')) : the_row(); ?>
                            <div class="row">
                                <div class="image">
                                    <img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                                </div>

                                <div class="description">
                                    <h2><?php the_sub_field('titulo'); ?></h2>
                                    <div class="text">
                                        <?php the_sub_field('texto'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; else : endif; ?>

                        <a href="/centro-tecnologico" class="btn btn__secondary">Conheça nosso centro tecnológico</a>
                    </div>
                </div>

                <div class="banner__meio">
                    <div class="shell">
                        <div class="description">
                            <h2><?php the_field('texto_banner'); ?></h2>
                            
                            <a href="<?php echo get_home_url(); ?>/sustentabilidade" class="btn btn__secondary">Saiba mais</a>
                        </div>
                    </div>

                    <div class="imagem__desktop">
                        <img src="<?php the_field('banner_desktop'); ?>" alt="<?php the_field('texto_banner'); ?>">
                    </div>

                    <div class="imagem__mobile">
                        <img src="<?php the_field('banner_mobile'); ?>" alt="<?php the_field('texto_banner'); ?>">
                    </div>
                </div>
            </section>

            <section class="nossa__equipe">
                <div class="shell">
                    <div class="content__nossa__equipe">
                        <h2><span><?php the_field('titulo_nossa_equipe'); ?></span></h2>
                        <h3><?php the_field('sub_titulo_nossa_equipe'); ?></h3>

                        <div class="inner__nossa__equipe">
                            <div class="titulo">
                                <h2>Diretoria</h2>
                            </div>

                            <div class="membros" data-grupo="modal">
                                <?php if(have_rows('nossa_equipe')): while(have_rows('nossa_equipe')) : the_row(); ?>
                                    <a class="card" data-click="<?php the_sub_field('nome'); ?>">
                                        <div class="image">
                                            <img src="<?php the_sub_field('foto'); ?>" alt="<?php the_sub_field('nome'); ?>">
                                        </div>
                                        <h4 class="nome"><?php the_sub_field('nome'); ?></h4>
                                        <p class="cargo"><?php the_sub_field('cargo'); ?></p>
                                    </a>

                                    <div class="modal" data-target="<?php the_sub_field('nome'); ?>">
                                        <div class="content__modal">
                                            <a class="close" data-close="<?php the_sub_field('nome'); ?>">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/close.svg" alt="Close">
                                            </a>
                                            
                                            <div class="image">
                                                <img src="<?php the_sub_field('foto'); ?>" alt="<?php the_sub_field('nome'); ?>">
                                            </div>

                                            <div class="description">
                                                <h2><?php the_sub_field('nome'); ?></h2>
                                                <h3><?php the_sub_field('cargo'); ?></h3>
                                                <div class="text">
                                                    <?php the_sub_field('texto'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; else : endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="nossa__historia">
                <div class="shell">
                    <div class="content__nossa__historia">
                        <h2><?php the_field('titulo_nossa_historia'); ?></h2>

                        <div class="inner__nossa__historia slider-nossa-historia">
                            <?php if(have_rows('nossa_historia')): while(have_rows('nossa_historia')) : the_row(); ?>
                                <div class="box <?php echo ( get_sub_field('reverso') ? "reverso" : "") ;?>">
                                    <div class="image">
                                        <img src="<?php the_sub_field('icone'); ?>" alt="<?php the_sub_field('ano'); ?>">
                                    </div>
                                    <h3><?php the_sub_field('ano'); ?></h3>
                                    <div class="text">
                                        <?php the_sub_field('texto'); ?>
                                    </div>
                                </div>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="depoimentos">
                <div class="shell">
                    <div class="content__depoimentos">
                        <h2>Depoimentos</h2>

                        <div class="depoimentos slide-depoimentos">
                            <?php
                                $args = array (
                                    'post_type' => 'depoimentos',
                                     'showposts' => 10,
                                );
                                $the_query = new WP_Query ( $args );
                            ?>

                            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <?php include(TEMPLATEPATH . '/include/depoimento.php'); ?>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>
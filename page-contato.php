<?php
// Template Name: Contato
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <section class="banner">
                <div class="content__banner">
                    <img class="imagem__desktop" src="<?php the_field('banner_internas_green', 'option'); ?>" alt="<?php the_title(); ?>">
                    <img class="imagem__mobile" src="<?php the_field('banner_internas_mobile_green', 'option'); ?>" alt="<?php the_title(); ?>">
                    
                    <div class="shell">
                        <h1 class="canal"><?php the_title(); ?></h1>
                    </div>
                </div>
            </section>

            <section class="contato">
                <div class="shell">
                    <div class="content__contato">
                        <div class="form__contato">
                            <h3>Mande uma mensagem. Será um prazer atendê-lo.</h3>
                            <div class="form__class">
                                <?php echo do_shortcode('[contact-form-7 id="386" title="Contato"]'); ?>
                            </div>
                        </div>

                        <div class="infos__contato">
                            <div class="phone">
                                <p>T. <?php the_field('telefone'); ?></p>
                            </div>
                            <div class="email">
                                <p>E-mail. <?php the_field('email'); ?></p>
                            </div>
                            <div class="endereco">
                                <p><?php the_field('endereco'); ?></p>
                            </div>
                            <div class="social">
                                <div class="widget">
                                    <a href="<?php the_field('link_do_linkedin'); ?>" target="_blank">
                                        <img src="<?php the_field('icone_linkedin'); ?>" alt="">
                                    </a>
                                    <a href="<?php the_field('link_do_facebook'); ?>" target="_blank">
                                        <img src="<?php the_field('icone_facebook'); ?>" alt="">
                                    </a>
                                    <a href="<?php the_field('link_do_instagram'); ?>" target="_blank">
                                        <img src="<?php the_field('icone_instagram'); ?>" alt="">
                                    </a>
                                </div>

                                <a href="/ouvidoria" class="btn btn__outline__primary">Ouvidoria</a>
                            </div>
                            <div class="mapa">
                                <img src="<?php the_field('imagem_localizacao'); ?>" alt="Localização">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contato__filiais">
                <div class="shell">
                    <h2>Filiais</h2>

                    <div class="content__filiais">
                        <?php if(have_rows('filiais')): while(have_rows('filiais')) : the_row(); ?>
                            <div class="widget">
                                <h2><?php the_sub_field('estado'); ?></h2>
                                <div class="telefone">
                                    <?php the_sub_field('telefone'); ?>
                                </div>
                                <div class="email">
                                    <?php the_sub_field('email'); ?>
                                </div>
                                <div class="endereco">
                                    <?php the_sub_field('endereco'); ?>
                                </div>
                                <a href="/filiais" class="link">Saiba mais</a>
                            </div>
                        <?php endwhile; else : endif; ?>
                    </div>
                </div>
            </section>

            <section class="trabalhe__conosco">
                <div class="shell">
                    <div class="description">
                        <h2><?php the_field('titulo_banner'); ?></h2>

                        <div class="text">
                            <?php the_field('texto_banner'); ?>
                        </div>

                        <a href="/trabalhe-conosco" class="btn btn__secondary">Saiba mais</a>
                    </div>
                </div>

                <div class="image__desktop">
                    <img src="<?php the_field('banner_desktop'); ?>" alt="<?php the_field('titulo_banner'); ?>">
                </div>

                <div class="image__mobile">
                    <img src="<?php the_field('banner_mobile'); ?>" alt="<?php the_field('titulo_banner'); ?>">
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>
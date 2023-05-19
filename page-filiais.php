<?php
// Template Name: Filiais
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

            <section class="filiais" data-group="filiais">
                <div class="shell">
                    <div class="content__filiais">
                        <div class="thumbs slide-filiais">
                            <?php if(have_rows('filiais')): while(have_rows('filiais')) : the_row(); ?>
                                <a href="" data-click="<?php the_sub_field('nome_estado'); ?>" class="image__thumb">
                                <?php $rows = get_sub_field('imagens');
                                        $first_row = $rows[0]
                                    ?>
                                    <div class="image">
                                        <img src="<?php print_r($first_row['imagem']); ?>" alt="<?php the_sub_field('nome_estado'); ?>">
                                    </div>
                                    <h3><?php the_sub_field('nome_estado'); ?></h3>
                                    <p><?php the_sub_field('sigla_estado'); ?></p>
                                </a>
                             <?php endwhile; else : endif; ?>
                        </div>

                        <div class="inner__filiais">
                            <?php if(have_rows('filiais')): while(have_rows('filiais')) : the_row(); ?>
                                <div class="filiais" data-target="<?php the_sub_field('nome_estado'); ?>">
                                    <div class="slider__filiais slide-banners">
                                        <?php if(have_rows('imagens')): while(have_rows('imagens')) : the_row(); ?>
                                            <div class="image">
                                                <img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('estado'); ?>">
                                            </div>
                                        <?php endwhile; else : endif; ?>
                                    </div>

                                    <aside class="description__filiais">
                                        <h2><?php the_sub_field('estado'); ?></h2>
                                        <h3><?php the_sub_field('unidade'); ?></h3>
                                        <div class="text">
                                            <?php the_sub_field('descricao'); ?>
                                        </div>
                                    </aside>
                                </div>
                            <?php endwhile; else : endif; ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contato__filiais">
                <div class="shell">
                    <div class="content__contato">
                        <h2><span>Entre em</span> Contato</h2>

                        <div class="form__filiais">
                            <?php echo do_shortcode('[contact-form-7 id="505" title="FIliais"]'); ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>
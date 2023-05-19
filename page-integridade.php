<?php
// Template Name: Programa de integridade
get_header();
?>
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

        <section class="section__privacidade integridade">
            <div class="shell">
                <div class="atualizacao"><?php the_content(); ?></div>
                <h2>Sumário</h2>

                <div class="menu">
                    <?php if(have_rows('conteudo')): while(have_rows('conteudo')) : the_row(); ?>
                        <div class="link">
                            <a href="#<?php the_sub_field('sequencial'); ?>"><?php the_sub_field('titulo'); ?></a>
                        </div>
                    <?php endwhile; else : endif; ?>
                </div>

                <div class="content__privacidade">
                    <?php if(have_rows('conteudo')): while(have_rows('conteudo')) : the_row(); ?>
                        <div class="widget">
                        <div class="invisible" id="<?php the_sub_field('sequencial'); ?>"></div>
                            <h2><?php the_sub_field('titulo'); ?></h2>

                            <div class="text">
                                <?php the_sub_field('texto'); ?>
                            </div>
                        </div>
                    <?php endwhile; else : endif; ?>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
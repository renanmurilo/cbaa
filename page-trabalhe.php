<?php
// Template Name: Trabalhe conosco
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

            <section class="porque__trabalhar">
                <div class="shell">
                    <div class="content__porque__trabalhar">
                        <div class="description">
                            <h2><?php the_field('titulo_porque_trabalhar'); ?></h2>
                            <div class="text">
                                <?php the_field('texto_porque_trabalhar'); ?>
                            </div>
                        </div>

                        <div class="image">
                            <img src="<?php the_field('imagem_porque_trabalhar'); ?>" alt="<?php the_field('titulo_porque_trabalhar'); ?>">
                        </div>
                    </div>
                </div>
            </section>

            <section class="diferenciais">
                <div class="shell">
                    <div class="content__diferenciais">
                        <div class="image">
                            <img src="<?php the_field('imagem_diferenciais'); ?>" alt="<?php the_field('titulo_diferenciais'); ?>">
                        </div>

                        <div class="description">
                            <h2><?php the_field('titulo_diferenciais'); ?></h2>
                            <div class="text">
                                <?php the_field('texto_diferenciais'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="formulario__trabalhe">
                <div class="shell">
                    <div class="content__formulario">
                        <h2>Confira as nossas vagas ou preencha o formulário abaixo para entrarmos em contato com você.</h2>

                        <a href="" class="btn btn__primary">Confira nossas vagas</a>

                        <div class="form__trabalhe">
                            <?php echo do_shortcode('[contact-form-7 id="491" title="Trabalhe conosco"]'); ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>
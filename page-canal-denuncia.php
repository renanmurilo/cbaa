<?php
// Template Name: Canal de denúncias
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

            <section class="canal__de__denuncia">
                <div class="shell">
                    <div class="content__canal__de__denuncia">
                        <div class="text">
                            <?php the_field('texto'); ?>
                        </div>
                    </div>
                </div>
            </section>

            <section class="form__canal">
                <div class="shell">
                    <div class="form__class">
                        <?php echo do_shortcode('[contact-form-7 id="307" title="Canal de denúncia"]'); ?>
                    </div>
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>
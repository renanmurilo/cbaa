<?php
// Template Name: Ouvidoria
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <section class="banner">
                <div class="content__banner">
                    <img class="imagem__desktop" src="<?php the_field('banner_internas_black', 'option'); ?>" alt="<?php the_title(); ?>">
                    <img class="imagem__mobile" src="<?php the_field('banner_internas_mobile_black', 'option'); ?>" alt="<?php the_title(); ?>">
                    
                    <div class="shell">
                        <h1 class="ouvidoria"><?php the_title(); ?></h1>
                    </div>
                </div>
            </section>

            <section class="ouvidoria">
                <div class="shell">
                    <div class="content__ouvidoria">
                        <h2><?php the_field('sub_titulo'); ?></h2>
                    </div>

                    <div class="form__class">
                        <?php echo do_shortcode('[contact-form-7 id="316" title="Ouvidoria"]'); ?>
                    </div>
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>
<?php 
    get_header(); 
?>
    <main>
        <section class="banner">
            <div class="content__banner">
                <img class="imagem__desktop" src="<?php the_field('banner_internas_green', 'option'); ?>" alt="<?php the_title(); ?>">
                <img class="imagem__mobile" src="<?php the_field('banner_internas_mobile_green', 'option'); ?>" alt="<?php the_title(); ?>">
                
                <div class="shell">
                    <h1 class="canal">Cbaa na mídia</h1>
                </div>
            </div>
        </section>

        <section class="search__row">
            <div class="shell">
                <div class="search">

                </div>
            </div>
        </section>

        <section class="section__noticias">
            <div class="shell">
                <div class="content__noticias">
                     <?php
                        $args = array (
                            'post_type' => 'post',
                            'showposts' => 10,
                        );
                        $the_query = new WP_Query ( $args );
                    ?>

                    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php include(TEMPLATEPATH . '/include/post.php'); ?>
                    <?php endwhile; else : endif; ?>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
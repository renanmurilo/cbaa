<?php
// Template Name: Centro tecnológico
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>

        </main>
    <?php } } ?>

<?php get_footer(); ?>
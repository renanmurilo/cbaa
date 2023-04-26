<?php
// Template Name: Cbaa na mídia
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>

        </main>
    <?php } } ?>

<?php get_footer(); ?>
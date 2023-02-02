<?php
get_header();
?>

<main>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php get_template_part('partials/head/flexible-content'); ?>
        <?php get_template_part('partials/body/flexible-content'); ?>
        <?php get_template_part('partials/footer/flexible-content'); ?>

    <!--main post loop-->
    <?php endwhile; endif; ?>

</main>


<?php get_footer(); ?>

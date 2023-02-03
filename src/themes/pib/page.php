<?php
get_header();
?>

<main>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!--main post loop-->

        <?php get_template_part('partials/head/flexible-content'); ?>
        <div class="main-content--decorative">
            <?php get_template_part('partials/body/flexible-content'); ?>
            <?php get_template_part('partials/cards/quick-links'); ?>
        </div>
        <?php get_template_part('partials/foot/flexible-content'); ?>

        <!--main post loop-->
    <?php endwhile; endif; ?>

</main>


<?php get_footer(); ?>

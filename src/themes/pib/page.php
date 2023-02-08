<?php
get_header();
?>

<main>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!--main post loop-->
        <?php if (is_bbpress() && is_user_logged_in() ) : ?>

            <section class="section-group">
                <section class="section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <?php the_title(); ?>
                                <?php the_content(); ?>
                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->
                </section><!-- section-md -->
            </section><!-- section-group -->

        <?php else : ?>

            <?php get_template_part('partials/head/flexible-content'); ?>
            <div class="main-content--decorative">
                <?php get_template_part('partials/body/flexible-content'); ?>
                <?php get_template_part('partials/cards/quick-links'); ?>
            </div>
            <?php get_template_part('partials/foot/flexible-content'); ?>


        <?php endif; ?>

        <!--main post loop-->
    <?php endwhile; endif; ?>

</main>


<?php get_footer(); ?>

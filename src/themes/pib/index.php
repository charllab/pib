<?php
get_header();
?>
<main>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!--main post loop-->

        <?php if (is_user_logged_in()) : ?>

            <section class="section-group">
                <section class="section-md">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->
                </section><!-- section-md -->
            </section><!-- section-group -->

        <?php else : ?>

            <h1>You shall not pass!</h1>

        <?php endif; ?>

        <!--main post loop-->
    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>

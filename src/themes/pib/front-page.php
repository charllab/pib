<?php get_header(); ?>
    <main>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!--main post loop-->

            <?php get_template_part('partials/head/flexible-content'); ?>
            <div class="main-content--decorative">
                <?php get_template_part('partials/body/flexible-content'); ?>
                <?php get_template_part('partials/cards/quick-links'); ?>
            </div>


        <section class="section-group">
            <section class="section-md">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-12"
                             data-aos="fade-up"
                             data-aos-offset="120"
                             data-aos-delay="0"
                             data-aos-duration="1000"
                             data-aos-easing="ease"
                             data-aos-mirror="false"
                             data-aos-once="false"
                        >
                            <?php echo do_shortcode("[instagram-feed feed=3]"); ?>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
            </section><!-- section-md -->
        </section><!-- section-group -->

            <?php get_template_part('partials/foot/flexible-content'); ?>

            <!--main post loop-->
        <?php endwhile; endif; ?>

    </main>
<?php get_footer();

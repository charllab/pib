<?php
get_header();
$logout_url = wp_logout_url();
?>

<main>

    <?php get_template_part('partials/head/flexible-content'); ?>

    <?php if (is_user_logged_in()) { ?>
        <?php get_template_part('partials/body/flexible-content'); ?>
        <?php get_template_part('partials/cards/quick-links'); ?>
    <?php } else { ?>
        <section class="section-group">
            <section class="section-md">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xl-7">
                            <p class="text-center">Sorry, this content is for Band Members only. If you are a member,
                                please <a href="<?php echo wp_login_url(); ?>">log in.</a>
                            </p>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
            </section><!-- section-md -->
        </section><!-- section-group -->
    <?php } ?>


    <?php get_template_part('partials/foot/flexible-content'); ?>

</main>


<?php get_footer(); ?>

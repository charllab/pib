<?php
get_header();
$logout_url = wp_logout_url();
?>

<main>
        <?php get_template_part('partials/head/flexible-content'); ?>

        <section class="section-group">
            <section class="section-md pb-0">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xl-7">
                            <?php if (is_user_logged_in()) { ?>
                                <?php
                                $current_user = wp_get_current_user();
                                $first_name = $current_user->user_firstname;
                                $last_name = $current_user->user_lastname;
                                $current_user_id = get_current_user_id();
                                $avatar = get_avatar( $current_user_id, 64, '', '', array( 'class' => 'rounded-circle' ) );
                                ?>
                                <h3>Welcome back <?php echo esc_attr($first_name) . ' ' . esc_attr($last_name); ?> <?php echo $avatar; ?></h3>
                                <p>As a Band Member, you have access to exclusive resources, can participate in discussions on our forum, and view our schedule of upcoming events through our event calendar.</p>
                                <a href="<?php echo $logout_url;?>" class="btn btn-primary mb-1">Log Out</a>

                            <?php } else { ?>
                                <p class="text-center">Sorry, this content is for Band Members only. If you are a member, please <a href="<?php echo wp_login_url();?>">log in.</a>
                                </p>
                            <?php } ?>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
            </section><!-- section-md -->
        </section><!-- section-group -->

        <?php if (is_user_logged_in()) { ?>
        <?php get_template_part('partials/cards/quick-links'); ?>
        <?php } ?>
        <?php get_template_part('partials/foot/flexible-content'); ?>

</main>


<?php get_footer(); ?>

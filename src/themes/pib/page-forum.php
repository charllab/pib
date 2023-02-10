<?php
get_header();
$logout_url = wp_logout_url();
?>

<main>

    <?php get_template_part('partials/head/flexible-content'); ?>

    <section class="section-group">
        <section class="section-md">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <?php if (is_user_logged_in()) { ?>
                            <?php
                            $current_user = wp_get_current_user();
                            $first_name = $current_user->user_firstname;
                            $last_name = $current_user->user_lastname;
                            $current_user_id = get_current_user_id();
                            $avatar = get_avatar( $current_user_id, 64, '', '', array( 'class' => 'rounded-circle' ) );
                            ?>
                            <h3>Welcome back <?php echo esc_attr($first_name) . ' ' . esc_attr($last_name); ?> <?php echo $avatar; ?></h3>
                            <a href="<?php echo $logout_url; ?>" class="btn btn-primary">Log Out</a>
                            <br><br>
                            <?php echo do_shortcode('[bbp-forum-index] '); ?>

                        <?php } else { ?>
                            <p class="text-center">Sorry, the Forum is for Band Members only. If you are a member,
                                please <a href="<?php echo wp_login_url(); ?>">log in.</a>
                            </p>
                        <?php } ?>
                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- section-md -->
    </section><!-- section-group -->
    <?php get_template_part('partials/cards/quick-links'); ?>

    <?php get_template_part('partials/foot/flexible-content'); ?>

</main>


<?php get_footer(); ?>

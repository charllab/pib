<footer>
    <section class="section-lg">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 text-center text-lg-left">
                        <div class="nav-logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                                     alt="<?php bloginfo('name'); ?> - Logo"
                                     class="img-fluid mb-1">
                                <span class="sr-only"><?php bloginfo('name'); ?></span>
                            </a>
                        </div><!-- nav-logo -->
                        <p>Lorem ipsum dolor sit amet, consectetur.</p>
                        <div class="social-links d-flex justify-content-center justify-content-lg-start">
                            <?php while( have_rows('social_links', 'options') ): the_row(); ?>
                                <a class="social-link text-dark px-0" target="_blank" href="<?php the_sub_field('url'); ?>">
                                    <i class="<?php the_sub_field('icon_class'); ?> fa-2x">
                                        <span class="sr-only"><?php the_sub_field('label'); ?></span>
                                    </i>
                                </a>
                            <?php endwhile; ?>
                        </div><!-- social-links -->
                    </div><!-- col -->
                    <div class="col-6 col-lg">
                        About
                        <?php wp_nav_menu([
                            'theme_location' => 'about',
                            'container_class' => 'footer-nav',
                            'menu_class' => 'list-unstyled',
                            'fallback_cb' => '',
                            'walker' => new understrap_WP_Bootstrap_Navwalker(),
                        ]); ?>
                    </div><!-- col -->
                    <div class="col-6 col-lg">
                        Community
                        <?php wp_nav_menu([
                            'theme_location' => 'community',
                            'container_class' => 'footer-nav',
                            'menu_class' => 'list-unstyled',
                            'fallback_cb' => '',
                            'walker' => new understrap_WP_Bootstrap_Navwalker(),
                        ]); ?>
                    </div><!-- col -->
                    <div class="col-6 col-lg">
                        Updates and News
                        <?php wp_nav_menu([
                            'theme_location' => 'news',
                            'container_class' => 'footer-nav',
                            'menu_class' => 'list-unstyled',
                            'fallback_cb' => '',
                            'walker' => new understrap_WP_Bootstrap_Navwalker(),
                        ]); ?>
                    </div><!-- col -->
                    <div class="col-6 col-lg">
                        <h6 class="mb-1">Contact</h6>
                        <a href="<?php echo esc_url(home_url('/member-portal')); ?>" class="small">Member Portal</a>
                    </div><!-- col -->
                </div>
            </div>
        </section>
    </section>
    <section class="legal-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-0">All rights reserved, Copyright
                        &copy; <?php echo Date('Y') . ' ' . get_bloginfo('name'); ?></p>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <p class="mb-0">Designed, Developed and Hosted by <a href="https://sproing.ca" target="_blank">Sproing&nbsp;Creative</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>

</body>

</html>
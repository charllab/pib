<footer>
    <section class="section-lg">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 text-center text-lg-left">
                        <div class="nav-logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php bloginfo('template_url'); ?>/images/logo.png"
                                     alt="<?php bloginfo('name'); ?> - Logo"
                                     class="img-fluid mb-1">
                                <span class="sr-only"><?php bloginfo('name'); ?></span>
                            </a>
                        </div><!-- nav-logo -->
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
                        <h6 class="mb-1">About</h6>
                        <?php wp_nav_menu([
                            'theme_location' => 'about',
                            'container_class' => 'footer-nav',
                            'menu_class' => 'list-unstyled',
                            'fallback_cb' => '',
                            'walker' => new understrap_WP_Bootstrap_Navwalker(),
                        ]); ?>
                    </div><!-- col -->
                    <div class="col-6 col-lg">
                        <h6 class="mb-1">Community</h6>
                        <?php wp_nav_menu([
                            'theme_location' => 'community',
                            'container_class' => 'footer-nav',
                            'menu_class' => 'list-unstyled',
                            'fallback_cb' => '',
                            'walker' => new understrap_WP_Bootstrap_Navwalker(),
                        ]); ?>
                    </div><!-- col -->
                    <div class="col-6 col-lg">
                        <h6 class="mb-1">Updates and News</h6>
                        <?php wp_nav_menu([
                            'theme_location' => 'updates',
                            'container_class' => 'footer-nav',
                            'menu_class' => 'list-unstyled',
                            'fallback_cb' => '',
                            'walker' => new understrap_WP_Bootstrap_Navwalker(),
                        ]); ?>
                    </div><!-- col -->
                    <div class="col-6 col-lg">
                        <h6 class="mb-1">Contact</h6>
                        <?php
                        $logout_url = wp_logout_url();
                        ?>

                        <ul id="menu-contact" class="list-unstyled">
                            <li class="nav-item">
                                <a title="Contact Us" href="/contact" class="nav-link">Contact Us</a></li>
                            <?php if (!is_user_logged_in()) { ?>
                                <li class="nav-item login-hide">
                                    <a href="<?php echo wp_login_url(); ?>" class="nav-link">Log In</a>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item member-only">
                                    <a href="/member-portal" class="nav-link">Member Portal</a>
                                </li>
                                <li class="nav-item member-only">
                                    <a href="<?php echo $logout_url; ?>" class="nav-link">Log Out</a>
                                </li>
                            <?php } ?>
                        </ul>
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
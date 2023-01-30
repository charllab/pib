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
                        </div>
                    </div>
                    <div class="col-lg-9"></div>
                </div>
            </div>
        </section>
        <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-0">All rights reserved, Copyright &copy; <?php echo Date('Y') . ' ' . get_bloginfo('name'); ?></p>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <p class="mb-0">Designed, Developed and Hosted by <a href="https://sproing.ca" target="_blank">Sproing&nbsp;Creative</a>
                    </p>
                </div>
            </div>
        </div>
        </section>
    </section>
</footer>

<?php wp_footer(); ?>

</body>

</html>
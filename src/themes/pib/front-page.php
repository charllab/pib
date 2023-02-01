<?php get_header(); ?>
    <main>

        <section class="page-title bg-info">
            <div class="container-fluid">
                <div class="row justify-content-center align-content-center position-relative">
                    <div class="bg-image">
                        <video
                            autoplay
                            muted
                            loop
                            playsinline
                            id="sprVideo"
                            class="banner_video_file_bg d-none d-md-block">
                            <source src="<?php bloginfo('template_url');?>/video/promobanner.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="block__tint-overlay position-absolute h-100 z-index-1"></div>
                    <div class="home-wolf position-absolute h-100 z-index-10"></div>
                    <div class="col text-center position-relative z-index-10">
                        <h1 class="text-uppercase text-white">Penticton Indian Band</h1>
                        <div class="social-links d-flex justify-content-center pb-5">
                            <?php while( have_rows('social_links', 'options') ): the_row(); ?>
                                <a class="social-link text-white px-0" target="_blank" href="<?php the_sub_field('url'); ?>">
                                    <i class="<?php the_sub_field('icon_class'); ?> fa-2x">
                                        <span class="sr-only"><?php the_sub_field('label'); ?></span>
                                    </i>
                                </a>
                            <?php endwhile; ?>
                        </div><!-- social-links -->
                    </div>
                </div>
            </div>
        </section>

        <section class="section-group">
            <section class="section-md">
                <div class="container text-left">
                    <div class="row">
                        <div class="col">
                            <img src="https://via.placeholder.com/1620x716" alt=""
                                 class="img-fluid d-block mx-auto mb-1 mb-md-2">
                            <h2>Heading - optional</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                in
                                voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                laborum.</p>
                        </div><!-- col -->
                    </div><!-- row -->
                    <div class="row justify-content-start col-px">
                        <a href="#" class="btn btn-primary">Read More</a>
                        <a href="#" class="btn btn-secondary">Read More</a>
                    </div>
                </div><!-- container -->
            </section>

            <pre class="mb-0">
        Heading is optional
        text must have alignment options left, center & right (affects buttons)
        button style : brown and blue</pre>

            <section class="section-md">
                <div class="container text-left">
                    <div class="row">
                        <div class="col-md-6 pb-1 pb-md-0">
                            <img src="https://via.placeholder.com/800x480" alt=""
                                 class="img-fluid d-block mx-auto mb-1">
                            <h2>Heading - optional</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div><!-- col -->
                        <div class="col-md-6 pb-1 pb-md-0">
                            <img src="https://via.placeholder.com/800x480" alt=""
                                 class="img-fluid d-block mx-auto mb-1">
                            <h2>Heading - optional</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
            </section>

            <section class="section-md">
                <div class="container text-left">
                    <div class="row">
                        <div class="col-md-6 pb-1 pb-md-0">
                            <h2>Heading - optional</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div><!-- col -->
                        <div class="col-md-6">
                            <img src="https://via.placeholder.com/800x920" alt=""
                                 class="img-fluid d-block mx-auto mb-1">
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
            </section>
        </section><!-- section-group -->

        <section class="section-group">

            <section class="section-md">
                <div class="container">

                    <div class="row">
                        <div class="col text-center">
                            <h2 class="mb-2">Optional section title</h2>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-4 col-xl-3 col-card">
                            <div class="card text-center mb-2 mb-xl-0">
                                <img src="https://via.placeholder.com/456x456" alt=""
                                     class="card-img-top rounded-circle w-75 mx-auto mt-2">
                                <div class="card-body pb-2">
                                    <h3 class="h4 card-title">Chief Greg Gabriel</h3>
                                    <p class="card-text medium mb-0">Internal Government Affairs, Economic Development
                                        and All Portfolios</p>
                                </div>
                            </div>
                        </div><!-- col col-card -->
                        <div class="col-md-6 col-lg-4 col-xl-3 col-card">
                            <div class="card text-center mb-2 mb-xl-0">
                                <img src="https://via.placeholder.com/456x456" alt=""
                                     class="card-img-top rounded-circle w-75 mx-auto mt-2">
                                <div class="card-body pb-2">
                                    <h3 class="h4 card-title">Dolly Kruger</h3>
                                    <p class="card-text medium mb-0">Infrastructure, Housing, Public Works</p>
                                    <p class="card-text medium mb-0 font-weight-bold">Alternate: </p>
                                    <p class="card-text medium mb-0">Education, Culture & Language</p>
                                </div>
                            </div>
                        </div><!-- col col-card -->
                        <div class="col-md-6 col-lg-4 col-xl-3 col-card">
                            <div class="card text-center mb-2 mb-xl-0">
                                <img src="https://via.placeholder.com/456x456" alt=""
                                     class="card-img-top rounded-circle w-75 mx-auto mt-2">
                                <div class="card-body">
                                    <h3 class="h4 card-title">Card title</h3>
                                    <p class="card-text medium">This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This card has even longer content than
                                        the first to show that equal height action.</p>
                                </div>
                            </div>
                        </div><!-- col col-card -->
                        <div class="col-md-6 col-lg-4 col-xl-3 col-card">
                            <div class="card text-center mb-2 mb-xl-0">
                                <img src="https://via.placeholder.com/456x456" alt=""
                                     class="card-img-top rounded-circle w-75 mx-auto mt-2">
                                <div class="card-body">
                                    <h3 class="h4 card-title">Page Title</h3>
                                    <p class="card-text medium">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.</p>
                                </div>
                            </div>
                        </div><!-- col col-card -->

                    </div><!-- row -->
                </div><!-- container -->

            </section>

        </section><!-- section-group -->

        <section class="section-group">

            <section class="section-md">
                <div class="container">

                    <div class="row">
                        <div class="col text-center">
                            <h2 class="mb-2">Additional Quick Links</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-xl-3 col-card">
                            <div class="card text-center mb-2 mb-xl-0">
                                <img src="https://via.placeholder.com/514x304" alt=""
                                     class="card-img-top rounded-0">
                                <div class="card-body">
                                    <h3 class="h4 card-title">Card title</h3>
                                    <p class="card-text small">This is a longer card with supporting text below as a
                                        natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div><!-- col col-card -->
                        <div class="col-md-6 col-xl-3 col-card">
                            <div class="card text-center mb-2 mb-xl-0">
                                <img src="https://via.placeholder.com/514x304" alt=""
                                     class="card-img-top rounded-0">
                                <div class="card-body">
                                    <h3 class="h4 card-title">Card title</h3>
                                    <p class="card-text small">This card has supporting text below as a natural lead-in
                                        to additional content.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div><!-- col col-card -->
                        <div class="col-md-6 col-xl-3 col-card">
                            <div class="card text-center mb-2 mb-xl-0">
                                <img src="https://via.placeholder.com/514x304" alt=""
                                     class="card-img-top rounded-0">
                                <div class="card-body">
                                    <h3 class="h4 card-title">Card title</h3>
                                    <p class="card-text small">This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This card has even longer content than
                                        the first to show that equal height action.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div><!-- col col-card -->
                        <div class="col-md-6 col-xl-3 col-card">
                            <div class="card text-center mb-2 mb-xl-0">
                                <img src="https://via.placeholder.com/514x304" alt=""
                                     class="card-img-top rounded-0">
                                <div class="card-body">
                                    <h3 class="h4 card-title">Page Title</h3>
                                    <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div><!-- col col-card -->

                    </div><!-- row -->
                </div><!-- container -->

            </section>

        </section><!-- section-group -->

        <section class="section-group">

            <section class="section-md">
                <div class="container">

                    <div class="row">
                        <div class="col text-center">
                            <h2 class="mb-2">Additional Quick Links</h2>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-6 col-xl-4 col-card">
                            <div class="card text-center mb-2">
                                <img src="https://via.placeholder.com/514x304" alt=""
                                     class="card-img-top rounded-0">
                                <div class="card-body">
                                    <h3 class="h4 card-title">Card title</h3>
                                    <p class="card-text small">This is a longer card with supporting text below as a
                                        natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div><!-- col col-card -->
                        <div class="col-md-6 col-xl-4 col-card">
                            <div class="card text-center mb-2">
                                <img src="https://via.placeholder.com/514x304" alt=""
                                     class="card-img-top rounded-0">
                                <div class="card-body">
                                    <h3 class="h4 card-title">Card title</h3>
                                    <p class="card-text small">This card has supporting text below as a natural lead-in
                                        to additional content.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div><!-- col col-card -->
                        <div class="col-md-6 col-xl-4 col-card">
                            <div class="card text-center mb-2">
                                <img src="https://via.placeholder.com/514x304" alt=""
                                     class="card-img-top rounded-0">
                                <div class="card-body">
                                    <h3 class="h4 card-title">Card title</h3>
                                    <p class="card-text small">This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This card has even longer content than
                                        the first to show that equal height action.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div><!-- col col-card -->
                        <div class="col-md-6 col-xl-4 col-card">
                            <div class="card text-center mb-2">
                                <img src="https://via.placeholder.com/514x304" alt=""
                                     class="card-img-top rounded-0">
                                <div class="card-body">
                                    <h3 class="h4 card-title">Page Title</h3>
                                    <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div><!-- col col-card -->
                        <div class="col-md-6 col-xl-4 col-card">
                            <div class="card text-center mb-2">
                                <img src="https://via.placeholder.com/514x304" alt=""
                                     class="card-img-top rounded-0">
                                <div class="card-body">
                                    <h3 class="h4 card-title">Page Title</h3>
                                    <p class="card-text small">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.</p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div><!-- col col-card -->

                    </div><!-- row -->
                </div><!-- container -->

            </section>

        </section><!-- section-group -->

        <section class="section-group">
            <section class="section-footer-cta section-salmon-waters"></section>
            <section class="section-xl bg-secondary">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-white text-center">
                            <h2>Contact us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <a href="#" class="btn btn-light">Contact us</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>

    </main>
<?php get_footer();

<?php get_header(); ?>
    <main>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!--main post loop-->

            <?php get_template_part('partials/head/flexible-content'); ?>
            <div class="main-content--decorative">
                <?php get_template_part('partials/body/flexible-content'); ?>
                <?php get_template_part('partials/cards/quick-links'); ?>
            </div>


            <section class="section-group d-none">

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
                                            natural lead-in to additional content. This content is a little bit
                                            longer.</p>
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
                                        <p class="card-text small">This card has supporting text below as a natural
                                            lead-in
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
                                            natural lead-in to additional content. This card has even longer content
                                            than
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

            <?php get_template_part('partials/foot/flexible-content'); ?>

            <!--main post loop-->
        <?php endwhile; endif; ?>

    </main>
<?php get_footer();

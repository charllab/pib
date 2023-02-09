<?php
get_header();
?>
<main>

    <section class="page-title bg-secondary">
        <div class="container-fluid">
            <div class="row justify-content-center align-content-center position-relative">
                <div class="col text-center position-relative z-index-10">
                    <h1 class="text-uppercase text-white mb-0">Search Results</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section-group">
        <section class="section-md">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-7">
                        <?php if (have_posts()) :
                        $postCount = 0; ?>

                        <?php /* Start the Loop */
                        global $query_string;
                        $s = str_replace("s=", "", $query_string); ?>

                        <?php while (have_posts()) : the_post();
                            $postCount++;
                            global $post;
                            if ($postCount == 1) {
                                $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-portrait-feature');
                                ?>
                                <article class="feature">
                                    <h2 class="h3 mb-150">Search results for "<?= $s ?>"</h2>
                                </article>
                            <?php } ?>
                            <article class="search-result">
                                <h3 class="h4 mb-50"><a href="<?php the_permalink() ?>"
                                                        class="text-body"><?php the_title(); ?></a>
                                </h3>
                                <a href="<?php the_permalink() ?>" class="text-body"><?php the_excerpt(); ?></a>
                            </article>
                        <?php endwhile; ?>
                    </div> <!-- end other-posts -->
                    <?php else: ?>

                        <h3>Sorry, there were no results</h3>
                        <p class="small mb-0">Your search for "<?= $s ?>" returned no results. Please try searching for
                            something else.</p>
                    <?php endif; ?>
                </div><!-- col -->
            </div><!-- row -->
            </div><!-- container -->
        </section><!-- section-md -->
    </section><!-- section-group -->

    <section class="section-group">
        <section class="section-footer-cta section-bear-country"></section>
        <section class="section-xl bg-secondary">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-white text-center">
                        <h2>Contact Us</h2>
                        <p>Join us in celebrating and preserving the rich culture and heritage of Penticton Indian
                            Band's peoples. Contact us to learn more and get involved in our efforts.</p>
                        <a href="<?php echo esc_url(home_url('/')); ?>"
                           class="btn btn-light">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </section>

</main>
<?php get_footer(); ?>

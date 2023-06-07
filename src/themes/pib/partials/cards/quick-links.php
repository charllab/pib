<?php
$pages = get_field('page');
if ($pages):
?>

<section class="section-group">
    <section class="section-md hompe-page-section-md">
        <div class="container">
            <div class="row quick-link-section-title">
                <div class="col text-center"
                     data-aos="fade-up"
                     data-aos-offset="120"
                     data-aos-delay="0"
                     data-aos-duration="1000"
                     data-aos-easing="ease"
                     data-aos-mirror="false"
                     data-aos-once="false"
                >
                    <h2 class="mb-2">Additional Quick Links</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                $delay = 50; // starting delay value
                foreach ($pages as $post): // variable must be called $post (IMPORTANT) ?>
                    <?php setup_postdata($post);
                    $thumbnail_id = get_post_thumbnail_id($post->ID);
                    $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'full')[0];
                    ?>
                    <div class="col-md-6 col-xxl-3 col-card"
                         data-aos="zoom-in-up"
                         data-aos-offset="120"
                         data-aos-delay="<?php echo $delay; ?>"
                         data-aos-duration="800"
                         data-aos-easing="ease"
                         data-aos-mirror="false"
                         data-aos-once="false"
                    >
                        <div class="card text-center mb-2 mb-xl-0">
                            <div class="quick-link-card-img card-img-top rounded-0"
                                 style="background-image: url(<?php echo esc_attr($thumbnail_url); ?>);
                                     background-position: center;
                                     background-repeat: no-repeat;
                                     background-size: cover;
                                     "
                            ></div><!-- quick-link-card-img -->
                            <div class="card-body">
                                <h3 class="h4 card-title"><?php echo get_the_title($post->ID); ?></h3>
                                <div class="card-text small">
                                    <?php
                                    $post_excerpt = get_the_excerpt( $post->ID );
                                    $trimmed_excerpt = wp_trim_words( $post_excerpt, 20, '...' );
                                    echo $trimmed_excerpt;
                                    ?>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo get_the_permalink($post->ID); ?>" class="btn btn-primary">Learn
                                    More</a>
                            </div>
                        </div>
                    </div><!-- col col-card -->
                <?php
                $delay += 150; // increment the delay value
                endforeach;
                wp_reset_postdata();
                endif ?>
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- section-md -->
</section><!-- section-group -->
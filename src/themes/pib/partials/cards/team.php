<?php
$posts = get_posts(array(
    'post_type' => 'council',
    'order' => 'ASC',
    'posts_per_page' => -1
));
?>

<section class="section-group">

    <section class="section-md">
        <div class="container">

            <div class="row">
                <div class="col text-center"
                     data-aos="fade-up"
                     data-aos-offset="120"
                     data-aos-delay="0"
                     data-aos-duration="1000"
                     data-aos-easing="ease"
                     data-aos-mirror="false"
                     data-aos-once="false"
                >
                    <h2 class="mb-2"><?php the_field('secondary_title'); ?></h2>
                </div>
            </div>

            <div class="row justify-content-center">

                <?php
                $delay = 50; // starting delay value
                foreach ($posts as $i => $post) :
                    setup_postdata($post);
                    //echo '<pre>';
                    //var_dump($post);
                    //echo '</pre>';
                    ?>
                    <div class="col-md-6 col-lg-4 col-xl-3 col-card"
                         data-aos="slide-up"
                         data-aos-offset="120"
                         data-aos-delay="<?php echo $delay; ?>"
                         data-aos-duration="1500"
                         data-aos-easing="ease"
                         data-aos-mirror="false"
                         data-aos-once="true"
                    >
                        <div class="card text-center mb-2 mb-xl-0">
                            <?php if (get_field('photo')):
                                $image = get_field('photo');
                                ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"
                                     class="card-img-top rounded-circle w-75 mx-auto mt-2">
                            <?php else: ?>
                                <img src="<?php bloginfo('template_url'); ?>/images/profile-432by432.svg" alt=" "
                                     class="card-img-top rounded-circle w-75 mx-auto mt-2">
                            <?php endif; ?>
                            <div class="card-body pb-2">
                                <h3 class="h4 card-title"><?php the_title(); ?></h3>
                                <p class="card-text medium mb-0"><?php the_field('role'); ?></p>
                                <?php if (get_field('alternate')): ?>
                                    <p class="card-text medium mb-0 font-weight-bold">Alternate:</p>
                                    <p class="card-text medium mb-0"><?php the_field('alternate'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div><!-- col col-card -->

                    <?php
                    $delay += 300; // increment the delay value
                endforeach;
                wp_reset_postdata();
                ?>

            </div><!-- row -->
        </div><!-- container -->

    </section>

</section><!-- section-group -->
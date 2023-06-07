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

            <?php if (get_field('secondary_title') || get_field('introduction_paragraph')):?>
            <div class="row mb-2">
                <div class="col text-center"
                     data-aos="fade-up"
                     data-aos-offset="120"
                     data-aos-delay="0"
                     data-aos-duration="1000"
                     data-aos-easing="ease"
                     data-aos-mirror="false"
                     data-aos-once="false"
                >
                    <?php if(get_field('secondary_title')):?>
                    <h2 class="mb-2"><?php the_field('secondary_title'); ?></h2>
                    <?php endif; ?>
                    <?php if(get_field('introduction_paragraph')):?>
                    <p><?php the_field('introduction_paragraph')?></p>
                    <?php endif; ?>
                </div><!-- col -->
            </div><!-- row -->
            <?php endif; ?>

            <?php
            $mid = 1;
            $delay = 50; // starting delay value
            foreach ($posts as $i => $post) :
            setup_postdata($post);
            ?>

            <div class="row align-items-md-center mb-2"
                 data-aos="slide-up"
                 data-aos-offset="120"
                 data-aos-delay="<?php echo $delay; ?>"
                 data-aos-duration="1500"
                 data-aos-easing="ease"
                 data-aos-mirror="false"
                 data-aos-once="true"
            >
                <div class="col-md-4 col-lg-5 col-xxl-4">
                    <div class="decorative">
                        <?php if (get_field('photo')):
                            $image = get_field('photo');
                            ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"
                                 class="bio-img img-fluid d-block mb-2 mb-md-0">
                        <?php else: ?>
                            <img src="<?php bloginfo('template_url'); ?>/images/profile-432by432.svg" alt=" "
                                 class="bio-img img-fluid d-block mb-2 mb-md-0">
                        <?php endif; ?>
                    </div>
                </div><!-- col -->
                <div class="col-md-8 col-lg-7 col-xxl-8">
                    <div class="pl-lg-50 pl-xl-1">
                        <h3 class="mb-250"><?php the_title(); ?></h3>
                        <p class="position-tile">
                            <?php the_field('role'); ?>
                            <?php if (get_field('alternate')): ?>
                            <b><br>Alternate:</b> <?php the_field('alternate'); ?>
                            <?php endif; ?>
                        </p>
                        <?php if (get_field('bio_excerpt')): ?>
                        <p><?php the_field('bio_excerpt'); ?></p>
                        <?php endif; ?>
                        <?php if (get_field('member_email')): ?>
                        <a href="mailto:<?php the_field('member_email'); ?>" class="btn btn-secondary btn-email">Email</a>
                        <?php endif; ?>
                        <?php if (get_field('full_bio')): ?>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-bio" data-toggle="modal" data-target="#bioModal-<?php echo $mid; ?>">
                            Full Bio
                        </button>
                        <?php endif; ?>
                    </div><!-- pl -->
                </div><!-- col -->
            </div><!-- row -->

            <!-- Modal -->
            <div class="modal fade" id="bioModal-<?php echo $mid; ?>" tabindex="-1" aria-labelledby="bioModalLabel-<?php echo $mid; ?>" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header border-bottom-0 pt-1 px-1 pb-0">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">
                                    <img src="<?php bloginfo('template_url'); ?>/images/close-x.svg" alt="Close">
                                </span>
                            </button>
                        </div>
                        <div class="modal-body py-0 px-2">
                            <h3 class="modal-title mb-250" id="bioModalLabel-<?php echo $mid; ?>"><?php the_title(); ?></h3>
                            <p class="position-tile">
                                <?php the_field('role'); ?>
                                <?php if (get_field('alternate')): ?>
                                    <b><br>Alternate:</b> <?php the_field('alternate'); ?>
                                <?php endif; ?>
                            </p>
                            <?php the_field('full_bio'); ?>
                        </div>
                        <div class="modal-footer border-top-0 px-2 pb-150 justify-content-start">
                            <?php if (get_field('member_email')): ?>
                                <a href="mailto:<?php the_field('member_email'); ?>" class="btn btn-secondary btn-email">Email</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
                <?php
                $mid += 10;
                $delay += 300; // increment the delay value
            endforeach;
            wp_reset_postdata();
            ?>
        </div><!-- container -->

    </section>

</section><!-- section-group -->
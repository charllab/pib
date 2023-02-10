<?php
$head = get_field('header');
$image = $head['image'];
//echo '<pre>';
//var_dump($head);
//echo '</pre>';
if (is_front_page()) : ?>
    <section class="page-title bg-secondary"
             style="background-image: url(<?php echo esc_attr($image['url']) ?>); background-size: cover; background-position: center;">
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
                        <source src="<?php bloginfo('template_url'); ?>/video/promobanner.mp4" type="video/mp4">
                    </video>
                </div><!-- bg-image -->
                <div class="block__tint-overlay position-absolute h-100 z-index-1"></div><!-- block__tint-overlay -->
                <div class="home-wolf position-absolute h-100 z-index-10"></div><!-- home-wolf -->
                <div class="col text-center position-relative z-index-100"
                     data-aos="fade"
                     data-aos-offset="120"
                     data-aos-delay="500"
                     data-aos-duration="800"
                     data-aos-easing="ease"
                     data-aos-mirror="false"
                     data-aos-once="true"
                >
                    <h1 class="text-uppercase text-white">Penticton Indian Band</h1>
                    <div class="social-links d-flex justify-content-center pb-5">
                        <?php while (have_rows('social_links', 'options')): the_row(); ?>
                            <a class="social-link text-white px-0" target="_blank"
                               href="<?php the_sub_field('url'); ?>">
                                <i class="<?php the_sub_field('icon_class'); ?> fa-2x">
                                    <span class="sr-only"><?php the_sub_field('label'); ?></span>
                                </i>
                            </a>
                        <?php endwhile; ?>
                    </div><!-- social-links -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section>
<?php else : ?>
    <section class="page-title bg-secondary"
             style="background-image: url(<?php echo esc_attr($image['url']) ?>); background-size: cover; background-position: center;">
        <div class="container-fluid">
            <div class="row justify-content-center align-content-center position-relative">
                <div class="block__tint-overlay position-absolute h-100 z-index-1"></div>
                <div class="col text-center position-relative z-index-10"
                     data-aos="fade"
                     data-aos-offset="0"
                     data-aos-delay="100"
                     data-aos-duration="2000"
                     data-aos-easing="ease"
                     data-aos-mirror="false"
                     data-aos-once="false"
                >
                    <h1 class="text-uppercase text-white mb-0"><?php echo $head['heading']; ?></h1>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php ?>
<?php

$head = get_field('header');
echo '<pre>';
var_dump($head);
echo '</pre>';

?>


<?php
if (is_front_page()) : ?>
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
                        <source src="<?php bloginfo('template_url'); ?>/video/promobanner.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="block__tint-overlay position-absolute h-100 z-index-1"></div>
                <div class="home-wolf position-absolute h-100 z-index-10"></div>
                <div class="col text-center position-relative z-index-10">
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
                </div>
            </div>
        </div>
    </section>
<?php else : ?>
    <?php $image = $head['image']; ?>
    <section class="page-title bg-info"
             style="background-image: url(<?php echo esc_attr($image['url']) ?>); background-size: cover; background-position: center 0;">
        <div class="container-fluid">
            <div class="row justify-content-center align-content-center position-relative">
                <div class="block__tint-overlay position-absolute h-100 z-index-1"></div>
                <div class="home-wolf position-absolute h-100 z-index-10"></div>
                <div class="col text-center position-relative z-index-10">
                    <h1 class="text-uppercase text-white mb-0"><?php echo $head['heading']; ?></h1>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php ?>
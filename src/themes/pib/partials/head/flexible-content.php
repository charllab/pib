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
                        <source src="<?php bloginfo('template_url'); ?>/video/AdobeStock_422850724_Video_HD_Preview.mp4"
                                type="video/mp4">
                    </video>
                </div><!-- bg-image -->
                <div class="block__tint-overlay position-absolute h-100 z-index-1"></div><!-- block__tint-overlay -->
                <?php
                $alert = get_field('alert_bar', 'option');
                $alertmsg = $alert['message'];
                $alertlink = $alert['alert_link'];
                if($alertmsg) : ?>
                    <div class="noticebar position-absolute w-100 z-index-100 py-1 text-center">
                        <p class="mb-0 mx-auto">
                            <?php echo $alertmsg; ?>
                            <?php if($alertlink) : ?>
                            <a href="<?php echo $alertlink['url'];?>" target="<?php echo $alertlink['target'];?>"><?php echo $alertlink['title'];?></a>
                            <?php endif; ?>
                        </p>
                    </div><!-- noticebar -->
                <?php endif; ?>
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
                    <form class="form-inline header-search-form border-0 mb-2 mt-4 d-none d-xxl-block" method="GET"
                          action="/" role="search">
                        <div class="input-group mx-auto w-100" style="max-width: 950px;">
                            <input class="form-control search-field"
                                   id="s"
                                   name="s"
                                   type="search"
                                   placeholder="Type something…"
                                   aria-label="Search"
                            >
                            <div class="input-group-append">
                                <button class="btn-submit-search" type="submit">
                                    <i class="fas fa-search"></i>
                                    <span class="sr-only">Search</span>
                                </button>
                            </div><!-- input-group-append -->
                        </div><!-- input-group -->
                    </form>

                    <h1 class="text-uppercase text-white"><?php echo get_bloginfo( 'name' ); ?></h1>
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
                    <form class="form-inline header-search-form border-0 mb-1 d-none d-xxl-block" method="GET"
                          action="/" role="search">
                        <div class="input-group mx-auto w-100" style="max-width: 950px;">
                            <input class="form-control search-field"
                                   id="s"
                                   name="s"
                                   type="search"
                                   placeholder="Type something…"
                                   aria-label="Search"
                            >
                            <div class="input-group-append">
                                <button class="btn-submit-search" type="submit">
                                    <i class="fas fa-search"></i>
                                    <span class="sr-only">Search</span>
                                </button>
                            </div><!-- input-group-append -->
                        </div><!-- input-group -->
                    </form>
                    <h1 class="text-uppercase text-white mb-0"><?php echo $head['heading']; ?></h1>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php ?>
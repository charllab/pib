<?php
$pages = get_field('child');
if ($pages):
?>

<section class="section-group child-links-section"
         data-aos="fade-in"
         data-aos-offset="50"
         data-aos-delay="0"
         data-aos-duration="1500"
         data-aos-easing="ease"
         data-aos-mirror="false"
         data-aos-once="false"
>
    <section class="section-md hompe-page-section-md pt-1 pb-50">
        <div class="container">
            <div class="row child-links-row">
                <div class="col text-center">
                    <?php
                    foreach ($pages as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        <a href="<?php echo get_the_permalink($post->ID); ?>" class="btn btn-primary"><?php echo get_the_title($post->ID); ?></a>
                    <?php
                    endforeach;
                    wp_reset_postdata();
                    endif ?>
                </div>
            </div>
        </div><!-- container -->
    </section><!-- section-md -->
</section><!-- section-group -->
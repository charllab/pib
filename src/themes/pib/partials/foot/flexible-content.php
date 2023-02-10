<?php
$foot = get_field('footer');
//echo '<pre>';
//var_dump($foot);
//echo '</pre>';
?>

<section class="section-group"
         data-aos="fade-up"
         data-aos-offset="120"
         data-aos-delay="0"
         data-aos-duration="1000"
         data-aos-easing="ease"
         data-aos-mirror="false"
         data-aos-once="false"
>
    <?php
    $animal = $foot['choose_footer_type'];
    if($animal == 'wolf') {
        $animal = 'section-wolf-mountains';
    } elseif ($animal == 'bear') {
        $animal = 'section-bear-country';
    } elseif ($animal == 'fish') {
        $animal = 'section-salmon-waters';
    }
    ?>
    <section class="section-footer-cta <?php echo $animal; ?>"></section>
    <section class="section-xl bg-secondary">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-white text-center"
                     data-aos="fade-up"
                     data-aos-offset="50"
                     data-aos-delay="100"
                     data-aos-duration="900"
                     data-aos-easing="ease"
                     data-aos-mirror="false"
                     data-aos-once="false"
                >
                    <h2><?php echo esc_attr($foot['heading']) ?></h2>
                    <p><?php echo esc_attr($foot['text_area']) ?></p>
                    <?php $buttons = $foot['buttons']; ?>
                    <?php if ($buttons): ?>
                        <?php foreach ($buttons as $button) : ?>
                            <a href="<?php echo $button['button_link']; ?>"
                               class="btn btn-light"

                               data-aos="fade"
                               data-aos-offset="100"
                               data-aos-delay="300"
                               data-aos-duration="800"
                               data-aos-easing="ease-in"
                               data-aos-mirror="false"
                               data-aos-once="false"
                            >
                                <?php echo $button['button_label']; ?>
                            </a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</section>
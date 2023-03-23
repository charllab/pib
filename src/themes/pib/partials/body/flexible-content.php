<?php
$body = get_field('body');
$layouts = $body['layout'];
//echo '<pre>';
//var_dump($body);
//echo '</pre>';
if ($layouts) : ?>

    <section class="section-group">
        <?php foreach ($layouts as $layout) : ?>
            <section class="section-md"
                     data-aos="fade-up"
                     data-aos-offset="120"
                     data-aos-delay="0"
                     data-aos-duration="1000"
                     data-aos-easing="ease"
                     data-aos-mirror="false"
                     data-aos-once="false"
            >
                <div class="container text-left">
                    <?php if ($layout['acf_fc_layout'] == 'wide'): ?>

                    <div class="row">
                        <?php $alignment = $layout['text_alignment']; ?>
                        <div class="col text-<?php echo $alignment; ?>"
                        >
                            <?php $image = $layout['image']; ?>
                            <?php if ($image): ?>
                                <img src="<?php echo esc_attr($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                     class="img-fluid d-block mx-auto mb-1 mb-md-2">
                            <?php endif; ?>
                            <?php if ($layout['heading']): ?>
                                <h2><?php echo esc_attr($layout['heading']); ?></h2>
                            <?php endif; ?>
                            <?php echo $layout['text_area']; ?>
                        </div><!-- col -->
                    </div><!-- row -->
                    <?php $buttons = $layout['buttons']; ?>
                    <?php if ($buttons): ?>

                    <?php if ($layout['text_alignment'] == 'center'): ?>
                    <div class="row justify-content-center col-px">
                        <?php elseif ($layout['text_alignment'] == 'right'): ?>
                        <div class="row justify-content-end col-px">
                            <?php else : ?>
                            <div class="row justify-content-start col-px">
                                <?php endif; ?>
                                <?php foreach ($buttons as $button) : ?>
                                    <a href="<?php echo $button['button_link']; ?>"
                                       class="btn btn-primary">
                                        <?php echo $button['button_label']; ?>
                                    </a>
                                <?php endforeach; ?>
                            </div><!-- row -->
                            <?php endif; ?>

                            <?php elseif ($layout['acf_fc_layout'] == 'column'):
                                $flow = $layout['layout'];
                                $flow = ($flow == 'left') ? 'order-0' : 'order-1';
                                ?>
                                <div class="row"
                                     data-aos="fade-up"
                                     data-aos-offset="120"
                                     data-aos-delay="0"
                                     data-aos-duration="1000"
                                     data-aos-easing="ease"
                                     data-aos-mirror="false"
                                     data-aos-once="false"
                                >
                                    <?php $image = $layout['image'];
                                    $alignment = $layout['text_alignment']; ?>
                                    <div class="col-md-6 pb-1 pb-md-0 text-<?php echo $alignment . ' ' . $flow; ?>"
                                    >
                                        <?php if ($layout['heading']): ?>
                                            <h2><?php echo esc_attr($layout['heading']); ?></h2>
                                        <?php endif; ?>
                                        <?php echo $layout['text_area']; ?>
                                        <?php $buttons = $layout['buttons']; ?>
                                        <?php if ($buttons): ?>
                                            <?php foreach ($buttons as $button) : ?>
                                                <a href="<?php echo $button['button_link']; ?>"
                                                    <?php if ($layout['text_alignment'] == 'center'): ?>
                                                        class="btn btn-primary mx-auto"
                                                    <?php elseif ($layout['text_alignment'] == 'right'): ?>
                                                        class="btn btn-primary ml-auto"
                                                    <?php else : ?>
                                                        class="btn btn-primary"
                                                    <?php endif; ?>
                                                >
                                                    <?php echo $button['button_label']; ?>
                                                </a>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div><!-- col -->
                                    <div class="col-md-6">
                                        <img src="<?php echo esc_attr($image['url']); ?>"
                                             alt="<?php echo esc_attr($image['alt']); ?>"
                                             class="img-fluid d-block mx-auto mb-1"
                                             data-aos="fade"
                                             data-aos-offset="120"
                                             data-aos-delay="800"
                                             data-aos-duration="800"
                                             data-aos-easing="ease-in"
                                             data-aos-mirror="false"
                                             data-aos-once="false"
                                        >
                                    </div><!-- col -->
                                </div><!-- row -->
                            <?php elseif ($layout['acf_fc_layout'] == 'stack'):
                                $columns = $layout['columns'];
                                if ($columns): ?>
                                    <div class="row">
                                        <?php
                                        $delay = 50; // starting delay value
                                        foreach ($columns as $column) :
                                            $image = $column['image'];
                                            $alignment = $column['text_alignment'];
                                            ?>
                                            <div class="col-md-6 pb-1 pb-md-0 text-<?php echo $alignment; ?>"
                                                 data-aos="fade-up"
                                                 data-aos-offset="80"
                                                 data-aos-delay="<?php echo $delay; ?>"
                                                 data-aos-duration="600"
                                                 data-aos-easing="ease-in"
                                                 data-aos-mirror="false"
                                                 data-aos-once="false"
                                            >
                                                <?php if ($image): ?>
                                                    <img src="<?php echo esc_attr($image['url']); ?>"
                                                         alt="<?php echo esc_attr($image['alt']); ?>"
                                                         class="img-fluid d-block mx-auto mb-1">
                                                <?php endif; ?>
                                                <?php if ($column['heading']): ?>
                                                    <h2><?php echo esc_attr($column['heading']); ?></h2>
                                                <?php endif; ?>
                                                <?php echo $column['text_area']; ?>
                                                <?php $buttons = $column['buttons']; ?>
                                                <?php if ($buttons): ?>
                                                    <?php foreach ($buttons as $button) : ?>
                                                        <a href="<?php echo $button['button_link']; ?>"
                                                            <?php if ($layout['text_alignment'] == 'center'): ?>
                                                                class="btn btn-primary mx-auto"
                                                            <?php elseif ($layout['text_alignment'] == 'right'): ?>
                                                                class="btn btn-primary ml-auto"
                                                            <?php else : ?>
                                                                class="btn btn-primary"
                                                            <?php endif; ?>
                                                        >
                                                            <?php echo $button['button_label']; ?>
                                                        </a>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </div><!-- col -->
                                            <?php
                                            $delay += 300; // increment the delay value
                                        endforeach;
                                        ?>
                                    </div><!-- row -->
                                <?php endif;
                            endif; ?>
                        </div><!-- container -->
            </section><!-- section-md -->
        <?php endforeach;
        wp_reset_postdata();
        ?>
    </section><!-- section-group -->
<?php endif; ?>
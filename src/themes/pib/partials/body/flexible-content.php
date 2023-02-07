<?php
$body = get_field('body');
$layouts = $body['layout'];

//echo '<pre>';
//var_dump($body);
//echo '</pre>';

if ($layouts) : ?>
    <section class="section-group">
        <?php foreach ($layouts as $layout) : ?>
            <section class="section-md">
                <div class="container text-left">
                    <?php if ($layout['acf_fc_layout'] == 'wide'): ?>

                    <div class="row">
                        <?php $alignment = $layout['text_alignment'];
                        ?>
                        <div class="col text-<?php echo $alignment; ?>">
                            <?php $image = $layout['image']; ?>
                            <img src="<?php echo esc_attr($image['url']); ?>"
                                 alt="<?php echo esc_attr($image['alt']); ?>"
                                 class="img-fluid d-block mx-auto mb-1 mb-md-2">
                            <h2><?php echo esc_attr($layout['heading']); ?></h2>
                            <p><?php echo $layout['text_area']; ?></p>
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

                            <?php elseif ($layout['acf_fc_layout'] == 'column'): ?>

                                <?php
                                $flow = $layout['layout'];
                                $flow = ($flow == 'left') ? 'order-0' : 'order-1';
                                ?>
                                <div class="row">
                                    <?php $image = $layout['image']; ?>
                                    <?php $alignment = $layout['text_alignment']; ?>
                                    <div class="col-md-6 pb-1 pb-md-0 text-<?php echo $alignment . ' ' . $flow; ?>">
                                        <?php if ($layout['heading']): ?>
                                            <h2><?php echo esc_attr($layout['heading']); ?></h2>
                                        <?php endif; ?>
                                        <p><?php echo $layout['text_area']; ?></p>
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
                                             class="img-fluid d-block mx-auto mb-1">
                                    </div><!-- col -->
                                </div><!-- row -->

                            <?php elseif ($layout['acf_fc_layout'] == 'stack'): ?>

                                <?php $image = $layout['image']; ?>
                                <?php $columns = $layout['columns']; ?>
                                <?php if ($columns): ?>
                                    <div class="row">
                                        <?php foreach ($columns as $column) : ?>

                                            <?php $alignment = $column['text_alignment']; ?>
                                            <div class="col-md-6 pb-1 pb-md-0 text-<?php echo $alignment; ?>">
                                                <img src="<?php echo esc_attr($image['url']); ?>"
                                                     alt="<?php echo esc_attr($image['alt']); ?>"
                                                     class="img-fluid d-block mx-auto mb-1">
                                                <?php if ($layout['heading']): ?>
                                                    <h2><?php echo esc_attr($column['heading']); ?></h2>
                                                <?php endif; ?>
                                                <p><?php echo $column['text_area']; ?></p>
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

                                        <?php endforeach; ?>
                                    </div><!-- row -->
                                <?php endif; ?>

                            <?php endif; ?>
                        </div><!-- container -->
            </section><!-- section-md -->
        <?php endforeach; ?>
    </section><!-- section-group -->
<?php endif; ?>
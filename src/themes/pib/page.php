<?php
get_header();
?>

<main>


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php $header = get_field('header'); ?>
        <section class="page-title bg-info">
            <div class="container-fluid">
                <div class="row justify-content-center align-content-center position-relative">
                    <div class="bg-image">
                    </div>
                    <div class="block__tint-overlay position-absolute h-100 z-index-1"></div>
                    <div class="home-wolf position-absolute h-100 z-index-10"></div>
                    <div class="col text-center position-relative z-index-10">
                        <h1 class="text-uppercase text-white"><?php echo $header['heading']; ?></h1>
                    </div>
                </div>
            </div>
        </section>


        <?php $body = get_field('body');
        $layouts = $body['layout'];
        if ($layouts) : ?>
            <?php foreach ($layouts as $layout) : ?>
                <?php if ($layout['acf_fc_layout'] == 'wide'): ?>
                    <p><?php echo $layout['text_area']; ?></p>
                <?php elseif ($layout['acf_fc_layout'] == 'column'): ?>
                    <p><?php echo $layout['text_area']; ?></p>
                <?php elseif ($layout['acf_fc_layout'] == 'stack'): ?>
                    <p><?php echo $layout['text_area']; ?></p>
                <?php endif;
            endforeach;
        endif;
        ?>


    <?php endwhile; endif; ?>


</main>


<?php get_footer(); ?>

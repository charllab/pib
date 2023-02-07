<?php
/**
 *
 * Template Name: Contact Page
 *
 **/
get_header(); ?>

    <main>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!--main post loop-->

            <?php get_template_part('partials/head/flexible-content'); ?>

            <section class="section-group">
                <section class="section-md">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-lg-7">
                                <?php the_content(); ?>
                            </div><!-- col -->
                            <div class="col-lg-4">
                                <div class="contact-info">
                                    <h2 class="h3">Contact Information</h2>
                                    <table class="tr-valignment medium mb-1">
                                        <tr>
                                            <td><strong>Address: </strong></td>
                                            <td>
                                                <?php the_field('physical_address', 'option'); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Phone: </strong></td>
                                            <td>
                                                <a href="tel:+1<?php echo strip_tel(get_field('phone_number', 'option')); ?>"
                                                   class="text-body"><?php echo get_field('phone_number', 'option'); ?></a>
                                            </td>
                                        </tr>
                                        <?php if (get_field('fax_number', 'option')): ?>
                                            <tr>
                                                <td><strong>Fax: </strong></td>
                                                <td>
                                                    <a href="tel:+1<?php echo strip_tel(get_field('fax_number', 'option')); ?>"
                                                       class="text-body"><?php echo get_field('fax_number', 'option'); ?></a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <?php if (get_field('toll_free', 'option')): ?>
                                            <tr>
                                                <td><strong>Toll Free: </strong></td>
                                                <td>
                                                    <a href="tel:+1<?php echo strip_tel(get_field('toll_free', 'option')); ?>"
                                                       class="text-body"><?php echo get_field('toll_free', 'option'); ?></a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                        <tr>
                                            <td><strong>E-mail: </strong></td>
                                            <td>
                                                <a href="mailto:<?php echo get_field('email_address', 'option'); ?>"
                                                   class="text-body"><?php echo get_field('email_address', 'option'); ?></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Hours: </strong></td>
                                            <td>
                                                <?php the_field('hours_of_operation', 'option'); ?>
                                            </td>
                                        </tr>
                                    </table>


                                    <?php if (get_field('map_embed_code', 'option')): ?>
                                        <div class="google-map">
                                            <?php $mapurl = get_field('map_embed_code', 'option'); ?>
                                            <iframe src="<?php echo $mapurl; ?>" width="600" height="500"
                                                    style="border:0;"
                                                    allowfullscreen="" loading="lazy"></iframe>
                                        </div><!-- px-0 -->
                                    <?php endif; ?>

                                </div><!-- padding -->
                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->
                </section><!-- section-md -->
            </section><!-- section-group -->

            <?php get_template_part('partials/foot/flexible-content'); ?>

            <!--main post loop-->
        <?php endwhile; endif; ?>


    </main>

<?php get_footer();
<?php
/*
Template Name: Collections
*/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="woocommerce-sections woocommerce-fullscreen-video-header-section">
        <div class="image-background">
            <img src="<?php echo get_the_post_thumbnail_url(null, 'full'); ?>" class="img-responsive"/>
        </div>
    </section>


    <?php if (have_rows('collection_list')):
        $i = 1;
        while (have_rows('collection_list')): the_row();
            // vars
            $featured_text = get_sub_field('text');
            $featured_link_name = get_sub_field('link_name');
            $featured_link = get_sub_field('link');
            $featured_image = get_sub_field('image');

            if ($i % 2 == 0) {
                $cift = true;
            } else {
                $cift = false;
            }

            if (!$cift) {

                ?>

                <section class="main-sections main-collection-section">
                    <div class="collection-reverse-content">
                        <div class="collection-left">
                            <div class="collection-left-content">
                                <p><?php echo $featured_text; ?></p>
                                <a href="<?php echo $featured_link_name; ?>">
                                    <?php echo $featured_link; ?>
                                </a>
                            </div>
                        </div>
                        <div class="collection-right">
                            <img src="<?php echo $featured_image['url']; ?>" alt="">
                        </div>
                    </div>
                </section>

            <?php } else { ?>

                <section class="main-sections main-collection-section">
                    <div class="collection-reverse-content">
                        <div class="collection-right">
                            <img src="<?php echo $featured_image['url']; ?>" alt="">
                        </div>
                        <div class="collection-left d-flex flex-row justify-content-end align-items-center">
                            <div class="collection-left-content text-right">
                                <p><?php echo $featured_text; ?></p>
                                <a href="<?php echo $featured_link_name; ?>">
                                    <?php echo $featured_link; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

            <?php } ?>

            <?php
            $i++;
        endwhile;
    endif;
    ?>
    <?php

    $banner_text = get_field('banner_text');
    $banner_link_name = get_field('banner_link_name');
    $banner_link = get_field('banner_link');
    $banner_image = get_field('banner_image');

    ?>

    <section class="main-sections main-newdress-section"
             style="background-image:url('<?php echo $banner_image['url']; ?>');">
        <div class="new-dress-content">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3><?php echo $banner_text; ?></h3>
                        <a href="<?php echo $banner_link; ?>"><?php echo $banner_link_name; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile;
endif; ?>



<?php get_footer(); ?>

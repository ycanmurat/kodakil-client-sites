<?php
/*
Template Name: Events
*/
get_header(); ?>
    <section class="woocommerce-sections woocommerce-fullscreen-video-header-section">
        <div class="video-background">
            <iframe src="https://player.vimeo.com/video/<?php echo '462583025'; ?>?title=0&byline=0&portrait=0&background=0&muted=1&controls=0&autoplay=1&loop=1"
                    width="1280" height="720" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
    </section>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="pages-section pages-general page-events">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-1 d-flex align-items-center page-content">
                    <div class="d-flex flex-column">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="events">
                        <?php if (have_rows('events')):
                            $i = 1;
                            while (have_rows('events')): the_row();
                                // vars
                                $image = get_sub_field('image');
                                $text = get_sub_field('text');
                                $sub_text = get_sub_field('sub_text');
                                $description = get_sub_field('description');
                                $first_date = get_sub_field('first_date');
                                $second_date = get_sub_field('second_date');
                                ?>
                                <div class="event-item">
                                    <div class="event-image">
                                        <img src="<?php echo $image['url']; ?>" alt="">
                                    </div>
                                    <div class="event-meta">
                                        <div class="dates"><?php echo $first_date; ?>
                                            - <?php echo $second_date; ?></div>
                                        <h4><?php echo $text; ?></h4>
                                        <h5><?php echo $sub_text; ?></h5>
                                        <div class="event-desc">
                                            <p><?php echo $description; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile;
endif; ?>


<?php get_footer(); ?>
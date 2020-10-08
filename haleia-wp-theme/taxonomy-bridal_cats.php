<?php get_header(); ?>


    <section class="woocommerce-sections woocommerce-fullscreen-video-header-section">
        <div class="video-background">
            <iframe src="https://player.vimeo.com/video/<?php echo '462583025'; ?>?title=0&byline=0&portrait=0&background=0&muted=1&controls=0&autoplay=1&loop=1" width="1280" height="720" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
    </section>

<div class="container-fluid pt-5 pb-5">

    <?php
    $terms = get_the_terms($post->ID, 'bridal_cats');
    if ($terms && !is_wp_error($terms)) :
        if (!empty($terms)) {
            echo '<div class="row"><div class="col-12"><h3>' . $terms[0]->name . '</h3></div></div>';
        }
    endif;

    echo '<div class="row products-list pt-3">';

    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <div class="col-md-3 col-sm-6 p-sm-0">
                <a href="<?php the_permalink(); ?>">
                    <?php
                    
                        $image = get_the_post_thumbnail_url();
                        echo '<img src="' . $image . '" class="first_images" alt="" >';
                   
                    ?>
                </a>
            </div>
    <?php
        endwhile;
    endif;



    echo '</div>';
    ?>



</div>

<?php get_footer(); ?>
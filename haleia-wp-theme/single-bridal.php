<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <section class="bridal-archive-sections bridal-details-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 offset-lg-1 col-md-4">
                        <div class="bridal-content">
                            <h1><?php the_title(); ?></h1>

                            <?php
                            $terms = get_the_terms($post->ID, 'bridal_cats');
                            if ($terms && !is_wp_error($terms)) :
                                if (!empty($terms)) {
                                    echo '<h3>' . $terms[0]->name . '</h3>';
                                }
                            endif;
                            ?>

                            <?php the_content(); ?>

                            <a href="<?php echo get_the_permalink(154); ?>" class="btn btn-default-inverse">
                                <?php
                                if (function_exists('qtranxf_getLanguage')) {
                                    if (qtranxf_getLanguage() == 'en') {
                                        echo "SCHEDULE AN APPOINTMENT";
                                    } elseif (qtranxf_getLanguage() == 'tr') {
                                        echo "RANDEVU AL";
                                    } else {
                                        echo "SCHEDULE AN APPOINTMENT";
                                    }
                                } else {
                                    echo "SCHEDULE AN APPOINTMENT";
                                }
                                ?>

                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <div class="bridal-gallery">
                            <div class="owl-carousel owl-theme">
								<?php 
									$galeri = get_field('galeri');
								 foreach( $galeri as $img ):
								?>
                                <div class="item">
                                    <img src="<?php echo $img['url']; ?>" alt="">
                                </div>
                                    <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            jQuery(document).ready(function($) {
                $('.owl-carousel').owlCarousel({

                    center: true,
                    loop: true,
                    margin: 0,
                    nav: true,
                    dots: false,
                    items: 1
                    
                })
            })
        </script>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
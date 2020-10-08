<?php
/*
Template Name: Wishlist
*/
get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="pages-section pages-general page-wishlist-enter">
            <div class="page-wishlist-info">
                <h1>
                    <?php
                    if (function_exists('qtranxf_getLanguage')) {
                        if (qtranxf_getLanguage() == 'en') {
                            echo "My Wishlist";
                        } elseif (qtranxf_getLanguage() == 'tr') {
                            echo "İstek Listem";
                        } else {
                            echo "My Wishlist";
                        }
                    } else {
                        echo "My Wishlist";
                    }
                    ?>
                </h1>
                <?php the_content(); ?>
                <div class="wishlist-btns">
                    <a href="#wishlistproducts" onclick="scrollToWishlist();" class="btn btn-white">
                        <?php
                        if (function_exists('qtranxf_getLanguage')) {
                            if (qtranxf_getLanguage() == 'en') {
                                echo "RECEIVE MY WISHLIST";
                            } elseif (qtranxf_getLanguage() == 'tr') {
                                echo "İSTEK LİSTEMİ GÖR";
                            } else {
                                echo "RECEIVE MY WISHLIST";
                            }
                        } else {
                            echo "RECEIVE MY WISHLIST";
                        }
                        ?>
                    </a>
                    <a href="<?php echo get_the_permalink(154); ?>" class="btn btn-white">
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
            <?php
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            ?>
            <div class="section-bg" style="background-image: url('<?php echo $featured_img_url; ?>');">

            </div>
        </section>
        <section class="pages-section pages-general page-wislist-list" id="wishlistproducts">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php echo do_shortcode('[yith_wcwl_wishlist]'); ?>
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>

<script>
    function scrollToWishlist(){
        jQuery("html, body").animate({ scrollTop: jQuery('#wishlistproducts').offset().top }, 1000);
    }
</script>

<?php get_footer(); ?>
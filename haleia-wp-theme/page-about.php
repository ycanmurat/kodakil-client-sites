<?php
/*
Template Name: About
*/
get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="pages-section pages-general page-about pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-5 offset-lg-1 page-content">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-lg-5 d-flex align-items-center">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>


<?php get_footer(); ?>
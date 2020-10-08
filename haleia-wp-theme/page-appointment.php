<?php
/*
Template Name: Appointment
*/
get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="pages-section pages-general page-appointment pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 offset-lg-1 page-content">
                        <?php echo do_shortcode('[contact-form-7 id="153" title="Appointment Form - EN"]'); ?>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center">
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
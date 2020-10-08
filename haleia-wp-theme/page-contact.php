<?php
/*
Template Name: Contact
*/
get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="pages-section pages-general page-contact pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 page-content">
                        <?php the_content(); ?>
                        <?php echo do_shortcode('[contact-form-7 id="152" title="Contact Form - EN"]'); ?>
                    </div>
                </div>
            </div>
        </section>
<?php endwhile;
endif; ?>


<?php get_footer(); ?>

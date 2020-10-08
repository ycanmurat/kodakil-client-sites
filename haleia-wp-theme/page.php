<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="pages-section pages-general">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 page-content pt-5 pb-5">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

        </section>
<?php endwhile;
endif; ?>


<?php get_footer(); ?>
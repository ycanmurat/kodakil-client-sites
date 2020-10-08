<?php 
/*
Template Name: Account
*/
get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="pages-section pages-general" id="page_account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 page-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

        </section>
<?php endwhile;
endif; ?>


<?php get_footer(); ?>
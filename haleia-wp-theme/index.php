<?php get_header(); ?>

<?php

$vimeo_id = get_field('video_code', 190);

?>
<section class="main-sections main-video-section">
    <div class="video-background">
        <iframe src="https://player.vimeo.com/video/<?php echo $vimeo_id; ?>?title=0&byline=0&portrait=0&background=1&muted=1&controls=0&autoplay=1&loop=1"
            width="1280" height="720" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
    </section>

    <?php

    $featured_text = get_field('featured_text', 190);
    $featured_link_name = get_field('featured_link_name', 190);
    $featured_link = get_field('featured_link', 190);
    $featured_image = get_field('featured_image', 190);

    ?>

    <section class="main-sections main-collection-section">
        <div class="collection-content">
            <div class="collection-left">
                <div class="collection-left-content">
                    <p><?php echo $featured_text; ?></p>
                    <a href="<?php echo $featured_link; ?>">
                        <?php echo $featured_link_name; ?>
                    </a>
                </div>
            </div>
            <div class="collection-right">
                <img src="<?php echo $featured_image['url']; ?>" alt="">
            </div>
        </div>
    </section>

    <?php

    $banner_text = get_field('banner_text', 190);
    $banner_link_name = get_field('banner_link_name', 190);
    $banner_link = get_field('banner_link', 190);
    $banner_image = get_field('banner_image', 190);

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

<section class="main-sections main-pages-section">
    <div class="main-pages-content">

        <?php if (have_rows('boxes', 190)):
            $i = 1;
            while (have_rows('boxes', 190)): the_row();
                    // vars
                $boxed_title = get_sub_field('boxed_title');
                $boxed_text = get_sub_field('boxed_text');
                $boxed_link = get_sub_field('boxed_link');
                $boxed_link_name = get_sub_field('boxed_link_name');
                ?>
                <div class="main-pages-<?php echo $i == 1 ? 'left' : 'right'; ?>">
                    <h4><?php echo $boxed_title; ?></h4>
                    <p><?php echo $boxed_text; ?></p>
                    <a href="<?php echo $boxed_link; ?>"><?php echo $boxed_link_name; ?></a>
                </div>
                <?php
                $i++;
            endwhile;
        endif; ?>
    </div>
</section>

<div class="hidden-yt-popup">
    <button class="closepopup"><img src="https://www.flaticon.com/svg/static/icons/svg/864/864393.svg"></button>

    <div class="video-area">
        <iframe src="https://www.youtube.com/embed/BUJYr2mZxrU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>



    <div class="timer">
        <h2>HALEIA SS'21 COLLECTION PRESENTATION</h2>
        <div class="count d-none">
            <span id="days">00</span> <br>
            <p>DAYS</p>
        </div>
        <div class="count">
            <span id="hours"></span> <br>
            <p>HOUR</p>
        </div>
        <div class="count">
            <span id="minutes"></span> <br>
            <p>MIN</p>
        </div>
        <div class="count">
            <span id="seconds"></span> <br>
            <p>SEC</p>
        </div>
    </div>

</div>
<style>
    .hidden-yt-popup button {
        position: absolute;
        top: 30px;
        right: 30px;
        padding: 20px 21px;
        border: none;
        background: black;
        border: 1px solid #ffffff26;
        border-radius: 50%;
        z-index: 3;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hidden-yt-popup button img {
        width: 42px;
        filter: invert(1);
        padding: 10px;
    }
    .hidden-yt-popup h2 {
        position: absolute;
        white-space: nowrap;
        bottom: calc(100% + 28px);
        font-size: 3rem;
        line-height: 9rem;
        border-bottom: 1px solid #ffffff40;
        font-family: 'FontAwesome';
    }
    .hidden-yt-popup {
        display: flex;
        position: fixed;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        background: black;
        align-items: center;
        justify-content: center;
        color: white;
        z-index: 9999999999999;
    }

    .hidden-yt-popup:before {content: '';position: absolute;right: 0;left: 0;top: 0;bottom: 0;background-image: url('<?php bloginfo('template_url'); ?>/images/temp/haleiactbg.jpg');background-size: cover;background-position: center;opacity: .3;z-index: -1;}

    .hidden-yt-popup .timer {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        margin-top: 10%;
    }

    .hidden-yt-popup .timer .count {
        margin: 10px 25px;
        text-align: center;
        width: 110px;
    }

    .hidden-yt-popup .timer .count span {
        font-size: 6rem;
        margin-bottom: 1rem!important;
    }

    .hidden-yt-popup .timer .count p {
        font-size: 2rem;
        display: block;
        margin-top: 2rem;
    }
    .vp-controls {
        display: none!important;
    }

    .vp-sidedock {
        display: none!important;
    }
    .woo-multi-currency.wmc-sidebar{
        z-index: 99999!important;
    }
    .hidden-yt-popup.deactive {
        display: none!important;
    }
    .hidden-yt-popup div.video-area iframe {
        position: absolute;
        right: 0;
        left: 0;
        margin: auto;
        top: 15%;
        width: 50vw;
        height: 35vw;
        display:none;
    }

    @media screen and (max-width: 991px) {
        .hidden-yt-popup .timer .count {
            width: 84px;
            margin: 0px 12px;
        }

        .hidden-yt-popup .timer .count p {
            font-size: 21px;
        }

        .hidden-yt-popup .timer .count span {
            font-size: 4rem;
            margin-bottom: 1rem!important;
        }
        .hidden-yt-popup h2 {
            font-size: 17px;
        }
    }
</style>
<?php get_footer(); ?>
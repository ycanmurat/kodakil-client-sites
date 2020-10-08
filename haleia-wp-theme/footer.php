</div> <!-- close #content  -->


<footer id="colophon " class="site-footer pt-5" style="background-color:#fef5ed; padding-bottom:50px;" role="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="newsletter-subscription">
                    <?php
                    if (function_exists('qtranxf_getLanguage')) {
                        if (qtranxf_getLanguage() == 'en') {
                            echo do_shortcode('[contact-form-7 id="5" title="Newsletter Form - EN"]');
                        } else {
                            echo do_shortcode('[contact-form-7 id="313" title="Newsletter Form - TR"]');
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="col-12">
                <div class="footer-navs">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu_01',
                        'menu_id' => false,
                        'depth' => 3,
                    ));

                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu_02',
                        'menu_id' => false,
                        'depth' => 3,
                    ));

                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu_03',
                        'menu_id' => false,
                        'depth' => 3,
                    ));

                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu_04',
                        'menu_id' => false,
                        'depth' => 3,
                    ));

                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu_05',
                        'menu_id' => false,
                        'depth' => 3,
                    ));
                    ?>
                </div>
            </div>
        </div>
        <div class="col-12 site-info mt-3 text-right">
            &copy; <?php echo date('Y'); ?> <?php echo '<a href="' . home_url() . '">' . get_bloginfo('name') . '</a>'; ?>
        </div><!-- close .site-info -->
    </div>
</footer><!-- #colophon -->

</div> <!-- close #page  -->
<?php wp_footer(); ?>

<svg width="0" height="0" class="hidden" style="display:none;">
    <symbol xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 686.9 154.2"
    id="haleia_logo">
    <defs>
        <path id="a" d="M156.3 58h37.2v43.8h-37.2z"></path>
    </defs>
    <clipPath id="b">
        <use xlink:href="#a" overflow="visible"></use>
    </clipPath>
    <path d="M126.2 131.4V21.7l-2.4-1.7H139l-2.9 1.7.1 109.7 2.8 1.7h-15.2l2.4-1.7zm66.9 0l.5-37.1c0-12.5-13.5-16.7-29.4-19.7l28.9.1v-53L190 20h16.5l-3.2 1.7v109.7l2.7 1.7h-16l3.1-1.7z"
    clip-path="url(#b)"></path>
    <path d="M126.2 131.4V21.7l-2.4-1.7H139l-2.9 1.7.1 109.7 2.8 1.7h-15.2l2.4-1.7zm66.9 0l.5-37.1c0-12.5-13.5-16.7-29.4-19.7l28.9.1v-53L190 20h16.5l-3.2 1.7v109.7l2.7 1.7h-16l3.1-1.7z"
    clip-path="url(#b)" fill="none" stroke="#000" stroke-miterlimit="10"></path>
    <path d="M64 14.8H31.1s17.8 7 18 19.7v67.7h-18s17.6 7.1 17.9 16.9v20.2H31v14.9h32.6L64 14.8zm-63.9 0H64V0L.1.1z"></path>
    <path d="M.1 14.8l32.5.1s-17.8 7-18 19.7v67.7h18s-17.6 7.1-17.9 16.9v20.2h18v14.9H0L.1 14.8zm.3-.5H64v.5H.4z"></path>
    <path d="M.1 101.1h63.8v1.1H.1zm257.3 35.2h-28.6c14-6.5 18.7-26.1 18.7-26.1-.4 20 9.9 26.1 9.9 26.1m54.8 0l2.1-1.7-9.2-27.1c-4-12.3-39.1-18.5-49-19.9h41.7l-16.7-65.4.5-4.2h9.9L328 134.8l2.1 1.7-17.9-.2zm74.3 0h34.3v-34.4c-2.4 25.3-27.2 33.4-34.3 34.4m98.2-61.4C499.9 72 503.5 57 503.5 57v36.2c-.2-1.2-3.6-15.5-18.8-18.3m3-57h34.2v34.3c-1.1-7.3-7.1-32-34.2-34.3m38.2 82v36.5h-38.7c8-1.2 36-7.5 38.7-36.5"></path>
    <path fill="none" stroke="#000" stroke-width=".25" stroke-miterlimit="10" d="M136.1 74.2h28.5"></path>
    <path d="M247.5 110.3l16.7-44.1c5.6-14.7 11.2-29.4 16.9-44-5.5 14.7-11.1 29.4-16.7 44.1l-16.9 44zm201.2-92.4c10.9-.1 21.7 0 32.6 0 10.9.1 21.7.1 32.6.2-10.9.1-21.7 0-32.6 0-10.9-.1-21.7-.1-32.6-.2m-5 56.9c6.8-.1 13.7 0 20.5-.1 6.8.1 13.7.1 20.5.2-6.8.1-13.7 0-20.5.1-6.8-.1-13.7-.1-20.5-.2M352 136.1c6.1-.1 12.3 0 18.4 0 6.1.1 12.3.1 18.4.2-6.1.1-12.3 0-18.4 0-6.1 0-12.2 0-18.4-.2m96 .1c10.9-.1 21.7 0 32.6 0 10.9.1 21.7.1 32.6.2-10.9.1-21.7 0-32.6 0-10.9-.1-21.8-.1-32.6-.2m-307.6.1h-18.8l2.2-1.5.2-114.6-2.4-2.3h18.9l-2.2 1.6v115.3zm424.6 0h-18.8l2.2-1.5.2-114.6-2.4-2.3h18.9l-2.2 1.5.1 115.4z"></path>
    <path d="M367.1 136.3h-16.8l2.2-1.5.2-114.6-2.4-2.3H367v1.6l.1 115.3zm90.7 0h-16.7l2.2-1.5.2-114.6-2.4-2.3h16.6l.1 1.6v115.3zm-249.3 0h-18.9l2.2-1.7.2-114.4-2.4-2.3h18.9l-2.3 1.6.1 115.1zm-43.9-61.1s-5.3-1-8.6-1h10.1l-1.5 1zm64.2 61.1s9.6-2.2 19.3-27.6c0 0-2.8 16.7 9.3 27.6h-28.6z"></path>
    <path d="M250.3 102.9s-2.8 9.4-2.7 11.1v-3.9l2.7-7.2z"></path>
    <path d="M247.9 111.8s0 13.9 9.5 24.5h-28.6s17.2-1 19.1-24.5"></path>
    <path d="M248.4 109.7s-.9 4.4.5 9.4c0 .1-2.7-6.6-.5-9.4m365.7 26.6h-28.6c14-6.5 18.7-26.1 18.7-26.1-.4 20 9.9 26.1 9.9 26.1m54.7 0l2.1-1.7-9.2-27.1c-4-12.3-39.1-18.5-49-19.9h41.7l-16.7-65.4.5-4.2h9.9l36.5 116.8 2.1 1.7-17.9-.2z"></path>
    <path d="M604.2 110.3l16.7-44.1c5.6-14.7 11.2-29.4 16.9-44-5.5 14.7-11.1 29.4-16.7 44.1l-16.9 44z"></path>
    <path d="M585.5 136.3s9.6-2.2 19.3-27.6c0 0-2.8 16.7 9.3 27.6h-28.6z"></path>
    <path d="M607 102.9s-2.8 9.4-2.7 11.1v-3.9l2.7-7.2z"></path>
    <path d="M604.6 111.8s0 13.9 9.5 24.5h-28.6s17.2-1 19.1-24.5"></path>
    <path d="M605.1 109.7s-.9 4.4.5 9.4c0 .1-2.7-6.6-.5-9.4"></path>
</symbol>
</svg>
<style>
    .banks {padding: 15px;display: flex;align-items: center;justify-content: center;}
    .banks img {margin: 0px 6px;}
    body.login-toggle .login-box {
        z-index: 9999;
    }
    body.newsletter-toggle .newsletter-box{border:none;}
    @media screen and (max-width: 991px){
        .banks img {
            margin: 0px 6px;
            width: 34px;
        }
    }
    li#menu-item-113 h5, li#menu-item-118 h5 {font-size: 1rem;font-weight: 500;text-transform: uppercase;}
    .addtoany_list a {width: 55px!important;color: black;}
    .addtoany_list a span {width: 40px!important;height: 40px!important;}
    .pages-section.page-wishlist-enter:before {content: '';position: absolute;right: 0;left: 0;top: 0;bottom: 0;background: #d8d8d885;z-index: 0;}
    body.term-wedding-gowns:not(.couture-parent-category) header ul li a{color:#000!important;}
    body.term-wedding-gowns header .header-top-center svg.icon{color:#000!important;}
    section.woocommerce-sections.fullscreen-video-header-with-gallery-section div.gallery-images {display:none;}
    td.woocommerce-orders-table__cell.woocommerce-orders-table__cell-order-actions a.woocommerce-button {flex: 1;margin-right: 10px;text-align: center;}
    td.woocommerce-orders-table__cell.woocommerce-orders-table__cell-order-actions {padding: 13px 0px!important;display: flex;}
    th.woocommerce-orders-table__header.woocommerce-orders-table__header-order-actions {max-width: 100px;display: flex;text-align: center;}
    body.spring-summer-21-parent-category header a {
        color: black!important;
    }

    body.spring-summer-21-parent-category header svg.icon {
        color: black;
    }
    section.pages-section.pages-general img.size-medium {
        margin-bottom: 15px;
    }
    body.bridal-bodybridal-parent-category header a{color:black!important}

    body.bridal-bodybridal-parent-category header .header-top-center svg.icon{color:black!important}
    body.term-tops-blouses header a , body.term-tops-blouses svg.icon {
        color: black!important;
    }
    .col-md-4.col-sm-6.product.type-product.product-type-simple {
        margin-bottom: 40px;
    }
    ul#menu-main-navigation > li.menu-item-type-taxonomy > a {
        cursor: default;
    }
    button.single_add_to_cart_button.button.alt {
        background: #e3cdbf!important;
        color: black!important;
        border: 1px solid transparent!important;
    }

    button.single_add_to_cart_button.button.alt:hover {
        background: black!important;
        color: white!important;
    }

    div.products-list div.product-bottom span.woocommerce-Price-amount {
        display: none;
    }

    div.products-list div.col-md-4 {padding: 40px;}

    div.products-list  h2.woocommerce-loop-product__title {
        font-size: 14px;
    }
</style>
<div class="banks">
    <img src="https://haleia.com.tr/wp-content/themes/fm-theme-2020/images/banks/bank1.png" alt="VISA">
    <img src="https://haleia.com.tr/wp-content/themes/fm-theme-2020/images/banks/bank2.png" alt="MASTERCARD">
    <img src="https://haleia.com.tr/wp-content/themes/fm-theme-2020/images/banks/bank3.png" alt="MAESTRO">
    <img src="https://haleia.com.tr/wp-content/themes/fm-theme-2020/images/banks/bank4.png" alt="MAXIMUM">
    <img src="https://haleia.com.tr/wp-content/themes/fm-theme-2020/images/banks/bank5.png" alt="YAPIKREDİ WORLD">
    <img src="https://haleia.com.tr/wp-content/themes/fm-theme-2020/images/banks/bank6.png" alt="GARANTİ BBVA BONUS CARD">
    <img src="https://haleia.com.tr/wp-content/themes/fm-theme-2020/images/banks/bank7.png" alt="CARD FINANS">
    <img src="https://haleia.com.tr/wp-content/themes/fm-theme-2020/images/banks/bank8.png" alt="AXESS">
</div>




<script>

    jQuery(document).ready(function ($) {
        /*if (!readCookie('hide')) {
            $('.hidden-yt-popup').addClass('active');
        }
      

        $('.hidden-yt-popup .closepopup').click(function() {
            $('.hidden-yt-popup').addClass('deactive');
            createCookie('hide', true, 1)
            return false;
        });
        */
        $('.hidden-yt-popup button').click(function(event) {
            $('.hidden-yt-popup').addClass('deactive');
            $('.hidden-yt-popup').removeClass('active');
        });

        //Lang Prefix
        <?php
        if (function_exists('qtranxf_getLanguage')) {
            if (qtranxf_getLanguage() == 'en') {
                echo "$('#menu-top-nav-left li:eq(0) a:eq(0)').prepend('COUNTRY/REGION ');";
                echo "$('#menu-item-781').html('Spring Summer 21');";
            } elseif (qtranxf_getLanguage() == 'tr') {
                echo "$('#menu-top-nav-left li:eq(0) a:eq(0)').prepend('ÜLKE/DİL ');";
                echo "$('#menu-item-781').html('İlkbahar Yaz 21');";
            } else {
                echo "$('#menu-top-nav-left li:eq(0) a:eq(0)').prepend('COUNTRY/REGION ');";
                echo "$('#menu-item-781').html('Spring Summer 21');";
            }
        } else {
            echo "$('#menu-top-nav-left li:eq(0) a:eq(0)').prepend('COUNTRY/REGION ');";
            echo "$('#menu-item-781').html('Spring Summer 21');";
        }
        ?>

        /*
        $(document).on( 
          'keydown', function(event) { 
            if (event.key == "d") { 
                $('.comingsoonbackground').addClass('deactive');
                $('.body').addClass('deactive');
            } 
        });
        */
        $('li#menu-item-113').html('<h5>Legal</h5>');
        $(' li#menu-item-118').html('<h5>Follow Us</h5>');
        $('#menu-item-780').hide();
        $('.menu-item.menu-item-type-taxonomy.menu-item-object-product_tag.menu-item-780').remove();
        $('ul#menu-main-navigation > li.menu-item-type-taxonomy > a').attr("href", "javascript: void(0)");




        setTimeout(function(){ 
            var mainframe = document.getElementsByTagName("iframe");
            mainframe[0].src = "https://player.vimeo.com/video/468212278?title=0&byline=0&portrait=0&background=1&muted=1&controls=0&autoplay=1&loop=1";
        }, 500);
    });



    (function () {
        const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

        let birthday = "Oct 28, 2020 20:00:00",
        countDown = new Date(birthday).getTime(),
        x = setInterval(function() {    

            let now = new Date().getTime(),
            distance = countDown - now;

            document.getElementById("days").innerText = Math.floor(distance / (day)),
            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
            let headline = document.getElementById("headline"),
            countdown = document.getElementById("countdown"),
            content = document.getElementById("content");

            headline.innerText = "It's my birthday!";
            countdown.style.display = "none";
            content.style.display = "block";

            clearInterval(x);
        }
        //seconds
    }, 0)
    }());

</script>

</body>
</html>
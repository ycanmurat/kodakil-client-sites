<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <?php wp_head(); ?>

    <script data-pace-options='{ "ajax": false, "document":true, "eventLag":false, "elements":true, "restartOnRequestAfter": false }'
            src="<?php bloginfo('template_url'); ?>/js/pace.min.js"></script>

</head>

<?php
$term = get_queried_object();
$kategori_tipi = get_field('kategori_tipi', $term);

$class = "";
if ($kategori_tipi == "type03") {
    $class = 'bridal-body';
}


if (isset($term->parent) && $term->parent != 0) {

    $cat = get_term($term->parent);

    $class .= $cat->slug . "-child-category";
} else {

    $class .= $term->slug . "-parent-category";
}

?>

<body <?php body_class(isset($class) ? $class : ''); ?>>

<div id="page" class="site">
    <header id="masthead" class="site-header navbar-static-top" role="banner">
        <div class="container-fluid pt-2">
            <div class="row">
                <div class="col-md-6 header-top-left text-left">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'top_menu_left',
                        'container' => 'div',
                        'container_id' => 'top_menu_left',
                        'container_class' => 'top_menu_left',
                        'menu_id' => false,
                        'menu_class' => 'd-flex justify-content-start',
                        'depth' => 3,
                        //'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                        //'walker'          => new wp_bootstrap_navwalker()
                    ));
                    ?>
                </div>
                <div class="col-md-6 header-top-right text-right">
                    <ul id="menu-top-nav-right" class="d-flex justify-content-end">
                        <li class="custom-menu-item search-toggle">
                            <a href="#" id="searchToggle">
                                <?php
                                if (function_exists('qtranxf_getLanguage')) {
                                    if (qtranxf_getLanguage() == 'en') {
                                        echo "SEARCH";
                                    } elseif (qtranxf_getLanguage() == 'tr') {
                                        echo "ARAMA";
                                    } else {
                                        echo "SEARCH";
                                    }
                                } else {
                                    echo "SEARCH";
                                }
                                ?>
                                <i class="fa fa-search"></i>
                            </a>
                        </li>

                        <?php
                        if (is_user_logged_in()) {
                            ?>
                            <li class="custom-menu-item ">
                                <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>">
                                    <?php
                                    if (function_exists('qtranxf_getLanguage')) {
                                        if (qtranxf_getLanguage() == 'en') {
                                            echo "MY ACCOUNT";
                                        } elseif (qtranxf_getLanguage() == 'tr') {
                                            echo "HESABIM";
                                        } else {
                                            echo "MY ACCOUNT";
                                        }
                                    } else {
                                        echo "MY ACCOUNT";
                                    }
                                    ?>
                                    <i class="fa fa-user"></i>
                                </a>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li class="custom-menu-item ">
                                <a href="#" id="loginToggle">
                                    <?php
                                    if (function_exists('qtranxf_getLanguage')) {
                                        if (qtranxf_getLanguage() == 'en') {
                                            echo "LOGIN&SIGN UP";
                                        } elseif (qtranxf_getLanguage() == 'tr') {
                                            echo "GİRİŞ/KAYIT";
                                        } else {
                                            echo "LOGIN/SIGN UP";
                                        }
                                    } else {
                                        echo "LOGIN/SIGN UP";
                                    }
                                    ?>
                                    <i class="fa fa-user"></i>
                                </a>
                            </li>
                            <?php
                        }
                        ?>

                        <li class="custom-menu-item cart-link">
                            <a href="<?php echo wc_get_cart_url(); ?>">
                                <?php
                                if (function_exists('qtranxf_getLanguage')) {
                                    if (qtranxf_getLanguage() == 'en') {
                                        echo "SHOPPING BAG";
                                    } elseif (qtranxf_getLanguage() == 'tr') {
                                        echo "ALIŞVERİŞ ÇANTASI";
                                    } else {
                                        echo "SHOPPING BAG";
                                    }
                                } else {
                                    echo "SHOPPING BAG";
                                }
                                ?>
                                <i class="fa fa-shopping-bag"></i>
                                <?php
                                global $woocommerce;
                                echo ' (' . $woocommerce->cart->cart_contents_count . ')';
                                ?>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="col-md-10 offset-md-1 header-top-center text-center">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <svg class="icon">
                            <use xlink:href="#haleia_logo"></use>
                        </svg>
                    </a>
                </div>
                <div class="col-md-10 offset-md-1 header-nav text-center">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'container' => 'div',
                        'container_id' => 'main-nav',
                        'container_class' => 'd-flex justify-content-between',
                        'menu_id' => false,
                        'menu_class' => 'd-flex justify-content-between',
                        'depth' => 3,
                        //'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                        //'walker'          => new wp_bootstrap_navwalker()
                    ));
                    ?>
                </div>
            </div>
        </div>
    </header>

    <div class="search-bar">
        <h4>
            <?php
            if (function_exists('qtranxf_getLanguage')) {
                if (qtranxf_getLanguage() == 'en') {
                    echo "WHAT ARE YOU LOOKING FOR?";
                } elseif (qtranxf_getLanguage() == 'tr') {
                    echo "NE ARAMIŞTINIZ?";
                } else {
                    echo "WHAT ARE YOU LOOKING FOR?";
                }
            } else {
                echo "WHAT ARE YOU LOOKING FOR?";
            }
            ?>
        </h4>
        <?php //echo do_Shortcode('[ivory-search id="95" title="Default Search Form"]'); ?>
        <?php //echo do_shortcode('[wcas-search-form]'); ?>
        <?php //echo do_shortcode('[yith_woocommerce_ajax_search]');?>
        <div class="col-md-4 offset-md-4 offset-lg-4">
        <?php echo do_shortcode('[aws_search_form]'); ?>
        </div>
        <a href="#" id="searchClose">
            <?php
            if (function_exists('qtranxf_getLanguage')) {
                if (qtranxf_getLanguage() == 'en') {
                    echo "CLOSE";
                } elseif (qtranxf_getLanguage() == 'tr') {
                    echo "KAPAT";
                } else {
                    echo "CLOSE";
                }
            } else {
                echo "CLOSE";
            }
            ?>
        </a>
    </div>

    <div class="login-box">
        <div class="login-close">
            <i class="fa fa-close"></i>
        </div>
        <div class="login-box-forms">
            <div class="login-left">
                <h3>
                    <?php
                    if (function_exists('qtranxf_getLanguage')) {
                        if (qtranxf_getLanguage() == 'en') {
                            echo "REGISTERED USER";
                        } elseif (qtranxf_getLanguage() == 'tr') {
                            echo "KAYITLI KULLANICILAR";
                        } else {
                            echo "REGISTERED USER";
                        }
                    } else {
                        echo "REGISTERED USER";
                    }
                    ?>
                </h3>

                <p>
                    <?php
                    if (function_exists('qtranxf_getLanguage')) {
                        if (qtranxf_getLanguage() == 'en') {
                            echo "If you are already registered, please log in.";
                        } elseif (qtranxf_getLanguage() == 'tr') {
                            echo "Eğer daha önce kayıt olduysanız, lütfen giriş yapın.";
                        } else {
                            echo "If you are already registered, please log in.";
                        }
                    } else {
                        echo "If you are already registered, please log in.";
                    }
                    ?>
                </p>

                <form class="woocommerce-form woocommerce-form-login login" method="post">
                    <?php do_action('woocommerce_login_form_start'); ?>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" id="username" autocomplete="username"
                               value="<?php echo (!empty($_POST['username'])) ? esc_attr(wp_unslash($_POST['username'])) : ''; ?>"
                               placeholder="<?php esc_html_e('Username or email address', 'woocommerce'); ?>"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" id="password"
                               autocomplete="current-password"
                               placeholder="<?php esc_html_e('Password', 'woocommerce'); ?>"/>
                    </div>
                    <?php do_action('woocommerce_login_form'); ?>
                    <div class="form-group form-check">
                        <input class="form-check-input" name="rememberme" type="checkbox" id="rememberme"
                               value="forever"/>
                        <label class="form-check-label"
                               for="rememberme"><?php esc_html_e('Remember me', 'woocommerce'); ?></label>
                    </div>
                    <div class="form-group">
                        <a href="<?php echo esc_url(wp_lostpassword_url()); ?>"><?php esc_html_e('Lost your password?', 'woocommerce'); ?></a>
                    </div>
                    <div class="form-group">
                        <?php wp_nonce_field('woocommerce-login', 'woocommerce-login-nonce'); ?>
                        <button type="submit" class="btn btn-default" name="login"
                                value="<?php esc_attr_e('Log in', 'woocommerce'); ?>"><?php esc_html_e('Log in', 'woocommerce'); ?></button>
                    </div>


                    <?php do_action('woocommerce_login_form_end'); ?>
                </form>
            </div>
            <div class="login-right">
                <h3>
                    <?php
                    if (function_exists('qtranxf_getLanguage')) {
                        if (qtranxf_getLanguage() == 'en') {
                            echo "NEW USER";
                        } elseif (qtranxf_getLanguage() == 'tr') {
                            echo "YENİ KULLANICI";
                        } else {
                            echo "NEW USER";
                        }
                    } else {
                        echo "NEW USER";
                    }
                    ?>
                </h3>

                <p>
                    <?php
                    if (function_exists('qtranxf_getLanguage')) {
                        if (qtranxf_getLanguage() == 'en') {
                            echo "Register to enjoy the benefits of My Account:";
                        } elseif (qtranxf_getLanguage() == 'tr') {
                            echo "Kayıtlı müşteri avantajlarından yararlanmak için kayıt olun:";
                        } else {
                            echo "Register to enjoy the benefits of My Account:";
                        }
                    } else {
                        echo "Register to enjoy the benefits of My Account:";
                    }
                    ?>
                </p>

                <p>
                    <?php
                    if (function_exists('qtranxf_getLanguage')) {
                        if (qtranxf_getLanguage() == 'en') {
                            ?>
                            - Use the wishlist to save your favorite products<br/>
                            - Complete checkout more quickly<br/>
                            - Review order information and tracking
                            <?php
                        } elseif (qtranxf_getLanguage() == 'tr') {
                            ?>
                            - En sevdiğiniz ürünleri kaydetmek için istek listesini kullanın<br/>
                            - Ödeme işlemini daha hızlı tamamlayın<br/>
                            - Sipariş bilgilerini ve izlemeyi inceleyin
                            <?php
                        } else {
                            ?>
                            - Use the wishlist to save your favorite products<br/>
                            - Complete checkout more quickly<br/>
                            - Review order information and tracking
                            <?php
                        }
                    } else {
                        ?>
                        - Use the wishlist to save your favorite products<br/>
                        - Complete checkout more quickly<br/>
                        - Review order information and tracking
                        <?php
                    }
                    ?>
                </p>

                <a href="<?php echo get_permalink(get_option('woocommerce_myaccount_page_id')); ?>"
                   class="btn btn-default-inverse">
                    <?php
                    if (function_exists('qtranxf_getLanguage')) {
                        if (qtranxf_getLanguage() == 'en') {
                            echo "SIGN UP";
                        } elseif (qtranxf_getLanguage() == 'tr') {
                            echo "KAYIT OL";
                        } else {
                            echo "SIGN UP";
                        }
                    } else {
                        echo "SIGN UP";
                    }
                    ?>
                </a>
            </div>
        </div>
    </div>

    <?php if (is_home()) : ?>
        <div class="newsletter-box">
            <div class="newsletter-close">
                <i class="fa fa-close"></i>
            </div>
            <div class="newsletter-box-content">
                <img src="<?php bloginfo('template_url'); ?>/images/temp/newsletter-sign-up.jpg" alt="">
                <div class="newsletter-form">
                    <?php
                    if (function_exists('qtranxf_getLanguage')) {
                        if (qtranxf_getLanguage() == 'en') {
                            echo do_shortcode('[contact-form-7 id="131" title="Newsletter Form Popup - EN"]');
                        } elseif (qtranxf_getLanguage() == 'tr') {
                            echo do_shortcode('[contact-form-7 id="306" title="Newsletter Form Popup - TR"]');
                        }
                    } ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div id="content" class="site-content">
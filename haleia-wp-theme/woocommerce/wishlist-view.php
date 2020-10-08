<?php

/**
 * Wishlist page template
 *
 * @author Your Inspiration Themes
 * @package YITH WooCommerce Wishlist
 * @version 2.0.12
 */

if (!defined('YITH_WCWL')) {
    exit;
} // Exit if accessed directly
?>

<?php do_action('yith_wcwl_before_wishlist_form', $wishlist_meta); ?>

<form id="yith-wcwl-form" action="<?php echo $form_action ?>" method="post" class="woocommerce">

    <?php wp_nonce_field('yith-wcwl-form', 'yith_wcwl_form_nonce') ?>

    <!-- TITLE -->
    <?php
    do_action('yith_wcwl_before_wishlist_title', $wishlist_meta);

    if (!empty($page_title)) :
    ?>
        <?php if ($is_custom_list) : ?>
            <div class="hidden-title-form">
                <input type="text" value="<?php echo $page_title ?>" name="wishlist_name" />
                <button>
                    <?php echo apply_filters('yith_wcwl_save_wishlist_title_icon', '<i class="fa fa-check"></i>') ?>
                    <?php _e('Save', 'yith-woocommerce-wishlist') ?>
                </button>
                <a class="hide-title-form btn button">
                    <?php echo apply_filters('yith_wcwl_cancel_wishlist_title_icon', '<i class="fa fa-remove"></i>') ?>
                    <?php _e('Cancel', 'yith-woocommerce-wishlist') ?>
                </a>
            </div>
        <?php endif; ?>
    <?php
    endif;

    do_action('yith_wcwl_before_wishlist', $wishlist_meta); ?>

    <div class="wishlist-products-wrapper" data-id="<?php echo $wishlist_id ?>" data-token="<?php echo $wishlist_token ?>">
        <?php
        if (count($wishlist_items) > 0) :
            $added_items = array();
            foreach ($wishlist_items as $item) :
                global $product;

                $item['prod_id'] = yit_wpml_object_id($item['prod_id'], 'product', true);

                if (in_array($item['prod_id'], $added_items)) {
                    continue;
                }

                $added_items[] = $item['prod_id'];
                $product = wc_get_product($item['prod_id']);
                $availability = $product->get_availability();
                $stock_status = isset($availability['class']) ? $availability['class'] : false;

                if ($product && $product->exists()) :
        ?>

                    <div class="cart-product" data-row-id="<?php echo $item['prod_id'] ?>">


                        <div class="cart-image">
                            <a href="<?php echo esc_url(add_query_arg('remove_from_wishlist', $item['prod_id'])) ?>" class="remove remove_from_wishlist" title="<?php echo apply_filters('yith_wcwl_remove_product_wishlist_message_title', __('Remove this product', 'yith-woocommerce-wishlist')); ?>">&times;</a>
                            <?php echo $product->get_image() ?>
                        </div>

                        <h2>
                            <a href="<?php echo esc_url(get_permalink(apply_filters('woocommerce_in_cart_product', $item['prod_id']))) ?>"><?php echo apply_filters('woocommerce_in_cartproduct_obj_title', $product->get_title(), $product) ?></a>
                            <?php //do_action( 'yith_wcwl_table_after_product_name', $item );  ?>
                        </h2>
                        
                        <div class="cart-meta">
                            <div class="cart-product-price">
                                <?php
                                $base_product = $product->is_type('variable') ? $product->get_variation_regular_price('max') : $product->get_price();
                                echo $base_product ? $product->get_price_html() : apply_filters('yith_free_text', __('Free!', 'yith-woocommerce-wishlist'), $product);
                                ?>
                            </div>
                            <!-- Add to cart button -->
                            <?php if ($show_add_to_cart && isset($stock_status) && $stock_status != 'out-of-stock') : ?>
                                <?php woocommerce_template_loop_add_to_cart(); ?>
                            <?php endif ?>
                        </div>

                    </div>


            <?php
                endif;
            endforeach;
        else : ?>
            <tr>
                <td colspan="<?php echo esc_attr($column_count) ?>" class="wishlist-empty"><?php echo apply_filters('yith_wcwl_no_product_to_remove_message', __('No products were added to the wishlist', 'yith-woocommerce-wishlist')) ?></td>
            </tr>
        <?php
        endif;

        if (!empty($page_links)) : ?>
            <tr class="pagination-row">
                <td colspan="<?php echo esc_attr($column_count) ?>"><?php echo $page_links ?></td>
            </tr>
        <?php endif ?>
    </div>

    <?php wp_nonce_field('yith_wcwl_edit_wishlist_action', 'yith_wcwl_edit_wishlist'); ?>

    <?php if (!$is_default) : ?>
        <input type="hidden" value="<?php echo $wishlist_token ?>" name="wishlist_id" id="wishlist_id">
    <?php endif; ?>

    <?php do_action('yith_wcwl_after_wishlist', $wishlist_meta); ?>

</form>

<?php do_action('yith_wcwl_after_wishlist_form', $wishlist_meta); ?>

<?php if ($show_ask_estimate_button && (!is_user_logged_in() || $additional_info)) : ?>
    <div id="ask_an_estimate_popup">
        <form action="<?php echo $ask_estimate_url ?>" method="post" class="wishlist-ask-an-estimate-popup">
            <?php if (!is_user_logged_in()) : ?>
                <label for="reply_email"><?php echo apply_filters('yith_wcwl_ask_estimate_reply_mail_label', __('Your email', 'yith-woocommerce-wishlist')) ?></label>
                <input type="email" value="" name="reply_email" id="reply_email">
            <?php endif; ?>
            <?php if (!empty($additional_info_label)) : ?>
                <label for="additional_notes"><?php echo esc_html($additional_info_label) ?></label>
            <?php endif; ?>
            <textarea id="additional_notes" name="additional_notes"></textarea>

            <button class="btn button ask-an-estimate-button ask-an-estimate-button-popup">
                <?php echo apply_filters('yith_wcwl_ask_an_estimate_icon', '<i class="fa fa-shopping-cart"></i>') ?>
                <?php echo apply_filters('yith_wcwl_ask_an_estimate_text', __('Ask for an estimate', 'yith-woocommerce-wishlist')) ?>
            </button>
        </form>
    </div>
<?php endif; ?>
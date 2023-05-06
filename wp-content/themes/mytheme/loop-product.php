<?php

if (!function_exists('my_template_loop_product_title')) {

    /**
     * Show the product title in the product loop. By default this is an H2.
     */
    function my_template_loop_product_title()
    {
        echo '<h2 class="loop-title ' . esc_attr(apply_filters('woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title')) . '">' . get_the_title() . '</h2>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
}

remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', 'my_template_loop_product_title', 10);

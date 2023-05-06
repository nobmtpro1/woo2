<?php get_header() ?>
<div class="container">
    <h1>New</h1>
    <hr>
    <?=
    do_shortcode('[products limit="4" columns="4" orderby="id" order="DESC" visibility="visible"]')
    ?>
    <h1>Feature</h1>
    <hr>
    <?php $products = (new WP_Query(['post_type' => 'product', 'posts_per_page'   => -1,])) ?>
    <div class="woocommerce loop-feature">
        <?php
        woocommerce_product_loop_start();
        while ($products->have_posts()) {
            $products->the_post();

            /**
             * Hook: woocommerce_shop_loop.
             */
            do_action('woocommerce_shop_loop');

            wc_get_template_part('content', 'product');
        }
        woocommerce_product_loop_end();
        ?>
    </div>
</div>
<?php get_footer() ?>
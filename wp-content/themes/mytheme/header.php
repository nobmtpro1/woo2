<?php global $woocommerce; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?= bloginfo('template_directory') ?>/assets/css/style.css" rel="stylesheet">

</head>

<body <?= body_class() ?>>

    <div class="container">
        <div class="row pt-4 pb4 mb-5">
            <div class="col-1 logo">
                <?= get_custom_logo() ?>
            </div>
            <div class="col-7 d-flex align-items-center">
                <?php wp_nav_menu([
                    'theme_location' => "header-main",
                    'container' => '',
                ]) ?>
            </div>
            <div class="col-4">
                <div class="d-flex justify-content-end align-items-center">
                    <div class="p-2 m-2">
                        <form action="<?= bloginfo('url') ?>" class="row">
                            <input type="hidden" name="post_type" value="product">
                            <input class="form-control mr-4" type="text" name="s" placeholder="Search...">
                            <input type="hidden" type="submit">
                        </form>
                    </div>
                    <div class="p-2">
                        <a href="<?= bloginfo('url') ?>/my-account">
                            <i class="fa fa-user"></i>
                        </a>
                    </div>
                    <div class="p-2">
                        <a class="cart-contents-count" href="<?= $woocommerce->cart->get_cart_url(); ?>">
                            <i class="fa-solid fa-cart-shopping"></i> (<?= $woocommerce->cart->cart_contents_count ?>)
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
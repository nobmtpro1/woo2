<?php get_header() ?>
<div class="container">
    <h1>Newest</h1>
    <?= do_shortcode('[products columns="4" orderby="id" order="DESC" visibility="visible"]') ?>

</div>
<?php get_footer() ?>
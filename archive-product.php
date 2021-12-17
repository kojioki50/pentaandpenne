<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<?php get_header(); ?>
<div class="p-main-title__woo blur">
    <h1>PENTA AND PENNE'S TALE </h1>
</div>
<div class="l-main-container">
    <? get_search_form(); ?>

    <div class="p-item-box">
        <?php echo do_shortcode('[products]'); ?>
    </div>

</div>


<?php wp_pagenavi(); ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
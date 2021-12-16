<?php get_header(); ?>
<div class="p-main-title blur">
    <h1>Contact</h1>
</div>

<main>
    <div class="l-contact">
        <p class="contact-text">商品のお問い合わせ・質問・相談は<br>以下のフォームからご連絡ください</p>
            <?php echo do_shortcode('[contact-form-7 id="6" title="コンタクトフォーム 1"]'); ?>
    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
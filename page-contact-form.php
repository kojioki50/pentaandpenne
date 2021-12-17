<?php get_header(); ?>
<div class="p-main-title blur">
    <h1>Contact</h1>
</div>

<main>
    <div class="l-contact">
        <div class="contact__text__box">
        <p class="contact-text">お問い合わせ・ご相談は<br>以下のフォームよりご連絡ください</p>
        </div>
            <?php echo do_shortcode('[contact-form-7 id="6" title="コンタクトフォーム 1"]'); ?>
    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
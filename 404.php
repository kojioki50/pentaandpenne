<?php get_header();?>
<div class="video-container">
    <div class="p-main-title blur">
      <h1>PAGE ERROR 404 </h1>
    </div>
    <video class='video' src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/Snow.mp4" autoplay muted loop></video>
  </div>
  <main>
    <ul class="share">
      <li><span>2021 PENTA AND PENNE</span></li>
      <li><a><i class="bi bi-twitter"></i></a></li>
      <li><span>SHERE</span></li>
    </ul>
    <div class="l-main-container">
      <div class="p-error-box">
        <h1><?php echo esc_html( 'Nothing here', 'pentaandpenne' ); ?></h1>
        <p><?php echo esc_html( 'お探しのページが見つかりませんでした。お探しのページは削除または移動した可能性があります。', 'pentaandpenne' ); ?></p>
        <? get_search_form(); ?>
      </div>
    </div>
  </main>

<?php
get_sidebar();
get_footer();


<?php get_header(); ?>

  <div class="video-container">
    <div class="p-main-title blur">
      <h1>CONTACT US </h1>
    </div>
    <video class='video' src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/Snow.mp4" autoplay muted loop></video>
  </div>
  <main>
    <ul class="share">
      <li><span>2021 PENTA AND PENNE</span></li>
      <li><a><i class="bi bi-twitter"></i></a></li>
      <li><span>SHERE</span></li>
    </ul>
    <?php the_content(); ?>
    <div class="l-main-container">
   
    
      </div>
      
  </main>

  <?php get_sidebar(); ?>
  <?php get_footer(); ?>
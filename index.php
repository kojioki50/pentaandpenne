<?php get_header(); ?>
  <div class="video-container">
    <div class="p-main-title blur">
      <h1>PENTA AND PENNE'S TALE </h1>
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
      <?php the_content(); ?>
     <? get_search_form(); ?>
      <div class="p-main-catch">キャッチフレーズ</div>
      <div class="p-intro-container">
        <div class="p-intro"></div>

          <div class="p-goods-box js-goods-api">
            <h2><a href="<?php echo esc_url(home_url('/archive'));?>">Go To Goods</a></h2>
          </div>
      </div>

      <div class="back-img"></div>
     
      
      
      <div class="p-main-special"><a class="goods" href="<?php echo esc_url(home_url('/event'));?>">特設ページ</a></div>

      <div class="p-new-box js-goods-new-api">
        <h2>New Goods</h2>
      </div>

      <div class="p-goods">
      <?php  if (have_posts()) : while (have_posts()) :the_post(); ?>

      <a class="p-each-goods" href="<?php the_permalink(); ?>">
          <div>
          <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail('medium',['class' => 'goods-img js-api delay-time03']); ?>
          <?php else: ?>
            <?php endif; ?>
            
            <p>ペンネ１</p>
            <p>２００円</p>
          </div>
          </a>
          
          
          <?php endwhile;?>
          <?php else: ?>
          <?php endif; ?>
          </div>
    </div>
    <!-- <div class="ball-box"> -->
        <div class="l_pagetop">      
          <a href="#top" class="pagetop" id="js_pagetop">
          <div class="pagetop_ball"></div>
        </a>
        </div>
      <!-- </div> -->
  </main>

  <?php get_sidebar(); ?>
  <?php get_footer(); ?>
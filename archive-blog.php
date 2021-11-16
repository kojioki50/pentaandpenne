<?php get_header(); ?>
  <div class="video-container">
    <div class="p-main-title blur">
       <h1>BLOG</h1>
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
       <? get_search_form(); ?>

       <?php  if (have_posts()) : while (have_posts()) :the_post(); ?>
       <div class="p-blog__box">

        <div class="p-blog__img">
          <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail('medium',['class' => 'goods-img js-api delay-time03']); ?>
          <?php else: ?>
          <?php endif; ?>
        </div>

          <div class="p-blog__text">
            <?php the_excerpt(); ?>
            <a  class="c-detail" href="<?php the_permalink(); ?>">詳しく見る</a>
          </div>
     
      </div>

          <?php endwhile;?>
          <?php else: ?>
          <?php endif; ?>
          
          
          <div class="p-main-special"><a class="goods" href="<?php echo esc_url(home_url('/event'));?>">特設ページ</a></div>
          
          
          <?php wp_pagenavi();?>
        </div>
  </main>
        
          <?php get_sidebar(); ?>
          
          <?php get_footer(); ?>
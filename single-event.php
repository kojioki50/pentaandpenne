<?php get_header(); ?>
<div class="video-container">
    <div class="p-main-title blur">
       <h1><?php the_title(); ?></h1>
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

     <div class="p-item-box">
         <div class="slick-container-item">
            <ul class="slider-for">
              <li><img class="p-top-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/pic3.png"></li>
              <li><img class="p-top-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/pic4.png"></li>
              <li><img class="p-top-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/pic5.png"></li>
            </ul>
            <ul class="slider-nav">
              <li><img class="p-top-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/pic3.png"></li>
              <li><img class="p-top-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/pic4.png"></li>
              <li><img class="p-top-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/pic5.png"></li>
            </ul>
        </div>

          <div class="p-item-text">
            <h1>タイトル</h1>
            <h2>値段</h2>
            <p>説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>
            <button class="cart-button">カートに入れる</button>
          </div>
      </div>
            
            <div class="p-main-special"><a class="goods" href="<?php echo esc_url(home_url('/event'));?>">特設ページ</a></div>
            
           <div class="slick-container">
        <h2>こちらもいかがでしょうか</h2>
      <div class="center">
      <?php
      $args = array(
        'post_type' =>'post',
        // 'post__not_in' => array($post -> ID),
        'posts_per_page' => -1,
        'orderby' => 'rand'
      );
      $new_query = new WP_Query($args);
      if($new_query->have_posts()): while($new_query->have_posts()):
        $new_query->the_post();
      ?>
        <?php if(has_post_thumbnail()):?>
      <div> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium',['class' => 'top-img']); ?></a> </div>
        <?php endif;?>
        <?php endwhile;
        wp_reset_postdata();
        else: ?>
        <h3>投稿はありません。</h3>
        <?php endif; ?>
      </div>
      </div>
              <?php wp_pagenavi();?>
            </div>
          </main>
        
          <?php get_sidebar(); ?>
          
          <?php get_footer(); ?>
          
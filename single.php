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
              <ul class="center">
                <li><img class="p-top-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/pic3.png"></li>
                <li><img class="p-top-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/pic4.png"></li>
                <li><img class="p-top-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/pic5.png"></li>
                <li><img class="p-top-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/pic3.png"></li>
                <li><img class="p-top-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/pic4.png"></li>
                <li><img class="p-top-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/pic5.png"></li>
                <li><img class="p-top-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/pic3.png"></li>
                <li><img class="p-top-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/pic4.png"></li>
                <li><img class="p-top-img" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/pic5.png"></li>
              </ul>
              <?php wp_pagenavi();?>
            </div>
          </main>
        
          <?php get_sidebar(); ?>
          
          <?php get_footer(); ?>
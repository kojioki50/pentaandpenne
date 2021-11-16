<?php get_header(); ?>
  <div class="video-container">
    <div class="p-main-title blur">
       <h1>NEWS</h1>
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

        <div class="p-goods">
      <?php  if (have_posts()) : while (have_posts()) :the_post(); ?>

      <a class="p-each-goods" href="<?php the_permalink(); ?>">
          <div>
          <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail('medium',['class' => 'goods-img js-api delay-time03']); ?>
          <?php else: ?>
            <?php endif; ?>

            <?php
            //全てのカスタムフィールドの情報を取得
            $fields = get_post_custom();
            //カスタムフィールドの情報がある場合
            if($fields){?>
              <ul class="p-each-price">
              <?php foreach( $fields as $key => $value) {
                //_（アンダースコア）から始まるキー以外の場合
                if(!(preg_match( "/^_/",$key))){
                  //キーの最初の値を取得
                  echo esc_html( "<li>" .$key . "</li>");
                  echo esc_html("<li>" ."¥". $value[0] . "</li>");
                }
              } ?>
              </ul>
            <?php }
            ?>

          </div>
          </a>
          
          
          <?php endwhile;?>
          <?php else: ?>
          <?php endif; ?>
          </div>

          <?php wp_pagenavi();?>
        </div>
  </main>
        
          <?php get_sidebar(); ?>
          
          <?php get_footer(); ?>
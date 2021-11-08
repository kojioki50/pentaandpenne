<?php get_header(); ?>
<div class="video-container">
    <div class="p-main-title blur">
      <h1> <?php echo the_search_query(); ?>の検索結果 </h1>
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

      <div class="new-goods">
            <?php if (have_posts() && get_search_query()) : while (have_posts()) : the_post();?>
            <?php if(has_post_thumbnail()): ?>
        <div class="p-each-goods">
            <?php the_post_thumbnail('medium', ['class' => 'goods-img js-api delay-time03']); ?>
            <?php else:?>
          <img src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/penne1.
            jpg" class="goods-img js-api delay-time03">
            <?php endif; ?>
          <p><?php the_title() ?></p>
          <p><?php the_excerpt() ?></p>
        </div>
      <?php endwhile; ?>
      </div>
      <?php else: ?>
        <div>
          <div class="archive-nokeyword">
             <h2>検索キーワードに該当する記事がありませんでした。</h2>
          </div>
        </div>
      <?php endif; ?>

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
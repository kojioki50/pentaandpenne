<?php get_header(); ?>
<div class="video-container">
    <div class="p-main-title blur">
       <h1>AN EVENT PAGE</h1>
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
         
         <div>
        <?php if(has_post_thumbnail()): ?>
          <a class="p-each-goods" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium',['class' => 'goods-img js-api delay-time03']); ?></a>
          <?php else: ?>
            <?php endif; ?>
            <p>ペンネ１</p>
            <p>２００円</p>
          </div>
            <?php endwhile;?>
            <?php else: ?>
            <?php endif; ?>
          </div>
            </div>
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
    </main>

   <?php get_sidebar(); ?>
   <?php get_footer(); ?>
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
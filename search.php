<?php get_header(); ?>
<div class="p-main-title blur">
       <h1 class="search-result"> <?php echo the_search_query(); ?>の検索結果 </h1>
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
      <?php else: ?>
        <div class="p-nokeyword-box">
          <div class="p-archive-nokeyword">
             <h2>検索キーワードに該当する記事がありませんでした。</h2>
          </div>
      </div>
       
      <?php endif; ?>
      </div>
      <?php get_template_part('partials/slick'); ?>

      <?php wp_pagenavi();?>
    </div>
  </main>

  <?php get_sidebar(); ?>
  <?php get_footer(); ?>
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
       
        <?php  if (have_posts()) : while (have_posts()) :the_post(); ?>
        <div class="item-img" href="<?php the_permalink(); ?>">

          <?php if(has_post_thumbnail()): ?>
          <?php the_post_thumbnail('large',['class' => 'goods-img js-api delay-time03']); ?>
          <?php else: ?>
          <?php endif; ?>

        </div>

         <div class="p-item-text">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
          </div>
          <?php endwhile;?>
          <?php else: ?>
          <?php endif; ?>
      </div>
            
            <div class="p-main-special"><a class="goods" href="<?php echo esc_url(home_url('/event'));?>">特設ページ</a></div>
            
            <?php get_template_part('partials/slick'); ?>
              <?php wp_pagenavi();?>
            </div>
          </main>
        
          <?php get_sidebar(); ?>
          
          <?php get_footer(); ?>
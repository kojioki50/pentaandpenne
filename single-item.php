<?php get_header(); ?>

  <div class="p-main-title blur">
       <h1>ITEM</h1>
    </div>
  <main>
    <!-- <ul class="share">
      <li><span>2021 PENTA AND PENNE</span></li>
      <li><a><i class="bi bi-twitter"></i></a></li>
      <li><span>SHERE</span></li>
    </ul> -->
    <div class="l-main-container">
     <? get_search_form(); ?>

     <div class="p-item-box">
         <div class="slick-container-item">
            <?php the_content(); ?>
          
        </div> 

          <div class="p-item-text">
            <h1>タイトル</h1>
            <h2>値段</h2>
            <p>説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。</p>
            <button class="cart-button">カートに入れる</button>
          </div>
     
      </div>


         <?php get_template_part('partials/slick'); ?>
              <?php wp_pagenavi();?>
            </div>
          </main>
        
          <?php get_sidebar(); ?>
          
          <?php get_footer(); ?>
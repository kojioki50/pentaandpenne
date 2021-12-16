<?php if(!defined('ABSPATH')){
  exit; 
}?>

<?php get_header(); ?>
<div class="p-main-title__woo blur">
  <h1>PENTA AND PENNE'S TALE </h1>
</div>
<div class="l-main-container">
  <? get_search_form(); ?>
  
  <div class="p-item-box">

    <?php  while (have_posts()) :the_post(); ?>
      <?php wc_get_template_part('content', 'single-product'); ?>
      <?php endwhile;?>
    
  </div> 

      </div>


              <?php wp_pagenavi();?>
            </div>
          </main>
        
          <?php get_sidebar(); ?>
          
          <?php get_footer(); ?>





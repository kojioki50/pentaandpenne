<?php get_header(); ?>
  <div class="video-container">
    <div class="p-main-title__video blur">
      <h1>PENTA AND PENNE'S TALE </h1>
    </div>
    <img class="top-image js-onload" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/penjipene-top.png" >
    <video class='video' src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/Snow.mp4" autoplay muted loop></video>
  </div>
  <main>
    <ul class="share__top">
      <li><span>2021 PENTA AND PENNE</span></li>
      <li><a><i class="bi bi-twitter"></i></a></li>
      <li><span>twitter</span></li>
    </ul>
    <div class="l-main-container">
     <? get_search_form(); ?>
     <p class="p-news">ニュース</p>
<div class="p-info-box">
      <?php
$information= get_posts( array(
//ここで取得条件を指定する
  'post_type' => 'post'
));
if( $information):
?>
<ul class="info-list">
<?php
foreach( $information as $post ):
setup_postdata( $post );
?>
<li>
<?php $news = get_post_meta(get_the_ID(),'ニュース', true);
if($news):
 
  if($news == "商品情報"){?>
    <a href="<?php the_permalink();?>"><span class="p-topnews"><?php echo esc_html($news) ?></span><?php the_time('Y年n月j日'); ?> -  <?php the_title(); ?></a>
    </li>
  <?php } elseif ($news == "お知らせ"){?>
     <a href="<?php the_permalink(); ?>"><span class="p-infonews"><?php echo esc_html($news) ?></span><?php the_time('Y年n月j日'); ?> -  <?php the_title(); ?></a>
    </li>
  <?php } elseif ($news == "イベント") {?>
     <a href="<?php the_permalink(); ?>"><span class="p-importantnews"><?php echo esc_html($news) ?></span><?php the_time('Y年n月j日'); ?> -  <?php the_title(); ?></a>
    </li>
  <?php } else ?> <span class="othernews"></span>
  <?php  endif; ?>


<?php
endforeach;
wp_reset_postdata();
?>
</ul>
<?php else: ?>
<p>表示できる情報はありません。</p>
<?php endif; ?>
</div>


<a class="p-past__info" href="<?php echo esc_url(home_url('/archive'));?>">ニュース一覧はこちら</a>
      <div class="p-main-catch">
      <img class="main-catch_img js-api" src="<?php echo esc_url( get_template_directory_uri()); ?>/./image/penjipenne-cachi.png">
      </div>
      <div class="p-intro-container">
        <div class="p-intro"></div>

          <div class="p-goods-box js-goods-api">
            <h2><a href="<?php echo esc_url(home_url('/item'));?>">Go To Goods</a></h2>
          </div>
      </div>

      <div class="back-img"></div>

      <div class="p-main-special"><a class="goods" href="<?php echo esc_url(home_url('/event'));?>">特設ページ</a></div>

      <div class="p-new-box js-goods-new-api">
        <h2>New Goods</h2>
      </div>


      <div class="p-goods">
         <?php
      $args =
      array(
        'post_type' =>'item',
        'posts_per_page' => -1,
        'orderby' => 'DESC',
        'tax_query' => array(
          array(
            'taxonomy' => 'genre',
            'field' => 'slug',
            'terms' => 'new',
          )
        )

      );?>
      
      <?php $new_query = new WP_Query($args); ?>
      <?php if($new_query->have_posts()): while($new_query->have_posts()): ?>
      <?php $new_query->the_post(); ?>
        <?php if(has_post_thumbnail()):?>
      <div class="p-each-goods"> <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('medium',['class' => 'goods-img js-api delay-time03']);?>
      </a> 
      
     </div>
      <?php endif;?>
      <?php endwhile; ?>
      <?php wp_reset_postdata();?>
      <?php else: ?>
        
        <h3>投稿はありません。</h3>
        <?php endif; ?>
        
      </div>
      </div>
    



        <div class="l_pagetop">
          <a href="#top" class="pagetop" id="js_pagetop">
          <div class="pagetop_ball"></div>
        </a>
        </div>
  </main>

  <?php get_sidebar(); ?>
  <?php get_footer(); ?>
  
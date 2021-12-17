<?php get_header(); ?>
    <div class="p-main-title blur">
       <h1><?php the_title(); ?></h1>
    </div>

    <main>

      <div class="l-main-container">
        <div class="p-blog__single__box">
          <?php the_content(); ?>
            <a  class="c-detail__blog" href="<?php echo esc_url(home_url('/blog'));?>">back archive</a>
        </div>
            <div class="p-main-special"><a class="goods" href="<?php echo esc_url(home_url('/event'));?>">特設ページ</a></div>

              <?php wp_pagenavi();?>
      </div>
    </main>
          <?php get_sidebar(); ?>
          <?php get_footer(); ?>
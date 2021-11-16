<?php
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');







  function penta_script() {
    wp_enqueue_style('fontawesome',"https://use.fontawesome.com/releases/v5.6.1/css/all.css");
    wp_enqueue_style('googleapis',"http://fonts.googleapis.com/icon?family=Material+Icons");
    wp_enqueue_style( 'ress', "https://unpkg.com/ress/dist/ress.min.css" );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array(), '1.0');
    wp_enqueue_script('api-script', get_template_directory_uri() . '/js/api.js', array(), '1.0' ,true);
  }

  add_action('wp_enqueue_scripts','penta_script');

  // function post_has_archive( $args, $post_type) {

  //   if ('post' == $post_type) {
  //       $args['rewrite'] = true;
  //       $args['has_archive'] = 'archive';
  //   }
  //   return $args;
  // }
  // add_filter('register_post_type_args', 'post_has_archive', 10, 2);

  add_action('init',function(){
    register_post_type('event',[
      'label' => 'イベント',
      'public' => true,
      'menu_icon'=> 'dashicons-info',
      'supports' => ['thumbnail', 'title', 'editor', 'custom-fields'],
      'show_in_rest' => true,
      'has_archive' => true,
    ]);

  register_taxonomy('genre', 'event', [
    'label' => '商品ジャンル',
    'hierarchical' => true,
  ]);
  });

  add_action('init',function(){
    register_post_type('item',[
      'label' => 'アイテム',
      'public' => true,
      'menu_icon'=> 'dashicons-beer',
      'supports' => ['thumbnail', 'title', 'editor', 'custom-fields'],
      'show_in_rest' => true,
      'has_archive' => true,
    ]);
    });

  add_action('init',function(){
    register_post_type('blog',[
      'label' => 'ブログ',
      'public' => true,
      'menu_icon'=> 'dashicons-car',
      'supports' => ['thumbnail', 'title', 'editor', 'custom-fields'],
      'show_in_rest' => true,
      'has_archive' => true,
    ]);
    });

    //thumbnailの高さ、幅を消してwp-post-imgで自分でスタイリング。
    add_filter( 'post_thumbnail_html', 'custom_attribute' );
    function custom_attribute( $html ){
        // width height を削除する
        $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
        return $html;
    }
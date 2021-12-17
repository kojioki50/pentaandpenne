<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri());?>/slick/slick.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/slick/slick-theme.css" media="screen" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
  <title>ペンタとペンネの物語</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
  
  <div class="l-wrapper">
  <header>
    <div class="header-sp-menu">
      <ul>
        <li><button class="menu js-menu box fadeup delay-time01">メニュー</button></li>
        <li><a class="title box fadeup" href="<?php echo esc_url(home_url('/'));?>">PENS</a></li>
         <li><a class="title box fadeup delay-time01" href="<?php echo esc_url(home_url('/cart'));?>">カート</a></li>
      </ul>
    </div>
    <div class="header-menu">
      <ul>
        <li><a class="title box fadeup delay-time02" href="<?php echo esc_url(home_url('/shop'));?>"> グッズ</a></li>
        <li><a class="title box fadeup delay-time01" href="<?php echo esc_url(home_url('/contact'));?>"> CONTACT US</a></li>
        <li><a class="title box fadeup" href="<?php echo esc_url(home_url('/'));?>">PENS</a></li>
        <li><a class="title box fadeup delay-time01" href="<?php echo esc_url(home_url('/blog'));?>">BLOG</a></li>
        <li><a class="title box fadeup delay-time02" href="<?php echo esc_url(home_url('/cart'));?> ">カート</a></li>
      </ul>
      
  </div>
  </header>
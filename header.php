<!DOCTYPE html>
<html lang="en">
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
        <li><button class="menu js-menu box fadeup ">メニュー</button></li>
        <li><a class="title box fadeup" href="<?php echo esc_url(home_url('/'));?>">PENS</a></li>
      </ul>
    </div>
    <div class="header-menu">
      <ul>
        <li><a class="title box fadeup delay-time02" href="<?php echo esc_url(home_url('/archive'));?>"> グッズ</a></li>
        <li><a class="title box fadeup delay-time01" href="<?php echo esc_url(home_url('/contact-form'));?>"> お問い合わせ</a></li>
        <li><a class="title box fadeup" href="<?php echo esc_url(home_url('/'));?>">PENS</a></li>
        <li><a class="title box fadeup delay-time01">利用ガイド</a></li>
        <li><button class="title box fadeup delay-time02">カート</button></li>
      </ul>
      
  </div>
  </header>
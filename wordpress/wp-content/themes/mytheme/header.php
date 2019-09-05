<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <title>Document</title>
</head>
<body>
  <div class="wrap">
    <!-- header -->
    <header id="header" class="container">
      <ul class="menu">
        <li><i class="fas fa-globe-americas"></i></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="<?php echo home_url('blog')?>">BLOG</a></li>
        <li><a href="#form">FORM</a></li>
      </ul>

      <?php wp_head();?>
</header>
    <!--/ headerここまで -->

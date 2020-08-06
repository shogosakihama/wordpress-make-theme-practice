<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php bloginfo('name');
          wp_title('|', true, 'left'); ?></title>
  <!-- <meta name="description" content="">
  <meta name="keywords" content=""> -->
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="icon" type="image/png" href="android-chrome-256x256.png">
  <meta property="og:title" content="">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content=">
  <meta property=" og:site_name" content="">
  <meta property="og:description" content="">
  <meta name="twitter:card" content="summary_large_image">
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="contents">
      <div class="inner">
        <div class="logo">
          <a href="/roooot">
            <img src="<?php bloginfo('template_directory'); ?>/images/common/logo.png" alt="roooot">
          </a>
        </div>
        <div class="sns-btn">
          <a href="">
            <img src="<?php bloginfo('template_directory'); ?>/images/common/instagram.png" alt="instagram">
          </a>
          <a href="">
            <img src="<?php bloginfo('template_directory'); ?>/images/common/facebook.png" alt="facebook">
          </a>
          <a href="">
            <img src="<?php bloginfo('template_directory'); ?>/images/common/twitter.png" alt="twitter">
          </a>
        </div>
      </div>
    </div>
  </header>

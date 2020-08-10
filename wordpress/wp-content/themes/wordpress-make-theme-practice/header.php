<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <title>WordPressの練習</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <!--resetする-->
  <link rel='stylesheet' href='https://unpkg.com/ress/dist/ress.min.css'>


  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>

<body>

  <header>
    <header>
      <nav class="navbar navbar-default" style="margin-bottom:0;">
        <div id="bs-navbar-collapse-1" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="http://localhost:8000">HOME</a></li>
            <li><a href="http://localhost:8000/?page_id=9">固定ページ</a></li>
            <li><a href="http://localhost:8000/?p=16">投稿ページ</a></li>
            <!-- <li><a href="#">CONTACT</a></li> -->
          </ul>
        </div>
      </nav>
      <div id="top-vg">
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/IMG_2589.JPG" alt="トップページ画像"> -->
      </div>

      

      <div class="fa-plus">
        <img style="width:10%" class="button" src="<?php echo get_template_directory_uri(); ?>/images/三点リーダーアイコン2.png">
      </div>
      <div class="modal-background">
        <div class="modal-background_escape">
          
        </div>
        <div class="modal">
          <ul>
            <li><a href="http://localhost:8000">HOME</a></li>
            <li><a href="http://localhost:8000/?page_id=9">固定ページ</a></li>
            <li><a href="http://localhost:8000/?p=16">投稿ページ</a></li>
            <!-- <li><a href="#">CONTACT</a></li> -->
          </ul>
          <div class="escape">
           <a> close</a>
          </div>
        </div>
      </div>
    </header>
  </header>

 
</body>
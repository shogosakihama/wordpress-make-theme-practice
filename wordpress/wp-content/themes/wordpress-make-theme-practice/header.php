<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <title>ウェブストエイト</title>
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
        <!-- <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
          <span class="sr-only">メニュー</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div> -->
        <!-- <i class="fa-plus">
          Menu
        </i>
        <div class="modal-background">
          <div >
            <ul class="modal">
              <li><a href="#">HOME</a></li>
              <li><a href="#">PROFILE</a></li>
              <li><a href="#">BLOG</a></li>
              <li><a href="#">CONTACT</a></li>
            </ul>
            <div class="escape">
              close
            </div>
          </div>
        </div> -->
        <div id="bs-navbar-collapse-1" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">HOME</a></li>
            <li><a href="#">PROFILE</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="#">CONTACT</a></li>
          </ul>
        </div>
      </nav>
      <div id="top-vg">
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/IMG_2589.JPG" alt="トップページ画像"> -->
      </div>
    </header>
  </header>

  <script>
    $(document).on('turbolinks:load', function() {
      $(function() {

        $('.fa-plus').on('click', function(e) {
          e.preventDefault();
          $(this).siblings().fadeIn();
        });

        $('.escape').on('click', function(e) {
          e.preventDefault();
          $('.modal').fadeOut();
        });

      });
    });
  </script>
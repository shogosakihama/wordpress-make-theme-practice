<!DOCTYPE html>
<html lang="ja">

<body>
  <div class="container">
    <?php get_header('header'); ?>

    <section id="content">
      <i class="fa-plus">
        Menu
      </i>
      <div class="modal-background escape">
        <div class="modal">
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">PROFILE</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="#">CONTACT</a></li>
          </ul>
          <div class="escape">
            close
          </div>
        </div>
      </div>
      <div id="content-wrap">

        <div id="main" class="">
          <h1 class="text-center">これはマークアップの練習です</h1>
          <p class="page-explain">
            マークアップ・スクールは自分でホームページ制作・Web集客したい方向けの
            少人数制個別指導のスクール・塾です。
            <br><br>
            継続6ヶ月コースとお試し1ヶ月コースから選択して受講できます。
          </p>
          <div class="course-explanation">
            <div class="each-course">
              <p><img class="animate__bounceIn" src="<?php echo get_template_directory_uri(); ?>/images/IMG_2589.JPG" alt="6ヶ月コース画像"></p>
              <h2 class="text-center">しっかり6ヶ月コース</h2>
              <p class="lesson-explain">ホームページ作成からWeb集客まで一通り習得して売上拡大したい方向けのコース</p>
            </div>
            <div class="each-course">
              <p><img class="animate__bounceIn" src="<?php echo get_template_directory_uri(); ?>/images/IMG_2589.JPG" alt="1ヶ月コース画像"></p>
              <h2 class="text-center">お試し1ヶ月コース</h2>
              <p class="lesson-explain">特定範囲のみ習いたい・まずは試しに受講してみたい方向けのコース</p>
            </div>
          </div>
          <p class="text-center">
            <br>
            お申し込みは<a href="#">こちらから</a>
            <br><br>
          </p>
        </div>


      </div>
    </section>
    <footer>
      <div>
        <p class="copyright">Copyright © Markup All Rights Reserved.</p>
      </div>
    </footer>

  </div>
</body>

</html>

<script>
      $(function() {

        $('.fa-plus').on('click', function() {
          $('.modal-background').fadeIn();
        });

        $('.escape').on('click', function(e) {
          e.preventDefault();
          $('.modal-background').fadeOut();
        });

      });
</script>
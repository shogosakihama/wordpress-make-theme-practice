<!DOCTYPE html>
<html lang="ja">

<body>
  <div class="container">
    <?php get_header('header'); ?>

    <section id="content">

      <div id="content-wrap">

        <div id="main" class="">
          <h1 class="page-explain_title">これはマークアップの練習です</h1>
          <p class="page-explain">
            マークアップ・スクールは自分でホームページ制作・Web集客したい方向けの少人数制個別指導のスクール・塾です。
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

        </div>

        <div class="posts">
          <h1>記事一覧</h1>
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
          ?>
              <h2>
                <div>
                  <table>
                    <th><?php the_time('Y年n月j日'); ?>&nbsp;&nbsp;</th>
                    <br>
                    <th><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></th>
                  </table>
              </h2>
          <?php
            endwhile;
          endif;
          ?>
        </div>

        <div class="sp-posts">
          <h1 class="article-title">記事一覧</h1>
          <br></br>
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
          ?>
              <h2>
                <div>
                  <th><?php the_time('Y年n月j日'); ?>&nbsp;&nbsp;</th>
                  <br>
                  <th><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></th>
                  <br>
                  <br>

              </h2>
          <?php
            endwhile;
          endif;
          ?>
        </div>


      </div>
    </section>
    <?php get_footer('footer'); ?>

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
    $('.modal-background_escape').on('click', function(e) {
      e.preventDefault();
      $('.modal-background').fadeOut();
    });

  });
</script>
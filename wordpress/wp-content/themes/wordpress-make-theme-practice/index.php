<!DOCTYPE html>
<html lang="ja">

<body>
  <div class="container">
    <?php get_header('header'); ?>

    <section id="content">

      <div id="content-wrap">

        <div id="main" class="">
          <h1 class="page-explain_title">これはWordPressの練習です</h1>
          <p class="page-explain">
            デザインは雑ですが、WordPressの基本的な機能を練習しています。
            <br><br>
            このindexページはエディターでマークアップしています。
          </p>
          <div class="course-explanation">
            <div class="each-course">
              <p><a class="image" href="http://localhost:8000/?page_id=9"><img class="animate__bounceIn" src="<?php echo get_template_directory_uri(); ?>/images/IMG_2589.JPG" alt="6ヶ月コース画像"></a></p>
              <h2 class="text-center">固定ページ</h2>
              <p class="lesson-explain">固定ページの投稿を確認することができます。</p>
            </div>
            <div class="each-course">
              <p><a class="image" href="http://localhost:8000/?p=16"><img class="animate__bounceIn" src="<?php echo get_template_directory_uri(); ?>/images/IMG_2589.JPG" alt="1ヶ月コース画像"></a></p>
              <h2 class="text-center">投稿ページ</h2>
              <p class="lesson-explain">投稿ページの投稿を確認することできます。</p>
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
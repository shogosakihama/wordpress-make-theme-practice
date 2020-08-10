<!DOCTYPE html>
<html lang="ja">

<body>
  <div class="container">
    <?php get_header('header'); ?>

    <section id="content">


      <div id="content-wrap">

        <?php if (have_posts()) :
          while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>
            <section>
              <?php the_content(); ?>
            </section>

        <?php endwhile;
        endif; ?>

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
<?php get_header(); ?>
<div class="contents">
  <?php the_post(); ?>

  <div class="single-header">

    <div class="date-title">
      <div class="date-title__mark" style="color: <?php the_field('mark_color'); ?>">&#8734;</div>
      <div class="date-title__date"><?php echo get_the_date('Y.n.j'); ?></div>
    </div>

    <h1 class="single-header__title">
      <?php the_title(); ?>
    </h1>

    <div class="single-header__bottom">
      <div class="single-header__bottom__tag">
        <?php the_tags('<object>#', '</object>&nbsp;&nbsp;<object>#', '</object>'); ?>
      </div>
      <div class="single-header__bottom__sns">
        <span>SHARE</span>
        <a href="">
          <img src="<?php bloginfo('template_directory'); ?>/images/common/facebook-color-logo.png" alt="facebook">
        </a>
        <a href="">
          <img src="<?php bloginfo('template_directory'); ?>/images/common/twitter-color-logo.png" alt="twitter">
        </a>
      </div>
    </div>
  </div>

  <div class="container">
    <main class="main">

      <div class="single">

        <div class="single__body">
          <div class="single__body-thum">
            <?php echo getThumbImg(); ?>
            <?php getCaption(); ?>
          </div>

          <div class="single__body__profile">
            <div class="single__body__profile__logo">
              <img src="<?php bloginfo('template_directory'); ?>/images/common/profile.png" alt="profile">
            </div>
            <div class="single__body__profile__name">
              <?php the_field('profile_name'); ?>
            </div>
            <div class="single__body__profile__introduction">
              <?php nl2br(the_field('profile_introduction')); ?>
            </div>
          </div>

          <?php the_content(); ?>
        </div>

        <?php if (get_field('detail_banner_image')) : ?>
          <div class="single__banner">
            <a href="<?php the_field('detail_banner_url'); ?>" target="_blank">
              <img src="<?php the_field('detail_banner_image'); ?>">
            </a>
          </div>
        <?php endif; ?>

        <div class="single__curator">
          <div class="single__curator__text">
            <div class="single__curator__text__logo">
              <img src="<?php bloginfo('template_directory'); ?>/images/common/curator.png" alt="curator">
            </div>

            <?php if (get_field('curator_image')) : ?>
              <div class="single__curator__image sp">
                <img src="<?php the_field('curator_image'); ?>">
              </div>
            <?php endif; ?>

            <div class="single__curator__text__name">
              <?php the_field('curator_name'); ?>
            </div>
            <div class="single__curator__text__introduction">
              <?php nl2br(the_field('curator_introduction')); ?>
            </div>
          </div>
          <?php if (get_field('curator_image')) : ?>
            <div class="single__curator__image pc">
              <img src="<?php the_field('curator_image'); ?>">
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="single-navigation">
        <?php
        $prev_post = get_previous_post(false, false);
        $next_post = get_next_post(false, false);
        ?>

        <?php if ($prev_post) : ?>
          <a class="single-navigation__prev" href="<?php echo get_permalink($prev_post->ID); ?>">
            <div class="single-navigation__prev__arrow">
              <img src="<?php bloginfo('template_directory'); ?>/images/common/prev.png" alt="prev">
            </div>
            <div class="single-navigation__content">
              <div class="single-navigation__content__image">
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($prev_post->ID)); ?>" alt="">
              </div>
              <div>
                <div class="date-title">
                  <div class="date-title__mark" style="color: <?php the_field('mark_color', $prev_post); ?>">&#8734;</div>
                  <div class="date-title__date"><?php echo get_the_date('Y.n.j', $prev_post); ?></div>
                </div>
                <?php the_field('title_excerpt', $prev_post); ?>
              </div>
            </div>
          </a>
        <?php endif; ?>

        <?php if ($next_post) : ?>
          <a class="single-navigation__next" href="<?php echo get_permalink($next_post->ID); ?>">
            <div class="single-navigation__next__arrow">
              <img src="<?php bloginfo('template_directory'); ?>/images/common/next.png" alt="next">
            </div>
            <div class="single-navigation__content">
              <div class="single-navigation__content__image">
                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($next_post->ID)); ?>" alt="">
              </div>
              <div>
                <div class="date-title">
                  <div class="date-title__mark" style="color: <?php the_field('mark_color', $next_post); ?>">&#8734;</div>
                  <div class="date-title__date"><?php echo get_the_date('Y.n.j', $next_post); ?></div>
                </div>
                <?php the_field('title_excerpt', $next_post); ?>
              </div>
            </div>
          </a>
        <?php endif; ?>
      </div>
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer();

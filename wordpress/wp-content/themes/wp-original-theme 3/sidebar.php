<aside class="sidebar">

  <?php if (is_front_page()) : ?>
    <div class="sidebar__catch pc">
      <h1>
        音大生たちの<br>かぎりない<br>生き方を知る<span>。</span>
      </h1>
      <img src="<?php bloginfo('template_directory'); ?>/images/common/side-logo.png" alt="roooot">
      <span>とは、音大生がつくる、音大生のためのウェブマガジン。さまざまな世界で活躍する音大出身者のインタビューを通じて、音楽にとどまらないキャリアや生き方を見つけるきっかけを発信します。</span>
    </div>
  <?php else : ?>

    <?php $pickup = new WP_Query('category_name=pickup&posts_per_page=3'); ?>
    <?php if ($pickup->have_posts()) : ?>
      <div class="sidebar__list">
        <h4>PICKUP</h4>
        <ul>
          <?php while ($pickup->have_posts()) : $pickup->the_post(); ?>
            <li>
              <a href="<?php the_permalink(''); ?>">
                <?php echo getThumbImg(); ?>
              </a>
              <a href="<?php the_permalink(''); ?>">
                <div class="date"><?php echo get_the_date('Y.n.j'); ?></div>
                <div class="title"> <?php the_field('title_excerpt'); ?></div>
              </a>
            </li>
          <?php endwhile; ?>
        </ul>
      </div>
    <?php endif; ?>

  <?php endif; ?>

  <?php if (function_exists('wpp_get_mostpopular')) : ?>
    <div class="sidebar__list sidebar__ranking">
      <h4>RANKING</h4>
      <?php
      $args = array(
        'post_type' => 'post',
        'range' => 'all',
        'limit' => 5,
        'title_length' => 38,
        'thumbnail_width' => 260,
        'thumbnail_height' => 170,
        'wpp_start' => '<ul>',
        'wpp_end' => '</ul>',
        'stats_views' => true,
        'stats_date' => true,
        'stats_date_format' => 'Y.m.d',
        // 'post_html' => '<li>{thumb}<a href="{url}"><div class="date">{date}</div><div class="title">{title_excerpt}</div></a></li>'
      );
      wpp_get_mostpopular($args);
      ?>
    </div>
  <?php endif; ?>

  <?php
  $args = array(
    'post_type' => 'banner',
    'posts_per_page' => 5,
  ); ?>
  <?php $my_query = new WP_Query($args); ?>
  <?php if ($my_query->have_posts()) : ?>
    <div class="banner">
      <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <a href="<?php the_field('banner_url'); ?>" target="_blank">
          <img src="<?php the_field('banner_image'); ?>">
        </a>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  <?php endif; ?>
</aside>

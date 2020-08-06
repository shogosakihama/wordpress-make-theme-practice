<?php get_header(); ?>
<div class="contents">
  <?php $pickup = new WP_Query('category_name=pickup&posts_per_page=3'); ?>
  <?php if ($pickup->have_posts()) : ?>
    <div class="page-title pc">PICKUP</div>
    <section class="pickup">
      <?php while ($pickup->have_posts()) : $pickup->the_post(); ?>
        <a href="<?php the_permalink(''); ?>" class="pickup__wrap pickup__item<?php echo $pickup->current_post; ?>">
          <?php echo getThumbImg(); ?>
          <div class="pickup__text">
            <div class="date-title">
              <div class="date-title__mark" style="color: <?php the_field('mark_color'); ?>">&#8734;</div>
              <div class="date-title__date"><?php echo get_the_date('Y.n.j'); ?></div>
            </div>
            <div class="pickup__text__title">
              <?php the_field('title_excerpt'); ?>
            </div>
            <div class="pickup__text__tags">
              <?php
              $count = 3;
              $tag_chk = get_the_tags();
              if ($tag_chk) :
                $tags = array_slice(get_the_tags(), 0, $count);
              ?>
                <object>
                  <?php foreach ($tags as $tag) : ?>
                    <a href="<?php echo get_tag_link($tag->term_id) ?>">
                      #<?php echo getTrimText($tag->name, 20); ?>
                    </a>
                  <?php endforeach; ?>
                </object>
              <?php endif; ?>
            </div>
          </div>
        </a>
      <?php endwhile; ?>
    </section>
  <?php endif; ?>

  <div class="container">

    <main class="main">
      <section class="archive">

        <div class="archive__catch sp">
          <h1>
            音大生たちのかぎりない<br>生き方を知る<span>。</span>
          </h1>
          <img src="<?php bloginfo('template_directory'); ?>/images/common/side-logo.png" alt="roooot">
          <span>とは、音大生がつくる、<br>音大生のためのウェブマガジン。<br>さまざまな世界で活躍する音大出身者の<br>インタビューを通じて、音楽にとどまらない<br>キャリアや生き方を見つけるきっかけを発信します。</span>
        </div>

        <?php
        // ランダム1件
        $random_args = array(
          'orderby' => 'rand',
          'posts_per_page' => 1,
        ); ?>
        <?php $my_query = new WP_Query($random_args); ?>
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
          <?php $random_id = get_the_ID(); ?>
          <a href="<?php the_permalink(''); ?>" class="archive__block">

            <div class="archive__block__image">
              <?php echo getThumbImg(); ?>
            </div>

            <div class="archive__block__content">
              <div class="date-title">
                <div class="date-title__mark" style="color: <?php the_field('mark_color'); ?>">&#8734;</div>
                <div class="date-title__date"><?php echo get_the_date('Y.n.j'); ?></div>
              </div>
              <div class="archive__block__content__title">
                <?php the_field('title_excerpt'); ?>
              </div>
              <div class="archive__block__content__body">
                <?php the_field('body_excerpt'); ?>
              </div>

              <div class="archive__block__content__bottom">
                <div class="archive__block__content__bottom__tags">
                  <?php
                  $count = 3;
                  $tag_chk = get_the_tags();
                  if ($tag_chk) :
                    $tags = array_slice(get_the_tags(), 0, $count);
                  ?>
                    <object>
                      <?php foreach ($tags as $tag) : ?>
                        <a href="<?php echo get_tag_link($tag->term_id) ?>">
                          #<?php echo getTrimText($tag->name, 10); ?>
                        </a>
                      <?php endforeach; ?>
                    </object>
                  <?php endif; ?>
                </div>

                <div class="archive__block__content__bottom__sns">
                  <object>
                    <a href="">
                      <img src="<?php bloginfo('template_directory'); ?>/images/common/facebook.png" alt="facebook">
                    </a>
                  </object>
                  <object>
                    <a href="">
                      <img src="<?php bloginfo('template_directory'); ?>/images/common/twitter.png" alt="twitter">
                    </a>
                  </object>
                </div>
              </div>
            </div>
          </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>

        <?php
        // 除外以外
        $args = array(
          'post__not_in' => array($random_id),
          'posts_per_page' => -1,
          'post_type' => 'post',
        );
        $query = new WP_Query($args);
        ?>

        <?php if ($query->have_posts()) : ?>
          <?php while ($query->have_posts()) : $query->the_post(); ?>
            <a href="<?php the_permalink(''); ?>" class="archive__block">

              <div class="archive__block__image">
                <?php echo getThumbImg(); ?>
              </div>

              <div class="archive__block__content">
                <div class="date-title">
                  <div class="date-title__mark" style="color: <?php the_field('mark_color'); ?>">&#8734;</div>
                  <div class="date-title__date"><?php echo get_the_date('Y.n.j'); ?></div>
                </div>
                <div class="archive__block__content__title">
                  <?php the_field('title_excerpt'); ?>
                </div>
                <div class="archive__block__content__body">
                  <?php the_field('body_excerpt'); ?>
                </div>

                <div class="archive__block__content__bottom">
                  <div class="archive__block__content__bottom__tags">
                    <?php
                    $count = 3;
                    $tag_chk = get_the_tags();
                    if ($tag_chk) :
                      $tags = array_slice(get_the_tags(), 0, $count);
                    ?>
                      <object>
                        <?php foreach ($tags as $tag) : ?>
                          <a href="<?php echo get_tag_link($tag->term_id) ?>">
                            #<?php echo getTrimText($tag->name, 10); ?>
                          </a>
                        <?php endforeach; ?>
                      </object>
                    <?php endif; ?>
                  </div>

                  <div class="archive__block__content__bottom__sns">
                    <object>
                      <a href="">
                        <img src="<?php bloginfo('template_directory'); ?>/images/common/facebook.png" alt="facebook">
                      </a>
                    </object>
                    <object>
                      <a href="">
                        <img src="<?php bloginfo('template_directory'); ?>/images/common/twitter.png" alt="twitter">
                      </a>
                    </object>
                  </div>
                </div>
              </div>
            </a>
          <?php endwhile; ?>
          <a href="posts" class="more">ARCHIVE</a>
        <?php endif; ?>
      </section>
    </main>
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer();

<div class="keyword">

  <div class="keyword__logo">
    <img src="<?php bloginfo('template_directory'); ?>/images/common/keyword-logo.png" alt="">
  </div>

  <?php if (function_exists('tag_groups_cloud')) ?>
  <?php
  $args = ['orderby' => 'count', 'order' => 'DESC'];
  $postTags = tag_groups_cloud($args, true);
  $tags = $postTags[1]['tags'];
  ?>

  <?php if ($tags) : ?>
    <div class="keyword__list">
      <?php foreach ($tags as $tag) : ?>
        <a href="<?php echo $tag['link']; ?>">#<?php echo $tag['name']; ?></a>&nbsp;&nbsp;&nbsp;
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</div>

<div class="footer-banner">
  <a href="">
    <img src="<?php bloginfo('template_directory'); ?>/images/common/music-compass-banner.png" alt="ミュージックコンパス">
  </a>
</div>

<footer>
  <div class="footer">
    <a href="/roooot" class="footer__logo">
      <img src="<?php bloginfo('template_directory'); ?>/images/common/footer-logo.png" alt="roooot">
    </a>
    <div class="footer__catch">
      <img src="<?php bloginfo('template_directory'); ?>/images/common/footer-catch.png" alt="音大生たちの限りない生き方を知る">
    </div>
    <div class="footer__sns-btn">
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
    <div class="footer__nav">
      <span class="footer__nav__list">
        <a href="/">運営会社</a>
      </span>
      <span class="copyright">&copy; 2020 root</span>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>

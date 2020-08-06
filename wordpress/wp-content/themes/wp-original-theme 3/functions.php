<?php

add_action('after_setup_theme', 'myThemeSetup');
add_action('wp_enqueue_scripts', 'myThemeScripts');
add_action('init', 'createPostType');
add_filter('post_thumbnail_html', 'custom_attribute');
add_action('widgets_init', 'myThemeWidgetsInit');
add_filter('register_post_type_args', 'postHasArchive', 10, 2);
add_filter('wpp_post', 'my_custom_popular_post', 10, 3);
add_shortcode('caption', 'custom_caption_shortcode');
add_filter('embed_oembed_html', 'youtube_responsive', 10, 4);

/**
 * テーマのセットアップ
 */
function myThemeSetup()
{
  // titleタグの出力
  add_theme_support('title-tag');
  // HTML5のサポート
  add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
  // アイキャッチのサポート
  add_theme_support('post-thumbnails');

  // カスタムエディターのCSS（パスは適宜変更してください）
  // add_editor_style(array('editor-style.css'));

  // カスタムメニューの使用（add_theme_supportは使わなくても問題ありません）
  // register_nav_menus(array(
  //   'primary' => 'Main Menu',
  //   'secondary'  => 'Sub Menu',
  // ));
}

/**
 * css, script読み込み
 */
function myThemeScripts()
{
  // CSS
  wp_enqueue_style(
    'my-style',
    get_theme_file_uri('/style.css'),
    array(),
    filemtime(get_theme_file_path('/style.css'))
  );

  // WordPressのjQueryを解除
  wp_deregister_script('jquery');
}

/**
 * デフォルト投稿アーカイブを任意のURLで出力する
 */
function postHasArchive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'posts';
  }
  return $args;
}

/**
 * カスタム投稿
 */
function createPostType()
{
  // banner
  register_post_type(
    'banner',
    array(
      'labels' => array(
        'name' => __('バナー'),
        'all_items' => __('一覧'),
        'singular_name' => __('バナー')
      ),
      'public' => true,
      'supports' => array('title', 'custom-fields'),
      'menu_position' => 4,
      'has_archive'   => true,
      'rewrite'       => array('slug' => 'banner')
    )
  );
}

/**
 * アイキャッチ画像表示
 */
function getThumbImg($size = 'full')
{
  // アイキャッチ画像のIDを取得
  $thumb_id = get_post_thumbnail_id();
  // $sizeサイズの画像内容を取得
  $thumb_img = wp_get_attachment_image_src($thumb_id, $size);
  // 画像のurlだけ取得
  $thumb_src = $thumb_img[0];
  //alt属性に入れるもの（記事のタイトルにしています）
  $thumb_alt = get_the_title();

  return '<img src="' . $thumb_src . '" alt="' . $thumb_alt . '">';
}

/**
 * 文字の丸め込み get_the_title用
 */
function getTrimText($text, $size = null)
{
  $text =  strip_tags($text);

  if (empty($size)) return $text;

  if (mb_strlen($text) > $size) {
    $text = mb_substr($text, 0, $size, 'UTF-8') . '...';
  }

  return $text;
}

/**
 * 本文抜粋を取得する + 文字の丸め込み
 */
function getCustomContent($content, $length = null)
{
  //デフォルトの長さを指定する
  $length = ($length ? $length : 70);
  //moreタグ以降削除
  $content =  preg_replace('/<!--more-->.+/is', "", $content);
  //ショートコード削除
  $content =  strip_shortcodes($content);
  //タグの除去
  $content =  strip_tags($content);
  //特殊文字の削除（今回はスペースのみ）
  $content =  str_replace("&nbsp;", "", $content);

  if (mb_strlen($content) > $length) {
    //文字列を指定した長さで切り取る
    $content =  mb_substr($content, 0, $length, 'UTF-8') . '...';
  }
  return $content;
}

/**
 * WordPress Popular Posts カスタム構文
 */
function my_custom_popular_post($post_html, $p, $instance)
{
  $thumbnail_img = get_the_post_thumbnail_url($p->id, 'vga');
  $date = get_the_date('Y.m.d', $p->id);
  $title = get_field('title_excerpt', $p->id);
  $output = '<li><a class="article-image" href="' . get_the_permalink($p->id) . '"><img src="' . $thumbnail_img . '" alt="' . $title . '"></a>
		<a class="article-image" href="' . get_the_permalink($p->id) . '"><div class="date">' . $date . '</div><div class="title">' . $title . '</div></a></li>';
  return $output;
}

/**
 * wp-captionのカスタマイズ
 */
function custom_caption_shortcode($attr, $content = null)
{
  if (!isset($attr['caption'])) {
    if (preg_match('#((?:<a [^>]+>s*)?<img [^>]+>(?:s*</a>)?)(.*)#is', $content, $matches)) {
      $content = $matches[1];
      $attr['caption'] = trim($matches[2]);
    }
  }

  $output = apply_filters('img_caption_shortcode', '', $attr, $content);
  if ($output != '')
    return $output;

  extract(shortcode_atts(array(
    'id'    => '',
    'align' => 'alignnone',
    'width' => '',
    'caption' => ''
  ), $attr, 'caption'));

  if (1 > (int) $width || empty($caption))
    return $content;

  if ($id) $id = 'id="' . esc_attr($id) . '" ';

  return '<figure ' . $id . 'class="wp-caption ' . esc_attr($align) . '">' . do_shortcode($content) . '<figcaption class="wp-caption-text">' . $caption . '</figcaption></figure>';
}

/**
 * YouTubeのiframeをdivで囲む
 */
function youtube_responsive($html, $url, $attr, $post_ID)
{
  if (preg_match('/^https:\/\/www\.youtube\.com/', $url)) {
    $html = '<div class="youtube">' . $html . '</div>';
  }
  return $html;
}

/**
 * アイキャッチのキャプションを表示
 */
function getCaption()
{
  if (has_post_thumbnail()) {
    $pt_caption = get_post(get_post_thumbnail_id())->post_excerpt;
    if ($pt_caption) echo "<figcaption>{$pt_caption}</figcaption>";
  }
}

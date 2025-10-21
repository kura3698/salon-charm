<?php
//* ===============================================
//# All-in-One WP Migration使用時の除外フォルダの登録
if (file_exists(get_template_directory() . "/inc/exclude-aio-migration.php")) {
    include_once get_template_directory() . "/inc/exclude-aio-migration.php";
}

//* ===============================================
//# フォントの読み込み
if (file_exists(get_template_directory() . "/inc/fonts.php")) {
    include_once get_template_directory() . "/inc/fonts.php";
}

//* ===============================================
//# テーマ設定用関数
function my_theme_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support(
        'html5',
        array( //HTML5でマークアップ
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script'
        )
    );
}
add_action('after_setup_theme', 'my_theme_setup');

//* ===============================================
//# CSSとJavaScriptの読み込み

// Swiperを使用するなら、コメントアウト解除
// function my_theme_enqueue_scripts()
// {
//     wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), false);
//     wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), false, true);
// }
// add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

function my_replace_jquery() {
    if (!is_admin()) { // 管理画面ではWordPressのjQueryをそのまま使う
        wp_deregister_script('jquery'); // WordPressのjQueryを削除
        wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.1.min.js', array(), '3.6.1', true);
    }
}
add_action('wp_enqueue_scripts', 'my_replace_jquery');

function my_script_init()
{
    $theme_uri = get_template_directory_uri(); // テーマのURIをキャッシュ

    // メインスクリプト（jQuery に依存）
    wp_enqueue_script('main-js', $theme_uri . '/js/script.js', array('jquery'), '1.0.1', true);

    // style.css のバージョンを取得
    $style_css_path = get_theme_file_path('/css/style.css');
    $style_css_ver = file_exists($style_css_path) ? filemtime($style_css_path) : '1.0.1';
    wp_enqueue_style('style-css', $theme_uri . '/css/style.css', array(), $style_css_ver, 'all');
}
add_action('wp_enqueue_scripts', 'my_script_init');

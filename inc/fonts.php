<?php
// Google Fonts の読み込み
function my_theme_enqueue_multiple_fonts_and_preload()
{
    $JP_font_url = 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap';
    wp_enqueue_style('Noto Sans Japanese', $JP_font_url, array(), null, 'all');

    $mincho_font_url = 'https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap';
    wp_enqueue_style('shippori-mincho', $mincho_font_url, array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_multiple_fonts_and_preload');

// preconnect の追加
function add_preconnect()
{
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    //フォールバック用
    echo '<link rel="dns-prefetch" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="dns-prefetch" href="https://fonts.gstatic.com">' . "\n";
}
add_action('wp_head', 'add_preconnect', 1);

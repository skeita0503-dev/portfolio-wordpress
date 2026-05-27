<?php


// CSSを読み込む
function my_theme_scripts() {
    wp_enqueue_style(
        'my-theme-style',           // 識別名（なんでもOK）
        get_stylesheet_uri(),       // style.cssのURLを自動取得
        array(),                    // 依存関係（今は空でOK）
        '1.0.0'                     // バージョン番号
    );
}
add_action('wp_head', 'my_theme_scripts');

// ナビゲーションメニューを登録
function my_theme_menus() {
    register_nav_menus(array(
        'header-menu' => 'ヘッダーメニュー'
    ));
}
add_action('init', 'my_theme_menus');
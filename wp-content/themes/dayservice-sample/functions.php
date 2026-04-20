<?php
/**
 * Dayservice Sample Theme Functions
 *
 * @package DayserviceSample
 */

// テーマサポート設定
function dayservice_setup() {
    // タイトルタグの自動出力
    add_theme_support('title-tag');

    // アイキャッチ画像
    add_theme_support('post-thumbnails');

    // HTML5マークアップ
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // ナビゲーションメニュー
    register_nav_menus(array(
        'primary' => 'メインナビゲーション',
        'footer'  => 'フッターメニュー',
    ));
}
add_action('after_setup_theme', 'dayservice_setup');

// スタイルとスクリプトの読み込み
function dayservice_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;700;800&family=Noto+Sans+JP:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Tailwind CSS (CDN)
    wp_enqueue_script(
        'tailwindcss',
        'https://cdn.tailwindcss.com',
        array(),
        null,
        false
    );

    // テーマスタイル
    wp_enqueue_style(
        'dayservice-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // スプラッシュスクリーン JS
    wp_enqueue_script(
        'dayservice-splash',
        get_template_directory_uri() . '/assets/js/splash.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // メインスクリプト（インラインで追加）
    wp_add_inline_script('dayservice-splash', '
        // ヘッダースクロール効果
        window.addEventListener("scroll", function() {
            const header = document.querySelector(".site-header");
            if (header) {
                header.classList.toggle("scrolled", window.scrollY > 50);
            }
        });

        // モバイルメニュー
        document.addEventListener("DOMContentLoaded", function() {
            const menuToggle = document.querySelector(".menu-toggle");
            const navLinks = document.querySelector(".nav-links");
            const navAnchors = document.querySelectorAll(".nav-links a");
            
            if (menuToggle && navLinks) {
                menuToggle.addEventListener("click", function() {
                    this.classList.toggle("active");
                    navLinks.classList.toggle("active");
                });
                
                // リンクタップでメニューを閉じる
                navAnchors.forEach(function(a) {
                    a.addEventListener("click", function() {
                        // プルダウントグルは閉じない
                        if (a.classList.contains("ig-toggle")) return;
                        menuToggle.classList.remove("active");
                        navLinks.classList.remove("active");
                    });
                });
            }
        });

        // スクロールアニメーション
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add("visible");
                }
            });
        }, { threshold: 0.1 });

        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".fade-in-up").forEach(function(el) {
                observer.observe(el);
            });
        });
    ');
}
add_action('wp_enqueue_scripts', 'dayservice_scripts');

// Tailwind CSS の設定をインラインで追加
function dayservice_tailwind_config() {
    ?>
    <script>
        if (typeof tailwind !== 'undefined') {
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            primary: {
                                DEFAULT: '#F97316',
                                light: '#FB923C',
                                dark: '#EA580C',
                            },
                            secondary: {
                                DEFAULT: '#86EFAC',
                                light: '#BBF7D0',
                            },
                            accent: '#FB7185',
                            base: {
                                DEFAULT: '#FFF7ED',
                                light: '#FFFBEB',
                            },
                        },
                        fontFamily: {
                            display: ['"M PLUS Rounded 1c"', '"Noto Sans JP"', 'sans-serif'],
                            main: ['"Noto Sans JP"', '"Hiragino Sans"', '"Meiryo"', 'sans-serif'],
                        },
                    },
                },
            }
        }
    </script>
    <?php
}
add_action('wp_head', 'dayservice_tailwind_config', 5);

// フロントページにWordPress投稿を表示するためのヘルパー
function dayservice_get_latest_news($count = 3) {
    return new WP_Query(array(
        'post_type'      => 'post',
        'posts_per_page' => $count,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    ));
}

// 投稿がない場合のサンプルデータ
function dayservice_get_sample_news() {
    return array(
        array(
            'date'  => '2026.04.15',
            'title' => '4月のレクリエーション予定を更新しました',
        ),
        array(
            'date'  => '2026.04.01',
            'title' => '新年度のご挨拶と新しいプログラムのお知らせ',
        ),
        array(
            'date'  => '2026.03.20',
            'title' => 'お花見イベントを開催いたします',
        ),
    );
}

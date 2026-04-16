/**
 * Splash Screen Controller
 * 2秒間のスプラッシュ表示後、メインコンテンツへ遷移
 */
(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {
        var splash = document.getElementById('splash-screen');
        if (!splash) return;

        // セッション内で1回だけ表示（sessionStorage利用）
        var hasVisited = sessionStorage.getItem('dayservice_splash_shown');

        if (hasVisited) {
            // 既にスプラッシュ表示済みなら即非表示
            splash.style.display = 'none';
            document.body.style.overflow = '';
            return;
        }

        // スプラッシュ表示中はスクロールを禁止
        document.body.style.overflow = 'hidden';

        // 2秒後にフェードアウト
        setTimeout(function() {
            splash.classList.add('fade-out');
            document.body.style.overflow = '';

            // アニメーション完了後にDOMから削除
            setTimeout(function() {
                splash.style.display = 'none';
            }, 800);
        }, 2000);

        // セッションに記録
        sessionStorage.setItem('dayservice_splash_shown', 'true');
    });
})();

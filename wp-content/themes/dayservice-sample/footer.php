<!-- ========================================
     Footer
======================================== -->
<footer class="site-footer" id="contact">
    <div class="footer-inner">
        <div class="footer-grid">
            <!-- Brand -->
            <div class="footer-brand">
                <div class="footer-logo">サンプル株式会社</div>
                <p>笑顔があふれる、もうひとつの我が家。<br>心を込めたおもてなしで、皆さまの毎日に安心と楽しさをお届けします。</p>
            </div>

            <!-- Site Map -->
            <div class="footer-links">
                <h4>サイトマップ</h4>
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                    <li><a href="#features">私たちの特徴</a></li>
                    <li><a href="#office">事業所案内</a></li>
                    <li><a href="#greeting">代表挨拶</a></li>
                    <li><a href="#company">会社概要</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="footer-links">
                <h4>お問い合わせ</h4>
                <ul>
                    <li><a href="tel:012-345-6789">012-345-6789</a></li>
                    <li><a href="mailto:info@sample-dayservice.example.com">info@sample-dayservice.example.com</a></li>
                    <li style="color: rgba(255,255,255,0.6); font-size: 0.8rem; margin-top: 0.5rem;">受付時間：平日 9:00〜18:00</li>
                </ul>
            </div>
        </div>

        <div class="footer-copyright">
            <p>&copy; <?php echo date('Y'); ?> サンプル株式会社 All Rights Reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

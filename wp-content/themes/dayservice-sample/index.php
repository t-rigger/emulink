<?php
/**
 * Main Template - トップページ
 *
 * @package DayserviceSample
 */

get_header();
?>

<!-- ========================================
     Hero Section
======================================== -->
<section class="hero-section" id="hero">
    <!-- Decorative floating elements -->
    <div class="hero-deco hero-deco-1"></div>
    <div class="hero-deco hero-deco-2"></div>
    <div class="hero-deco hero-deco-3"></div>

    <div class="hero-content">
        <h1>
            <span>笑顔</span>があふれる、<br>
            もうひとつの<span>我が家。</span>
        </h1>
        <p>
            私たちは、一人ひとりに寄り添った温かいケアをお届けします。<br>
            安心して過ごせる場所で、楽しい毎日を一緒に。
        </p>
        <div class="hero-buttons">
            <a href="#office" class="btn-primary">
                事業所一覧を見る
            </a>
            <a href="#contact" class="btn-secondary">
                お問い合わせはこちら
            </a>
        </div>
    </div>
</section>

<!-- ========================================
     News Section
======================================== -->
<section class="section section-alt" id="news">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <h2>お知らせ</h2>
            <p>最新のお知らせをお届けします</p>
        </div>

        <ul class="news-list">
            <?php
            $news_query = dayservice_get_latest_news(3);

            if ($news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post();
            ?>
                <li>
                    <a href="<?php the_permalink(); ?>" class="news-item">
                        <span class="news-date"><?php echo get_the_date('Y.m.d'); ?></span>
                        <span class="news-title"><?php the_title(); ?></span>
                    </a>
                </li>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                // 投稿がない場合はサンプルデータを表示
                $sample_news = dayservice_get_sample_news();
                foreach ($sample_news as $news) :
            ?>
                <li>
                    <a href="#" class="news-item">
                        <span class="news-date"><?php echo esc_html($news['date']); ?></span>
                        <span class="news-title"><?php echo esc_html($news['title']); ?></span>
                    </a>
                </li>
            <?php
                endforeach;
            endif;
            ?>
        </ul>

        <div class="news-more">
            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="btn-secondary" style="font-size: 0.9rem; padding: 0.6rem 1.5rem;">
                一覧はこちら →
            </a>
        </div>
    </div>
</section>

<!-- ========================================
     Features Section
======================================== -->
<section class="section" id="features">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <h2>私たちの特徴</h2>
            <p>エムリンク株式会社が大切にしている3つのこと</p>
        </div>

        <div class="features-grid">
            <!-- Feature 1: 心を込めたおもてなし -->
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                    </svg>
                </div>
                <h3>心を込めたおもてなし</h3>
                <p>質の高い接遇と心地よい空間で、ご利用者様に「また来たい」と思っていただけるサービスを。スタッフ一人ひとりが真心を込めてお迎えいたします。</p>
            </div>

            <!-- Feature 2: 選べるレクリエーション -->
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                        <line x1="9" y1="9" x2="9.01" y2="9"/>
                        <line x1="15" y1="9" x2="15.01" y2="9"/>
                    </svg>
                </div>
                <h3>選べるレクリエーション</h3>
                <p>個人の趣味や好みを大切にする多彩なアクティビティ。手芸、音楽、園芸、脳トレなど、お好きな活動を自由にお選びいただけます。</p>
            </div>

            <!-- Feature 3: 安心の生活サポート -->
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <polyline points="9 12 11 14 15 10"/>
                    </svg>
                </div>
                <h3>安心の生活サポート</h3>
                <p>日常生活の自立を助ける丁寧な介助で、ご利用者様とご家族に安心をお届け。入浴・食事・機能訓練を温かくサポートいたします。</p>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     Office Section (事業所案内)
======================================== -->
<section class="section section-alt" id="office">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <h2>事業所案内</h2>
            <p>お気軽に見学・お問い合わせください</p>
        </div>

        <div class="office-grid">
            <!-- Office A -->
            <div class="office-card">
                <a href="<?php echo esc_url(home_url('/office-a/')); ?>" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 1;" aria-label="デイサービスとんぼの詳細ページへ"></a>
                <div class="office-card-header">
                    <h3>デイサービスとんぼ</h3>
                </div>
                <div class="office-card-body">
                    <ul class="office-info">
                        <li>
                            <span class="info-label">住所</span>
                            <span>〒462-0845 名古屋市北区柳原1-18-8 高野ビル1階</span>
                        </li>
                        <li>
                            <span class="info-label">電話</span>
                            <span style="position: relative; z-index: 2;"><a href="tel:051-915-3008" style="color: inherit; text-decoration: none;">051-915-3008</a></span>
                        </li>
                        <li>
                            <span class="info-label">営業時間</span>
                            <span>月〜金 8:30〜17:30</span>
                        </li>
                        <li>
                            <span class="info-label">定休日</span>
                            <span>土曜日・日曜日、お盆、年末年始</span>
                        </li>
                    </ul>
                    <div style="margin-top: 1.5rem; text-align: center;">
                        <span class="btn-primary" style="padding: 0.6rem 1.5rem; font-size: 0.9rem; width: 100%; justify-content: center; position: relative;">
                            詳細・お問い合わせ
                        </span>
                    </div>
                </div>
            </div>

            <!-- Office B -->
            <div class="office-card">
                <a href="<?php echo esc_url(home_url('/office-b/')); ?>" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; z-index: 1;" aria-label="シルバーハウスとんぼ中村の詳細ページへ"></a>
                <div class="office-card-header" style="background: linear-gradient(135deg, #059669, #34D399);">
                    <h3>シルバーハウスとんぼ中村</h3>
                </div>
                <div class="office-card-body">
                    <ul class="office-info">
                        <li>
                            <span class="info-label">住所</span>
                            <span>名古屋市中村小鴨町66番地</span>
                        </li>
                        <li>
                            <span class="info-label">電話</span>
                            <span style="position: relative; z-index: 2;"><a href="tel:012-345-6780" style="color: inherit; text-decoration: none;">012-345-6780</a></span>
                        </li>
                        <li>
                            <span class="info-label">営業時間</span>
                            <span>月〜土 8:30〜17:30</span>
                        </li>
                        <li>
                            <span class="info-label">定休日</span>
                            <span>日曜日・祝日・年末年始</span>
                        </li>
                    </ul>
                    <div style="margin-top: 1.5rem; text-align: center;">
                        <span class="btn-primary" style="background: linear-gradient(135deg, #059669, #34D399); padding: 0.6rem 1.5rem; font-size: 0.9rem; width: 100%; justify-content: center; box-shadow: 0 4px 14px rgba(5, 150, 105, 0.35); position: relative;">
                            詳細・お問い合わせ
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     Greeting Section (代表挨拶)
======================================== -->
<section class="section" id="greeting">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <h2>代表挨拶</h2>
        </div>

        <div class="greeting-grid">
            <!-- Representative Image -->
            <div class="greeting-image">
                <div class="greeting-placeholder">
                    <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="60" cy="45" r="25" fill="#FED7AA"/>
                        <circle cx="52" cy="40" r="3" fill="#78350F"/>
                        <circle cx="68" cy="40" r="3" fill="#78350F"/>
                        <path d="M50 52C50 52 54 58 60 58C66 58 70 52 70 52" stroke="#78350F" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M35 45C35 30 45 18 60 18C75 18 85 30 85 45" stroke="#422006" stroke-width="3" fill="none"/>
                        <rect x="35" y="75" width="50" height="40" rx="8" fill="#F97316"/>
                        <path d="M45 75L60 65L75 75" fill="#F97316"/>
                    </svg>
                    <span>代表取締役 梶瑞穂</span>
                </div>
            </div>

            <!-- Greeting Text -->
            <div class="greeting-text">
                <h3>代表取締役　梶 瑞穂</h3>
                <div class="message">
                    <p>
                        現在、日本はかつてない超高齢社会を迎えており、介護サービスの重要性は益々高まっています。そのような中で、私たちが最も大切にしているのは、ご利用者様お一人おひとりの尊厳を守り、心から安心してお過ごしいただける環境を整えることです。
                    </p>
                    <br>
                    <p>
                        地域に深く根ざし、質の高いサービスを提供することで、地域の皆様から「ここなら信頼できる」と思っていただける存在を目指しております。
                    </p>
                    <br>
                    <p>
                        私自身、実母の介護を経験いたしました。その日々の中で痛感したのは、介護を必要とする方やそのご家族が抱える孤独感や、将来への不安です。自らの経験があるからこそ、「孤独や不安の中にいる高齢者を一人でも減らしたい」という強い想いが、私たちの原動力となっています。
                    </p>
                    <br>
                    <p>
                        私たちの施設が、ご利用者様にとって「楽しい」「ここに来て本当によかった」と思っていただける憩いの場であり続けること。それが私たちの願いです。
                    </p>
                    <br>
                    <p>
                        事業所名である「とんぼ」には、私たちの姿勢を込めています。とんぼの複眼のように、スタッフ全員が一丸となり、多角的な視点からご利用者様を見守り、お一人おひとりの状態やニーズに合わせた、きめ細やかな支援を行ってまいります。
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ========================================
     Company Section (会社概要)
======================================== -->
<section class="section section-alt" id="company">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <h2>会社概要</h2>
        </div>

        <table class="company-table">
            <tbody>
                <tr>
                    <th>社名</th>
                    <td>エムリンク株式会社</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td>〒461-0027 名古屋市東区芳野1-18-7</td>
                </tr>
                <tr>
                    <th>代表取締役</th>
                    <td>梶 瑞穂</td>
                </tr>
                <tr>
                    <th>設立年月日</th>
                    <td>平成31年3月1日</td>
                </tr>
                <tr>
                    <th>事業内容</th>
                    <td>地域密着型通所介護事業</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<?php get_footer(); ?>

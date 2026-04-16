<?php
/**
 * Template Name: 事業所A
 *
 * @package DayserviceSample
 */

get_header();
?>

<!-- ========================================
     Hero Section
======================================== -->
<section class="office-hero" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-office.jpg');">
    <div class="office-hero-content fade-in-up">
        <h1>サンプルデイサービスA</h1>
        <p>地域に根差した、温かく安心できる場所をご提供します。</p>
    </div>
</section>

<!-- ========================================
     Greeting / About Section
======================================== -->
<section class="section">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <span class="section-label">Greeting</span>
            <h2>施設長のご挨拶</h2>
        </div>

        <div class="greeting-grid">
            <div class="greeting-image">
                <div class="greeting-placeholder" style="aspect-ratio: 4/3;">
                    <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 60px;">
                        <circle cx="60" cy="45" r="25" fill="#FED7AA"/>
                        <circle cx="52" cy="40" r="3" fill="#78350F"/>
                        <circle cx="68" cy="40" r="3" fill="#78350F"/>
                        <path d="M50 52C50 52 54 58 60 58C66 58 70 52 70 52" stroke="#78350F" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M35 45C35 30 45 18 60 18C75 18 85 30 85 45" stroke="#422006" stroke-width="3" fill="none"/>
                        <rect x="35" y="75" width="50" height="40" rx="8" fill="#F97316"/>
                        <path d="M45 75L60 65L75 75" fill="#F97316"/>
                    </svg>
                    <span>施設長 画像</span>
                </div>
            </div>
            <div class="greeting-text">
                <h3>施設長から皆様へ</h3>
                <div class="message">
                    <p>サンプルデイサービスAは、皆様が住み慣れた地域で、いつまでも笑顔で健やかに日々を過ごしていただけるよう、真心を込めたケアを提供しております。</p>
                    <br>
                    <p>私たちの施設では、お一人おひとりの意思や生活リズムを尊重し、まるでご自宅にいるようにリラックスできる空間づくりを大切にしています。</p>
                    <br>
                    <p>日々のレクリエーションやリハビリテーションを通じて、心と体の元気を引き出すお手伝いをさせていただきます。ぜひ一度、見学にいらしてください。</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     Facility Overview Section
======================================== -->
<section class="section section-alt">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <span class="section-label">Overview</span>
            <h2>施設概要</h2>
        </div>

        <table class="company-table">
            <tbody>
                <tr>
                    <th>事業所名</th>
                    <td>サンプルデイサービスA</td>
                </tr>
                <tr>
                    <th>サービス内容</th>
                    <td>通所介護（デイサービス）</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td>〒100-0001 東京都千代田区千代田1-1-1 サンプルビル1F</td>
                </tr>
                <tr>
                    <th>連絡先</th>
                    <td><a href="tel:012-345-6789" style="color: var(--color-primary);">012-345-6789</a></td>
                </tr>
                <tr>
                    <th>営業時間</th>
                    <td>月曜日〜土曜日 8:30〜17:30</td>
                </tr>
                <tr>
                    <th>定休日</th>
                    <td>日曜日・祝日・年末年始（12/29〜1/3）</td>
                </tr>
                <tr>
                    <th>利用定員</th>
                    <td>30名 / 1日</td>
                </tr>
                <tr>
                    <th>設備状況</th>
                    <td>一般浴槽・機械浴槽完備、カラオケ機器、機能訓練室</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<!-- ========================================
     Daily Schedule Section
======================================== -->
<section class="section">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <span class="section-label">Schedule</span>
            <h2>1日の流れ</h2>
            <p>充実した一日をお過ごしいただけます</p>
        </div>

        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-time">09:00</div>
                <div class="timeline-content">
                    <h4>お迎え・到着</h4>
                    <p>ご自宅まで専用車でお迎えにあがります。施設に到着後、健康チェック（血圧・体温測定等）を行います。</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-time">10:00</div>
                <div class="timeline-content">
                    <h4>入浴・個別機能訓練</h4>
                    <p>順次、ご入浴へご案内します。また、リハビリスタッフの指導のもと、お一人おひとりの状態に合わせた機能訓練を実施します。</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-time">12:00</div>
                <div class="timeline-content">
                    <h4>昼食・口腔ケア</h4>
                    <p>栄養バランスの取れた、温かくておいしい食事をご提供。お食事後は、口腔ケアのお手伝いをいたします。</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-time">14:00</div>
                <div class="timeline-content">
                    <h4>レクリエーション</h4>
                    <p>みんなで楽しめる体操や、手芸、脳トレなど多彩なプログラムをご用意しています。</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-time">15:00</div>
                <div class="timeline-content">
                    <h4>おやつ・ティータイム</h4>
                    <p>美味しいおやつと飲み物で、ほっと一息。他の利用者様との会話も弾む時間です。</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-time">16:30</div>
                <div class="timeline-content">
                    <h4>お送り</h4>
                    <p>本日もありがとうございました。ご自宅まで安全にお送りいたします。</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     Important Documents / Price Section
======================================== -->
<section class="section section-alt">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <span class="section-label">Documents</span>
            <h2>重要事項説明書・ご利用料金</h2>
            <p>詳しくは、下記PDFをご覧ください。</p>
        </div>

        <div class="pdf-download-card">
            <div class="pdf-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" width="48" height="48">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                    <polyline points="14 2 14 8 20 8"/>
                    <line x1="16" y1="13" x2="8" y2="13"/>
                    <line x1="16" y1="17" x2="8" y2="17"/>
                    <polyline points="10 9 9 9 8 9"/>
                </svg>
            </div>
            <div class="pdf-info">
                <a href="#" class="pdf-link" target="_blank" rel="noopener noreferrer">
                    重要事項説明書・料金表 [PDF]
                </a>
                <span class="pdf-meta">改訂日：2025年2月</span>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     Access Section
======================================== -->
<section class="section">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <span class="section-label">Access</span>
            <h2>アクセス</h2>
        </div>
        
        <div style="max-width: 800px; margin: 0 auto;">
            <p style="margin-bottom: 1.5rem; text-align: center;">
                【電車の場合】 JRサンプル駅より徒歩約10分<br>
                【お車の場合】 サンプルＩＣから約5分（専用駐車場5台完備）
            </p>
            <div class="office-map" style="height: 400px; background: #E5E7EB; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #9CA3AF;">
                <span>Google Maps（東京都千代田区千代田1-1-1）準備中</span>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     Contact Form Section
======================================== -->
<section class="section section-alt" id="contact-form">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <span class="section-label">Contact</span>
            <h2>事業所Aへのお問い合わせ</h2>
            <p>見学や体験利用など、お気軽にご連絡ください</p>
        </div>

        <div class="contact-form-wrapper">
            <form action="#" method="post">
                <input type="hidden" name="office" value="サンプルデイサービスA">
                
                <div class="form-group">
                    <label for="name">お名前 <span class="required">必須</span></label>
                    <input type="text" id="name" name="name" class="form-control" required placeholder="例：山田 太郎">
                </div>

                <div class="form-group">
                    <label for="kana">フリガナ <span class="required">必須</span></label>
                    <input type="text" id="kana" name="kana" class="form-control" required placeholder="例：ヤマダ タロウ">
                </div>

                <div class="form-group">
                    <label for="tel">電話番号 <span class="required">必須</span></label>
                    <input type="tel" id="tel" name="tel" class="form-control" required placeholder="例：090-1234-5678">
                </div>

                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="例：info@example.com">
                </div>

                <div class="form-group">
                    <label for="message">お問い合わせ内容 <span class="required">必須</span></label>
                    <textarea id="message" name="message" class="form-control" required placeholder="見学希望やご質問などをご記入ください"></textarea>
                </div>

                <div class="form-submit">
                    <button type="submit" class="btn-submit">送信する</button>
                    <p style="font-size: 0.8rem; color: var(--color-text-light); margin-top: 1rem;">
                        ※送信処理は現在準備中です。UIのみのデモとなります。
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>

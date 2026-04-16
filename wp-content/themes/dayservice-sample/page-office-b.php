<?php
/**
 * Template Name: 事業所B
 *
 * @package DayserviceSample
 */

get_header();
?>

<!-- ========================================
     Hero Section
======================================== -->
<section class="office-hero" style="background-image: linear-gradient(rgba(5, 150, 105, 0.4), rgba(5, 150, 105, 0.4)), url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-office.jpg');">
    <div class="office-hero-content fade-in-up">
        <h1 style="color: #FFF;">サンプルデイサービスB</h1>
        <p style="color: #FFF;">緑に囲まれた穏やかな環境で、心休まる時間を提供いたします。</p>
    </div>
</section>

<!-- ========================================
     Greeting / About Section
======================================== -->
<section class="section">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <span class="section-label" style="color: #059669;">Greeting</span>
            <h2>施設長のご挨拶</h2>
        </div>

        <div class="greeting-grid">
            <div class="greeting-image">
                <div class="greeting-placeholder" style="aspect-ratio: 4/3; background: linear-gradient(135deg, #A7F3D0, #D1FAE5);">
                    <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 60px;">
                        <circle cx="60" cy="45" r="25" fill="#34D399"/>
                        <circle cx="52" cy="40" r="3" fill="#065F46"/>
                        <circle cx="68" cy="40" r="3" fill="#065F46"/>
                        <path d="M50 52C50 52 54 58 60 58C66 58 70 52 70 52" stroke="#065F46" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M35 45C35 30 45 18 60 18C75 18 85 30 85 45" stroke="#064E3B" stroke-width="3" fill="none"/>
                        <rect x="35" y="75" width="50" height="40" rx="8" fill="#059669"/>
                        <path d="M45 75L60 65L75 75" fill="#059669"/>
                    </svg>
                    <span>施設長 画像</span>
                </div>
            </div>
            <div class="greeting-text">
                <h3 style="color: #059669;">施設長から皆様へ</h3>
                <div class="message">
                    <p>サンプルデイサービスBは、豊かな自然に囲まれた静かな環境の中で、穏やかな時間を過ごしていただけるデイサービスセンターです。</p>
                    <br>
                    <p>私たちは、利用者様がご自身のペースでゆったりと過ごせるよう、心地よい空間づくりと細やかなサポートを心がけています。広々としたフロアや、季節の花々を楽しめる中庭も当施設の自慢です。</p>
                    <br>
                    <p>趣味の活動や園芸など、心を満たすプログラムを通じて、毎日を笑顔で過ごすためのお手伝いをいたします。どうぞお気軽にお立ち寄りください。</p>
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
            <span class="section-label" style="color: #059669;">Overview</span>
            <h2>施設概要</h2>
        </div>

        <table class="company-table">
            <tbody>
                <tr>
                    <th style="color: #059669; background: rgba(5, 150, 105, 0.04);">事業所名</th>
                    <td>サンプルデイサービスB</td>
                </tr>
                <tr>
                    <th style="color: #059669; background: rgba(5, 150, 105, 0.04);">サービス内容</th>
                    <td>通所介護（デイサービス）</td>
                </tr>
                <tr>
                    <th style="color: #059669; background: rgba(5, 150, 105, 0.04);">所在地</th>
                    <td>〒100-0002 東京都千代田区千代田2-2-2 サンプル第2ビル1F</td>
                </tr>
                <tr>
                    <th style="color: #059669; background: rgba(5, 150, 105, 0.04);">連絡先</th>
                    <td><a href="tel:012-345-6780" style="color: #059669;">012-345-6780</a></td>
                </tr>
                <tr>
                    <th style="color: #059669; background: rgba(5, 150, 105, 0.04);">営業時間</th>
                    <td>月曜日〜土曜日 8:30〜17:30</td>
                </tr>
                <tr>
                    <th style="color: #059669; background: rgba(5, 150, 105, 0.04);">定休日</th>
                    <td>日曜日・祝日・年末年始（12/29〜1/3）</td>
                </tr>
                <tr>
                    <th style="color: #059669; background: rgba(5, 150, 105, 0.04);">利用定員</th>
                    <td>25名 / 1日</td>
                </tr>
                <tr>
                    <th style="color: #059669; background: rgba(5, 150, 105, 0.04);">設備状況</th>
                    <td>一般浴槽完備、園芸スペース、マッサージチェア</td>
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
            <span class="section-label" style="color: #059669;">Schedule</span>
            <h2>1日の流れ</h2>
            <p>ゆったりとした時間が流れる一日</p>
        </div>

        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-time" style="color: #059669;">09:00</div>
                <div class="timeline-content" style="border-color: rgba(52, 211, 153, 0.3);">
                    <h4>お迎え・到着</h4>
                    <p>専用車でご自宅までお迎えにあがります。到着後は、お茶を飲みながら健康チェックを行います。</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-time" style="color: #059669;">10:00</div>
                <div class="timeline-content" style="border-color: rgba(52, 211, 153, 0.3);">
                    <h4>入浴・のんびりタイム</h4>
                    <p>順次ご入浴となります。入浴されない時間は、中庭を眺めながら読書などご自身のペースでお過ごしいただけます。</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-time" style="color: #059669;">12:00</div>
                <div class="timeline-content" style="border-color: rgba(52, 211, 153, 0.3);">
                    <h4>昼食・口腔ケア</h4>
                    <p>季節の食材を使った、おいしい昼食をご提供します。食後は口腔ケアをサポートします。</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-time" style="color: #059669;">14:00</div>
                <div class="timeline-content" style="border-color: rgba(52, 211, 153, 0.3);">
                    <h4>趣味活動・レクリエーション</h4>
                    <p>園芸やフラワーアレンジメントなど、静かで落ち着いた趣味の活動を中心に楽しんでいただきます。</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-time" style="color: #059669;">15:00</div>
                <div class="timeline-content" style="border-color: rgba(52, 211, 153, 0.3);">
                    <h4>ティータイム</h4>
                    <p>手作りおやつをご用意。お好きな飲み物と一緒に、リラックスしたひとときを。</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-time" style="color: #059669;">16:30</div>
                <div class="timeline-content" style="border-color: rgba(52, 211, 153, 0.3);">
                    <h4>お送り</h4>
                    <p>今日も一日お疲れ様でした。ご自宅まで安全にお送りいたします。</p>
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
            <span class="section-label" style="color: #059669;">Documents</span>
            <h2>重要事項説明書・ご利用料金</h2>
            <p>詳しくは、下記PDFをご覧ください。</p>
        </div>

        <div class="pdf-download-card" style="border-color: rgba(52, 211, 153, 0.3);">
            <div class="pdf-icon" style="color: #059669;">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" width="48" height="48">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                    <polyline points="14 2 14 8 20 8"/>
                    <line x1="16" y1="13" x2="8" y2="13"/>
                    <line x1="16" y1="17" x2="8" y2="17"/>
                    <polyline points="10 9 9 9 8 9"/>
                </svg>
            </div>
            <div class="pdf-info">
                <a href="#" class="pdf-link" style="color: #059669;" target="_blank" rel="noopener noreferrer">
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
            <span class="section-label" style="color: #059669;">Access</span>
            <h2>アクセス</h2>
        </div>
        
        <div style="max-width: 800px; margin: 0 auto;">
            <p style="margin-bottom: 1.5rem; text-align: center;">
                【電車の場合】 JRサンプル駅より車で約15分<br>
                【バスの場合】 サンプルバス停より徒歩3分<br>
                （専用駐車場10台完備・緑の看板が目印です）
            </p>
            <div class="office-map" style="height: 400px; background: #E5E7EB; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #9CA3AF;">
                <span>Google Maps（東京都千代田区千代田2-2-2）準備中</span>
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
            <span class="section-label" style="color: #059669;">Contact</span>
            <h2>事業所Bへのお問い合わせ</h2>
            <p>見学や体験利用など、お気軽にご連絡ください</p>
        </div>

        <div class="contact-form-wrapper" style="border-color: rgba(52, 211, 153, 0.3);">
            <form action="#" method="post">
                <input type="hidden" name="office" value="サンプルデイサービスB">
                
                <div class="form-group">
                    <label for="name">お名前 <span class="required" style="background: #059669;">必須</span></label>
                    <input type="text" id="name" name="name" class="form-control" required placeholder="例：山田 太郎" style="border-color: rgba(5, 150, 105, 0.3);">
                </div>

                <div class="form-group">
                    <label for="kana">フリガナ <span class="required" style="background: #059669;">必須</span></label>
                    <input type="text" id="kana" name="kana" class="form-control" required placeholder="例：ヤマダ タロウ" style="border-color: rgba(5, 150, 105, 0.3);">
                </div>

                <div class="form-group">
                    <label for="tel">電話番号 <span class="required" style="background: #059669;">必須</span></label>
                    <input type="tel" id="tel" name="tel" class="form-control" required placeholder="例：090-1234-5678" style="border-color: rgba(5, 150, 105, 0.3);">
                </div>

                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="例：info@example.com" style="border-color: rgba(5, 150, 105, 0.3);">
                </div>

                <div class="form-group">
                    <label for="message">お問い合わせ内容 <span class="required" style="background: #059669;">必須</span></label>
                    <textarea id="message" name="message" class="form-control" required placeholder="見学希望やご質問などをご記入ください" style="border-color: rgba(5, 150, 105, 0.3);"></textarea>
                </div>

                <div class="form-submit">
                    <button type="submit" class="btn-submit" style="background: linear-gradient(135deg, #059669, #34D399); box-shadow: 0 4px 14px rgba(5, 150, 105, 0.35);">送信する</button>
                    <p style="font-size: 0.8rem; color: var(--color-text-light); margin-top: 1rem;">
                        ※送信処理は現在準備中です。UIのみのデモとなります。
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>

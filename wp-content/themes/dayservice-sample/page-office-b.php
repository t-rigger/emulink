<?php
/**
 * Template Name: シルバーハウスとんぼ中村
 *
 * @package DayserviceSample
 */

get_header();
?>

<!-- ========================================
     Hero Section
======================================== -->
<section class="sh-hero">
    <div class="section-inner text-center fade-in-up">
        <h1>シルバーハウスとんぼ中村</h1>
        <p>住み慣れたこの街で、明日も変わらない安心を。</p>
    </div>
</section>

<!-- ========================================
     Pillars (Strong Points)
======================================== -->
<section class="section">
    <div class="section-inner fade-in-up">
        <div class="section-header text-center">
            <h2>私たちの3つの強み</h2>
            <p>誠実なケアと確かな安心をお届けします</p>
        </div>

        <div class="sh-pillars">
            <!-- Pillar 1 -->
            <div class="sh-pillar-card">
                <div class="sh-icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>24時間体制のアットホームな見守り</h3>
                <p>24時間365日スタッフが常駐。お一人おひとりのプライバシーを尊重しながら、必要な時にすぐ手が届く安心の距離感を提供します。</p>
            </div>
            <!-- Pillar 2 -->
            <div class="sh-pillar-card">
                <div class="sh-icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m19 10-6-6-6 6"/><path d="M13 4v12"/><path d="M7 16h12"/></svg>
                </div>
                <h3>地域医療機関との強力な連携</h3>
                <p>近隣の協力医療機関と連携。日々の健康管理から緊急時の迅速な対応まで、住み慣れた地域で安心して暮らし続けるための体制を構築しています。</p>
            </div>
            <!-- Pillar 3 -->
            <div class="sh-pillar-card">
                <div class="sh-icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <h3>サービス品質を支える職場環境</h3>
                <p>スタッフが心身ともに健やかに働ける環境づくりを徹底。スタッフのゆとりと満足度が、利用者様への誠実で質の高いケアに直結しています。</p>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     Facility Status
======================================== -->
<section class="section section-alt">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <h2>施設概要</h2>
        </div>
        <div class="sh-table-wrap">
            <table class="sh-table">
                <tbody>
                    <tr>
                        <th>事業所名</th>
                        <td>シルバーハウスとんぼ中村</td>
                    </tr>
                    <tr>
                        <th>所在地</th>
                        <td>名古屋市中村小鴨町66番地</td>
                    </tr>
                    <tr>
                        <th>類型</th>
                        <td>住宅型有料老人ホーム</td>
                    </tr>
                    <tr>
                        <th>構造</th>
                        <td>鉄骨造</td>
                    </tr>
                    <tr>
                        <th>居住の権利形態</th>
                        <td>利用権方式</td>
                    </tr>
                    <tr>
                        <th>入居時の要件</th>
                        <td>要介護1～要介護5</td>
                    </tr>
                    <tr>
                        <th>介護居室区分</th>
                        <td>一人部屋（18室各1名）</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ========================================
     Pricing Section
======================================== -->
<section class="section" id="price">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <h2>ご利用料金</h2>
            <p>月々のお支払いや入居時の費用についてご案内します</p>
        </div>

        <div class="swipe-hint">← スワイプして続きを見る</div>

        <!-- 入居要件の補足 -->
        <div style="background: #FFFBEB; border: 1px solid #FEF3C7; padding: 1rem; border-radius: 8px; margin-bottom: 2rem; font-size: 0.9rem; color: #854D0E;">
            ※介護保険サービスをご利用の際は、別途「介護保険自己負担分」が必要となります。
        </div>

        <!-- Entrance Fee -->
        <h3 style="margin-bottom: 1rem; color: var(--color-primary); border-left: 4px solid var(--color-primary); padding-left: 1rem;">入居までの費用</h3>
        <div class="sh-table-wrap">
            <table class="sh-table sh-table-primary">
                <thead>
                    <tr>
                        <th>項目</th>
                        <th>金額</th>
                        <th>備考</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>入居申込金</td>
                        <td>150,000円</td>
                        <td>入居時にお支払いいただく費用です</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Monthly Fee -->
        <h3 style="margin-bottom: 1rem; color: var(--color-primary); border-left: 4px solid var(--color-primary); padding-left: 1rem;">月額利用料（標準）</h3>
        <div class="sh-table-wrap">
            <table class="sh-table">
                <thead>
                    <tr>
                        <th>内訳項目</th>
                        <th>金額（税込）</th>
                        <th>詳細・注釈</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>賃料</td>
                        <td>50,000円</td>
                        <td>非課税 / 居住用賃貸料</td>
                    </tr>
                    <tr>
                        <td>食事代</td>
                        <td>51,030円</td>
                        <td>1日3食30日計算（1日567円）</td>
                    </tr>
                    <tr>
                        <td>水道光熱費</td>
                        <td>12,650円</td>
                        <td>居室内および共用部使用分含む</td>
                    </tr>
                    <tr>
                        <td>共用管理費</td>
                        <td>3,150円</td>
                        <td>非課税 / 施設管理、メンテナンス、通信費等</td>
                    </tr>
                    <tr>
                        <td>個人管理費</td>
                        <td>3,630円</td>
                        <td>生活サポート等</td>
                    </tr>
                    <tr style="font-weight: bold; background: #F9FAFB;">
                        <td>合計</td>
                        <td>120,460円</td>
                        <td>毎月25日に指定口座より引落</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Additional Expenses -->
        <h3 style="margin-bottom: 1rem; color: var(--color-primary); border-left: 4px solid var(--color-primary); padding-left: 1rem;">その他の実費・加算</h3>
        <div class="sh-table-wrap">
            <table class="sh-table">
                <thead>
                    <tr>
                        <th>項目</th>
                        <th>金額（税込）</th>
                        <th>備考</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>リネン費</td>
                        <td>2,300円/月</td>
                        <td>寝具リース、布団管理（原則リース品使用）</td>
                    </tr>
                    <tr>
                        <td>洗濯代・管理費</td>
                        <td>1,100円/月</td>
                        <td>排泄汚染物などの個別洗濯対応含む</td>
                    </tr>
                    <tr>
                        <td>個別実費</td>
                        <td>別途実費</td>
                        <td>おむつ代、理美容代、医療費、日用品費 など</td>
                    </tr>
                    <tr>
                        <td>介護サービス費</td>
                        <td>自己負担分</td>
                        <td>介護保険利用時の1割〜3割負担分</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Care Level Pricing Table -->
        <h3 style="margin-bottom: 2rem; color: var(--color-primary); border-left: 4px solid var(--color-primary); padding-left: 1rem; margin-top: 3rem;">4. 介護保険自己負担分（月額目安：1割負担の場合）</h3>
        <p style="font-size: 0.85rem; color: var(--color-text-light); margin-bottom: 1.5rem;">
            ※金額は概算です。地域区分や具体的な加算状況により変動いたします。
        </p>
        <div class="sh-table-wrap" style="margin-bottom: 3rem;">
            <table class="sh-table">
                <thead>
                    <tr>
                        <th style="background: #FEF9C3; color: #854D0E;">要介護度</th>
                        <th style="background: #FEF9C3; color: #854D0E;">自己負担額（1割）</th>
                        <th style="background: #FEF9C3; color: #854D0E;">備考</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-weight: 600;">要介護1</td>
                        <td>約 16,765 円 〜</td>
                        <td>身の回りの手伝いが必要な状態</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 600;">要介護2</td>
                        <td>約 19,705 円 〜</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="font-weight: 600;">要介護3</td>
                        <td>約 27,048 円 〜</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="font-weight: 600;">要介護4</td>
                        <td>約 30,938 円 〜</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="font-weight: 600;">要介護5</td>
                        <td>約 36,217 円 〜</td>
                        <td>日常生活全般に介助が必要な状態</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ========================================
     Rooms List
======================================== -->
<section class="section section-alt">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <h2>居室のご案内</h2>
            <p>プライバシーに配慮した、全室個室の落ち着いた空間です</p>
        </div>

        <div class="swipe-hint">← スワイプして続きを見る</div>

        <div class="sh-table-wrap">
            <table class="sh-table">
                <thead>
                    <tr>
                        <th>タイプ</th>
                        <th>面積（㎡）</th>
                        <th>室数</th>
                        <th>設備</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>タイプ1</td><td>7.47</td><td>1室</td><td rowspan="10">緊急通報装置、収納、エアコン完備<br><small>※トイレ・浴室は共用部をご利用ください</small></td></tr>
                    <tr><td>タイプ2</td><td>5.91</td><td>1室</td></tr>
                    <tr><td>タイプ3</td><td>6.50</td><td>2室</td></tr>
                    <tr><td>タイプ4</td><td>6.75</td><td>4室</td></tr>
                    <tr><td>タイプ5</td><td>6.62</td><td>3室</td></tr>
                    <tr><td>タイプ6</td><td>5.37</td><td>2室</td></tr>
                    <tr><td>タイプ7</td><td>8.70</td><td>1室</td></tr>
                    <tr><td>タイプ8</td><td>6.82</td><td>1室</td></tr>
                    <tr><td>タイプ9</td><td>5.20</td><td>1室</td></tr>
                    <tr><td>タイプ10</td><td>6.12</td><td>1室</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- ========================================
     Steps Section
======================================== -->
<section class="section">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <h2>ご入居までの流れ</h2>
        </div>
        <div class="sh-step-list">
            <div class="sh-step-item">
                <div class="sh-step-number">1</div>
                <div class="sh-step-content">
                    <h4>お問い合わせ</h4>
                    <p>お電話またはフォームよりお気軽にご連絡ください。資料請求も承っております。</p>
                </div>
            </div>
            <div class="sh-step-item">
                <div class="sh-step-number">2</div>
                <div class="sh-step-content">
                    <h4>見学・ご相談</h4>
                    <p>実際の施設内をご案内いたします。生活に関する不安やご希望など、詳しくお聞かせください。</p>
                </div>
            </div>
            <div class="sh-step-item">
                <div class="sh-step-number">3</div>
                <div class="sh-step-content">
                    <h4>入居審査・面談</h4>
                    <p>ご本人様およびご家族様と面談を行い、お体の状態やケアの必要性を確認させていただきます。</p>
                </div>
            </div>
            <div class="sh-step-item">
                <div class="sh-step-number">4</div>
                <div class="sh-step-content">
                    <h4>ご契約</h4>
                    <p>重要事項説明および契約内容の確認を行い、正式に契約を締結いたします。</p>
                </div>
            </div>
            <div class="sh-step-item">
                <div class="sh-step-number">5</div>
                <div class="sh-step-content">
                    <h4>ご入居</h4>
                    <p>お引越しの日程を調整し、新しい生活がスタートします。スタッフ一同心よりお待ちしております。</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     Access Section
======================================== -->
<section class="section section-alt">
    <div class="section-inner fade-in-up">
        <div class="section-header text-center">
            <h2>アクセス</h2>
        </div>
        <div style="max-width: 800px; margin: 0 auto; text-align: center;">
            <p style="margin-bottom: 2rem;">
                <strong>シルバーハウスとんぼ中村</strong><br>
                名古屋市中村小鴨町66番地
            </p>
            <div style="background: #fff; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); text-align: left; margin-bottom: 2rem;">
                <p><strong>【公共交通機関をご利用の場合】</strong></p>
                <ul style="list-style: none; padding: 0; margin-top: 1rem;">
                    <li style="margin-bottom: 0.5rem;">① 市営地下鉄東山線「岩塚駅」下車 徒歩30分</li>
                    <li>② 市営バス「岩塚本通り五丁目」停留所 下車 徒歩5分</li>
                </ul>
            </div>
            <div style="height: 300px; background: #E5E7EB; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #6B7280;">
                <span>Google Maps 準備中（名古屋市中村小鴨町66番地）</span>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     Important Documents (BCP etc.)
======================================== -->
<section class="section">
    <div class="section-inner fade-in-up">
        <div class="section-header text-center">
            <h3>重要事項・規定の公開</h3>
            <p>安心・安全な運営のため、各種指針を公開しております</p>
        </div>
        <div class="sh-legal-links">
            <a href="#">事業継続計画（BCP）</a>
            <a href="#">虐待防止指針</a>
            <a href="#">苦情解決体制</a>
            <a href="#">感染症対策指針</a>
            <a href="#">個人情報保護方針</a>
        </div>
    </div>
</section>

<!-- ========================================
     Contact Form Section
======================================== -->
<section class="section section-alt" id="contact-form">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <h2>シルバーハウスとんぼ中村へのお問い合わせ</h2>
            <p>入居に関するご相談や見学など、お気軽にご連絡ください</p>
        </div>

        <div class="contact-form-wrapper">
            <form action="#" method="post">
                <input type="hidden" name="office" value="シルバーハウスとんぼ中村">
                
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

<!-- Lightbox Script -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const lightbox = document.createElement('div');
    lightbox.id = 'global-lightbox';
    const closeBtn = document.createElement('div');
    closeBtn.className = 'lightbox-close';
    closeBtn.innerHTML = '&times;';
    lightbox.appendChild(closeBtn);
    document.body.appendChild(lightbox);

    const images = document.querySelectorAll('.circle-img img, .rec-gallery-item img, .facility-gallery img');

    const closeLightbox = () => {
        lightbox.classList.remove('active');
        document.body.style.overflow = '';
    };

    images.forEach(img => {
        img.style.cursor = 'zoom-in';
        img.addEventListener('click', e => {
            e.preventDefault();
            e.stopPropagation();
            lightbox.classList.add('active');
            const existingImg = lightbox.querySelector('img');
            if (existingImg) existingImg.remove();
            const imgEl = document.createElement('img');
            imgEl.src = img.src;
            lightbox.appendChild(imgEl);
            document.body.style.overflow = 'hidden';
        });
    });

    lightbox.addEventListener('click', e => {
        if (e.target !== e.currentTarget && e.target !== closeBtn) return;
        closeLightbox();
    });

    document.addEventListener('keydown', e => {
        if (e.key === 'Escape' && lightbox.classList.contains('active')) {
            closeLightbox();
        }
    });
});
</script>

<?php get_footer(); ?>

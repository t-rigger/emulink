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
<section class="office-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-office.jpg');">
    <div class="office-hero-content fade-in-up">
        <h1>デイサービスとんぼ</h1>
        <p>地域に根差した、温かく安心できる場所をご提供します。</p>
    </div>
</section>

<!-- ========================================
     Greeting / About Section
======================================== -->
<section class="section">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <h2>代表からのご挨拶</h2>
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
                    <span>代表取締役 梶 瑞穂</span>
                </div>
            </div>
            <div class="greeting-text">
                <h3>代表取締役　梶 瑞穂</h3>
                <div class="message">
                    <p>現在、日本はかつてない超高齢社会を迎えており、介護サービスの重要性は益々高まっています。そのような中で、私たちが最も大切にしているのは、ご利用者様お一人おひとりの尊厳を守り、心から安心してお過ごしいただける環境を整えることです。</p>
                    <br>
                    <p>地域に深く根ざし、質の高いサービスを提供することで、地域の皆様から「ここなら信頼できる」と思っていただける存在を目指しております。</p>
                    <br>
                    <p>私自身、実母の介護を経験いたしました。その日々の中で痛感したのは、介護を必要とする方やそのご家族が抱える孤独感や、将来への不安です。自らの経験があるからこそ、「孤独や不安の中にいる高齢者を一人でも減らしたい」という強い想いが、私たちの原動力となっています。</p>
                    <br>
                    <p>私たちの施設が、ご利用者様にとって「楽しい」「ここに来て本当によかった」と思っていただける憩いの場であり続けること。それが私たちの願いです。</p>
                    <br>
                    <p>事業所名である「とんぼ」には、私たちの姿勢を込めています。とんぼの複眼のように、スタッフ全員が一丸となり、多角的な視点からご利用者様を見守り、お一人おひとりの状態やニーズに合わせた、きめ細やかな支援を行ってまいります。</p>
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
            <h2>施設概要</h2>
        </div>

        <table class="company-table">
            <tbody>
                <tr>
                    <th>事業所名</th>
                    <td>デイサービスとんぼ</td>
                </tr>
                <tr>
                    <th>サービス内容</th>
                    <td>地域密着型通所介護</td>
                </tr>
                <tr>
                    <th>所在地</th>
                    <td>〒462-0845 名古屋市北区柳原1-18-8 高野ビル1階</td>
                </tr>
                <tr>
                    <th>連絡先</th>
                    <td><a href="tel:051-915-3008" style="color: var(--color-primary);">051-915-3008</a></td>
                </tr>
                <tr>
                    <th>営業時間</th>
                    <td>8:30～17:30（利用時間 9:25～16:00）</td>
                </tr>
                <tr>
                    <th>定休日</th>
                    <td>土曜日・日曜日、8月13～15日、12月31日～1月3日</td>
                </tr>
                <tr>
                    <th>利用定員</th>
                    <td>16名</td>
                </tr>
                <tr>
                    <th>設備状況</th>
                    <td>個浴2槽、エスカルゴ</td>
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
            <h2>1日の流れ</h2>
            <p>充実した一日をお過ごしいただけます</p>
        </div>

        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-time">09:25</div>
                <div class="timeline-content">
                    <h4>お迎え・到着</h4>
                    <p>ご自宅まで専用車でお迎えにあがります。施設に到着後、健康チェック（血圧・体温測定等）を行います。</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-time">10:00</div>
                <div class="timeline-content">
                    <h4>入浴・個別機能訓練</h4>
                    <p>順次、ご入浴へご案内します。待ち時間は脳トレプリントに取り組みます。また、機能訓練指導員の指導のもと、お一人おひとりの状態に合わせた機能訓練（コグニサイズ等）を実施します。</p>
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
                <div class="timeline-time">16:00</div>
                <div class="timeline-content">
                    <h4>音楽療法・お送り</h4>
                    <p>音楽に包まれてリラックスしたひとときを。本日もありがとうございました。ご自宅まで安全にお送りいたします。</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     Seasonal Events Section
======================================== -->
<section class="section section-alt" id="seasonal-events">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <h2>年間行事</h2>
            <p>1年を通して、季節を感じられる様々なイベントを企画しております。</p>
        </div>

        <div class="yearly-timeline">
            <!-- 1月 -->
            <div class="yearly-item fade-in-up">
                <div class="yearly-marker"><span>1月</span></div>
                <div class="yearly-content">
                    <h4>神社へGO</h4>
                    <p>新年の健康を願って、近くの神社へ初詣に出かけます。</p>
                </div>
            </div>
            <!-- 2月 -->
            <div class="yearly-item fade-in-up">
                <div class="yearly-marker"><span>2月</span></div>
                <div class="yearly-content">
                    <h4>節分豆まき</h4>
                    <p>「鬼は外、福は内！」力いっぱい豆をまき、一年の無病息災を願います。</p>
                </div>
            </div>
            <!-- 3月 -->
            <div class="yearly-item fade-in-up">
                <div class="yearly-marker"><span>3月</span></div>
                <div class="yearly-content">
                    <h4>ひな祭り</h4>
                    <p>華やかなお雛様を飾り、春らしいおやつで桃の節句をお祝いします。</p>
                </div>
            </div>
            <!-- 4月 -->
            <div class="yearly-item fade-in-up">
                <div class="yearly-marker"><span>4月</span></div>
                <div class="yearly-content">
                    <h4>お花見</h4>
                    <p>ぽかぽか陽気の中、満開の桜をみんなで楽しみます。</p>
                </div>
            </div>
            <!-- 5月 -->
            <div class="yearly-item fade-in-up">
                <div class="yearly-marker"><span>5月</span></div>
                <div class="yearly-content">
                    <h4>端午の節句</h4>
                    <p>菖蒲湯で芯まで温まり、鯉のぼりを見ながら昔話に花を咲かせます。</p>
                </div>
            </div>
            <!-- 6月 -->
            <div class="yearly-item fade-in-up">
                <div class="yearly-marker"><span>6月</span></div>
                <div class="yearly-content">
                    <h4>あじさい見学</h4>
                    <p>色鮮やかなあじさいを鑑賞し、梅雨の時期も明るく楽しく過ごします。</p>
                </div>
            </div>
            <!-- 7月 -->
            <div class="yearly-item fade-in-up">
                <div class="yearly-marker"><span>7月</span></div>
                <div class="yearly-content">
                    <h4>七夕まつり</h4>
                    <p>短冊にそれぞれの願い事を書き、皆で笹の葉に飾り付けを行います。</p>
                </div>
            </div>
            <!-- 8月 -->
            <div class="yearly-item fade-in-up">
                <div class="yearly-marker"><span>8月</span></div>
                <div class="yearly-content">
                    <h4>夏祭り・盆踊り</h4>
                    <p>屋台のおやつやゲームを楽しみ、賑やかな盆踊りで夏を満喫します。</p>
                </div>
            </div>
            <!-- 9月 -->
            <div class="yearly-item fade-in-up">
                <div class="yearly-marker"><span>9月</span></div>
                <div class="yearly-content">
                    <h4>敬老会お祝い</h4>
                    <p>皆様の長寿とご健康を祝し、特別な催しやお食事をご用意します。</p>
                </div>
            </div>
            <!-- 10月 -->
            <div class="yearly-item fade-in-up">
                <div class="yearly-marker"><span>10月</span></div>
                <div class="yearly-content">
                    <h4>秋の大運動会</h4>
                    <p>紅白に分かれて玉入れなど、無理なく楽しめる競技で気持ちよく汗を流します。</p>
                </div>
            </div>
            <!-- 11月 -->
            <div class="yearly-item fade-in-up">
                <div class="yearly-marker"><span>11月</span></div>
                <div class="yearly-content">
                    <h4>紅葉狩りドライブ</h4>
                    <p>色づいた木々を車窓から眺めながら、秋の深まりを感じるドライブへ出かけます。</p>
                </div>
            </div>
            <!-- 12月 -->
            <div class="yearly-item fade-in-up">
                <div class="yearly-marker"><span>12月</span></div>
                <div class="yearly-content">
                    <h4>クリスマス会</h4>
                    <p>サンタクロースも登場！？ケーキやプレゼント交換で今年最後のイベントを楽しく過ごします。</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     Price Section
======================================== -->
<section class="section" id="price">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <h2>ご利用料金のご案内</h2>
        </div>

        <div class="price-content" style="max-width: 900px; margin: 0 auto;">
            
            <h3 style="font-size: 1.3rem; color: var(--color-primary); border-bottom: 2px solid var(--color-primary-light); padding-bottom: 0.5rem; margin-bottom: 1.5rem; margin-top: 1rem;">1. 地域密着型通所介護サービス（1日あたり）</h3>
            
            <h4 style="font-size: 1.1rem; margin-bottom: 1rem; color: var(--color-text);">(1) 基本料金（1日あたりの利用料金：7〜8時間未満）</h4>
            <div class="price-table-wrapper" style="margin-bottom: 1rem;">
                <table class="price-table">
                    <thead>
                        <tr>
                            <th>要介護度</th>
                            <th>単位数</th>
                            <th>利用料金(全額)</th>
                            <th>自己負担(1割)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>要介護1</td>
                            <td>753 単位</td>
                            <td>8,042 円</td>
                            <td>804 円</td>
                        </tr>
                        <tr>
                            <td>要介護2</td>
                            <td>890 単位</td>
                            <td>9,505 円</td>
                            <td>951 円</td>
                        </tr>
                        <tr>
                            <td>要介護3</td>
                            <td>1,032 単位</td>
                            <td>11,022 円</td>
                            <td>1,102 円</td>
                        </tr>
                        <tr>
                            <td>要介護4</td>
                            <td>1,172 単位</td>
                            <td>12,517 円</td>
                            <td>1,252 円</td>
                        </tr>
                        <tr>
                            <td>要介護5</td>
                            <td>1,312 単位</td>
                            <td>14,012 円</td>
                            <td>1,401 円</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="font-size: 0.85rem; color: var(--color-text-light); margin-bottom: 2.5rem;">
                ※1単位＝10.68円（名古屋市地域加算を乗じた表示）で計算しています。<br>
                ※2割負担の方は、1割負担額の2倍、3割負担の方は3倍となります。
            </p>

            <h4 style="font-size: 1.1rem; margin-bottom: 1rem; color: var(--color-text);">(2) 地域密着型通所介護 加算料金（1日あたり／1月あたり）</h4>
            <div class="price-table-wrapper" style="margin-bottom: 1rem;">
                <table class="price-table">
                    <thead>
                        <tr>
                            <th>加算項目</th>
                            <th>単位数</th>
                            <th>自己負担(1割)</th>
                            <th>自己負担(2割)</th>
                            <th>自己負担(3割)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>入浴介助体制 (Ⅰ)</td>
                            <td>40 単位</td>
                            <td>43 円</td>
                            <td>85 円</td>
                            <td>128 円</td>
                        </tr>
                        <tr>
                            <td>個別機能訓練加算 (Ⅰ)イ</td>
                            <td>56 単位</td>
                            <td>60 円</td>
                            <td>120 円</td>
                            <td>179 円</td>
                        </tr>
                        <tr>
                            <td>個別機能訓練加算 (Ⅱ)</td>
                            <td>20 単位</td>
                            <td>21 円</td>
                            <td>43 円</td>
                            <td>64 円</td>
                        </tr>
                        <tr>
                            <td>口腔機能向上加算 (Ⅱ)</td>
                            <td>160 単位</td>
                            <td>171 円</td>
                            <td>342 円</td>
                            <td>513 円</td>
                        </tr>
                        <tr>
                            <td>地域通所介護科学的介護推進体制加算</td>
                            <td>40 単位</td>
                            <td>43 円</td>
                            <td>85 円</td>
                            <td>128 円</td>
                        </tr>
                        <tr>
                            <td>介護職員等処遇改善加算 (iiロ)<br>(令和8年4月〜)</td>
                            <td>-</td>
                            <td colspan="3">所定単位数の ?/1000 加算（1か月あたり）</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="font-size: 0.85rem; color: var(--color-text-light); margin-bottom: 3rem;">
                ※介護職員等処遇改善加算は、基本単位数の % 相当が加算されます。<br>
                ※2割負担の方は、1割負担額の2倍、3割負担の方は3倍となります。
            </p>

            <h3 style="font-size: 1.3rem; color: var(--color-primary); border-bottom: 2px solid var(--color-primary-light); padding-bottom: 0.5rem; margin-bottom: 1.5rem;">2. 予防専門型通所介護</h3>
            <p style="font-size: 0.95rem; color: var(--color-text); margin-bottom: 1.5rem;">
                <strong>③基本料金（予防専門型通所介護）</strong><br>
                保険単位／1単位 ＝ 10.68円<br>
                <span style="font-size: 0.85rem; color: var(--color-text-light);">（名古屋市地域加算を乗じた表示となっております）</span>
            </p>
            
            <h4 style="font-size: 1.1rem; margin-bottom: 1rem; color: var(--color-text);">(1) 要支援 1〜2（1月あたりの利用料）</h4>
            <div class="price-table-wrapper" style="margin-bottom: 2.5rem;">
                <table class="price-table">
                    <thead>
                        <tr>
                            <th>要支援度</th>
                            <th>単位数</th>
                            <th>1月あたりの利用料</th>
                            <th>自己負担(1割)</th>
                            <th>自己負担(2割)</th>
                            <th>自己負担(3割)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>要支援 1</td>
                            <td>1,798 単位</td>
                            <td>19,202 円</td>
                            <td>1,920 円</td>
                            <td>3,840 円</td>
                            <td>5,760 円</td>
                        </tr>
                        <tr>
                            <td>要支援 2</td>
                            <td>3,621 単位</td>
                            <td>38,672 円</td>
                            <td>3,867 円</td>
                            <td>7,734 円</td>
                            <td>11,601 円</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 style="font-size: 1.1rem; margin-bottom: 1rem; color: var(--color-text);">④予防介護加算料金</h4>
            <div class="price-table-wrapper" style="margin-bottom: 1rem;">
                <table class="price-table">
                    <thead>
                        <tr>
                            <th>加算項目</th>
                            <th>単位</th>
                            <th>自己負担(1割)</th>
                            <th>自己負担(2割)</th>
                            <th>自己負担(3割)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>口腔機能向上加算(Ⅱ)（1月あたり1回）</td>
                            <td>160 単位</td>
                            <td>171 円</td>
                            <td>342 円</td>
                            <td>513 円</td>
                        </tr>
                        <tr>
                            <td>通所型独自サービス科学的介護推進体制加算</td>
                            <td>40 単位</td>
                            <td>43 円</td>
                            <td>85 円</td>
                            <td>128 円</td>
                        </tr>
                        <tr>
                            <td>介護職員等処遇改善加算(iiロ)<br>(令和8年4月〜)</td>
                            <td>-</td>
                            <td colspan="3">所定単位数の ?/1000 加算（1か月あたり）</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <ul style="font-size: 0.85rem; color: var(--color-text-light); margin-bottom: 3rem; padding-left: 1.2rem;">
                <li>※ 高齢者虐待防止措置未実施の場合は、所定単位数より 1/100 減算となります。</li>
                <li>※ 業務継続計画未策定の場合（令和7年4月1日より適用）、所定単位数より 1/100 減算となります。</li>
            </ul>

            <h3 style="font-size: 1.3rem; color: var(--color-primary); border-bottom: 2px solid var(--color-primary-light); padding-bottom: 0.5rem; margin-bottom: 1.5rem;">3. 自費を頂くもの（介護保険適用外）</h3>
            <p style="font-size: 0.95rem; color: var(--color-text); margin-bottom: 1rem;"><strong>⑤自費を頂くもの</strong></p>
            <div class="price-table-wrapper" style="margin-bottom: 1rem;">
                <table class="price-table">
                    <thead>
                        <tr>
                            <th>項目</th>
                            <th>内容</th>
                            <th>料金</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>食費（おやつ・お茶代）</td>
                            <td>1食</td>
                            <td>750 円 / 回</td>
                        </tr>
                        <tr>
                            <td>おむつ代（パンツ）</td>
                            <td>1枚</td>
                            <td>150 円</td>
                        </tr>
                        <tr>
                            <td>おむつ代（パット）</td>
                            <td>1枚</td>
                            <td>80 円</td>
                        </tr>
                        <tr>
                            <td>サービス提供超過費</td>
                            <td>30分につき</td>
                            <td>1,000 円</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="font-size: 0.85rem; color: var(--color-text-light); margin-bottom: 3rem;">
                ※他、レク材料・行事費用等、その都度清算させて頂く場合がありますのでご了承ください。（事前に行事内容・料金等をお知らせします。）
            </p>

            <h3 style="font-size: 1.3rem; color: var(--color-primary); border-bottom: 2px solid var(--color-primary-light); padding-bottom: 0.5rem; margin-bottom: 1.5rem;">4. 支払い方法</h3>
            
            <div style="background: var(--color-white); padding: 2rem; border-radius: 12px; border: 1px solid rgba(254, 215, 170, 0.5); box-shadow: 0 4px 16px rgba(0,0,0,0.03);">
                <h4 style="font-size: 1.1rem; color: var(--color-text); margin-bottom: 0.5rem; display: flex; align-items: center; gap: 0.5rem;">
                    <svg viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="20" height="20">
                        <rect x="2" y="5" width="20" height="14" rx="2"/>
                        <line x1="2" y1="10" x2="22" y2="10"/>
                    </svg>
                    支払い方法
                </h4>
                <p style="margin-bottom: 0; line-height: 1.6; color: var(--color-text); font-size: 0.95rem;">
                    原則として口座振替（銀行口座からの自動引き落とし）となります。
                </p>
            </div>

        </div>
    </div>
</section>

<!-- ========================================
     Important Documents Section
======================================== -->
<section class="section">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <h2>重要事項説明書</h2>
            <p>デイサービスとんぼの重要事項説明書は、下記よりPDF形式でご覧いただけます。</p>
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
                <a href="<?php echo get_template_directory_uri(); ?>/assets/pdf/important-document-a.pdf" class="pdf-link" target="_blank" rel="noopener noreferrer">
                    重要事項説明書 [PDF]
                </a>
                <span class="pdf-meta">※PDFファイルの配置をお待ちください。</span>
            </div>
        </div>
    </div>
</section>

<!-- ========================================
     Access Section
======================================== -->
<section class="section section-alt">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <h2>アクセス</h2>
        </div>
        
        <div style="max-width: 800px; margin: 0 auto;">
            <p style="margin-bottom: 2rem; text-align: center; line-height: 1.8;">
                <strong>【公共交通機関でお越しの場合】</strong><br>
                地下鉄名城線「名城公園駅」より徒歩6分<br>
                名鉄瀬戸線「東大手駅」より徒歩3分
            </p>
            <p style="margin-bottom: 2rem; text-align: center; line-height: 1.8;">
                <strong>【お車でお越しの場合】</strong><br>
                専用駐車場はございません。近隣のコインパーキングをご利用ください。
            </p>
            <div class="office-map" style="height: 400px; background: #E5E7EB; border-radius: 12px; display: flex; align-items: center; justify-content: center; color: #9CA3AF;">
                <span>Google Maps（名古屋市北区柳原1-18-8）準備中</span>
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
            <h2>デイサービスとんぼへのお問い合わせ</h2>
            <p>見学や体験利用など、お気軽にご連絡ください</p>
        </div>

        <div class="contact-form-wrapper">
            <form action="#" method="post">
                <input type="hidden" name="office" value="デイサービスとんぼ">
                
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

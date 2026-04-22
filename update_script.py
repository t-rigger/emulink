import sys

# 1. Read Office A to extract the seasonal events
with open("wp-content/themes/dayservice-sample/page-office-a.php", "r", encoding="utf-8") as f:
    lines_a = f.readlines()

event_start = -1
event_end = -1
for i, line in enumerate(lines_a):
    if "Seasonal Events Section" in line:
        event_start = i - 1 # Include the comment block start
    if event_start != -1 and "</section>" in line and i > event_start + 10:
        event_end = i + 1
        break

if event_start == -1 or event_end == -1:
    print("Could not find events section in A.")
    sys.exit(1)

events_html = "".join(lines_a[event_start:event_end])

# 2. Read Office B
with open("wp-content/themes/dayservice-sample/page-office-b.php", "r", encoding="utf-8") as f:
    content_b = f.read()

# 3. Define new sections HTML

conditions_html = """
<!-- ========================================
     Move-in Conditions Section
======================================== -->
<section class="section section-alt" id="conditions">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <h2>ご入居の条件</h2>
            <p>ご本人様もご家族様も安心してお過ごしいただくために</p>
        </div>
        
        <div style="background: #fff; padding: 2.5rem; border-radius: 12px; box-shadow: 0 4px 16px rgba(0,0,0,0.03); border: 1px solid #EADFC8; max-width: 800px; margin: 0 auto;">
            <ul style="list-style: none; padding: 0; margin: 0; color: #4E3F30; line-height: 1.8;">
                <li style="margin-bottom: 1rem; display: flex; align-items: flex-start; gap: 0.8rem;">
                    <svg style="flex-shrink: 0; margin-top: 4px;" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#D96C52" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    原則として、要支援・要介護認定（要介護1～5）を受けている方
                </li>
                <li style="margin-bottom: 1rem; display: flex; align-items: flex-start; gap: 0.8rem;">
                    <svg style="flex-shrink: 0; margin-top: 4px;" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#D96C52" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    複数名での共同生活に支障がない方
                </li>
                <li style="margin-bottom: 1rem; display: flex; align-items: flex-start; gap: 0.8rem;">
                    <svg style="flex-shrink: 0; margin-top: 4px;" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#D96C52" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    著しい自傷・他害の恐れがない方
                </li>
                <li style="margin-bottom: 1rem; display: flex; align-items: flex-start; gap: 0.8rem;">
                    <svg style="flex-shrink: 0; margin-top: 4px;" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#D96C52" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    感染症等の疾患がない方（※詳細はお問い合わせください）
                </li>
                <li style="display: flex; align-items: flex-start; gap: 0.8rem;">
                    <svg style="flex-shrink: 0; margin-top: 4px;" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#D96C52" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    お住まいの地域に関わらず、どなたでもご入居をご検討いただけます
                </li>
            </ul>
        </div>
    </div>
</section>
"""

medical_html = """
<!-- ========================================
     Medical System Section
======================================== -->
<section class="section" id="medical">
    <div class="section-inner fade-in-up">
        <div class="section-header">
            <h2>医療・看護体制</h2>
            <p>24時間の見守りと、地域医療との強力な連携ネットワーク</p>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; max-width: 900px; margin: 0 auto;">
            <!-- Card 1 -->
            <div style="background: #FDF8F0; padding: 2rem; border-radius: 8px; border-top: 4px solid #D96C52; box-shadow: 0 2px 10px rgba(0,0,0,0.02);">
                <h3 style="color: #4E3F30; font-size: 1.2rem; margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#D96C52" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
                    日々の健康管理
                </h3>
                <p style="color: #6B4938; line-height: 1.6; font-size: 0.95rem;">
                    毎日のバイタルチェック（体温・血圧・脈拍等）や服薬管理を徹底。小さな体調の変化も見逃さず、健康的な生活をサポートします。
                </p>
            </div>
            <!-- Card 2 -->
            <div style="background: #FDF8F0; padding: 2rem; border-radius: 8px; border-top: 4px solid #D96C52; box-shadow: 0 2px 10px rgba(0,0,0,0.02);">
                <h3 style="color: #4E3F30; font-size: 1.2rem; margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#D96C52" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/><path d="M12 14v4"/><path d="M10 16h4"/></svg>
                    訪問診療・訪問歯科
                </h3>
                <p style="color: #6B4938; line-height: 1.6; font-size: 0.95rem;">
                    地域の協力医療機関と連携し、定期的な往診を実施。通院の手間や負担を軽減し、居室にいながら適切な医療ケアを受けられます。
                </p>
            </div>
            <!-- Card 3 -->
            <div style="background: #FDF8F0; padding: 2rem; border-radius: 8px; border-top: 4px solid #D96C52; box-shadow: 0 2px 10px rgba(0,0,0,0.02);">
                <h3 style="color: #4E3F30; font-size: 1.2rem; margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#D96C52" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    24時間 緊急時対応
                </h3>
                <p style="color: #6B4938; line-height: 1.6; font-size: 0.95rem;">
                    夜間もスタッフが常駐し、各居室内の緊急コールに対応。万が一の急変時にも、速やかに協力医療機関の医師へ相談できる体制を整えています。
                </p>
            </div>
        </div>
    </div>
</section>
"""

# Insert locations
# 1. Medical System -> after Facility Status (which ends at <!-- Pricing Section -->)
if "<!-- ========================================\n     Pricing Section" in content_b:
    content_b = content_b.replace("<!-- ========================================\n     Pricing Section", medical_html + "\n<!-- ========================================\n     Pricing Section")
else:
    print("Pricing Section mark not found!")

# 2. Conditions -> right before Medical System
if "<!-- ========================================\n     Medical System Section" in content_b:
    content_b = content_b.replace("<!-- ========================================\n     Medical System Section", conditions_html + "\n<!-- ========================================\n     Medical System Section")
else:
    print("Medical System Section mark not found!")

# 3. Events -> after Rooms List, before Steps Section
if "<!-- ========================================\n     Steps Section" in content_b:
    content_b = content_b.replace("<!-- ========================================\n     Steps Section", events_html + "\n<!-- ========================================\n     Steps Section")
else:
    print("Steps Section mark not found!")

with open("wp-content/themes/dayservice-sample/page-office-b.php", "w", encoding="utf-8") as f:
    f.write(content_b)

print("Insertion complete.")

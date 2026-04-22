#!/usr/bin/env python3
"""
Build script: WordPress PHP → Static HTML for GitHub Pages

Output:
  index.html                    ← TOP page (emulink/)
  tonbo-dayservice/index.html   ← デイサービスとんぼ (emulink/tonbo-dayservice/)
  tonbo-nakamura/index.html     ← シルバーハウスとんぼ中村 (emulink/tonbo-nakamura/)

Assets remain at:
  wp-content/themes/dayservice-sample/style.css
  wp-content/themes/dayservice-sample/assets/
"""

import os
import re

THEME_DIR = "wp-content/themes/dayservice-sample"

# ── File I/O ──────────────────────────────────────────────────────────────────

def read(path):
    with open(path, "r", encoding="utf-8") as f:
        return f.read()

def write(path, content):
    d = os.path.dirname(path)
    if d:
        os.makedirs(d, exist_ok=True)
    with open(path, "w", encoding="utf-8") as f:
        f.write(content)

# ── HTML Parts ────────────────────────────────────────────────────────────────

def make_head(title, description, theme_rel):
    return f"""<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{title}</title>
    <meta name="description" content="{description}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@400;700;800&family=Noto+Sans+JP:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{theme_rel}/style.css">
</head>
<body>
"""

IG_SVG = '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-ig"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>'

IG_DROPDOWN = """
                <li class="nav-instagram">
                    <a href="#" class="ig-toggle" aria-haspopup="true" aria-expanded="false">
                        {ig_svg}
                        Instagram
                    </a>
                    <ul class="ig-dropdown">
                        <li><a href="https://www.instagram.com/dayservice_tonbo/" target="_blank" rel="noopener noreferrer">デイサービスとんぼ</a></li>
                    </ul>
                </li>""".format(ig_svg=IG_SVG)

def make_header(page_type, home_url, dayservice_url, nakamura_url, theme_rel):
    """
    page_type: "top" | "dayservice" | "nakamura"
    """
    if page_type == "top":
        nav_items = f"""
                <li><a href="#news">お知らせ</a></li>
                <li><a href="#features">私たちの特徴</a></li>
                <li class="nav-dropdown">
                    <a href="#office" class="nav-dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                        事業所案内 ▼
                    </a>
                    <ul class="nav-dropdown-menu">
                        <li><a href="{dayservice_url}">デイサービスとんぼ</a></li>
                        <li><a href="{nakamura_url}">シルバーハウスとんぼ中村</a></li>
                    </ul>
                </li>
                <li><a href="#greeting">代表挨拶</a></li>
                <li><a href="#company">会社概要</a></li>
                {IG_DROPDOWN}
                <li><a href="#office" class="btn-contact">お問い合わせ</a></li>"""

    elif page_type == "dayservice":
        nav_items = f"""
                <li><a href="{home_url}" style="font-weight:bold;">← TOPへ戻る</a></li>
                <li><a href="#recreation">1日の流れ・レク</a></li>
                <li><a href="#seasonal-events">年間行事</a></li>
                <li><a href="#overview">施設概要</a></li>
                <li><a href="#price">ご利用料金</a></li>
                {IG_DROPDOWN}
                <li><a href="#contact-form" class="btn-contact">お問い合わせ</a></li>"""

    else:  # nakamura
        nav_items = f"""
                <li><a href="{home_url}" style="font-weight:bold;">← TOPへ戻る</a></li>
                <li><a href="#recreation">1日の流れ・レク</a></li>
                <li><a href="#overview">施設概要</a></li>
                <li><a href="#price">ご利用料金</a></li>
                {IG_DROPDOWN}
                <li><a href="#contact-form" class="btn-contact">お問い合わせ</a></li>"""

    return f"""
<!-- Splash Screen -->
<div id="splash-screen">
    <img src="{theme_rel}/assets/images/tonbo-logo-real-transparent.png" alt="デイサービスとんぼ" class="splash-logo">
</div>

<!-- Header -->
<header class="site-header" id="site-header">
    <div class="header-inner">
        <div class="site-logo">
            <a href="{home_url}">
                <img src="{theme_rel}/assets/images/tonbo-logo-real-transparent.png" alt="" class="logo-icon">
                エムリンク株式会社
            </a>
        </div>
        <nav>
            <button class="menu-toggle" aria-label="メニューを開く" id="menu-toggle">
                <span></span><span></span><span></span>
            </button>
            <ul class="nav-links" id="nav-links">
                {nav_items}
            </ul>
        </nav>
    </div>
</header>
"""

def make_footer(home_url):
    return f"""
<!-- Footer -->
<footer class="site-footer" id="contact">
    <div class="footer-inner">
        <div class="footer-grid">
            <div class="footer-brand">
                <div class="footer-logo">エムリンク株式会社</div>
                <p>笑顔があふれる、もうひとつの我が家。<br>心を込めたおもてなしで、皆さまの毎日に安心と楽しさをお届けします。</p>
            </div>
            <div class="footer-links">
                <h4>サイトマップ</h4>
                <ul>
                    <li><a href="{home_url}">ホーム</a></li>
                    <li><a href="{home_url}#features">私たちの特徴</a></li>
                    <li><a href="{home_url}#office">事業所案内</a></li>
                    <li><a href="{home_url}#greeting">代表挨拶</a></li>
                    <li><a href="{home_url}#company">会社概要</a></li>
                </ul>
            </div>
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
            <p>&copy; 2025 エムリンク株式会社 All Rights Reserved.</p>
        </div>
    </div>
</footer>
"""

def make_scripts(theme_rel):
    return f"""
<script src="{theme_rel}/assets/js/splash.js"></script>
<script>
window.addEventListener("scroll", function() {{
    const header = document.querySelector(".site-header");
    if (header) header.classList.toggle("scrolled", window.scrollY > 50);
}});
document.addEventListener("DOMContentLoaded", function() {{
    // Mobile menu toggle
    const menuToggle = document.querySelector(".menu-toggle");
    const navLinks = document.querySelector(".nav-links");
    if (menuToggle && navLinks) {{
        menuToggle.addEventListener("click", function() {{
            this.classList.toggle("active");
            navLinks.classList.toggle("active");
        }});
        navLinks.querySelectorAll("a").forEach(function(a) {{
            a.addEventListener("click", function() {{
                if (a.classList.contains("ig-toggle") || a.classList.contains("nav-dropdown-toggle")) return;
                menuToggle.classList.remove("active");
                navLinks.classList.remove("active");
            }});
        }});
    }}

    // Dropdown menus
    document.querySelectorAll(".nav-dropdown-toggle").forEach(function(toggle) {{
        toggle.addEventListener("click", function(e) {{
            e.preventDefault();
            const expanded = this.getAttribute("aria-expanded") === "true";
            this.setAttribute("aria-expanded", !expanded);
            const menu = this.nextElementSibling;
            if (menu) menu.classList.toggle("open");
        }});
    }});

    // Instagram dropdown
    document.querySelectorAll(".ig-toggle").forEach(function(toggle) {{
        toggle.addEventListener("click", function(e) {{
            e.preventDefault();
            const expanded = this.getAttribute("aria-expanded") === "true";
            this.setAttribute("aria-expanded", !expanded);
            const menu = this.nextElementSibling;
            if (menu) menu.classList.toggle("open");
        }});
    }});

    // Scroll fade-in
    const observer = new IntersectionObserver(function(entries) {{
        entries.forEach(function(entry) {{
            if (entry.isIntersecting) entry.target.classList.add("visible");
        }});
    }}, {{ threshold: 0.1 }});
    document.querySelectorAll(".fade-in-up").forEach(function(el) {{
        observer.observe(el);
    }});
}});
</script>
</body>
</html>
"""

# ── PHP → Static conversion ───────────────────────────────────────────────────

STATIC_NEWS = """
                <li>
                    <a href="#" class="news-item">
                        <span class="news-date">2026.04.15</span>
                        <span class="news-title">4月のレクリエーション予定を更新しました</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="news-item">
                        <span class="news-date">2026.04.01</span>
                        <span class="news-title">新年度のご挨拶と新しいプログラムのお知らせ</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="news-item">
                        <span class="news-date">2026.03.20</span>
                        <span class="news-title">お花見イベントを開催いたします</span>
                    </a>
                </li>"""

def process_body(php_content, theme_rel, home_url, dayservice_url, nakamura_url):
    """Strip PHP, fix paths, return clean HTML body content."""
    text = php_content

    # Remove PHP header/footer includes
    text = re.sub(r'<\?php\s*/\*.*?\*/\s*(get_header|get_footer)\(\);\s*\?>\n?', '', text, flags=re.DOTALL)
    text = re.sub(r'<\?php\s*(get_header|get_footer)\(\);\s*\?>\n?', '', text)

    # Replace get_template_directory_uri() with theme_rel
    text = text.replace("<?php echo get_template_directory_uri(); ?>", theme_rel)
    text = text.replace("<?php echo esc_url(get_template_directory_uri()); ?>", theme_rel)

    # Replace home_url references
    text = text.replace(f"<?php echo esc_url(home_url('/')); ?>", home_url)
    text = text.replace(f"<?php echo esc_url(home_url('/office-a/')); ?>", dayservice_url)
    text = text.replace(f"<?php echo esc_url(home_url('/office-b/')); ?>", nakamura_url)

    # Replace news WP loop with static HTML
    text = re.sub(
        r'<\?php\s*\$news_query\s*=.*?endif;\s*\?>',
        STATIC_NEWS,
        text,
        flags=re.DOTALL
    )

    # Replace news "more" link
    text = re.sub(
        r'href="<\?php echo esc_url\(get_permalink\(get_option\(\'page_for_posts\'\)\)\); \?>"',
        'href="#"',
        text
    )

    # Fix hardcoded absolute /assets/images/ paths (some pages use these)
    text = re.sub(r'src="/assets/images/', f'src="{theme_rel}/assets/images/', text)
    text = re.sub(r'href="/assets/pdf/', f'href="{theme_rel}/assets/pdf/', text)

    # Remove all remaining PHP tags
    text = re.sub(r'<\?php.*?\?>', '', text, flags=re.DOTALL)

    return text.strip()

# ── Build ─────────────────────────────────────────────────────────────────────

THEME_ROOT = "./wp-content/themes/dayservice-sample"
THEME_SUB  = "../wp-content/themes/dayservice-sample"

# URLs from each page's perspective
HOME_FROM_ROOT      = "./"
DAYSERVICE_FROM_ROOT = "./tonbo-dayservice/"
NAKAMURA_FROM_ROOT   = "./tonbo-nakamura/"

HOME_FROM_SUB        = "../"
DAYSERVICE_FROM_SUB  = "../tonbo-dayservice/"
NAKAMURA_FROM_SUB    = "../tonbo-nakamura/"


# 1. TOP → index.html
top_php  = read(f"{THEME_DIR}/index.php")
top_body = process_body(top_php, THEME_ROOT, HOME_FROM_ROOT, DAYSERVICE_FROM_ROOT, NAKAMURA_FROM_ROOT)
top_html = (
    make_head(
        "エムリンク株式会社 | デイサービスとんぼ・シルバーハウスとんぼ中村",
        "エムリンク株式会社 - 笑顔があふれる、もうひとつの我が家。心を込めたおもてなしで、安心のデイサービスをお届けします。",
        THEME_ROOT
    )
    + make_header("top", HOME_FROM_ROOT, DAYSERVICE_FROM_ROOT, NAKAMURA_FROM_ROOT, THEME_ROOT)
    + top_body
    + make_footer(HOME_FROM_ROOT)
    + make_scripts(THEME_ROOT)
)
write("index.html", top_html)
print("✓ index.html (TOP)")


# 2. Day Service → tonbo-dayservice/index.html
oa_php  = read(f"{THEME_DIR}/page-office-a.php")
oa_body = process_body(oa_php, THEME_SUB, HOME_FROM_SUB, DAYSERVICE_FROM_SUB, NAKAMURA_FROM_SUB)
oa_html = (
    make_head(
        "デイサービスとんぼ | エムリンク株式会社",
        "デイサービスとんぼ - 地域に根差した温かく安心できる通所介護。名古屋市北区。",
        THEME_SUB
    )
    + make_header("dayservice", HOME_FROM_SUB, DAYSERVICE_FROM_SUB, NAKAMURA_FROM_SUB, THEME_SUB)
    + oa_body
    + make_footer(HOME_FROM_SUB)
    + make_scripts(THEME_SUB)
)
write("tonbo-dayservice/index.html", oa_html)
print("✓ tonbo-dayservice/index.html (Day Service)")


# 3. Silver House → tonbo-nakamura/index.html
ob_php  = read(f"{THEME_DIR}/page-office-b.php")
ob_body = process_body(ob_php, THEME_SUB, HOME_FROM_SUB, DAYSERVICE_FROM_SUB, NAKAMURA_FROM_SUB)
ob_html = (
    make_head(
        "シルバーハウスとんぼ中村 | エムリンク株式会社",
        "シルバーハウスとんぼ中村 - 住み慣れたこの街で、明日も変わらない安心を。住宅型有料老人ホーム。",
        THEME_SUB
    )
    + make_header("nakamura", HOME_FROM_SUB, DAYSERVICE_FROM_SUB, NAKAMURA_FROM_SUB, THEME_SUB)
    + ob_body
    + make_footer(HOME_FROM_SUB)
    + make_scripts(THEME_SUB)
)
write("tonbo-nakamura/index.html", ob_html)
print("✓ tonbo-nakamura/index.html (Silver House)")

print("\nAll pages built successfully!")
print("\nOutput:")
print("  index.html")
print("  tonbo-dayservice/index.html")
print("  tonbo-nakamura/index.html")

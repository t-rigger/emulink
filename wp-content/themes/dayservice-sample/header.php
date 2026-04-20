<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="エムリンク株式会社 - 笑顔があふれる、もうひとつの我が家。心を込めたおもてなしで、安心のデイサービスをお届けします。">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ========================================
     Splash Screen
======================================== -->
<div id="splash-screen">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tonbo-logo-real-transparent.png" alt="デイサービスとんぼ" class="splash-logo">
</div>

<!-- ========================================
     Header
======================================== -->
<header class="site-header" id="site-header">
    <div class="header-inner">
        <!-- Logo -->
        <div class="site-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                エムリンク株式会社
            </a>
        </div>

        <!-- Navigation -->
        <nav>
            <button class="menu-toggle" aria-label="メニューを開く" id="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-links" id="nav-links">
                <?php if ( is_page('office-a') || is_page('office-b') ) : ?>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>" style="font-weight:bold;">← TOPへ戻る</a></li>
                    <li><a href="#recreation">1日の流れ・レク</a></li>
                    <?php if ( is_page('office-a') ) : ?>
                    <li><a href="#seasonal-events">年間行事</a></li>
                    <?php endif; ?>
                    <li><a href="#overview">施設概要</a></li>
                    <li><a href="#price">ご利用料金</a></li>
                <?php else : ?>
                    <?php $rnp_home_url_prefix = ( is_front_page() || is_home() ) ? '' : esc_url(home_url('/')); ?>
                    <li><a href="<?php echo $rnp_home_url_prefix; ?>#news">お知らせ</a></li>
                    <li><a href="<?php echo $rnp_home_url_prefix; ?>#features">私たちの特徴</a></li>
                    <li class="nav-dropdown">
                        <a href="<?php echo $rnp_home_url_prefix; ?>#office" class="nav-dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                            事業所案内 ▼
                        </a>
                        <ul class="nav-dropdown-menu">
                            <li><a href="<?php echo esc_url(home_url('/office-a/')); ?>">デイサービスとんぼ</a></li>
                            <li><a href="<?php echo esc_url(home_url('/office-b/')); ?>">シルバーハウスとんぼ中村</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo $rnp_home_url_prefix; ?>#greeting">代表挨拶</a></li>
                    <li><a href="<?php echo $rnp_home_url_prefix; ?>#company">会社概要</a></li>
                <?php endif; ?>
                
                <li class="nav-instagram">
                    <a href="#" class="ig-toggle" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon-ig"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                        Instagram
                    </a>
                    <ul class="ig-dropdown">
                        <li><a href="https://www.instagram.com/dayservice_tonbo/" target="_blank" rel="noopener noreferrer">デイサービスとんぼ</a></li>
                    </ul>
                </li>
                
                <?php if ( is_front_page() || is_home() ) : ?>
                <li><a href="#office" class="btn-contact">お問い合わせ</a></li>
                <?php else : ?>
                <li><a href="#contact-form" class="btn-contact">お問い合わせ</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</header>

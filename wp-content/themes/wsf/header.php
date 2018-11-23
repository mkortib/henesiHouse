<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#fdbe11">
    <meta name="apple-mobile-web-app-title" content="HHouse">
    <meta name="application-name" content="HHouse">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NXNS5DJ');</script>
    <!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXNS5DJ"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php

$paths = ['/', '/ru/', '/en/'];

if (!in_array($_SERVER['REQUEST_URI'], $paths)) {
    $categories = get_the_category();
    $category_id = $categories[0]->parent ?: $categories[0]->cat_ID;
    $layout_page = $category_id == 22 ? 'layout-page' : '';
    $news_page = $category_id == 16 ? 'news-page' : '';
    $action_page = $category_id == 15 ? 'action-page' : '';
} else {
    $layout_page = '';
    $news_page = '';
}

?>
<div id="page" class="<?= $layout_page.$news_page.$action_page; ?>">
    <header>
        <div class="bl flex flex-sa">
            <a href="tel:0442283898" class="h_tel">+38 (044) 228-38-98</a>
            <p class="address">
                <?php echo __('[:ua]м. Київ, вул. Нагірна, 18/16[:ru]г. Киев, ул. Нагорная, 18/16[:en]Kiev, Nagornaya st. 18/16[:]'); ?>
            </p>
            <div class="socials flex flex-sa">
                <a href="https://t.me/henesihouse" target="_blank" rel="nofollow" class="telegram"></a>
                <a href="https://www.instagram.com/henesi_house/" target="_blank" rel="nofollow" class="insta"></a>
                <a href="https://www.facebook.com/HenesiHouse/" target="_blank" rel="nofollow" class="fb"></a>
            </div>
            <div class="lang_switcher mob">
                <?php echo qtranxf_generateLanguageSelectCode(‘both’); ?>
            </div>
        </div>
        <nav id="nav" class="flex flex-sb">
            
            <div class="logo">
                <a href="/">
                    <img src="/img/henesi-logo.svg" alt="Логотип HHouse">
                </a>
            </div>
            
            <div class="menu flex flex-sb">
                <?php
                    wp_nav_menu( array(
                        'container'      => false,
                        'echo'           => true,
                        'depth'          => 0,
                        'theme_location' => 'primary',
                        'items_wrap'     => '%3$s',
                    ) );
                ?>
                <div class="social_mob flex-sb">
                    <a href="https://t.me/henesihouse" target="_blank" rel="nofollow" class="telegram"></a>
                    <a href="https://www.instagram.com/henesi_house/" target="_blank" rel="nofollow" class="insta"></a>
                    <a href="https://www.facebook.com/HenesiHouse/" target="_blank" rel="nofollow" class="fb"></a>
                </div>
            </div>
            <div class="lang_switcher">
                <?php echo qtranxf_generateLanguageSelectCode(‘both’); ?>
            </div>
            <div class="nav_cb flex-sb">
                <a href="tel:0442283898">+38 (044) 228-38-98</a>
<!--                <span class="ad_saver_phone">+38 (044) 228-38-98</span>-->
                <div class="btn_w_line btn_b">
                    <div class="btn cb" data-subject="Задать вопрос хедер"><?php echo __('[:ua]Задати питання[:ru]Задать вопрос[:en]Ask a question[:]'); ?></div>
                </div>
            </div>
            <div class="burger_menu">
                <div class="burger"></div>
            </div>
        </nav>
    </header>
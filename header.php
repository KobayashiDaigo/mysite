<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- 文字のエンコード -->
    <meta charset="UTF-8">
    <!-- レスポンシブサイト -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- IEを標準モード -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- 検索結果の説明文 -->
    <meta name="description" content="子どもが家でゲームしてばかり、なかなか外で遊ぶ機会が減った、運動不足、こんなお悩みありませんか？こどもしぜんじゅくではお子さんの好奇心を刺激し、感性を豊かにさせることで成長を加速させます。" />
    
    <meta property="og:url" content="ページURL" />
    <meta property="og:title" content="こどもしぜんじゅく" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="普通の塾とはひと味もふた味も違う、子ども一人一人の感性を引き出す塾" />
    <meta property="og:image" content="画像URL" />
    <meta property="og:site_name" content="こどもしぜんじゅく" />
    <meta property="og:local" content="ja_JP" />
    
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sab.css" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <title>こどもしぜんじゅく</title>
    <?php wp_head(); ?>
</head>
<body>
    <div id="loadingWrap">
        <div id="loading"></div>
    </div>

    <header>
        <div class="wrap">
            <a class="logo" href="#">
                <img src="<?php bloginfo('template_directory'); ?>/images/logo1.png" alt="こどもしぜんじゅくのロゴ">
            </a>
            <div>
                <div class="free-application"><a href="#form">無料体験申し込み</a></div>
                <div>
                    <nav class="global-nav" id="global-nav">
                        <ul class="global-nav__list">
                            <li class="global-nav__item"><a href="<?php echo home_url('#feature'); ?>">特徴</a></li>
                            <li class="global-nav__item"><a href="<?php echo home_url('#day'); ?>">1日のながれ</a></li>
                            <li class="global-nav__item"><a href="<?php echo home_url('#price'); ?>">料金</a></li>
                            <li class="global-nav__item"><a href="<?php echo home_url('#media'); ?>">メディア実績</a></li>
                            <li class="global-nav__item"><a href="<?php echo home_url('#voice'); ?>">ご利用者様の声</a></li>
                            <li class="global-nav__item"><a href="<?php echo home_url('#staff'); ?>">スタッフ紹介</a></li>
                            <li class="global-nav__item"><a href="<?php echo home_url('#question'); ?>">よくあるご質問</a></li>
                            <li class="global-nav__item"><a href="<?php echo home_url('#form'); ?>">お問い合わせ</a></li>
                        </ul>
                    </nav>
                    <div class="hamburger" id="js-hamburger">
                            <span class="hamburger__line hamburger__line--1"></span>
                            <span class="hamburger__line hamburger__line--2"></span>
                            <span class="hamburger__line hamburger__line--3"></span>
                    </div>
                    <div class="black-bg" id="js-black-bg"></div>
                </div>
            </div>
        </div>
    </header>


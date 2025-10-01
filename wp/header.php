<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta property="og:description" content="">
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content="タイトル"/>
  <meta property="og:type" content="website">
  <meta property="og:locale" content="ja-JP">
  <meta property="og:image" content="">
  <meta name="twitter:card" content="summary">

  <title>テスト</title>

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css">

  <!-- フォント読み込み -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php if ( ! is_front_page() && ! is_home() ) echo 'class="under-page"'; ?>>
  <header class="l-header">
    <div class="l-header__inner">
      <div class="l-header__cont">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header__logo-link">
          <picture class="l-header__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_pc.svg" width="232" height="60" alt="株式会社ワタナベ 自社でワイヤーカット加工機100台保有。金型加工のワタナベ。">
          </picture>
          <!-- <?php if ( is_front_page() ) : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_pc.svg" width="232" height="60" alt="株式会社ワタナベ 自社でワイヤーカット加工機100台保有。金型加工のワタナベ。">
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo_sub.svg" width="232" height="60"alt="株式会社ワタナベ 自社でワイヤーカット加工機100台保有。金型加工のワタナベ。">
          <?php endif; ?> -->
        </a>
        <div class="l-header__hamburger js-nav-btn">
          <span class="l-header__hamburger-line"></span>
          <span class="l-header__hamburger-line"></span>
          <span class="l-header__hamburger-line"></span>
        </div>
        <nav class="l-header__nav js-nav">
          <ul class="l-header__nav-list">
            <li class="l-header__nav-item">
              <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="l-header__nav-link">会社情報</a>
            </li>
            <li class="l-header__nav-item">
              <a href="<?php echo esc_url( home_url( '/strengths/' ) ); ?>" class="l-header__nav-link">5つの強み</a>
            </li>
            <li class="l-header__nav-item">
              <a href="<?php echo esc_url( home_url( '/facility/' ) ); ?>" class="l-header__nav-link">設備・加工案内</a>
            </li>
            <li class="l-header__nav-item">
              <a href="<?php echo esc_url( home_url( '/delivery/' ) ); ?>" class="l-header__nav-link">納期案内</a>
            </li>
            <li class="l-header__nav-item">
              <a href="<?php echo esc_url( home_url( '/recruit/' ) ); ?>" class="l-header__nav-link">採用情報</a>
            </li>
            <li class="l-header__nav-item">
              <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="l-header__nav-link">お知らせ</a>
            </li>
            <li class="l-header__nav-item l-header__contact">
              <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="l-header__nav-link l-header__contact-btn">
                <svg class="l-header__svg" width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1.39779 11.3327C1.03112 11.3327 0.717342 11.2022 0.456453 10.9413C0.195564 10.6805 0.0648976 10.3665 0.0644531 9.99935V1.99935C0.0644531 1.63268 0.19512 1.3189 0.456453 1.05802C0.717787 0.797127 1.03156 0.66646 1.39779 0.666016H12.0645C12.4311 0.666016 12.7451 0.796682 13.0065 1.05802C13.2678 1.31935 13.3982 1.63313 13.3978 1.99935V9.99935C13.3978 10.366 13.2673 10.68 13.0065 10.9413C12.7456 11.2027 12.4316 11.3331 12.0645 11.3327H1.39779ZM12.0645 3.33268L7.08112 6.44935C7.02556 6.48268 6.96734 6.50779 6.90645 6.52468C6.84556 6.54157 6.78712 6.54979 6.73112 6.54935C6.67512 6.5489 6.6169 6.54068 6.55645 6.52468C6.49601 6.50868 6.43756 6.48357 6.38112 6.44935L1.39779 3.33268V9.99935H12.0645V3.33268ZM6.73112 5.33268L12.0645 1.99935H1.39779L6.73112 5.33268ZM1.39779 3.49935V2.51602V2.53268V2.52468V3.49935Z" fill="white"/>
                </svg>
                お問い合わせ
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
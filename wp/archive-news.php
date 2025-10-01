<?php
/*
Template Name: お知らせ
*/
?>
  <?php get_header(); ?>

  <main class="l-main">
    <span class="c-line"></span>
    <span class="c-line c-line--2"></span>

    <div class="c-breadcrumb">
      <div class="c-inner">
        <ul class="c-breadcrumb__list">
          <li class="c-breadcrumb__item">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="c-breadcrumb__link">トップ</a>
          </li>
          <li class="c-breadcrumb__item">
            <span class="c-breadcrumb__link">お知らせ</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="p-news">
      <section class="c-under-mv">
        <div class="c-inner">
          <div class="c-under-mv__ttl">
            <span class="c-under-mv__en-ttl">news</span>
            <h1 class="c-under-mv__ja-ttl">お知らせ</h1>
          </div>
        </div>
        <div class="c-under-mv__bg c-under-mv__bg--news"></div>
      </section>

      <section class="p-news-archive">
        <div class="c-inner c-inner--110">
          <ul class="p-news-archive__category-list">
            <li class="p-news-archive__category-item">
              <a href="" class="p-news-archive__category-btn is-current">すべて</a>
            </li>
            <li class="p-news-archive__category-item">
              <a href="" class="p-news-archive__category-btn">設備投資のお知らせ</a>
            </li>
            <li class="p-news-archive__category-item">
              <a href="" class="p-news-archive__category-btn">加工機校正のお知らせ</a>
            </li>
          </ul>
          <ul class="p-news-archive__list">
            <li class="p-news-archive__item">
              <a href="<?php the_permalink(); ?>" class="p-news-archive__link c-news-link">
                <span class="p-news-archive__link-head c-news-link__head">
                  <time class="p-news-archive__time c-news-link__time" datetime="2025.00.00">2025.00.00</time>
                  <span class="p-news-archive__tag c-news-link__tag">展示会</span>
                </span>
                <h3 class="p-news-archive__details-ttl c-news-link__ttl">記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。</h3>
              </a>
            </li>
          </ul>
          <div class="p-news-archive__pagination">
            <span class="prev page-numbers disabled">前へ</span>
            <span aria-current="page" class="page-numbers current">1</span>
            <a class="page-numbers" href="">2</a>
            <a class="page-numbers" href="">3</a>
            <span class="page-numbers dots">…</span>
            <a class="page-numbers" href="">8</a>
            <a class="next page-numbers" href="">次へ</a>
          </div>
        </div>
      </section>

      <?php get_template_part( 'parts/parts', 'contact' ); ?>
    </div>
  </main>

  <?php get_footer(); ?>
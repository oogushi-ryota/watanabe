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
        <div class="c-inner">
          <ul class="p-news-archive__category-list">
            <li class="p-news-archive__category-item category-all">
              <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="p-news-archive__category-btn <?php if ( is_home() || is_post_type_archive('post') || is_page('news') && !is_category() ) echo 'is-current'; ?>">すべて</a>
            </li>
            <?php
            // 未分類の ID を取得
            $uncat_id = get_cat_ID('未分類');

            $categories = get_categories( array(
              'orderby'    => 'term_order',
              'order'      => 'ASC',
              'hide_empty' => 0, // ★ 空のカテゴリも表示
              'exclude'    => array( $uncat_id ), // ★ 未分類を除外
            ) );

            // ★ 並び順を固定
            $desired_order = array('設備投資のお知らせ', '加工機校正のお知らせ');
            usort($categories, function($a, $b) use ($desired_order) {
              $pos_a = array_search($a->name, $desired_order);
              $pos_b = array_search($b->name, $desired_order);

              if ($pos_a !== false && $pos_b !== false) {
                return $pos_a - $pos_b; // 両方指定あり → 定義順
              }
              if ($pos_a !== false) return -1; // Aだけ指定あり
              if ($pos_b !== false) return 1;  // Bだけ指定あり
              return 0; // 両方指定なし → そのまま
            });

            foreach ( $categories as $category ) :
              $is_current = ( is_category( $category->term_id ) ) ? ' is-current' : '';
            ?>
              <li class="p-news-archive__category-item category-<?php echo esc_attr( $category->slug ); ?>">
                <a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>" 
                  class="p-news-archive__category-btn<?php echo $is_current; ?>">
                  <?php echo esc_html( $category->name ); ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="c-inner c-inner--110">
          <?php if ( have_posts() ) : ?>
          <ul class="p-news-archive__list">
            <?php while ( have_posts() ) : the_post(); ?>
              <?php get_template_part( 'parts/thumbs' ); ?>
            <?php endwhile; ?>
          </ul>
          <?php get_template_part('parts/pagination'); ?>
          <?php else : ?>
            <p>記事が見つかりませんでした。</p>
          <?php endif; ?>
        </div>
      </section>

      <?php get_template_part( 'parts/parts', 'contact' ); ?>
    </div>
  </main>

  <?php get_footer(); ?>
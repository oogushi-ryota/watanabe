<?php
/*
Template Name: お知らせ詳細
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
            <a href="<?php echo esc_url( home_url( '/news' ) ); ?>" class="c-breadcrumb__link">お知らせ</a>
          </li>
          <li class="c-breadcrumb__item">
            <span class="c-breadcrumb__link">お知らせのタイトルが入ります</span>
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

      <section class="p-news-details">
        <div class="c-inner c-inner--110">
          <div class="p-news-details__ttlarea">
            <h2 class="p-news-details__ttl"><?php the_title(); ?></h2>
            <div class="p-news-details__ttl-bottom">
              <time datetime="<?php echo get_the_date( 'c' ); ?>" class="p-news-details__time"><?php echo get_post_time('Y.m.d'); ?></time>
              <?php
              $tags = get_the_tags();
              if ( $tags && ! is_wp_error( $tags ) ) :
                foreach ( $tags as $tag ) : ?>
                  <span class="p-news-details__tag">
                    <span class="p-news-details__tag-item tag-<?php echo esc_attr( $tag->slug ); ?>">
                      <?php echo esc_html( $tag->name ); ?>
                    </span>
                  </span>
                <?php
                endforeach;
              endif;
              ?>
            </div>
          </div>

          <?php if (has_post_thumbnail()) : ?>
            <picture class="p-news-details__thumb">
              <source srcset="<?php echo get_the_post_thumbnail_url(null, 'full'); ?>" type="image/webp">
              <img src="<?php echo get_the_post_thumbnail_url(null, 'full'); ?>" alt="サムネイル">
            </picture>
          <?php endif; ?>
          
          <div class="p-news-details__cont">
            <?php the_content(); ?>
          </div>
        </div>
      </section>

      <?php get_template_part( 'parts/parts', 'contact' ); ?>
    </div>
  </main>

  <?php get_footer(); ?>
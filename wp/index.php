<?php
/*
Template Name: トップページ
*/
?>
  <?php get_header(); ?>

  <main class="l-main">
    <span class="c-line"></span>
    <span class="c-line c-line--2"></span>

    <div class="p-top">
      <section class="p-top-fv">
        <div class="p-top-fv__inner">
          <div class="p-top-fv__cont">
            <div class="p-top-fv__ttl-area">
              <h1 class="p-top-fv__ttl">ひたむきに、<br class="is-sp">そしてまっすぐに</h1>
              <span class="p-top-fv__ttl-en c-en-txt">Solution for KANAGATA</span>
            </div>
          </div>
        </div>
      </section>

      <section class="p-top-news">
        <div class="c-inner">
          <div class="p-top-news__cont">
            <?php
            $args = array(
              'post_type'      => 'post',       // 投稿タイプ（お知らせ）
              'posts_per_page' => 1,            // 最新1件だけ
              'orderby'        => 'date',       // 日付順
              'order'          => 'DESC'        // 新しい順
            );
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
              while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <div class="p-top-news__details">
              <h2 class="p-top-news__ttl">News</h2>
              <a href="<?php the_permalink(); ?>" class="p-top-news__link c-news-link">
                <span class="p-top-news__link-head c-news-link__head">
                  <time class="p-top-news__time c-news-link__time" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('Y.m.d'); ?></time>
                  <?php
                  $tags = get_the_tags();
                  if ( $tags ) :
                    foreach ( $tags as $tag ) :
                  ?>
                    <span class="p-top-news__tag c-news-link__tag tag-<?php echo esc_attr( $tag->slug ); ?>">
                      <?php echo esc_html( $tag->name ); ?>
                    </span>
                  <?php
                    endforeach;
                  endif;
                  ?>
                </span>
                <h3 class="p-top-news__details-ttl c-news-link__ttl"><?php the_title(); ?></h3>
              </a>
            </div>
            <?php
              endwhile;
              wp_reset_postdata();
            endif;
            ?>
            <div class="p-top-news__btn">
              <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>" class="c-btn">
                <span class="c-btn__txt">お知らせ一覧を見る</span>
                <span class="c-btn__svg-wrap">
                  <svg class="c-btn__svg" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.386963 6.15234L14.137 6.15234M9.66821 10.9648L14.4807 6.15234L9.66821 1.33984" stroke="#fff"/>
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="p-top-notice">
        <div class="c-inner">
          <div class="p-top-notice__cont">
            <div class="p-top-notice__ttl">
              <h2 class="p-top-notice__ja-ttl">設備投資のお知らせ</h2>
            </div>

            <?php
            $args = array(
              'post_type'      => 'post',
              'posts_per_page' => 10, // 最大10件
              'orderby'        => 'date',
              'order'          => 'DESC',
              'category_name'  => 'equipment', 
            );
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
              echo '<ul class="p-top-notice__list">';
              while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
              <li class="p-top-notice__item">
                <a href="<?php the_permalink(); ?>" class="p-top-notice__link c-news-link">
                  <span class="p-top-notice__link-head c-news-link__head">
                    <time class="p-top-notice__time c-news-link__time" datetime="<?php echo get_the_date('c'); ?>">
                      <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                    <?php
                    $tags = get_the_tags();
                    if ( $tags ) :
                      foreach ( $tags as $tag ) :
                    ?>
                      <span class="p-top-notice__tag c-news-link__tag tag-<?php echo esc_attr($tag->slug); ?>">
                        <?php echo esc_html($tag->name); ?>
                      </span>
                    <?php
                      endforeach;
                    endif;
                    ?>
                  </span>
                  <h3 class="p-top-notice__details-ttl c-news-link__ttl"><?php the_title(); ?></h3>
                </a>
              </li>
            <?php
              endwhile;
              echo '</ul>';
              wp_reset_postdata();
            else :
              echo '<p>設備投資のお知らせはまだありません。</p>';
            endif;
            ?>
            <div class="p-top-notice__btn">
              <a href="<?php echo esc_url( home_url( '/category/equipment/' ) ); ?>" class="c-btn">
                <span class="c-btn__txt">全て見る</span>
                <span class="c-btn__svg-wrap">
                  <svg class="c-btn__svg" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.386963 6.15234L14.137 6.15234M9.66821 10.9648L14.4807 6.15234L9.66821 1.33984" stroke="#2196F3"/>
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="p-top-about">
        <div class="c-sec-ttl">
          <span class="c-sec-ttl__en">ABOUT</span>
          <h2 class="c-sec-ttl__ja">株式会社ワタナベについて</h2>
        </div>
        <div class="p-top-about__inner">
          <div class="p-top-about__cont">
            <div class="p-top-about__txtarea">
              <p class="p-top-about__txt">
                精密なワイヤーカット加工を強みとする株式会社ワタナベ。<br>
                全国対応のネットワークと充実した設備体制により、多様なニーズに柔軟かつ迅速にお応えしています。
                企業の概要から拠点情報、組織体制まで、ワタナベの全体像をご紹介します。<br>
              </p>
              <div class="p-top-about__btn">
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="c-btn">
                  <span class="c-btn__txt">会社情報を見る</span>
                  <span class="c-btn__svg-wrap">
                    <svg class="c-btn__svg" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.386963 6.15234L14.137 6.15234M9.66821 10.9648L14.4807 6.15234L9.66821 1.33984" stroke="#2196F3"/>
                    </svg>
                  </span>
                </a>
              </div>
            </div>
            <picture class="p-top-about__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/about/about_img.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/about/about_img.jpg" width="897" height="540" alt="株式会社ワタナベについての画像">
            </picture>
          </div>
        </div>
      </section>

      <section class="p-top-strengths">
        <div class="c-inner">
          <div class="c-sec-ttl">
            <span class="c-sec-ttl__en">STRENGTHS</span>
            <h2 class="c-sec-ttl__ja">ワタナベの5つの強み</h2>
          </div>
          <div class="p-top-strengths__cont">
            <ul class="p-top-strengths__list">
              <li class="p-top-strengths__item p-top-strengths__item--quick-delivery">
                <a href="<?php echo esc_url( home_url( '/strengths/#shortest' ) ); ?>" class="p-top-strengths__link">
                  <div class="p-top-strengths__list-ttl">
                    <h3 class="p-top-strengths__list-ttl-en">QUICK DELIVERY</h3>
                    <span class="p-top-strengths__list-ttl-ja">国内最短納期</span>
                  </div>
                  <div class="p-top-strengths__svg-wrap">
                    <svg class="p-top-strengths__svg" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.0181631 7.14805L16.5182 7.14805M11.1557 12.923L16.9307 7.14805L11.1557 1.37305" stroke="white" stroke-width="1.2"/>
                    </svg>
                  </div>
                </a>
              </li>
              <li class="p-top-strengths__item p-top-strengths__item--quality">
                <a href="<?php echo esc_url( home_url( '/strengths/#quality' ) ); ?>" class="p-top-strengths__link">
                  <div class="p-top-strengths__list-ttl">
                    <h3 class="p-top-strengths__list-ttl-en">QUALITY</h3>
                    <span class="p-top-strengths__list-ttl-ja">品質の維持・向上</span>
                  </div>
                  <div class="p-top-strengths__svg-wrap">
                    <svg class="p-top-strengths__svg" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.0181631 7.14805L16.5182 7.14805M11.1557 12.923L16.9307 7.14805L11.1557 1.37305" stroke="white" stroke-width="1.2"/>
                    </svg>
                  </div>
                </a>
              </li>
              <li class="p-top-strengths__item p-top-strengths__item--moving-costs">
                <a href="<?php echo esc_url( home_url( '/strengths/#variable' ) ); ?>" class="p-top-strengths__link">
                  <div class="p-top-strengths__list-ttl">
                    <h3 class="p-top-strengths__list-ttl-en">MOVING COSTS</h3>
                    <span class="p-top-strengths__list-ttl-ja">お客様の変動費を削減</span>
                  </div>
                  <div class="p-top-strengths__svg-wrap">
                    <svg class="p-top-strengths__svg" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.0181631 7.14805L16.5182 7.14805M11.1557 12.923L16.9307 7.14805L11.1557 1.37305" stroke="white" stroke-width="1.2"/>
                    </svg>
                  </div>
                </a>
              </li>
              <li class="p-top-strengths__item p-top-strengths__item--fixed-costs">
                <a href="<?php echo esc_url( home_url( '/strengths/#cost' ) ); ?>" class="p-top-strengths__link">
                  <div class="p-top-strengths__list-ttl">
                    <h3 class="p-top-strengths__list-ttl-en">FIXED COSTS</h3>
                    <span class="p-top-strengths__list-ttl-ja">お客様の固定費を削減</span>
                  </div>
                  <div class="p-top-strengths__svg-wrap">
                    <svg class="p-top-strengths__svg" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.0181631 7.14805L16.5182 7.14805M11.1557 12.923L16.9307 7.14805L11.1557 1.37305" stroke="white" stroke-width="1.2"/>
                    </svg>
                  </div>
                </a>
              </li>
              <li class="p-top-strengths__item p-top-strengths__item--sustainability">
                <a href="<?php echo esc_url( home_url( '/strengths/#sustainability' ) ); ?>" class="p-top-strengths__link">
                  <div class="p-top-strengths__list-ttl">
                    <h3 class="p-top-strengths__list-ttl-en">Sustainability</h3>
                    <span class="p-top-strengths__list-ttl-ja">企業持続力</span>
                  </div>
                  <div class="p-top-strengths__svg-wrap">
                    <svg class="p-top-strengths__svg" width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0.0181631 7.14805L16.5182 7.14805M11.1557 12.923L16.9307 7.14805L11.1557 1.37305" stroke="white" stroke-width="1.2"/>
                    </svg>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <div class="l-top-features">
        <div class="c-inner">
          <section class="p-top-facility l-top-features__facility">
            <div class="p-top-facility__cont l-top-features__cont l-top-features__cont--facility">
              <picture class="p-top-facility__img l-top-features__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/facility/facility_img.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/facility/facility_img.jpg" width="781" height="560" alt="ワタナベの加工力と設備力の画像">
              </picture>
              <div class="p-top-facility__txtarea l-top-features__txtarea">
                <div class="c-sec-ttl">
                  <h2 class="c-sec-ttl__ja">ワタナベの加工力と<br class="is-sp">設備力</h2>
                </div>
                <p class="p-top-facility__txt l-top-features__txt">
                  多様なニーズに応える柔軟な加工体制と、蓄積されたノウハウを支える設備群。<br>
                  ワタナベでは、ワイヤーカットを中心に各拠点で最新の設備を整え、精度・スピード・対応力のすべてにおいて高い品質を追求しています。
                </p>
                <div class="p-top-facility__btn l-top-features__btn">
                  <a href="<?php echo esc_url( home_url( '/facility' ) ); ?>" class="c-btn">
                    <span class="c-btn__txt">設備・加工案内を見る</span>
                    <span class="c-btn__svg-wrap">
                      <svg class="c-btn__svg" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.386963 6.15234L14.137 6.15234M9.66821 10.9648L14.4807 6.15234L9.66821 1.33984" stroke="#2196F3"/>
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </section>
          <section class="p-top-delivery l-top-features__delivery">
            <div class="p-top-delivery__cont l-top-features__cont l-top-features__cont--delivery">
              <picture class="p-top-delivery__img l-top-features__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/delivery/delivery_img.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/delivery/delivery_img.jpg" width="781" height="560" alt="超短納期を実現の画像">
              </picture>
              <div class="p-top-delivery__txtarea l-top-features__txtarea">
                <div class="c-sec-ttl">
                  <h2 class="c-sec-ttl__ja">超短納期を実現</h2>
                </div>
                <p class="p-top-delivery__txt l-top-features__txt">
                  豊富な設備体制と社内一貫の対応力により、最短中4日での納品を実現。<br>
                  ワイヤーカット加工においては、スピードと精度の両立が求められますが、当社では多数の専用設備と経験豊富なスタッフにより、急ぎのご依頼にも確かな品質で対応いたします。
                </p>
                <div class="p-top-delivery__btn l-top-features__btn">
                  <a href="<?php echo esc_url( home_url( '/delivery' ) ); ?>" class="c-btn">
                    <span class="c-btn__txt">納期案内を見る</span>
                    <span class="c-btn__svg-wrap">
                      <svg class="c-btn__svg" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.386963 6.15234L14.137 6.15234M9.66821 10.9648L14.4807 6.15234L9.66821 1.33984" stroke="#FF5722"/>
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>

      <section class="p-top-recruit">
        <div class="c-inner">
          <div class="p-top-recruit__txtarea">
            <div class="c-sec-ttl">
              <span class="c-sec-ttl__en">RECRUIT</span>
              <h2 class="c-sec-ttl__ja">採用情報</h2>
            </div>
            <p class="p-top-recruit__txt">モノづくりの最前線でチャレンジしてみませんか？株式会社ワタナベでは、「まずはやってみる」という姿勢を大切にしながら、一人ひとりの成長を支える教育体制を整えています。</p>
            <div class="p-top-recruit__btn">
              <a href="<?php echo esc_url( home_url( '/recruit' ) ); ?>" class="c-btn">
                <span class="c-btn__txt">採用情報はこちら</span>
                <span class="c-btn__svg-wrap">
                  <svg class="c-btn__svg" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.386963 6.15234L14.137 6.15234M9.66821 10.9648L14.4807 6.15234L9.66821 1.33984" stroke="#2196F3"/>
                  </svg>
                </span>
              </a>
            </div>
          </div>
          <div class="p-top-recruit__imgarea">
            <picture class="p-top-recruit__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/recruit/recruit_img01.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/recruit/recruit_img01.jpg" width="357" height="525" alt="採用情報の画像">
            </picture>
            <picture class="p-top-recruit__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/recruit/recruit_img02.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/recruit/recruit_img02.jpg" width="357" height="525" alt="採用情報の画像">
            </picture>
            <picture class="p-top-recruit__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/top/recruit/recruit_img03.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/recruit/recruit_img03.jpg" width="357" height="525" alt="採用情報の画像">
            </picture>
          </div>
        </div>
      </section>

      <?php get_template_part( 'parts/parts', 'contact' ); ?>
    </div>
  </main>

  <?php get_footer(); ?>
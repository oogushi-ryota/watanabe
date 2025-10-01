<?php
/*
Template Name: 納期案内
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
            <span class="c-breadcrumb__link">納期案内</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="p-delivery">
      <section class="c-under-mv">
        <div class="c-inner">
          <div class="c-under-mv__ttl">
            <span class="c-under-mv__en-ttl">delivery schedule</span>
            <h1 class="c-under-mv__ja-ttl">納期案内</h1>
          </div>
        </div>
        <div class="c-under-mv__bg c-under-mv__bg--delivery"></div>
      </section>

      <section class="p-delivery-speed">
        <div class="p-delivery-speed__inner">
          <div class="p-delivery-speed__cont">
            <picture class="p-delivery-speed__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/delivery/speed/speed_img.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/delivery/speed/speed_img.jpg" width="897" height="540" alt="超短納期を実現">
            </picture>
            <div class="p-delivery-speed__txtarea">
              <h3 class="p-delivery-speed__cont-ttl c-cont-ttl">超短納期を実現</h3>
              <p class="p-delivery-speed__txt">
                株式会社ワタナベは、多数の加工設備と24時間生産体制により、国内でも最大級の生産キャパシティを誇ります。さらに、最新鋭の設備を揃えることで、安定的な高品質生産が可能となり、高い歩留りを実現しました。<br>
                製造ラインの量と質、両面での継続的な向上努力により、大規模ロットにも迅速に対応。クリティカルな納期ご要望にもお応えします。
              </p>
              <div class="p-delivery-speed__feature">
                <p class="p-delivery-speed__feature-txt">
                  当社の標準納期は中4日。<br>
                  豊富な自社保有台数を生かし、標準で超短納期を安定して実現しています。
                </p>
                <p class="p-delivery-speed__feature-note-txt">※但しFA40・50による加工を除く</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="p-delivery-schedule">
        <div class="c-inner">
          <div class="p-delivery-schedule__cont">
            <h2 class="c-under-sec-ttl">タイムスケジュール例</h2>
            <ol class="p-delivery-schedule__list">
            <li class="p-delivery-schedule__item">
              <picture class="p-delivery-schedule__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/delivery/schedule/schedule_img01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/delivery/schedule/schedule_img01.jpg" width="280" height="158" alt="お客様が素材等を発送">
              </picture>
              <div class="p-delivery-schedule__item-ttlarea">
                <span class="p-delivery-schedule__item-day">DAY1</span>
                <h3 class="p-delivery-schedule__item-ttl">お客様が素材等を発送</h3>
              </div>
              <p class="p-delivery-schedule__item-txt">ご依頼内容に沿って素材を発送いただきます。</p>
            </li>
            <li class="p-delivery-schedule__item">
              <picture class="p-delivery-schedule__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/delivery/schedule/schedule_img02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/delivery/schedule/schedule_img02.jpg" width="280" height="158" alt="到着・CAD図面確認・段取り">
              </picture>
              <div class="p-delivery-schedule__item-ttlarea">
                <span class="p-delivery-schedule__item-day">DAY2</span>
                <h3 class="p-delivery-schedule__item-ttl">到着・CAD図面確認・段取り</h3>
              </div>
              <p class="p-delivery-schedule__item-txt">いただいたCAD図面と照合しながら、加工手順や使用機器を決定。最適な段取りを組み立てます。</p>
            </li>
            <li class="p-delivery-schedule__item">
              <picture class="p-delivery-schedule__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/delivery/schedule/schedule_img03.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/delivery/schedule/schedule_img03.jpg" width="280" height="158" alt="加工">
              </picture>
              <div class="p-delivery-schedule__item-ttlarea">
                <span class="p-delivery-schedule__item-day">DAY3</span>
                <h3 class="p-delivery-schedule__item-ttl">加工</h3>
              </div>
              <p class="p-delivery-schedule__item-txt">図面に基づき、精密な加工を実施します。</p>
            </li>
            <li class="p-delivery-schedule__item">
              <picture class="p-delivery-schedule__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/delivery/schedule/schedule_img04.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/delivery/schedule/schedule_img04.jpg" width="280" height="158" alt="加工・洗浄・測定・梱包">
              </picture>
              <div class="p-delivery-schedule__item-ttlarea">
                <span class="p-delivery-schedule__item-day">DAY4〜5</span>
                <h3 class="p-delivery-schedule__item-ttl">加工・洗浄・測定・梱包</h3>
              </div>
              <p class="p-delivery-schedule__item-txt">加工後、洗浄・測定を行い、丁寧に梱包します。</p>
            </li>
            <li class="p-delivery-schedule__item">
              <picture class="p-delivery-schedule__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/delivery/schedule/schedule_img05.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/delivery/schedule/schedule_img05.jpg" width="280" height="158" alt="加工・洗浄・測定・梱包">
              </picture>
              <div class="p-delivery-schedule__item-ttlarea">
                <span class="p-delivery-schedule__item-day">DAY6</span>
                <h3 class="p-delivery-schedule__item-ttl">お客様先に到着</h3>
              </div>
              <p class="p-delivery-schedule__item-txt">製品が納期通りにお客様のもとへ届きます</p>
            </li>
          </ol>
          </div>
        </div>
      </section>

      <?php get_template_part( 'parts/parts', 'contact' ); ?>
    </div>
  </main>

  <?php get_footer(); ?>
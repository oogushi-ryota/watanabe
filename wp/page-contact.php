<?php
/*
Template Name: お問い合わせ
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
            <span class="c-breadcrumb__link">お問い合わせ</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="p-contact">
      <section class="c-under-mv">
        <div class="c-inner">
          <div class="c-under-mv__ttl">
            <span class="c-under-mv__en-ttl">contact</span>
            <h1 class="c-under-mv__ja-ttl">お問い合わせ</h1>
          </div>
        </div>
        <div class="c-under-mv__bg c-under-mv__bg--contact"></div>
      </section>

      <section class="p-contact-tel">
        <div class="c-inner c-inner--110">
          <div class="p-contact-tel__cont">
            <h2 class="c-under-sec-ttl">お電話等でのお問合せ</h2>
            <ul class="p-contact-tel__list">
              <li class="p-contact-tel__item">
                <span class="p-contact-tel__item-ttl">本社 営業担当 森・風野</span>
                <div class="p-contact-tel__info">
                  <span class="p-contact-tel__info-tel">TEL：045-471-7300</span>
                  <span class="p-contact-tel__info-fax">FAX：045-471-7330</span>
                </div>
                <span class="p-contact-tel__info-mail">E-MAIL：soumukeiri@watanabe-wire.com</span>
              </li>
              <li class="p-contact-tel__item">
                <span class="p-contact-tel__item-ttl">神奈川ワイヤー加工センター</span>
                <div class="p-contact-tel__info">
                  <span class="p-contact-tel__info-tel">
                    TEL：046-244-6976
                    <span class="p-contact-tel__info-tel-manager">(センター長まで)</span>
                  </span>
                  <span class="p-contact-tel__info-fax">FAX：046-258-0027</span>
                </div>
                <span class="p-contact-tel__info-mail">E-MAIL：kanagawa@watanabe-wire.com</span>
              </li>
              <li class="p-contact-tel__item">
                <span class="p-contact-tel__item-ttl">福島ワイヤー加工センター</span>
                <div class="p-contact-tel__info">
                  <span class="p-contact-tel__info-tel">
                    TEL：0243-46-3811
                    <span class="p-contact-tel__info-tel-manager">(センター長まで)</span>
                  </span>
                  <span class="p-contact-tel__info-fax">FAX：0243-46-3886</span>
                </div>
                <span class="p-contact-tel__info-mail">E-MAIL：fukushima@watanabe-wire.com</span>
              </li>
              <li class="p-contact-tel__item">
                <span class="p-contact-tel__item-ttl">中部ワイヤー加工センター</span>
                <div class="p-contact-tel__info">
                  <span class="p-contact-tel__info-tel">
                    TEL：0533-75-6800
                    <span class="p-contact-tel__info-tel-manager">(センター長まで)</span>
                  </span>
                  <span class="p-contact-tel__info-fax">FAX：0533-89-3890</span>
                </div>
                <span class="p-contact-tel__info-mail">E-MAIL：chubu@watanabe-wire.com</span>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <?php echo do_shortcode('[mwform_formkey key="42"]'); ?>
    </div>
  </main>

  <?php get_footer(); ?>
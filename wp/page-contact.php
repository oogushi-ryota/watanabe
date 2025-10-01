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

      <section class="p-contact-form">
        <div class="p-contact-form__inner">
          <h2 class="c-under-sec-ttl">お電話等でのお問合せ</h2>
          <p class="p-contact-form__txt">
            お送りいただいた個人情報は、法令等より公的機関から開示を求められた場合を除き、<br>
            ご本人の許可なく第三者に提出することはありません。
          </p>
          <div class="p-contact-form__form">
            <div class="p-contact-form__formblk">
              <label class="p-contact-form__label" for="name">
                お名前
                <span class="p-contact-form__required">必須</span>
              </label>
              <div class="p-contact-form__inputarea">
                <input placeholder="例）日本 太郎" size="40" class="p-contact-form__default" id="name" type="text" name="name" required aria-required="true">
              </div>
            </div>
            <div class="p-contact-form__formblk">
              <label class="p-contact-form__label" for="company">
                会社名
                <span class="p-contact-form__required">必須</span>
              </label>
              <div class="p-contact-form__inputarea">
                <input placeholder="例）株式会社〇〇" size="40" class="p-contact-form__default" id="company" type="text" name="company" required aria-required="true">
              </div>
            </div>
            <div class="p-contact-form__formblk">
              <label class="p-contact-form__label" for="division">部署名</label>
              <div class="p-contact-form__inputarea">
                <input placeholder="例）営業部" size="40" class="p-contact-form__default" id="division" type="text" name="division" required aria-required="true">
              </div>
            </div>
            <div class="p-contact-form__formblk">
              <label class="p-contact-form__label" for="tel">
                お電話番号
                <span class="p-contact-form__required">必須</span>
              </label>
              <div class="p-contact-form__inputarea">
                <input placeholder="000-0000-0000" size="40" class="p-contact-form__default" id="tel" type="text" name="tel" required aria-required="true">
              </div>
            </div>
            <div class="p-contact-form__formblk">
              <label class="p-contact-form__label" for="email">
                メールアドレス
                <span class="p-contact-form__required">必須</span>
              </label>
              <div class="p-contact-form__inputarea">
                <input placeholder="xxxx@gmail.com" size="40" class="p-contact-form__default" id="email" type="text" name="email" required aria-required="true">
              </div>
            </div>
            <div class="p-contact-form__formblk">
              <label class="p-contact-form__label" for="postcode">
                郵便番号
                <span class="p-contact-form__required">必須</span>
              </label>
              <div class="p-contact-form__inputarea">
                <input placeholder="000-0000" size="40" class="p-contact-form__default" id="postcode" type="text" name="postcode" required aria-required="true">
              </div>
            </div>
            <div class="p-contact-form__formblk">
              <label class="p-contact-form__label" for="address">
                住所
                <span class="p-contact-form__required">必須</span>
              </label>
              <div class="p-contact-form__inputarea">
                <input placeholder="" size="40" class="p-contact-form__default" id="address" type="text" name="address" required aria-required="true">
              </div>
            </div>
            <div class="p-contact-form__formblk">
              <label class="p-contact-form__label" for="details">お問い合わせ内容</label>
              <div class="p-contact-form__inputarea">
                <textarea name="details" class="p-contact-form__default" id="details" cols="100" rows="10"></textarea>
              </div>
            </div>
          </div>
          <div class="p-contact-form__btn-wrap">
            <button type="submit" class="p-contact-form__btn">送信内容を確認する</button>
          </div>
        </div>
      </section>
    </div>
  </main>

  <?php get_footer(); ?>
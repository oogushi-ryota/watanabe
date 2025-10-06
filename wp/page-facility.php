<?php
/*
Template Name: 設備・加工案内
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
            <span class="c-breadcrumb__link">設備・加工案内</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="p-facility">
      <section class="c-under-mv">
        <div class="c-inner">
          <div class="c-under-mv__ttl">
            <span class="c-under-mv__en-ttl">EQUIPMENT&PROCESSING</span>
            <h1 class="c-under-mv__ja-ttl">設備・加工案内</h1>
          </div>
        </div>
        <div class="c-under-mv__bg c-under-mv__bg--facility"></div>
      </section>

      <section class="p-facility-precision">
        <h2 class="c-under-sec-ttl">
          ワタナベの<br class="is-sp">
          超精密加工技術・体制
        </h2>
        <div class="p-facility-precision__inner">
          <div class="p-facility-precision__cont">
            <div class="p-facility-precision__txtarea">
              <p class="p-facility-precision__txt">
                当社では、恒温室環境のもと、最新のワイヤー加工機だけでなく、三次元測定機・画像測定機などの設備を多数導入し、超精密加工にも対応できる環境を整えています。<br>
                金型では、プレス、FB、モールド、ダイキャスト、ゴム型等の対応が可能です。<br>
                量産品では、例えば月産10,000個単位のレベルまで安定供給が可能であり、加工機の台数を生かした超短納期対応も実現しています。加工時間に応じた柔軟な価格体系を設定し、コスト面でもご満足いただける体制を整えています。<br>
                アルミやモリブデンなどの難削材加工にも対応し、厚物加工用のZ：400対応機8台や、国内最大級のFA30・FA40・FA50による大型加工にも対応可能です。保有する100台の加工機の平均稼働年数は8年11ヶ月（2025年4月時点）と非常に新しく、高精度かつ安定した加工を支えています。<br>
                さらに、技能向上にも積極的に取り組み、技能検定委員3名をはじめ、多くの有資格者が在籍。特級取得者1名、1級取得者6名、2級取得者19名が高度な加工技術を駆使し、お客様の多様なニーズにお応えします。
              </p>
            </div>
            <picture class="p-facility-precision__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/facility/precision/precision_img.webp" type="image/webp">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/precision/precision_img.jpg" width="897" height="540" alt="ワタナベの超精密加工技術・体制">
            </picture>
          </div>
        </div>
      </section>

      <section class="p-facility-solution">
        <div class="c-inner">
          <div class="p-facility-solution__inner">
            <h2 class="c-under-sec-ttl">
              多彩な加工メニューで<br class="is-sp">
              ワイヤーカットの問題を解決
            </h2>
            <div class="p-facility-solution__details">
              <div class="p-facility-solution__cont">
                <div class="p-facility-solution__txtarea">
                  <h3 class="p-facility-solution__cont-ttl c-cont-ttl">豊富な経験で多用な加工目的に対応</h3>
                  <p class="p-facility-solution__txt">
                    当社は長年の経験とノウハウを活かし、幅広い加工目的にお応えします。<br>
                    プレス、FB、モールド、ダイキャスト、ゴム型などの金型部品加工をはじめ、試作品加工や量産試作品加工も可能です。<br>
                    モーターコアやギアの重ね切り加工、シム加工、追加加工・キー溝加工、設変追加加工、FB用パンチ加工、テーパー加工、上下異形状加工など、多彩なニーズに対応できる体制を整えています。
                  </p>
                </div>
                <picture class="p-facility-solution__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/facility/solution/solution_img01.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/solution/solution_img01.jpg" width="500" height="281" alt="豊富な経験で多用な加工目的に対応">
                </picture>
              </div>
              <div class="p-facility-solution__cont">
                <div class="p-facility-solution__txtarea">
                  <h3 class="p-facility-solution__cont-ttl c-cont-ttl">微細加工から大物加工まで</h3>
                  <p class="p-facility-solution__txt">1〜2μの形状精度や面粗度に対応する微細加工から、最大2m・重量2t※までの大物加工まで幅広く対応可能です。最大400mm厚の加工や、ワイヤー線径φ0.05～0.3への対応、高精度ギヤ加工、ならい測定器を用いた加工など、多様な設備と技術を駆使し、お客様の求める精度・品質を実現します。</p>
                  <p class="p-facility-solution__note">※重量物に関しては要事前調整</p>
                </div>
                <picture class="p-facility-solution__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/facility/solution/solution_img02.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/solution/solution_img02.jpg" width="500" height="281" alt="微細加工から大物加工まで">
                </picture>
              </div>
            </div>
            <div class="p-facility-solution__bottom-cont">
              <h3 class="p-facility-solution__bottom-cont-ttl">さまざまな加工材に対応</h3>
              <p class="p-facility-solution__bottom-cont-txt">
                加工材についても、特殊鋼からアルミ、ステンレス、チタン、モリブデン、超硬まで、多様な素材に対応可能です。<br>
                これにより、お客様の製品仕様や用途に合わせた最適な加工をご提案できます。
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="p-facility-factory">
        <div class="c-inner c-inner--110">
          <ul class="p-facility-factory__tabbtn-list js-tabbtn-list">
            <li class="p-facility-factory__tabbtn-item js-tabbtn-item" id="tab-list2" data-term-id="2">
              神奈川ワイヤー<br>
              加工センター
            </li>
            <li class="p-facility-factory__tabbtn-item js-tabbtn-item" id="tab-list3" data-term-id="3">
              福島ワイヤー<br>
              加工センター第一工場
            </li>
            <li class="p-facility-factory__tabbtn-item js-tabbtn-item" id="tab-list3" data-term-id="3">
              福島ワイヤー<br>
              加工センター第二工場
            </li>
            <li class="p-facility-factory__tabbtn-item js-tabbtn-item" id="tab-list1" data-term-id="1">
              中部ワイヤー<br>
              加工センター
            </li>
            <li class="p-facility-factory__tabbtn-item js-tabbtn-item" id="tab-list3" data-term-id="3">
              大型ワイヤー<br>
              放電加工機
            </li>
          </ul>
          <div class="p-facility-factory__cont js-tab-item" id="tab1">
            <h2 class="p-facility-factory__cont-ttl">神奈川ワイヤー加工センター</h2>
            <div class="p-facility-factory__slider js-slider">
              <div class="swiper p-facility-factory__swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/kanagawa/slide01.jpg" alt="神奈川ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/kanagawa/slide02.jpg" alt="神奈川ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/kanagawa/slide03.jpg" alt="神奈川ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/kanagawa/slide04.jpg" alt="神奈川ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/kanagawa/slide05.jpg" alt="神奈川ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/kanagawa/slide06.jpg" alt="神奈川ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/kanagawa/slide07.jpg" alt="神奈川ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/kanagawa/slide08.jpg" alt="神奈川ワイヤー加工センター">
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="swiper p-facility-factory__thumbs">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/kanagawa/slide01.jpg" alt="神奈川ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/kanagawa/slide02.jpg" alt="神奈川ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/kanagawa/slide03.jpg" alt="神奈川ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/kanagawa/slide04.jpg" alt="神奈川ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/kanagawa/slide05.jpg" alt="神奈川ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/kanagawa/slide06.jpg" alt="神奈川ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/kanagawa/slide07.jpg" alt="神奈川ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/kanagawa/slide08.jpg" alt="神奈川ワイヤー加工センター">
                  </div>
                </div>
              </div>
            </div>
            <div class="p-facility-factory__description">
              <span class="p-facility-factory__description-head">ワイヤー加工機20台</span>
              <span class="p-facility-factory__description-tel">TEL：046-244-6976（髙橋センター長）</span>
            </div>
            <div class="p-facility-factory__table-wrap">
              <table class="p-facility-factory__table">
                <thead class="p-facility-factory__thead">
                  <tr>
                    <th scope="col" rowspan="2">機械名</th>
                    <th scope="col" rowspan="2">メーカー</th>
                    <th scope="col" rowspan="2">機種名</th>
                    <th scope="col" rowspan="2">台数</th>
                    <th scope="col" colspan="3">ストローク</th>
                    <th scope="col" rowspan="2">設備導入年月</th>
                    <th scope="col" rowspan="2">備考</th>
                  </tr>
                  <tr>
                    <th class="p-facility-factory__stroke" scope="col">X</th>
                    <th class="p-facility-factory__stroke" scope="col">Y</th>
                    <th class="p-facility-factory__stroke" scope="col">Z</th>
                  </tr>
                </thead>
                <tbody class="p-facility-factory__tbody">
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="6">ワイヤー放電加工機</td>
                    <td rowspan="6">三菱電機</td>
                    <td rowspan="6">Ba-8</td>
                    <td rowspan="6">6</td>
                    <td rowspan="6">320</td>
                    <td rowspan="6">250</td>
                    <td rowspan="6">220</td>
                    <td>2007年09月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2008年06月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2008年11月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2010年02月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2010年04月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2011年06月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">ワイヤー放電加工機</td>
                    <td>三菱電機</td>
                    <td>Ba24<br>(精密加工オプション付)</td>
                    <td>1</td>
                    <td>600</td>
                    <td>400</td>
                    <td>310</td>
                    <td>2010年02月</td>
                    <td>ー</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="2">ワイヤー放電加工機</td>
                    <td rowspan="2">三菱電機</td>
                    <td rowspan="2">Ba24</td>
                    <td rowspan="2">2</td>
                    <td rowspan="2">600</td>
                    <td rowspan="2">400</td>
                    <td rowspan="2">310</td>
                    <td>2011年10月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2012年09月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">ワイヤー放電加工機</td>
                    <td>三菱電機</td>
                    <td>NA1200</td>
                    <td>1</td>
                    <td>400</td>
                    <td>300</td>
                    <td>220</td>
                    <td>2011年07月</td>
                    <td>ー</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">ワイヤー放電加工機</td>
                    <td>三菱電機</td>
                    <td>MV2400S</td>
                    <td>3</td>
                    <td>600</td>
                    <td>400</td>
                    <td>310</td>
                    <td>2011年07月</td>
                    <td>ー</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="3">ワイヤー放電加工機</td>
                    <td rowspan="3">三菱電機</td>
                    <td rowspan="3">MV2400R</td>
                    <td rowspan="3">4</td>
                    <td rowspan="3">600</td>
                    <td rowspan="3">400</td>
                    <td rowspan="3">310</td>
                    <td>2017年05月</td>
                    <td>ー</td>
                  </tr>
                  <tr>
                    <td>2023年06月（2台）</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2024年01月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="2">ワイヤー放電加工機</td>
                    <td rowspan="2">三菱電機</td>
                    <td rowspan="2">MV1200R</td>
                    <td rowspan="2">2</td>
                    <td rowspan="2">400</td>
                    <td rowspan="2">300</td>
                    <td rowspan="2">220</td>
                    <td>2018年10月</td>
                    <td>ー</td>
                  </tr>
                  <tr>
                    <td>2025年01月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">ワイヤー放電加工機</td>
                    <td>三菱電機</td>
                    <td>MP2400</td>
                    <td>1</td>
                    <td>600</td>
                    <td>400</td>
                    <td>310</td>
                    <td>2021年03月</td>
                    <td>ー</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">NC細穴放電加工機</td>
                    <td>ELENIX</td>
                    <td>CT500FX-M</td>
                    <td>1</td>
                    <td>550</td>
                    <td>380</td>
                    <td>250</td>
                    <td>2024年01月</td>
                    <td>ー</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">細穴放電加工機</td>
                    <td>三菱電機</td>
                    <td>RH3525</td>
                    <td>1</td>
                    <td>350</td>
                    <td>250</td>
                    <td>300</td>
                    <td>2013年01月</td>
                    <td>ー</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">機上測定機</td>
                    <td>熊本精研</td>
                    <td>NK-2000</td>
                    <td>1</td>
                    <td>ー</td>
                    <td>ー</td>
                    <td>ー</td>
                    <td>2024年02月</td>
                    <td>ー</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="p-facility-factory__note">
              <span class="p-facility-factory__note-txt">
                神奈川工場ワイヤー放電加工機平均稼動年月数 9年8ヶ月<br>
                （2025年4月時点）
              </span>
            </div>
            <div class="p-facility-factory__btn">
              <a href="https://maps.app.goo.gl/r1HLcwzZ4DWANMb37" class="c-btn" target="_blank">
                <span class="c-btn__txt">アクセスマップはこちら</span>
                <span class="c-btn__svg-wrap">
                  <svg class="c-btn__svg" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.386963 6.15234L14.137 6.15234M9.66821 10.9648L14.4807 6.15234L9.66821 1.33984" stroke="#2196F3"/>
                  </svg>
                </span>
              </a>
            </div>
          </div>

          <div class="p-facility-factory__cont js-tab-item" id="tab2">
            <h2 class="p-facility-factory__cont-ttl">福島ワイヤー加工センター第一工場</h2>
            <div class="p-facility-factory__slider js-slider">
              <div class="swiper p-facility-factory__swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima01/slide01.jpg" alt="福島ワイヤー加工センター第一工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima01/slide02.jpg" alt="福島ワイヤー加工センター第一工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima01/slide03.jpg" alt="福島ワイヤー加工センター第一工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima01/slide04.jpg" alt="福島ワイヤー加工センター第一工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima01/slide05.jpg" alt="福島ワイヤー加工センター第一工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima01/slide06.jpg" alt="福島ワイヤー加工センター第一工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima01/slide07.jpg" alt="福島ワイヤー加工センター第一工場">
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="swiper p-facility-factory__thumbs">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima01/slide01.jpg" alt="福島ワイヤー加工センター第一工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima01/slide02.jpg" alt="福島ワイヤー加工センター第一工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima01/slide03.jpg" alt="福島ワイヤー加工センター第一工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima01/slide04.jpg" alt="福島ワイヤー加工センター第一工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima01/slide05.jpg" alt="福島ワイヤー加工センター第一工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima01/slide06.jpg" alt="福島ワイヤー加工センター第一工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima01/slide07.jpg" alt="福島ワイヤー加工センター第一工場">
                  </div>
                </div>
              </div>
            </div>
            <div class="p-facility-factory__description">
              <span class="p-facility-factory__description-head">ワイヤー加工機22台</span>
              <span class="p-facility-factory__description-tel">TEL：0243-46-3811（菊地センター長）</span>
            </div>
            <div class="p-facility-factory__table-wrap">
              <h3 class="p-facility-factory__ttl">第１恒温室内設備</h3>
              <table class="p-facility-factory__table">
                <thead class="p-facility-factory__thead">
                  <tr>
                    <th scope="col" rowspan="2">機械名</th>
                    <th scope="col" rowspan="2">メーカー</th>
                    <th scope="col" rowspan="2">機種名</th>
                    <th scope="col" rowspan="2">台数</th>
                    <th scope="col" colspan="3">ストローク</th>
                    <th scope="col" rowspan="2">設備導入年月</th>
                    <th scope="col" rowspan="2">備考</th>
                  </tr>
                  <tr>
                    <th class="p-facility-factory__stroke" scope="col">X</th>
                    <th class="p-facility-factory__stroke" scope="col">Y</th>
                    <th class="p-facility-factory__stroke" scope="col">Z</th>
                  </tr>
                </thead>
                <tbody class="p-facility-factory__tbody">
                  <tr>
                    <td class="p-facility-factory__bg-gray">三次元測定機</td>
                    <td>ミツトヨ</td>
                    <td>CRT-As776 Coosmosシステム</td>
                    <td>1</td>
                    <td>700</td>
                    <td>700</td>
                    <td>600</td>
                    <td>2016年09月</td>
                    <td>倣い測定機能付き</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">画像測定機</td>
                    <td>ミツトヨ</td>
                    <td>MF-A2017C</td>
                    <td>1</td>
                    <td>200</td>
                    <td>170</td>
                    <td>100</td>
                    <td>2010年06月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">画像測定器</td>
                    <td>キーエンス</td>
                    <td>IM-6700/6225T</td>
                    <td>1</td>
                    <td>100</td>
                    <td>170</td>
                    <td>30</td>
                    <td>2015年06月</td>
                    <td>—</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="p-facility-factory__table-wrap">
              <h3 class="p-facility-factory__ttl">第２恒温室内設備</h3>
              <table class="p-facility-factory__table">
                <thead class="p-facility-factory__thead">
                  <tr>
                    <th scope="col" rowspan="2">機械名</th>
                    <th scope="col" rowspan="2">メーカー</th>
                    <th scope="col" rowspan="2">機種名</th>
                    <th scope="col" rowspan="2">台数</th>
                    <th scope="col" colspan="3">ストローク</th>
                    <th scope="col" rowspan="2">設備導入年月</th>
                    <th scope="col" rowspan="2">備考</th>
                  </tr>
                  <tr>
                    <th class="p-facility-factory__stroke" scope="col">X</th>
                    <th class="p-facility-factory__stroke" scope="col">Y</th>
                    <th class="p-facility-factory__stroke" scope="col">Z</th>
                  </tr>
                </thead>
                <tbody class="p-facility-factory__tbody">
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="3">ワイヤー放電加工機</td>
                    <td rowspan="3">FANUC</td>
                    <td rowspan="3">α-C400iA</td>
                    <td rowspan="3">3</td>
                    <td rowspan="3">370</td>
                    <td rowspan="3">270</td>
                    <td rowspan="3">255</td>
                    <td>2013年05月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2014年10月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2015年02月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="2">ワイヤー放電加工機</td>
                    <td rowspan="2">FANUC</td>
                    <td rowspan="2">α-C400iA<br>(精密加工オプション付)</td>
                    <td rowspan="2">3</td>
                    <td rowspan="2">370</td>
                    <td rowspan="2">270</td>
                    <td rowspan="2">255</td>
                    <td>2013年05月（2台）</td>
                    <td rowspan="2">0.1φ対応</td>
                  </tr>
                  <tr>
                    <td class="u-border--right">2013年11月</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="4">ワイヤー放電加工機</td>
                    <td rowspan="4">FANUC</td>
                    <td rowspan="4">α-C600iA</td>
                    <td rowspan="4">4</td>
                    <td rowspan="4">600</td>
                    <td rowspan="4">400</td>
                    <td rowspan="4">310</td>
                    <td>2013年09月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2013年10月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2014年01月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2015年04月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">ワイヤー放電加工機</td>
                    <td>FANUC</td>
                    <td>α-1iE</td>
                    <td>1</td>
                    <td>600</td>
                    <td>400</td>
                    <td>300</td>
                    <td>2011年07月</td>
                    <td>	—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="2">ワイヤー放電加工機</td>
                    <td rowspan="2">FANUC</td>
                    <td rowspan="2">α-C600iC</td>
                    <td rowspan="2">3</td>
                    <td rowspan="2">600</td>
                    <td rowspan="2">400</td>
                    <td rowspan="2">310</td>
                    <td>2021年09月（2台）</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2022年08月</td>
                    <td>—</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="p-facility-factory__table-wrap">
              <h3 class="p-facility-factory__ttl">第３恒温室内設備</h3>
              <table class="p-facility-factory__table">
                <thead class="p-facility-factory__thead">
                  <tr>
                    <th scope="col" rowspan="2">機械名</th>
                    <th scope="col" rowspan="2">メーカー</th>
                    <th scope="col" rowspan="2">機種名</th>
                    <th scope="col" rowspan="2">台数</th>
                    <th scope="col" colspan="3">ストローク</th>
                    <th scope="col" rowspan="2">設備導入年月</th>
                    <th scope="col" rowspan="2">備考</th>
                  </tr>
                  <tr>
                    <th class="p-facility-factory__stroke" scope="col">X</th>
                    <th class="p-facility-factory__stroke" scope="col">Y</th>
                    <th class="p-facility-factory__stroke" scope="col">Z</th>
                  </tr>
                </thead>
                <tbody class="p-facility-factory__tbody">
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="3">ワイヤー放電加工機</td>
                    <td rowspan="3">FANUC</td>
                    <td rowspan="3">α-1iE</td>
                    <td rowspan="3">3</td>
                    <td rowspan="3">600</td>
                    <td rowspan="3">400</td>
                    <td rowspan="3">300</td>
                    <td>2011年01月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2012年01月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2013年06月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">ワイヤー放電加工機</td>
                    <td>FANUC</td>
                    <td>α-C600iA</td>
                    <td>1</td>
                    <td>600</td>
                    <td>400</td>
                    <td>400</td>
                    <td>2015年04月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">ワイヤー放電加工機</td>
                    <td>FANUC</td>
                    <td>α-C600iC</td>
                    <td>1</td>
                    <td>600</td>
                    <td>400</td>
                    <td>310</td>
                    <td>2023年03月</td>
                    <td>—</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="p-facility-factory__table-wrap">
              <h3 class="p-facility-factory__ttl">第４恒温室内設備</h3>
              <table class="p-facility-factory__table">
                <thead class="p-facility-factory__thead">
                  <tr>
                    <th scope="col" rowspan="2">機械名</th>
                    <th scope="col" rowspan="2">メーカー</th>
                    <th scope="col" rowspan="2">機種名</th>
                    <th scope="col" rowspan="2">台数</th>
                    <th scope="col" colspan="3">ストローク</th>
                    <th scope="col" rowspan="2">設備導入年月</th>
                    <th scope="col" rowspan="2">備考</th>
                  </tr>
                  <tr>
                    <th class="p-facility-factory__stroke" scope="col">X</th>
                    <th class="p-facility-factory__stroke" scope="col">Y</th>
                    <th class="p-facility-factory__stroke" scope="col">Z</th>
                  </tr>
                </thead>
                <tbody class="p-facility-factory__tbody">
                  <tr>
                    <td class="p-facility-factory__bg-gray">細穴放電加工機</td>
                    <td>sodic</td>
                    <td>K1C-S</td>
                    <td>2</td>
                    <td>200</td>
                    <td>300</td>
                    <td>200</td>
                    <td>2013年02月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">細穴放電加工機</td>
                    <td>三菱電機</td>
                    <td>RH3525</td>
                    <td>1</td>
                    <td>350</td>
                    <td>250</td>
                    <td>300</td>
                    <td>2016 年01月</td>
                    <td>—</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="p-facility-factory__table-wrap">
              <h3 class="p-facility-factory__ttl">大型加工室内設備</h3>
              <table class="p-facility-factory__table">
                <thead class="p-facility-factory__thead">
                  <tr>
                    <th scope="col" rowspan="2">機械名</th>
                    <th scope="col" rowspan="2">メーカー</th>
                    <th scope="col" rowspan="2">機種名</th>
                    <th scope="col" rowspan="2">台数</th>
                    <th scope="col" colspan="3">ストローク</th>
                    <th scope="col" rowspan="2">設備導入年月</th>
                    <th scope="col" rowspan="2">備考</th>
                  </tr>
                  <tr>
                    <th class="p-facility-factory__stroke" scope="col">X</th>
                    <th class="p-facility-factory__stroke" scope="col">Y</th>
                    <th class="p-facility-factory__stroke" scope="col">Z</th>
                  </tr>
                </thead>
                <tbody class="p-facility-factory__tbody">
                  <tr>
                    <td class="p-facility-factory__bg-gray">大型ワイヤー加工機</td>
                    <td>三菱電機</td>
                    <td>FA-50</td>
                    <td>1</td>
                    <td>1300</td>
                    <td>1000</td>
                    <td>400</td>
                    <td>2009年03月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">ワイヤー放電加工機</td>
                    <td>三菱電機</td>
                    <td>FA-40</td>
                    <td>1</td>
                    <td>1000</td>
                    <td>800</td>
                    <td>400</td>
                    <td>2007年08月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">超大型ワイヤー加工機</td>
                    <td>三菱電機</td>
                    <td>FA-30</td>
                    <td>1</td>
                    <td>750</td>
                    <td>500</td>
                    <td>400</td>
                    <td>2013年10月</td>
                    <td>—</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="p-facility-factory__note">
              <span class="p-facility-factory__note-txt">
                福島工場ワイヤー放電加工機平均稼動年月数10年7ヶ月<br>
                （2025年4月時点）
              </span>
            </div>
            <div class="p-facility-factory__btn">
              <a href="https://maps.app.goo.gl/c3sADSXg4FMiL18R9" class="c-btn" target="_blank">
                <span class="c-btn__txt">アクセスマップはこちら</span>
                <span class="c-btn__svg-wrap">
                  <svg class="c-btn__svg" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.386963 6.15234L14.137 6.15234M9.66821 10.9648L14.4807 6.15234L9.66821 1.33984" stroke="#2196F3"/>
                  </svg>
                </span>
              </a>
            </div>
          </div>

          <div class="p-facility-factory__cont js-tab-item" id="tab3">
            <h2 class="p-facility-factory__cont-ttl">福島ワイヤー加工センター第二工場</h2>
            <div class="p-facility-factory__slider js-slider">
              <div class="swiper p-facility-factory__swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima02/slide01.jpg" alt="福島ワイヤー加工センター第二工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima02/slide02.jpg" alt="福島ワイヤー加工センター第二工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima02/slide03.jpg" alt="福島ワイヤー加工センター第二工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima02/slide04.jpg" alt="福島ワイヤー加工センター第二工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima02/slide05.jpg" alt="福島ワイヤー加工センター第二工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima02/slide06.jpg" alt="福島ワイヤー加工センター第二工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima02/slide07.jpg" alt="福島ワイヤー加工センター第二工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima02/slide08.jpg" alt="福島ワイヤー加工センター第二工場">
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="swiper p-facility-factory__thumbs">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima02/slide01.jpg" alt="福島ワイヤー加工センター第二工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima02/slide02.jpg" alt="福島ワイヤー加工センター第二工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima02/slide03.jpg" alt="福島ワイヤー加工センター第二工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima02/slide04.jpg" alt="福島ワイヤー加工センター第二工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima02/slide05.jpg" alt="福島ワイヤー加工センター第二工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima02/slide06.jpg" alt="福島ワイヤー加工センター第二工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima02/slide07.jpg" alt="福島ワイヤー加工センター第二工場">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/fukushima02/slide08.jpg" alt="福島ワイヤー加工センター第二工場">
                  </div>
                </div>
              </div>
            </div>
            <div class="p-facility-factory__description">
              <span class="p-facility-factory__description-head">ワイヤー加工機21台</span>
              <span class="p-facility-factory__description-tel">TEL：0245-73-8700（菊地センター長）</span>
            </div>
            <div class="p-facility-factory__table-wrap">
              <table class="p-facility-factory__table">
                <thead class="p-facility-factory__thead">
                  <tr>
                    <th scope="col" rowspan="2">機械名</th>
                    <th scope="col" rowspan="2">メーカー</th>
                    <th scope="col" rowspan="2">機種名</th>
                    <th scope="col" rowspan="2">台数</th>
                    <th scope="col" colspan="3">ストローク</th>
                    <th scope="col" rowspan="2">設備導入年月</th>
                    <th scope="col" rowspan="2">備考</th>
                  </tr>
                  <tr>
                    <th class="p-facility-factory__stroke" scope="col">X</th>
                    <th class="p-facility-factory__stroke" scope="col">Y</th>
                    <th class="p-facility-factory__stroke" scope="col">Z</th>
                  </tr>
                </thead>
                <tbody class="p-facility-factory__tbody">
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="2">ワイヤー放電加工機</td>
                    <td rowspan="2">三菱電機</td>
                    <td rowspan="2">MV2400R</td>
                    <td rowspan="2">8</td>
                    <td rowspan="2">600</td>
                    <td rowspan="2">400</td>
                    <td rowspan="2">310</td>
                    <td>2018年10月（5台）</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2019年09月（3台）</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="2">ワイヤー放電加工機</td>
                    <td rowspan="2">三菱電機</td>
                    <td rowspan="2">MV1200R</td>
                    <td rowspan="2">4</td>
                    <td rowspan="2">400</td>
                    <td rowspan="2">300</td>
                    <td rowspan="2">220</td>
                    <td>2017年07月（2台）</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2018年10月（2台）</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="5">ワイヤー放電加工機</td>
                    <td rowspan="5">三菱電機</td>
                    <td rowspan="5">MP2400</td>
                    <td rowspan="5">5</td>
                    <td rowspan="5">600</td>
                    <td rowspan="5">400</td>
                    <td rowspan="5">310</td>
                    <td>2018年10月</td>
                    <td>0.05Φ対応</td>
                  </tr>
                  <tr>
                    <td>2019年09月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2021年10月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2021年12月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2022年06月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">ワイヤー放電加工機（油）</td>
                    <td>三菱電機</td>
                    <td>MX600</td>
                    <td>1</td>
                    <td>300</td>
                    <td>200</td>
                    <td>100</td>
                    <td>2017年03月</td>
                    <td>油加工 0.05Φ対応</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="2">ワイヤー放電加工機</td>
                    <td rowspan="2">FANUC</td>
                    <td rowspan="2">α-C600iC</td>
                    <td rowspan="2">3</td>
                    <td rowspan="2">600</td>
                    <td rowspan="2">400</td>
                    <td>400</td>
                    <td>2022年08月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="u-txt-align--center">310</td>
                    <td>
                      2023年03月<br>
                      2024年01月
                    </td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="2">細穴放電加工機</td>
                    <td rowspan="2">三菱電機</td>
                    <td rowspan="2">RH3525</td>
                    <td rowspan="2">2</td>
                    <td rowspan="2">350</td>
                    <td rowspan="2">250</td>
                    <td rowspan="2">300</td>
                    <td>2018年10月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2019年09月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">細穴放電加工機</td>
                    <td>Sodick</td>
                    <td>K1C-S</td>
                    <td>1</td>
                    <td>200</td>
                    <td>300</td>
                    <td>200</td>
                    <td>2008年01月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">三次元測定機</td>
                    <td>カール・ツァイス</td>
                    <td>CONTURA AKTIV 7/7/6</td>
                    <td>1</td>
                    <td>700</td>
                    <td>700</td>
                    <td>600</td>
                    <td>2020年03月</td>
                    <td>—</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="p-facility-factory__note">
              <span class="p-facility-factory__note-txt">
                福島第二工場ワイヤー放電加工機平均稼働年月数 5年5ヶ月<br>
                （2025年4月時点）
              </span>
            </div>
            <div class="p-facility-factory__btn">
              <a href="https://maps.app.goo.gl/qpP9A1HnwG3Px3xm7" class="c-btn" target="_blank">
                <span class="c-btn__txt">アクセスマップはこちら</span>
                <span class="c-btn__svg-wrap">
                  <svg class="c-btn__svg" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.386963 6.15234L14.137 6.15234M9.66821 10.9648L14.4807 6.15234L9.66821 1.33984" stroke="#2196F3"/>
                  </svg>
                </span>
              </a>
            </div>
          </div>

          <div class="p-facility-factory__cont js-tab-item" id="tab4">
            <h2 class="p-facility-factory__cont-ttl">中部ワイヤー加工センター</h2>
            <div class="p-facility-factory__slider js-slider">
              <div class="swiper p-facility-factory__swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/chubu/slide01.jpg" alt="中部ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/chubu/slide02.jpg" alt="中部ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/chubu/slide03.jpg" alt="中部ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/chubu/slide04.jpg" alt="中部ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/chubu/slide05.jpg" alt="中部ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/chubu/slide06.jpg" alt="中部ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/chubu/slide07.jpg" alt="中部ワイヤー加工センター">
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="swiper p-facility-factory__thumbs">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/chubu/slide01.jpg" alt="中部ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/chubu/slide02.jpg" alt="中部ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/chubu/slide03.jpg" alt="中部ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/chubu/slide04.jpg" alt="中部ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/chubu/slide05.jpg" alt="中部ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/chubu/slide06.jpg" alt="中部ワイヤー加工センター">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/chubu/slide07.jpg" alt="中部ワイヤー加工センター">
                  </div>
                </div>
              </div>
            </div>
            <div class="p-facility-factory__description">
              <span class="p-facility-factory__description-head">ワイヤー加工機37台</span>
              <span class="p-facility-factory__description-tel">TEL：0533-75-6800（佐藤センター長）</span>
            </div>
            <div class="p-facility-factory__table-wrap">
              <table class="p-facility-factory__table">
                <thead class="p-facility-factory__thead">
                  <tr>
                    <th scope="col" rowspan="2">機械名</th>
                    <th scope="col" rowspan="2">メーカー</th>
                    <th scope="col" rowspan="2">機種名</th>
                    <th scope="col" rowspan="2">台数</th>
                    <th scope="col" colspan="3">ストローク</th>
                    <th scope="col" rowspan="2">設備導入年月</th>
                    <th scope="col" rowspan="2">備考</th>
                  </tr>
                  <tr>
                    <th class="p-facility-factory__stroke" scope="col">X</th>
                    <th class="p-facility-factory__stroke" scope="col">Y</th>
                    <th class="p-facility-factory__stroke" scope="col">Z</th>
                  </tr>
                </thead>
                <tbody class="p-facility-factory__tbody">
                  <tr>
                    <td class="p-facility-factory__bg-gray">ワイヤー放電加工機(油)</td>
                    <td>三菱電機</td>
                    <td>MX600</td>
                    <td>1</td>
                    <td>300</td>
                    <td>200</td>
                    <td>100</td>
                    <td>2016年09月</td>
                    <td>油加工 0.05φ対応</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="3">ワイヤー放電加工機</td>
                    <td rowspan="3">三菱電機</td>
                    <td rowspan="3">MP2400</td>
                    <td rowspan="3">3</td>
                    <td rowspan="3">600</td>
                    <td rowspan="3">400</td>
                    <td rowspan="3">310</td>
                    <td>2020年09月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2021年11月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2022年04月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">ワイヤー放電加工機</td>
                    <td>FANUC</td>
                    <td>α-1iD</td>
                    <td>1</td>
                    <td>600</td>
                    <td>400</td>
                    <td>400</td>
                    <td>2011年06月</td>
                    <td>ー</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="5">ワイヤー放電加工機</td>
                    <td rowspan="5">FANUC</td>
                    <td rowspan="5">α-1iE</td>
                    <td rowspan="5">7</td>
                    <td rowspan="5">600</td>
                    <td rowspan="5">400</td>
                    <td rowspan="5">310</td>
                    <td>2011年06月（2台）</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2011年07月（2台）</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2011年08月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2011年09月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2012年02月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">ワイヤー放電加工機</td>
                    <td>FANUC</td>
                    <td>α-0iD</td>
                    <td>1</td>
                    <td>370</td>
                    <td>270</td>
                    <td>255</td>
                    <td>2011年01月</td>
                    <td>ー</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="4">ワイヤー放電加工機</td>
                    <td rowspan="4">FANUC</td>
                    <td rowspan="4">α-C400iA</td>
                    <td rowspan="4">4</td>
                    <td rowspan="4">370</td>
                    <td rowspan="4">270</td>
                    <td rowspan="4">255</td>
                    <td>2012年07月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2013年01月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2013年03月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2015年02月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="2">ワイヤー放電加工機</td>
                    <td rowspan="2">FANUC</td>
                    <td rowspan="2">α-C400iB</td>
                    <td rowspan="2">3</td>
                    <td rowspan="2">400</td>
                    <td rowspan="2">300</td>
                    <td rowspan="2">255</td>
                    <td>2017年10月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2018年06月（2台）</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray" rowspan="6">ワイヤー放電加工機</td>
                    <td rowspan="6">FANUC</td>
                    <td rowspan="6">α-C600iA</td>
                    <td rowspan="6">11</td>
                    <td rowspan="6">600</td>
                    <td rowspan="6">400</td>
                    <td rowspan="6">310</td>
                    <td>2014年06月（3台）</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2014年09月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2014年11月（2台）</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2015年02月</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2015年08月（2台）</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td>2015年10月（2台）</td>
                    <td>—</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">ワイヤー放電加工機</td>
                    <td>FANUC</td>
                    <td>α-C600iA</td>
                    <td>1</td>
                    <td>600</td>
                    <td>400</td>
                    <td>400</td>
                    <td>2015年04月</td>
                    <td>ー</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">ワイヤー放電加工機</td>
                    <td>FANUC</td>
                    <td>α-C600iB</td>
                    <td>1</td>
                    <td>600</td>
                    <td>400</td>
                    <td>310</td>
                    <td>2020年01月</td>
                    <td>ー</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">ワイヤー放電加工機</td>
                    <td>FANUC</td>
                    <td>α-C600iC</td>
                    <td>1</td>
                    <td>600</td>
                    <td>400</td>
                    <td>310</td>
                    <td>2021年05月</td>
                    <td>ー</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">ワイヤー放電加工機</td>
                    <td>FANUC</td>
                    <td>α-C400iC</td>
                    <td>2</td>
                    <td>400</td>
                    <td>300</td>
                    <td>255</td>
                    <td>2021年11月（2台）</td>
                    <td>ー</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">超大型ワイヤー加工機</td>
                    <td>三菱電機</td>
                    <td>FA-30</td>
                    <td>1</td>
                    <td>750</td>
                    <td>500</td>
                    <td>400</td>
                    <td>2013年05月</td>
                    <td>ー</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">細穴放電加工機</td>
                    <td>三菱電機</td>
                    <td>RH3525</td>
                    <td>1</td>
                    <td>350</td>
                    <td>250</td>
                    <td>300</td>
                    <td>2015年09月</td>
                    <td>ー</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">NC細穴放電加工機</td>
                    <td>ELENIX</td>
                    <td>CT500FX-M</td>
                    <td>1</td>
                    <td>550</td>
                    <td>380</td>
                    <td>250</td>
                    <td>2022年04月</td>
                    <td>ー</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">細穴放電加工機</td>
                    <td>sodick</td>
                    <td>K1C-S</td>
                    <td>1</td>
                    <td>200</td>
                    <td>300</td>
                    <td>200</td>
                    <td>2011年06月</td>
                    <td>ー</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">三次元測定機</td>
                    <td>ミツトヨ</td>
                    <td>CRYSTA-Apex S544</td>
                    <td>1</td>
                    <td>505</td>
                    <td>405</td>
                    <td>405</td>
                    <td>2012年05月</td>
                    <td class="u-fs--14">2016/09バージョンアップ<br>倣い測定機能付</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">三次元測定機</td>
                    <td>ミツトヨ</td>
                    <td>CRYSTA-Apex V776</td>
                    <td>1</td>
                    <td>700</td>
                    <td>700</td>
                    <td>600</td>
                    <td>2024年10月</td>
                    <td>倣い測定機能付</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">画像測定機</td>
                    <td>ミツトヨ</td>
                    <td>MF-A2017D</td>
                    <td>1</td>
                    <td>200</td>
                    <td>170</td>
                    <td>220</td>
                    <td>2016年09月</td>
                    <td>ー</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="p-facility-factory__note">
              <span class="p-facility-factory__note-txt">
                中部工場ワイヤー放電加工機平均稼動年月数 9年7ヶ月<br>
                (2025年4月時点)
              </span>
            </div>
            <div class="p-facility-factory__btn">
              <a href="https://maps.app.goo.gl/QyesLqbthyPCvUVa7" class="c-btn" target="_blank">
                <span class="c-btn__txt">アクセスマップはこちら</span>
                <span class="c-btn__svg-wrap">
                  <svg class="c-btn__svg" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.386963 6.15234L14.137 6.15234M9.66821 10.9648L14.4807 6.15234L9.66821 1.33984" stroke="#2196F3"/>
                  </svg>
                </span>
              </a>
            </div>
          </div>

          <div class="p-facility-factory__cont js-tab-item" id="tab5">
            <h2 class="p-facility-factory__cont-ttl">大型ワイヤー放電加工機</h2>
            <div class="p-facility-factory__slider js-slider">
              <div class="swiper p-facility-factory__swiper">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/oogata/slide01.jpg" alt="大型ワイヤー放電加工機">
                  </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="swiper p-facility-factory__thumbs">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/factory/oogata/slide01.jpg" alt="大型ワイヤー放電加工機">
                  </div>
                </div>
              </div>
            </div>
            <div class="p-facility-factory__description">
              <span class="p-facility-factory__description-head">設備状況 : 福島工場３台、中部工場１台</span>
            </div>
            <div class="p-facility-factory__table-wrap">
              <table class="p-facility-factory__table">
                <thead class="p-facility-factory__thead">
                  <tr>
                    <th scope="col" rowspan="2">機械名</th>
                    <th scope="col" rowspan="2">メーカー</th>
                    <th scope="col" rowspan="2">機種名</th>
                    <th scope="col" rowspan="2">台数</th>
                    <th scope="col" colspan="3">ストローク</th>
                    <th scope="col" rowspan="2">設備導入年月</th>
                    <th scope="col" rowspan="2">備考</th>
                  </tr>
                  <tr>
                    <th class="p-facility-factory__stroke" scope="col">X</th>
                    <th class="p-facility-factory__stroke" scope="col">Y</th>
                    <th class="p-facility-factory__stroke" scope="col">Z</th>
                  </tr>
                </thead>
                <tbody class="p-facility-factory__tbody">
                  <tr>
                    <td class="p-facility-factory__bg-gray">超大型ワイヤー加工機</td>
                    <td>三菱電機</td>
                    <td>FA-50</td>
                    <td>1</td>
                    <td>1300</td>
                    <td>1000</td>
                    <td>400</td>
                    <td>2009年03月</td>
                    <td>福島工場</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">超大型ワイヤー加工機</td>
                    <td>三菱電機</td>
                    <td>FA-40</td>
                    <td>1</td>
                    <td>1000</td>
                    <td>800</td>
                    <td>400</td>
                    <td>2007年08月</td>
                    <td>福島工場</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">超大型ワイヤー加工機</td>
                    <td>三菱電機</td>
                    <td>FA-30</td>
                    <td>1</td>
                    <td>750</td>
                    <td>500</td>
                    <td>400</td>
                    <td>2013年10月</td>
                    <td>福島工場</td>
                  </tr>
                  <tr>
                    <td class="p-facility-factory__bg-gray">超大型ワイヤー加工機</td>
                    <td>三菱電機</td>
                    <td>FA-30</td>
                    <td>1</td>
                    <td>750</td>
                    <td>500</td>
                    <td>400</td>
                    <td>2013年05月</td>
                    <td>中部工場</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="p-facility-factory__note">
              <span class="p-facility-factory__note-txt">
                大型機平均稼動年月数 14年4ヶ月<br>
                （2025年4月時点）
              </span>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part( 'parts/parts', 'contact' ); ?>
    </div>
  </main>

  <?php get_footer(); ?>
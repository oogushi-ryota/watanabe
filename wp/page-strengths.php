<?php
/*
Template Name: 5つの強み
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
            <span class="c-breadcrumb__link">5つの強み</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="p-strengths">
      <section class="c-under-mv">
        <div class="c-inner">
          <div class="c-under-mv__ttl">
            <span class="c-under-mv__en-ttl">5 STRENGTHS</span>
            <h1 class="c-under-mv__ja-ttl">5つの強み</h1>
          </div>
        </div>
        <div class="c-under-mv__bg c-under-mv__bg--strengths"></div>
      </section>

      <div class="p-strengths-anchor">
        <div class="c-inner c-inner--110">
          <ul class="p-strengths-anchor__list">
            <li class="p-strengths-anchor__item">
              <a href="#shortest" class="p-strengths-anchor__link">
                国内最短納期
                <svg class="p-strengths-anchor__svg" width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.869141 1.51562L7.53581 8.18229L14.2025 1.51562" stroke="#2196F3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </li>
            <li class="p-strengths-anchor__item">
              <a href="#quality" class="p-strengths-anchor__link">
                品質の維持・向上
                <svg class="p-strengths-anchor__svg" width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.869141 1.51562L7.53581 8.18229L14.2025 1.51562" stroke="#2196F3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </li>
            <li class="p-strengths-anchor__item">
              <a href="#variable" class="p-strengths-anchor__link">
                お客様の変動費を削減
                <svg class="p-strengths-anchor__svg" width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.869141 1.51562L7.53581 8.18229L14.2025 1.51562" stroke="#2196F3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </li>
            <li class="p-strengths-anchor__item">
              <a href="#cost" class="p-strengths-anchor__link">
                お客様の固定費を削減
                <svg class="p-strengths-anchor__svg" width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.869141 1.51562L7.53581 8.18229L14.2025 1.51562" stroke="#2196F3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </li>
            <li class="p-strengths-anchor__item">
              <a href="#sustainability" class="p-strengths-anchor__link">
                企業持続力
                <svg class="p-strengths-anchor__svg" width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.869141 1.51562L7.53581 8.18229L14.2025 1.51562" stroke="#2196F3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <section class="p-strengths-shortest" id="shortest">
        <div class="c-inner c-inner--110">
          <h2 class="c-under-sec-ttl">国内最短納期</h2>
          <div class="p-strengths-voice">
            <h4 class="p-strengths-voice__ttl">お客様からの声</h4>
            <ul class="p-strengths-voice__list">
              <li class="p-strengths-voice__item">
                <p class="p-strengths-voice__txt">
                  追加コストをかけずに<br class="is-pc">
                  納期短縮をしたい
                </p>
              </li>
              <li class="p-strengths-voice__item">
                <p class="p-strengths-voice__txt p-strengths-voice__txt--l">
                  急な増産対応となってしまった。<br>
                  デリバリーも含めて<br>
                  特急対応してくれる先はないか
                </p>
              </li>
            </ul>
          </div>
          <div class="p-strengths-shortest__details">
            <div class="p-strengths-shortest__cont">
              <div class="p-strengths-shortest__txtarea">
                <h3 class="p-strengths-shortest__cont-ttl c-cont-ttl">自社保有ワイヤー加工機 100台</h3>
                <p class="p-strengths-shortest__txt">
                  自社で100台のワイヤーカット加工機を保有し、安定した生産体制を確立。<br>
                  設備の平均年齢は8年以下と新しく、精度の高い加工を長時間安定して行うことが可能です。
                </p>
              </div>
              <picture class="p-strengths-shortest__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/shortest/shortest_img01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/shortest/shortest_img01.jpg" width="500" height="281" alt="自社保有ワイヤー加工機 100台">
              </picture>
            </div>
            <div class="p-strengths-shortest__cont">
              <div class="p-strengths-shortest__txtarea">
                <h3 class="p-strengths-shortest__cont-ttl c-cont-ttl">想定稼働率 70%</h3>
                <p class="p-strengths-shortest__txt">想定稼働率を70%に設定することで、余裕のある通常操業が可能となり、繁忙期や突発的なご依頼にも迅速に対応できる体制を整えています。</p>
              </div>
              <picture class="p-strengths-shortest__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/shortest/shortest_img02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/shortest/shortest_img02.jpg" width="500" height="281" alt="想定稼働率 70%">
              </picture>
            </div>
            <div class="p-strengths-shortest__cont">
              <div class="p-strengths-shortest__txtarea">
                <h3 class="p-strengths-shortest__cont-ttl c-cont-ttl">予約なしでの特急対応</h3>
                <p class="p-strengths-shortest__txt">
                  急な製造前倒しや増産に伴う特急加工もお気軽にご相談ください。事前のご予約無しでも対応いたします。<br>
                  また、担当営業による引取り・納品体制※により、特急対応をサポートします。
                </p>
                <p class="p-strengths-shortest__note">※対象エリアは限定あり</p>
              </div>
              <picture class="p-strengths-shortest__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/shortest/shortest_img03.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/shortest/shortest_img03.jpg" width="500" height="281" alt="予約なしでの特急対応">
              </picture>
            </div>
            <div class="p-strengths-shortest__cont">
              <div class="p-strengths-shortest__txtarea">
                <h3 class="p-strengths-shortest__cont-ttl c-cont-ttl">同時並行加工の実現</h3>
                <p class="p-strengths-shortest__txt">毎年2〜3台前後の新規導入と、メーカーによるレーザー校正を実施。同時並行で多数の加工機を使用し一気に加工を終了。</p>
              </div>
              <picture class="p-strengths-shortest__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/shortest/shortest_img04.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/shortest/shortest_img04.jpg" width="500" height="281" alt="同時並行加工の実現">
              </picture>
            </div>
            <div class="p-strengths-shortest__cont">
              <div class="p-strengths-shortest__txtarea">
                <h3 class="p-strengths-shortest__cont-ttl c-cont-ttl">24時間体制で短納期実現</h3>
                <p class="p-strengths-shortest__txt">
                  早番・遅番の2交代シフトで設備を効率的に稼働させ、24時間体制での生産を可能にしています。<br>
                  繁忙期や急なご依頼にも柔軟に対応し、納期遅延を防ぎます。
                </p>
              </div>
              <picture class="p-strengths-shortest__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/cost/cost_img03.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/cost/cost_img03.jpg" width="500" height="281" alt="24時間体制で短納期実現">
              </picture>
            </div>
          </div>
        </div>
      </section>

      <section class="p-strengths-quality" id="quality">
        <div class="c-inner">
          <div class="p-strengths-quality__inner">
            <h2 class="c-under-sec-ttl">品質の維持・向上</h2>
            <div class="p-strengths-voice">
              <h4 class="p-strengths-voice__ttl">お客様からの声</h4>
              <ul class="p-strengths-voice__list">
                <li class="p-strengths-voice__item">
                  <p class="p-strengths-voice__txt p-strengths-voice__txt--l">
                    社内のワイヤー加工機は<br>
                    長らく更新されていないし、<br>
                    今後の設備更新も困難だ
                  </p>
                </li>
                <li class="p-strengths-voice__item">
                  <p class="p-strengths-voice__txt">
                    客先の精度要求の高まりに<br>
                    設備を合わせていくのが大変
                  </p>
                </li>
              </ul>
            </div>
            <div class="p-strengths-quality__wrap">
              <div class="p-strengths-quality__cont">
                <picture class="p-strengths-quality__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/quality/quality_img01.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/quality/quality_img01.jpg" width="530" height="298" alt="最新設備と環境で精度向上">
                </picture>
                <h3 class="p-strengths-quality__cont-ttl c-cont-ttl">最新設備と環境で精度向上</h3>
                <p class="p-strengths-quality__txt">最新の加工設備を多数導入し、高精度な加工を安定して提供しています。全工場・拠点で温湿度管理を徹底し、明るく安全な作業環境を整備。社内LANやバックアップサーバーによる情報管理体制も万全です。</p>
              </div>
              <div class="p-strengths-quality__cont">
                <picture class="p-strengths-quality__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/quality/quality_img02.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/quality/quality_img02.jpg" width="530" height="298" alt="徹底した品質管理でミスを防止">
                </picture>
                <h3 class="p-strengths-quality__cont-ttl c-cont-ttl">徹底した品質管理でミスを防止</h3>
                <p class="p-strengths-quality__txt">測定チームによる定期管理やメーカー点検を毎月実施し、安定した品質を保つことで、安定供給を支えています。</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="p-strengths-variable" id="variable">
        <div class="c-inner c-inner--110">
          <h2 class="c-under-sec-ttl">お客様の変動費を削減</h2>
          <div class="p-strengths-voice">
            <h4 class="p-strengths-voice__ttl">お客様からの声</h4>
            <ul class="p-strengths-voice__list">
              <li class="p-strengths-voice__item">
                <p class="p-strengths-voice__txt">内製・外注のバランスを見直すことで、変動費を削減したい</p>
              </li>
              <li class="p-strengths-voice__item">
                <p class="p-strengths-voice__txt">
                  採算ラインを引き上げてしまう<br>設備・人員配置は避けたい
                </p>
              </li>
            </ul>
          </div>
          <ul class="p-strengths-variable__list">
            <li class="p-strengths-variable__item">
              <picture class="p-strengths-variable__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/variable/variable_img01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/variable/variable_img01.jpg" width="360" height="240" alt="短納期対応で在庫コスト削減">
              </picture>
              <div class="p-strengths-variable__txtarea">
                <h3 class="p-strengths-variable__cont-ttl c-cont-ttl">短納期対応で在庫コスト削減</h3>
                <p class="p-strengths-variable__txt">
                  担当営業による引取り・納品体制※により、急な増産対応にも対応。<br>
                  不測の事態にも安定供給を実現することで、お客様は余分な在庫を抱える必要がありません。<br>
                  <span class="p-strengths-variable__note">※対象エリアは限定あり</span>
                </p>
              </div>
            </li>
            <li class="p-strengths-variable__item">
              <picture class="p-strengths-variable__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/variable/variable_img02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/variable/variable_img02.jpg" width="360" height="240" alt="複雑加工も低コスト対応">
              </picture>
              <div class="p-strengths-variable__txtarea">
                <h3 class="p-strengths-variable__cont-ttl c-cont-ttl">複雑加工も低コスト対応</h3>
                <p class="p-strengths-variable__txt">多段取りや短時間加工もスピーディーに。自社加工同等の品質とコストを提供することで、お客様の工数削減をサポートします。</p>
              </div>
            </li>
            <li class="p-strengths-variable__item">
              <picture class="p-strengths-variable__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/variable/variable_img03.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/variable/variable_img03.jpg" width="360" height="240" alt="合理的かつ競争力ある価格設定">
              </picture>
              <div class="p-strengths-variable__txtarea">
                <h3 class="p-strengths-variable__cont-ttl c-cont-ttl">合理的かつ競争力ある価格設定</h3>
                <p class="p-strengths-variable__txt">最短6時間以内の見積もりと合理的なレート設定で、競合他社より優れた価格を実現します｡</p>
              </div>
            </li>
            <li class="p-strengths-variable__item">
              <picture class="p-strengths-variable__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/variable/variable_img04.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/variable/variable_img04.jpg" width="360" height="240" alt="再生資源と再生エネルギー活用でコスト抑制">
              </picture>
              <div class="p-strengths-variable__txtarea">
                <h3 class="p-strengths-variable__cont-ttl c-cont-ttl">再生資源と再生エネルギー活用でコスト抑制</h3>
                <p class="p-strengths-variable__txt">使用済みワイヤー線は100％リサイクル化。太陽光発電システムを活用した省エネ運営で、持続可能かつ低コストな体制を実現します。</p>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="p-strengths-cost" id="cost">
        <div class="c-inner">
          <div class="p-strengths-cost__inner">
            <h2 class="c-under-sec-ttl">お客様の固定費を削減</h2>
            <div class="p-strengths-voice">
              <h4 class="p-strengths-voice__ttl">お客様からの声</h4>
              <ul class="p-strengths-voice__list">
                <li class="p-strengths-voice__item">
                  <p class="p-strengths-voice__txt">
                    使用頻度・採算の合わない<br>
                    設備投資は避けたい
                  </p>
                </li>
                <li class="p-strengths-voice__item">
                  <p class="p-strengths-voice__txt">
                    採算ラインを引き上げてしまう<br>設備・人員配置は避けたい
                  </p>
                </li>
              </ul>
            </div>
            <div class="p-strengths-cost__details">
              <div class="p-strengths-cost__cont">
                <div class="p-strengths-cost__txtarea">
                  <h3 class="p-strengths-cost__cont-ttl c-cont-ttl">多様な設備で特殊加工（油・大型）にも対応</h3>
                  <p class="p-strengths-cost__txt">
                    油加工機(MX600)や超大型加工機(FA50の場合、最大ストローク1300mm)まで幅広く対応できる生産体制を整えています。<br>
                    高精度が求められる1μ単位の精密加工も可能です。
                  </p>
                </div>
                <picture class="p-strengths-cost__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/cost/cost_img01.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/cost/cost_img01.jpg" width="500" height="281" alt="多彩な設備で大型加工対応">
                </picture>
              </div>
              <div class="p-strengths-cost__cont">
                <div class="p-strengths-cost__txtarea">
                  <h3 class="p-strengths-cost__cont-ttl c-cont-ttl">必要な時だけ利用できる外部設備</h3>
                  <p class="p-strengths-cost__txt">使用頻度の低い特殊加工は、必要なタイミングだけ当社の設備を活用してください。これにより、お客様は高額な設備投資や維持費を負担する必要がありません。外注化と内製の最適なバランスを実現し、お客様の内製と外注利用のバランスが最適化されることで、固定費削減に貢献します。</p>
                </div>
                <picture class="p-strengths-cost__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/cost/cost_img04.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/cost/cost_img04.jpg" width="500" height="281" alt="人件費・残業削減に貢献">
                </picture>
              </div>
              <div class="p-strengths-cost__cont">
                <div class="p-strengths-cost__txtarea">
                  <h3 class="p-strengths-cost__cont-ttl c-cont-ttl">人件費・残業削減に貢献</h3>
                  <p class="p-strengths-cost__txt">ワタナベがお客様の休日出勤や長時間残業の削減のお手伝いをいたします。納期や品質に妥協することなく、お客様の固定費削減が図れます。</p>
                </div>
                <picture class="p-strengths-cost__img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/cost/cost_img02.webp" type="image/webp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/cost/cost_img02.jpg" width="500" height="281" alt="必要な時だけ利用できる外部設備">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="p-strengths-sustainability" id="sustainability">
        <div class="c-inner c-inner--110">
          <h2 class="c-under-sec-ttl">企業持続力</h2>
          <div class="p-strengths-voice p-strengths-voice--l">
            <h4 class="p-strengths-voice__ttl">お客様からの声</h4>
            <ul class="p-strengths-voice__list">
              <li class="p-strengths-voice__item">
                <p class="p-strengths-voice__txt">
                  長年取引してきた企業が<br>
                  高齢化で廃業してしまった
                </p>
              </li>
              <li class="p-strengths-voice__item">
                <p class="p-strengths-voice__txt p-strengths-voice__txt--l">
                  災害リスクや人手不足倒産が<br>
                  叫ばれる時代だからこそ、<br>
                  安心かつ継続した取引をしたい
                </p>
              </li>
              <li class="p-strengths-voice__item">
                <p class="p-strengths-voice__txt p-strengths-voice__txt--l">
                  安いのはいいが、<br>
                  組織体制や長期的な取引をするには不安がある
                </p>
              </li>
            </ul>
          </div>
          <div class="p-strengths-sustainability__details">
            <div class="p-strengths-sustainability__cont">
              <div class="p-strengths-sustainability__txtarea">
                <h3 class="p-strengths-sustainability__cont-ttl c-cont-ttl">レジリエンス</h3>
                <p class="p-strengths-sustainability__txt">
                  国内3県（福島、神奈川、愛知）に4工場を分散配置。<br>
                  いずれも海抜20m以上の立地で、万一の災害時にも拠点間でバックアップ対応することで、生産態勢を維持。<br>
                  「高リスクの不透明な時代」だからこそ、「ワタナベに任せておけば、継続・安定した生産ができる」という安心を提供します。
                </p>
              </div>
              <picture class="p-strengths-sustainability__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/sustainability/sustainability_img01.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/sustainability/sustainability_img01.jpg" width="500" height="281" alt="災害対応">
              </picture>
            </div>
            <div class="p-strengths-sustainability__cont">
              <div class="p-strengths-sustainability__txtarea">
                <h3 class="p-strengths-sustainability__cont-ttl c-cont-ttl">採用力と定着率</h3>
                <p class="p-strengths-sustainability__txt">毎年複数名の採用を実現。そのほとんどが自社採用のため、ミスマッチも起こりにくく、3年以内離職率は24.3%と、国内の中小企業平均42.4%はもちろん、大手企業平均28.2%（厚生労働省データ2024）も下回ります。</p>
              </div>
              <picture class="p-strengths-sustainability__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/sustainability/sustainability_img02.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/sustainability/sustainability_img02.jpg" width="500" height="281" alt="採用力と定着率">
              </picture>
            </div>
            <div class="p-strengths-sustainability__cont">
              <div class="p-strengths-sustainability__txtarea">
                <h3 class="p-strengths-sustainability__cont-ttl c-cont-ttl">社員の育成とスキルアップ</h3>
                <p class="p-strengths-sustainability__txt">
                  平均年齢31.6歳と若いのも当社の特徴。<br>
                  そのため、国家試験取得支援制度や社外研修などにも力を入れ<br>
                  【非接触除去加工技能士】<br>
                  特級/１名、１級/６名、２級/19名と有資格者を多数輩出。<br>
                  社員の質の向上にも努めています。
                </p>
              </div>
              <picture class="p-strengths-sustainability__img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/sustainability/sustainability_img03.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/strengths/sustainability/sustainability_img03.jpg" width="500" height="281" alt="社員の育成とスキルアップ">
              </picture>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part( 'parts/parts', 'contact' ); ?>
    </div>
  </main>

  <?php get_footer(); ?>
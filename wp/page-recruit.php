<?php
/*
Template Name: 採用情報
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
            <span class="c-breadcrumb__link">採用情報</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="p-recruit">
      <section class="c-under-mv">
        <div class="c-inner">
          <div class="c-under-mv__ttl">
            <span class="c-under-mv__en-ttl">RECRUIT</span>
            <h1 class="c-under-mv__ja-ttl">採用情報</h1>
          </div>
        </div>
        <div class="c-under-mv__bg c-under-mv__bg--recruit"></div>
      </section>

      <section class="p-recruit-lead">
        <div class="p-recruit-lead__inner">
          <h2 class="p-recruit-lead__ttl">
            「モノづくりに携わりたい」<br>
            「手に職をつけたい」<br>
            「安全で清潔な現場で働きたい」
          </h2>
          <p class="p-recruit-lead__txt">
            皆さんは就職活動を行う上で”何”を重視していますか？<br>
            企業規模、知名度、福利厚生、人間関係etc…人それぞれに重視するものがあると思います。<br>
            名だたる大企業と比べ、当社には企業規模や（一般的な）知名度はありません。<br>
            しかしながら、ワイヤー放電加工という分野でみた場合、大手企業の方にも認知していただいています。<br>
            その理由は・・・ワイヤー放電加工分野において、国内の”リーディングカンパニー”だから。<br>
            ニッチ分野ではあるものの、国内のリーディングカンパニーで働ける環境が”ココ”にあります。<br>
            個人の影響がよりダイナミックに作用する中小企業という舞台に立ってみませんか？<br>
            あなたも技術を磨き、ものづくりの世界へ。そんなチャレンジする皆さんを、私たちは歓迎します。
          </p>
          <p class="p-recruit-lead__bottom-txt">採用チームより</p>
        </div>
      </section>

      <section class="p-recruit-data">
        <div class="c-inner">
          <div class="p-recruit-data__inner">
            <h2 class="c-under-sec-ttl">データで見るワタナベ</h2>
            <ul class="p-recruit-data__list">
              <li class="p-recruit-data__item">
                <h3 class="p-recruit-data__item-ttl">社員平均年齢</h3>
                <div class="p-recruit-data__item-wrap">
                  <picture class="p-recruit-data__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/data/data_img03.svg" width="120" height="120" alt="社員平均年齢">
                  </picture>
                  <span class="p-recruit-data__num">
                    <span class="p-recruit-data__l-txt">31.6</span>歳
                  </span>
                  <span class="p-recruit-data__note">製造業の社員平均年齢（全国）は約41歳</span>
                </div>
              </li>
              <li class="p-recruit-data__item">
                <h3 class="p-recruit-data__item-ttl">平均勤続年数</h3>
                <div class="p-recruit-data__item-wrap">
                  <picture class="p-recruit-data__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/data/data_img02.svg" width="120" height="120" alt="平均勤続年数">
                  </picture>
                  <span class="p-recruit-data__num">
                    <span class="p-recruit-data__l-txt">8</span>年<span class="p-recruit-data__l-txt">1</span>ヶ月
                  </span>
                </div>
              </li>
              <li class="p-recruit-data__item">
                <h3 class="p-recruit-data__item-ttl">3年以内離職率</h3>
                <div class="p-recruit-data__item-wrap">
                  <picture class="p-recruit-data__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/data/data_img01.svg" width="120" height="120" alt="3年以内離職率">
                  </picture>
                  <span class="p-recruit-data__num">
                    <span class="p-recruit-data__l-txt">24.1</span>%
                  </span>
                  <span class="p-recruit-data__note">
                    大企業平均28.2%、中小企業平均42.4%<br>
                    （厚生労働省データ2024より）
                  </span>
                </div>
              </li>
              <li class="p-recruit-data__item">
                <h3 class="p-recruit-data__item-ttl">設立</h3>
                <div class="p-recruit-data__item-wrap">
                  <picture class="p-recruit-data__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/data/data_img06.svg" width="120" height="120" alt="社員平均年齢">
                  </picture>
                  <span class="p-recruit-data__num">
                    <span class="p-recruit-data__l-txt">60</span>年
                  </span>
                  <span class="p-recruit-data__note">2016年に会社分割実施</span>
                </div>
              </li>
              <li class="p-recruit-data__item">
                <h3 class="p-recruit-data__item-ttl">慶弔見舞金制度</h3>
                <div class="p-recruit-data__item-wrap">
                  <picture class="p-recruit-data__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/data/data_img04.svg" width="120" height="120" alt="慶弔金最大">
                  </picture>
                  <span class="p-recruit-data__num">
                    最大<span class="p-recruit-data__l-txt">10</span>万円
                  </span>
                </div>
              </li>
              <li class="p-recruit-data__item">
                <h3 class="p-recruit-data__item-ttl">インフルエンザワクチン</h3>
                <div class="p-recruit-data__item-wrap">
                  <picture class="p-recruit-data__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/data/data_img05.svg" width="120" height="120" alt="インフルエンザワクチン">
                  </picture>
                  <span class="p-recruit-data__num">
                    費用補助<span class="p-recruit-data__l-txt">3</span>千円
                  </span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class="p-recruit-requirements">
        <div class="p-recruit-requirements__inner">
          <h2 class="c-under-sec-ttl">募集要項</h2>
          <table class="p-recruit-requirements__table">
            <tbody class="p-recruit-requirements__tbody">
              <tr class="p-recruit-requirements__tr">
                <th class="p-recruit-requirements__th">募集職種</th>
                <td class="p-recruit-requirements__td">技術職・営業職（全職種理系歓迎）</td>
              </tr>
              <tr class="p-recruit-requirements__tr">
                <th class="p-recruit-requirements__th">職務内容</th>
                <td class="p-recruit-requirements__td">
                  技術職：加工業務やＣＡＤ業務を担当<br>
                  営業職：ルート営業
                </td>
              </tr>
              <tr class="p-recruit-requirements__tr">
                <th class="p-recruit-requirements__th">勤務地</th>
                <td class="p-recruit-requirements__td">各事業所</td>
              </tr>
              <tr class="p-recruit-requirements__tr">
                <th class="p-recruit-requirements__th">勤務時間</th>
                <td class="p-recruit-requirements__td">
                  8時30分～17時30分<br>
                  ※技術職について、シフトによる夜勤あり
                </td>
              </tr>
              <tr class="p-recruit-requirements__tr">
                <th class="p-recruit-requirements__th">給与</th>
                <td class="p-recruit-requirements__td">
                  大卒　：技術職 209,000～224,000円 / 営業職 205,000～213,000円<br>
                  院卒　：技術職 213,500～228,500円 / 営業職 210,000～218,000円<br>
                  専門卒：技術職 205,000～208,000円
                </td>
              </tr>
              <tr class="p-recruit-requirements__tr">
                <th class="p-recruit-requirements__th">諸手当</th>
                <td class="p-recruit-requirements__td">通勤手当、住宅手当、遅番手当、資格手当等</td>
              </tr>
              <tr class="p-recruit-requirements__tr">
                <th class="p-recruit-requirements__th">賞与</th>
                <td class="p-recruit-requirements__td">年2回</td>
              </tr>
              <tr class="p-recruit-requirements__tr">
                <th class="p-recruit-requirements__th">昇給</th>
                <td class="p-recruit-requirements__td">年1回</td>
              </tr>
              <tr class="p-recruit-requirements__tr">
                <th class="p-recruit-requirements__th">休日</th>
                <td class="p-recruit-requirements__td">
                  完全週休２日制（技術職はシフトによる）、夏季・年末年始休暇（会社カレンダーによる）<br>
                  ※技術職について、祝日は会社カレンダーによる
                </td>
              </tr>
              <tr class="p-recruit-requirements__tr">
                <th class="p-recruit-requirements__th">福利厚生</th>
                <td class="p-recruit-requirements__td">各種保険完備（健康、厚生年金、雇用、労災）、中小企業退職金共済・共済制度、国家試験受験支援制度、慶弔金・結婚祝金制度、社員親睦会他</td>
              </tr>
              <tr class="p-recruit-requirements__tr">
                <th class="p-recruit-requirements__th">選考方法</th>
                <td class="p-recruit-requirements__td">書類選考後、筆記試験と面接（２～３回）</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>

      <section class="p-recruit-apply">
        <div class="c-inner c-inner--110">
          <div class="p-recruit-apply__cont">
            <h2 class="c-under-sec-ttl">応募方法</h2>
            <p class="p-recruit-apply__txt">
              電話にてご連絡頂いた後、履歴書（写真添付）・職務経歴書（書式自由）を<br>
              ご郵送もしくはメールにて送付してください。<br>
              追って面接日等ご連絡します。
            </p>
            <div class="p-recruit-apply__details">
              <h3 class="p-recruit-apply__info-ttl">株式会社ワタナベ 本社</h3>
              <span class="p-recruit-apply__address">〒222-0033 神奈川県横浜市港北区新横浜1-29-5</span>
              <span class="p-recruit-apply__tel">TEL：045-471-7300</span>
              <span class="p-recruit-apply__fax">FAX：045-471-7330</span>
              <span class="p-recruit-apply__email">E-mail：soumukeiri@watanabe-wire.com</span>
              <span class="p-recruit-apply__person">採用担当：名取</span>
            </div>
          </div>
        </div>
      </section>

      <section class="p-recruit-results-lastyear">
        <div class="c-inner c-inner--110">
          <h2 class="c-under-sec-ttl">昨年度採用実績</h2>
          <div class="p-recruit-results-lastyear__table-wrap">
            <table class="p-recruit-results-lastyear__table">
              <thead class="p-recruit-results-lastyear__thead">
                <tr>
                  <th></th>
                  <th>学校名</th>
                  <th>学部</th>
                  <th>人数</th>
                </tr>
              </thead>
              <tbody class="p-recruit-results-lastyear__tbody">
                <tr>
                  <td rowspan="4">技術職</td>
                  <td>湘南工科大学</td>
                  <td>工学部</td>
                  <td>1名</td>
                </tr>
                <tr>
                  <td>東北学院大学</td>
                  <td>工学部</td>
                  <td>1名</td>
                </tr>
                <tr>
                  <td>日本大学</td>
                  <td>工学部</td>
                  <td>1名</td>
                </tr>
                <tr>
                  <td>東北電子専門学校</td>
                  <td>-</td>
                  <td>2名</td>
                </tr>
              </tbody>
              <tfoot class="p-recruit-results-lastyear__tfoot">
                <tr>
                  <td>合計</td>
                  <td></td>
                  <td></td>
                  <td>5名</td>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </section>

      <section class="p-recruit-results-total">
        <div class="c-inner">
          <div class="p-recruit-results-total__bg">
            <div class="c-inner--110">
              <h2 class="c-under-sec-ttl">在籍者出身校一覧</h2>
              <div class="p-recruit-results-total__details">
                <h3 class="p-recruit-results-total__cont-ttl c-cont-ttl">大学・専門学校</h3>
                <div class="p-recruit-results-total__wrap">
                  <div class="p-recruit-results-total__table-wrap">
                    <table class="p-recruit-results-total__table">
                      <thead class="p-recruit-results-total__thead">
                        <tr>
                          <th>大学名</th>
                          <th>学部</th>
                          <th>人数</th>
                        </tr>
                      </thead>
                      <tbody class="p-recruit-results-total__tbody">
                        <tr>
                          <td>愛知学院大学</td>
                          <td>法学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>愛知学泉短期大学</td>
                          <td>-</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>愛知工科大学</td>
                          <td>工学部</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>会津大学</td>
                          <td>コンピュータ理工学部</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>茨城大学</td>
                          <td>工学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>岩手大学</td>
                          <td>工学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>尾道市立大学</td>
                          <td>芸術文化学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>工学院大学</td>
                          <td>工学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td rowspan="2">駒澤大学</td>
                          <td>文学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>法学部</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>首都大学東京大学院</td>
                          <td>都市環境科学研究科</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>湘南工科大学</td>
                          <td>工学部</td>
                          <td>7</td>
                        </tr>
                        <tr>
                          <td>大同大学</td>
                          <td>工学部</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>中央大学</td>
                          <td>商学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>中京大学</td>
                          <td>文学部</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td rowspan="2">中部大学</td>
                          <td>工学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>経営情報学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>テクノアカデミー郡山</td>
                          <td>-</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>東京工科大学</td>
                          <td>メディア学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>東京農業大学</td>
                          <td>農学部</td>
                          <td>2</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="p-recruit-results-total__table-wrap">
                    <table class="p-recruit-results-total__table">
                      <thead class="p-recruit-results-total__thead">
                        <tr>
                          <th>大学名</th>
                          <th>学部</th>
                          <th>人数</th>
                        </tr>
                      </thead>
                      <tbody class="p-recruit-results-total__tbody">
                        <tr>
                          <td>東北大学</td>
                          <td>経済学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>東北学院大学</td>
                          <td>工学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>東北電子専門学校</td>
                          <td>-</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>東洋大学</td>
                          <td>理工学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>名古屋外国語大学</td>
                          <td>経済学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>名古屋工学院専門学校</td>
                          <td>-</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>日本工業大学</td>
                          <td>工学部</td>
                          <td>4</td>
                        </tr>
                        <tr>
                          <td>日本大学大学院</td>
                          <td>工学研究科</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td rowspan="3">日本大学</td>
                          <td>工学部</td>
                          <td>10</td>
                        </tr>
                        <tr>
                          <td>理工学部</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>商学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>福島大学大学院</td>
                          <td>地域政策科学研究科</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td rowspan="2">法政大学</td>
                          <td>文学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>キャリアデザイン学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>名城大学</td>
                          <td>法学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>明星大学</td>
                          <td>経営学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td rowspan="2">立正大学</td>
                          <td>心理学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>文学部</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>立命館大学</td>
                          <td>経営学部</td>
                          <td>1</td>
                        </tr>
                        <tr class="p-recruit-results-total__tbody-bg">
                          <td>合計</td>
                          <td></td>
                          <td>70名</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="p-recruit-results-total__details">
                <h3 class="p-recruit-results-total__cont-ttl c-cont-ttl">高等学校</h3>
                <div class="p-recruit-results-total__wrap">
                  <div class="p-recruit-results-total__table-wrap">
                    <table class="p-recruit-results-total__table">
                      <thead class="p-recruit-results-total__thead">
                        <tr>
                          <th>高校名</th>
                          <th>人数</th>
                        </tr>
                      </thead>
                      <tbody class="p-recruit-results-total__tbody">
                        <tr>
                          <td>神奈川県立総合産業高等学校</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>神奈川県立大和東高等学校</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>私立横芝敬愛高等学校</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>福島県立安達高等学校</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>福島県立安達東高等学校</td>
                          <td>1</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="p-recruit-results-total__table-wrap">
                    <table class="p-recruit-results-total__table">
                      <thead class="p-recruit-results-total__thead">
                        <tr>
                          <th>高校名</th>
                          <th>人数</th>
                        </tr>
                      </thead>
                      <tbody class="p-recruit-results-total__tbody">
                        <tr>
                          <td>福島県立川俣高等学校</td>
                          <td>7</td>
                        </tr>
                        <tr>
                          <td>福島県立二本松工業高等学校</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>福島県立福島西高等学校</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>福島県立本宮高等学校</td>
                          <td>1</td>
                        </tr>
                        <tr class="p-recruit-results-total__tbody-bg">
                          <td>合計</td>
                          <td>19名</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <?php get_template_part( 'parts/parts', 'contact' ); ?>
    </div>
  </main>

  <?php get_footer(); ?>
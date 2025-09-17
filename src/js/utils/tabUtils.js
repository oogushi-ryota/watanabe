// utils/categoryTabUtils.js
import $ from "jquery";

// ▼タブ切り替え
// utils/categoryTabUtils.js
export function initTabs() {
  // 初期表示
  $(".js-tabbtn-item").first().addClass("is-active");
  $(".js-tab-item").hide().first().show();

  // クリック処理
  $(".js-tabbtn-item").on("click", function () {
    const idx = $(".js-tabbtn-item").index(this);

    // タブ切り替え
    $(".js-tabbtn-item").removeClass("is-active");
    $(this).addClass("is-active");

    // コンテンツ切り替え
    $(".js-tab-item").hide().eq(idx).show();
  });
}
// ▲タブ切り替え
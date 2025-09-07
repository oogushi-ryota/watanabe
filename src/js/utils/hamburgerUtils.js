import $ from "jquery";

// ▼ハンバーガーメニュー
export function initHamburgerMenu({
  navSelector = ".js-nav",
  btnSelector = ".js-nav-btn",
  closeTargetSelector = ".l-header__nav-item a",
  extraTargets = [],
  lenisInstance = null,
} = {}) {
  const $nav = $(navSelector);
  const $btn = $(btnSelector);
  const $body = $("body");
  const $header = $(".l-header");
  const $closeTargets = $(closeTargetSelector);
  const $extraEls = extraTargets.map(sel => $(sel));

  function toggleMenu(isOpen) {
    const method = isOpen ? "addClass" : "removeClass";

    $nav[method]("is-active");
    $btn[method]("is-active");
    $body[method]("is-active");
    $header[method]("is-active");
    $extraEls.forEach($el => $el[method]("is-active"));

    if (lenisInstance) {
      isOpen ? lenisInstance.stop() : lenisInstance.start();
    }
  }

  // ハンバーガークリック
  $btn.on("click", () => {
    const isOpening = !$nav.hasClass("is-active");
    toggleMenu(isOpening);
  });

  // メニュー内リンククリック時に閉じる
  $closeTargets.on("click", () => {
    toggleMenu(false);
  });
}
// ▲ハンバーガーメニュー

// ▼ヘッダーの背景色を変更
export function initScrollHeader() {
  const header = document.querySelector(".l-header");
  if (!header) return; // ヘッダーが存在しなければ終了

  window.addEventListener("scroll", () => {
    if (window.scrollY > window.innerHeight) {
      header.classList.add("is-scrolled");
    } else {
      header.classList.remove("is-scrolled");
    }
  });
}
// ▲ヘッダーの背景色を変更
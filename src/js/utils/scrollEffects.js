import $ from "jquery";

// ▼下からフェードイン
export function initScrollFadeIn({
  targetSelector = ".fadein-point",
  triggerClass = "js-fadein",
  offsetSp = 100,
  offsetPc = 200,
} = {}) {
  $(window).on("scroll", function () {
    const windowHeight = $(window).height();
    const scroll = $(window).scrollTop();
    const isSp = window.matchMedia("(max-width: 767px)").matches;

    $(targetSelector).each(function () {
      const $el = $(this);
      const targetPosition = $el.offset().top;
      const offset = isSp ? offsetSp : offsetPc;

      if (scroll > targetPosition - windowHeight + offset) {
        $el.addClass(triggerClass);
      }
    });
  });

  // 初回スクロールチェック
  $(window).trigger("scroll");
}
// ▲下からフェードイン

// ▼クリップパスアニメーション
export function initClipPathAnimation({
  targetSelector = ".js-clip",
  triggerClass = "scroll-in",
} = {}) {
  function animateClip() {
    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();

    $(targetSelector).each(function () {
      const position = $(this).offset().top;
      if (position < windowHeight || scroll > position - windowHeight) {
        $(this).addClass(triggerClass);
      }
    });
  }

  $(window).on("load scroll", animateClip);
}
// ▲クリップパスアニメーション

// ▼順番にフェードイン
export function initStaggerFadein({
  containerSelector = ".js-list-fadein",
  itemSelector = ".js-list-fadein__item",
  offset = 200,
  delay = 200,
  activeClass = "active",
} = {}) {
  $(window).on("scroll", function () {
    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();

    $(containerSelector).each(function () {
      const position = $(this).offset().top;

      if (scroll > position - windowHeight + offset) {
        const gridItems = $(this).find(itemSelector);

        gridItems.each(function (i) {
          $(this)
            .delay(i * delay)
            .queue(function () {
              $(this).addClass(activeClass).dequeue();
            });
        });
      }
    });
  });

  // 初回発火
  $(window).trigger("scroll");
}
// ▲順番にフェードイン
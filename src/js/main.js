// === 外部ライブラリ読み込み ===
import $ from "jquery";
import Swiper from "swiper/bundle";
import "swiper/css/bundle";
import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

// === ユーティリティライブラリ読み込み ===
import { initSmoothScroll, initAnchorSmoothScroll } from "./utils/scrollUtils.js";
import { initSwiper } from "./utils/swiperUtils.js";
import { initAccordion } from "./utils/accordionUtils.js";
import { initScrollFadeIn, initClipPathAnimation, initStaggerFadein } from "./utils/scrollEffects.js";
import { initHamburgerMenu } from "./utils/hamburgerUtils.js";
import { preventEnterSubmit } from "./utils/formUtils.js";
import { animateInitialTextSplit, animateSplitTextOnScroll } from "./utils/splitTextUtils.js";

// ▼GSAP に ScrollTrigger を登録
gsap.registerPlugin(ScrollTrigger);
// ▲GSAP に ScrollTrigger を登録

// ページ内の画像や外部リソースがすべて読み込まれた後に実行
window.addEventListener('load', () => {
  
});


// HTMLの構造がすべて解析されて、DOM操作が安全に行える状態になったタイミングで実行
window.addEventListener('DOMContentLoaded', () => {
  initSwiper();          // ← スワイパー
  initAccordion()       //アコーディオン
  initAnchorSmoothScroll();     // ← スムーススクロール
  preventEnterSubmit();
  initHamburgerMenu({           // ← ハンバーガーメニュー
    navSelector: ".js-nav",
    btnSelector: ".js-nav-btn",
    closeTargetSelector: ".l-header__nav-item a",
  });

  // animateSplitTextOnScroll();   // ← スクロール連動のテキストアニメーション
  // initScrollFadeIn();           // ← フェードイン
  // initClipPathAnimation();      // ← クリップパスアニメーション
  // initStaggerFadein();          // ← 順番にフェードイン
});
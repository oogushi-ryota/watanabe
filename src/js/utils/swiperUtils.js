import Swiper from "swiper/bundle";
import "swiper/css/bundle";

export function initSwiper() {
  const rootFontSize = parseFloat(
    getComputedStyle(document.documentElement).fontSize
  );

  // デバイス幅判定
  const isMobile = window.matchMedia("(max-width: 767px)").matches;
  const gapInRem = isMobile ? 1 : 1.6; // SPは1rem, PCは1.5rem（好みに応じて調整可）
  const gapInPx = gapInRem * rootFontSize;

  const factorySliders = document.querySelectorAll(".js-slider");

  factorySliders.forEach((sliderEl) => {
    const mainEl = sliderEl.querySelector(".p-facility-factory__swiper");
    const thumbsEl = sliderEl.querySelector(".p-facility-factory__thumbs");
http://localhost:3000/assets/img/facility/factory/slide01/factory_slide02.jpg
    if (!mainEl || !thumbsEl) return;

    // サムネイルスライダー
    const thumbs = new Swiper(thumbsEl, {
      slidesPerView: 6,
      spaceBetween: gapInPx,
      freeMode: true,
      watchSlidesProgress: true,
      breakpoints: {
        0: {
          slidesPerView: 3,
          spaceBetween: gapInPx,
        },
        768: {
          slidesPerView: 6,
          spaceBetween: gapInPx,
        },
      },
    });

    // メインスライダー
    new Swiper(mainEl, {
      spaceBetween: gapInPx,
      navigation: {
        nextEl: sliderEl.querySelector(".swiper-button-next"),
        prevEl: sliderEl.querySelector(".swiper-button-prev"),
      },
      thumbs: {
        swiper: thumbs,
      },
    });
  });
}
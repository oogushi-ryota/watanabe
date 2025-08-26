import Swiper from "swiper/bundle";
import "swiper/css/bundle";

export function initSwiper() {
  const rootFontSize = parseFloat(
    getComputedStyle(document.documentElement).fontSize
  );

  const isMobile = window.matchMedia('(max-width: 767px)').matches;
  const gapInRem = isMobile ? 4 : 4;
  const gapInPx = gapInRem * rootFontSize;

  const swiper = new Swiper(".p-top-interview__swiper", {
    loop: true,
    slidesPerView: "auto",
    spaceBetween: gapInPx,
    autoplay: {
      delay: 500,
    },
    speed: 1500,
    pagination: {
      el: ".swiper-pagination",
      type: "progressbar",
    },
    on: {
      init() {
        this.slideToLoop(0, 0, false);
      }
    },
  });
}
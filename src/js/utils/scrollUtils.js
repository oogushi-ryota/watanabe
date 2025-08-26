// ▼Lenis をインポート
import Lenis from "@studio-freight/lenis";
// ▲Lenis をインポート

// ▼慣性スクロール
export function initSmoothScroll() {
  const lenis = new Lenis({
    lerp: 0.1,
    duration: 2,
  });

  function raf(time) {
    lenis.raf(time); // スクロールの滑らかさを調整するための値です。値が小さいほど滑らかなスクロールになります。通常は0から1の間の値を指定します。
    requestAnimationFrame(raf); // スクロールアニメーションのデフォルトの持続時間を指定します。単位は秒です。
  }

  requestAnimationFrame(raf);

  return lenis;
}
// ▲慣性スクロール

// ▼スムーススクロール処理
export function initAnchorSmoothScroll() {
  const links = document.querySelectorAll('a[href*="#"]');
  let headerHeight = 9;

  // デバイス幅が375px以下の場合は7.1rem（通常は0rem）
  if (window.innerWidth <= 375) {
    headerHeight = 7;
  }

  links.forEach(link => {
    link.addEventListener("click", function (e) {
      const href = this.getAttribute("href");
      const targetId = href.split("#")[1];
      const targetElement = document.getElementById(targetId);

      if (targetElement) {
        e.preventDefault();

        // ヘッダー高さをrem単位で調整してスクロール
        const fontSize = parseFloat(getComputedStyle(document.documentElement).fontSize);
        const offset = targetElement.getBoundingClientRect().top + window.scrollY - headerHeight * fontSize;

        window.scrollTo({
          top: offset,
          behavior: "smooth",
        });
      }
    });
  });
}
// ▲スムーススクロール処理
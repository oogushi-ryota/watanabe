// ▼ テキストアニメーション
import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);

// テキストを1文字ずつ <span class="split"> でラップ
export function wrapSplitText(el) {
  const text = el.textContent;

  el.innerHTML = '';

  text.split('').forEach((char) => {
    if (char === ' ') {
      el.appendChild(document.createTextNode(' '));
    } else if (char === '\n') {
      el.appendChild(document.createElement('br'));
    } else {
      const span = document.createElement('span');
      span.textContent = char;
      span.classList.add('split');
      span.style.display = 'inline-block'; // ← ここでOK！
      el.appendChild(span);
    }
  });

  el.style.visibility = 'visible';
}

// 初回読み込み時のアニメーション（.mv内など）
export function animateInitialTextSplit(elements, options = {}, onCompleteAll = null) {
  let completed = 0;

  elements.forEach((el) => {
    wrapSplitText(el); // ← まず文字を分割

    const targets = el.querySelectorAll('.split');

    gsap.set(targets, { display: 'inline-block', y: 200 });

    // アニメーション本体
    gsap.to(targets, {
      y: 0,
      duration: options.duration || 0.3,
      delay: options.delay || 0,
      ease: options.ease || 'power3.out',
      stagger: options.stagger || 0.05,
      onComplete: () => {
        completed++;
        if (completed === elements.length && typeof onCompleteAll === "function") {
          onCompleteAll();
        }
      }
    });
  });
}

// スクロール連動アニメーション
export function animateSplitTextOnScroll(selector = '.js-txt') {
  document.querySelectorAll(selector).forEach((el) => {
    if (el.closest('.p-top-fv')) return; // 初回アニメ対象は除外

    wrapSplitText(el);

    gsap.timeline({
      scrollTrigger: {
        trigger: el,
        start: 'bottom 90%',
        end: 'bottom 30%',
      }
    }).fromTo(
      el.querySelectorAll('.split'),
      { y: 200 },
      {
        y: 0,
        stagger: 0.05,
        ease: 'power3.out'
      }
    );
  });
}
// ▼ テキストアニメーション
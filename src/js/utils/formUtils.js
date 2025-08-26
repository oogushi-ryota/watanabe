// ▼全フォーム共通でEnter送信を防止
export function preventEnterSubmit({
  formSelector = ".mw_wp_form"
} = {}) {
  const init = () => {
    document
      .querySelectorAll(formSelector)
      .forEach(form => {
        form.addEventListener("keydown", e => {
          if (e.key === "Enter" && e.target.tagName !== "TEXTAREA") {
            e.preventDefault();
          }
        });
      });
  };

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
}
// ▲全フォーム共通でEnter送信を防止
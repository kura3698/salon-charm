//=============================================== *//
//ビューポートリサイズ
!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value =
      window.outerWidth > 393
        ? "width=device-width,initial-scale=1"
        : "width=393";
    if (viewport.getAttribute("content") !== value) {
      viewport.setAttribute("content", value);
    }
  }
  addEventListener("resize", switchViewport, false);
  switchViewport();
})();

// アコーディオン

// アコーディオン
document.addEventListener("DOMContentLoaded", () => {
  setUpAccordion();
});

const setUpAccordion = () => {
  const details = document.querySelectorAll(".js-details");
  const IS_OPENED_CLASS = "is-opened";

  details.forEach((element) => {
    const summary = element.querySelector(".js-summary");
    const content = element.querySelector(".js-content");

    summary.addEventListener("click", (event) => {
      event.preventDefault();

      if (element.classList.contains(IS_OPENED_CLASS)) {
        // アコーディオンを閉じる
        element.classList.remove(IS_OPENED_CLASS);
        const contentHeight = content.scrollHeight;
        content.style.height = contentHeight + "px";
        requestAnimationFrame(() => {
          content.style.height = "0";
          content.style.opacity = "0";
        });
        content.addEventListener("transitionend", function handler(e) {
          if (e.propertyName === "height") {
            element.removeAttribute("open");
            content.removeEventListener("transitionend", handler);
          }
        });
      } else {
        // アコーディオンを開く
        element.classList.add(IS_OPENED_CLASS);
        element.setAttribute("open", "true");

        // 一旦0にしてから実際の高さを取得
        content.style.height = "0";
        content.style.opacity = "1";

        const contentHeight = content.scrollHeight;

        requestAnimationFrame(() => {
          content.style.height = contentHeight + "px";
        });

        content.addEventListener("transitionend", function handler(e) {
          if (e.propertyName === "height") {
            content.style.height = "auto"; // アニメーション後にautoへ
            content.removeEventListener("transitionend", handler);
          }
        });
      }
    });
  });
};

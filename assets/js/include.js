document.addEventListener("DOMContentLoaded", () => {

  /* ===============================
     LOAD PARTIALS / COMPONENTS
  =============================== */
  const includes = document.querySelectorAll("[data-include]");

  includes.forEach(el => {
    const file = el.getAttribute("data-include");

    fetch(file)
      .then(res => {
        if (!res.ok) throw new Error("Failed to load " + file);
        return res.text();
      })
      .then(html => {
        el.innerHTML = html;
      })
      .catch(err => {
        console.error(err);
        el.innerHTML = "<!-- include error -->";
      });
  });

  /* ===============================
     SMOOTH SCROLL (tanpa # di URL)
     pakai data-target
  =============================== */
  document.addEventListener("click", function (e) {
    const link = e.target.closest("a[data-target]");
    if (!link) return;

    e.preventDefault();

    const targetId = link.dataset.target;
    const targetEl = document.getElementById(targetId);

    if (targetEl) {
      targetEl.scrollIntoView({
        behavior: "smooth",
        block: "start"
      });
    }
  });

});

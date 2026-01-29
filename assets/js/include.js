document.addEventListener("DOMContentLoaded", () => {

  /* ===============================
     LOAD PARTIALS / COMPONENTS
  =============================== */
  document.querySelectorAll("[data-include]").forEach(el => {
    const file = el.dataset.include;

    fetch(file)
      .then(res => {
        if (!res.ok) throw new Error("Failed to load " + file);
        return res.text();
      })
      .then(html => el.innerHTML = html)
      .catch(() => el.innerHTML = "<!-- include error -->");
  });

  /* ===============================
     SMOOTH SCROLL (tanpa # di URL)
  =============================== */
  document.addEventListener("click", e => {
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

    /* ACTIVE MENU (HANYA NAV LINK) */
    if (link.closest("nav")) {
      document.querySelectorAll("nav a").forEach(a =>
        a.classList.remove("active")
      );
      link.classList.add("active");
    }
  });

  /* ===============================
     NAVBAR SCROLL EFFECT
  =============================== */
  window.addEventListener("scroll", () => {
    const navbar = document.querySelector(".navbar");
    if (!navbar) return;

    if (window.scrollY > 60) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });

});

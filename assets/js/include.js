
document.addEventListener("DOMContentLoaded", () => {

  /* ===============================
     LOAD PARTIALS / COMPONENTS
  =============================== */
  document.querySelectorAll("[data-include]").forEach(el => {
    const file = el.getAttribute("data-include");

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

    const target = document.getElementById(link.dataset.target);
    if (target) {
      target.scrollIntoView({ behavior: "smooth", block: "start" });
    }

    // active menu
    document.querySelectorAll("nav a").forEach(a => a.classList.remove("active"));
    link.classList.add("active");
  });

  /* ===============================
     NAVBAR SCROLL EFFECT
  =============================== */
  const navbar = document.querySelector(".navbar");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 60) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });

});


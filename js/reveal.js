document.documentElement.classList.add("js");

document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll(".content-reveal");
  const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  if (!sections.length) return;

  if (prefersReducedMotion || !("IntersectionObserver" in window)) {
    sections.forEach(section => section.classList.add("reveal"));
    return;
  }

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("reveal");
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.2
  });

  sections.forEach(section => observer.observe(section));
});




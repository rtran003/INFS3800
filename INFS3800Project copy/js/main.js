// Fade-in for sections (shared by every page)
(function () {
  var sections = document.querySelectorAll('section');
  if (!('IntersectionObserver' in window)) {
    sections.forEach(function (s) { s.classList.add('in-view'); });
    return;
  }
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });
  sections.forEach(function (s) { observer.observe(s); });
})();

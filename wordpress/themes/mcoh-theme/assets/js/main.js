document.addEventListener('DOMContentLoaded', function () {
  const nav = document.querySelector('.site-nav');

  function handleScroll() {
    if (!nav) return;

    if (window.scrollY > 40) {
      nav.classList.add('scrolled');
    } else {
      nav.classList.remove('scrolled');
    }
  }

  handleScroll();
  window.addEventListener('scroll', handleScroll);
});

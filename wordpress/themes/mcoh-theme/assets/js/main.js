/* MCOH Theme — Main JavaScript */

// Nav scroll behavior
const nav = document.getElementById('siteNav');
if (nav) {
  window.addEventListener('scroll', () => {
    if (window.scrollY > 60) {
      nav.classList.add('scrolled');
    } else {
      nav.classList.remove('scrolled');
    }
  }, { passive: true });
}

// Hero image Ken Burns effect on load
const heroBg = document.getElementById('heroBg');
if (heroBg) {
  window.addEventListener('load', () => {
    setTimeout(() => heroBg.classList.add('loaded'), 100);
  });
}

// Scroll fade-in animations
const fadeEls = document.querySelectorAll('.fade-in');
if (fadeEls.length) {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -60px 0px' });
  fadeEls.forEach(el => observer.observe(el));
}

// Community tabs
const tabs = document.querySelectorAll('.community-tab');
const panels = document.querySelectorAll('.community-panel');
if (tabs.length) {
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      const target = tab.dataset.tab;
      panels.forEach(panel => {
        if (panel.dataset.panel === target) {
          panel.style.display = 'grid';
          panel.querySelectorAll('.community-card').forEach((card, i) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(16px)';
            setTimeout(() => {
              card.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
              card.style.opacity = '1';
              card.style.transform = 'translateY(0)';
            }, i * 55);
          });
        } else {
          panel.style.display = 'none';
        }
      });
    });
  });
}

// Destination scroll drag
const destScroll = document.querySelector('.dest-scroll');
if (destScroll) {
  let isDown = false, startX, scrollLeft;
  destScroll.addEventListener('mousedown', e => {
    isDown = true;
    startX = e.pageX - destScroll.offsetLeft;
    scrollLeft = destScroll.scrollLeft;
    destScroll.style.cursor = 'grabbing';
  });
  destScroll.addEventListener('mouseleave', () => { isDown = false; destScroll.style.cursor = 'grab'; });
  destScroll.addEventListener('mouseup', () => { isDown = false; destScroll.style.cursor = 'grab'; });
  destScroll.addEventListener('mousemove', e => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - destScroll.offsetLeft;
    const walk = (x - startX) * 1.5;
    destScroll.scrollLeft = scrollLeft - walk;
  });
  destScroll.style.cursor = 'grab';
}

// Newsletter form
const newsletterBtn = document.querySelector('.newsletter-btn');
const newsletterInput = document.querySelector('.newsletter-input');
if (newsletterBtn && newsletterInput) {
  newsletterBtn.addEventListener('click', () => {
    if (newsletterInput.value && newsletterInput.value.includes('@')) {
      newsletterBtn.textContent = 'You\'re in';
      newsletterBtn.style.background = '#4CAF8A';
      newsletterBtn.style.color = '#fff';
      newsletterInput.value = '';
      newsletterInput.placeholder = 'Check your inbox Thursday morning.';
    }
  });
}

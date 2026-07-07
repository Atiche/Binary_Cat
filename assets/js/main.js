(function () {
  const anchors = document.querySelectorAll('a[href^="#"]');

  anchors.forEach((anchor) => {
    anchor.addEventListener('click', (event) => {
      const targetId = anchor.getAttribute('href');
      if (!targetId || targetId === '#') {
        return;
      }

      const target = document.querySelector(targetId);
      if (!target) {
        return;
      }

      event.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });

  const animatedItems = document.querySelectorAll(
    '.hero, .intro, .services, .about, .advantages, .yandex-map, .site-footer'
  );

  if (!animatedItems.length) {
    return;
  }

  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  animatedItems.forEach((item) => {
    item.classList.add('motion-ready');
  });

  if (reduceMotion || !('IntersectionObserver' in window)) {
    animatedItems.forEach((item) => {
      item.classList.add('is-visible');
    });
    return;
  }

  const revealObserver = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) {
          return;
        }

        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      });
    },
    {
      root: null,
      rootMargin: '0px 0px -12% 0px',
      threshold: 0.18,
    }
  );

  animatedItems.forEach((item) => {
    revealObserver.observe(item);
  });
})();

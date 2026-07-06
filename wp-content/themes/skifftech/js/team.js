(function () {
  'use strict';

  /* ----------------------------------------------------------
     Reveal on scroll (IntersectionObserver)
     Elements start with .reveal (opacity:0), gain .in on entry
  ---------------------------------------------------------- */
  var reveals = document.querySelectorAll('#pg-team .reveal');
  if (reveals.length && 'IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08 });
    reveals.forEach(function (el) {
      el.classList.remove('in');
      observer.observe(el);
    });
  } else {
    reveals.forEach(function (el) { el.classList.add('in'); });
  }

  /* ----------------------------------------------------------
     Profile modals — open/close + escape key + backdrop click
  ---------------------------------------------------------- */
  var openModal = function (id) {
    var m = document.getElementById(id);
    if (!m) return;
    m.classList.add('open');
    document.body.style.overflow = 'hidden';
  };
  var closeModal = function (m) {
    m.classList.remove('open');
    document.body.style.overflow = '';
  };

  document.querySelectorAll('#pg-team [data-modal]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      openModal(btn.dataset.modal);
    });
  });

  document.querySelectorAll('#pg-team .tm-modal').forEach(function (m) {
    m.addEventListener('click', function (ev) {
      if (ev.target === m) closeModal(m);
    });
    var closeBtn = m.querySelector('.tm-close');
    if (closeBtn) closeBtn.addEventListener('click', function () { closeModal(m); });
  });

  document.addEventListener('keydown', function (ev) {
    if (ev.key === 'Escape') {
      document.querySelectorAll('#pg-team .tm-modal.open').forEach(closeModal);
    }
  });

})();

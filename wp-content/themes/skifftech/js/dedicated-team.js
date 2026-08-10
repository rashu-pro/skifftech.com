(function () {
  'use strict';

  var root = document.getElementById('pg-dedicated-team');
  if (!root) {
    return;
  }

  /* ----------------------------------------------------------
     Reveal on scroll (IntersectionObserver)
     Elements start with .reveal (opacity:0), gain .in on entry
  ---------------------------------------------------------- */
  var reveals = root.querySelectorAll('.reveal');
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
     FAQ accordion
  ---------------------------------------------------------- */
  root.querySelectorAll('.sa-faq-q').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = btn.closest('.sa-faq-item');
      var answer = item.querySelector('.sa-faq-a');
      var open = item.classList.toggle('open');
      btn.setAttribute('aria-expanded', String(open));
      answer.style.maxHeight = open ? answer.scrollHeight + 'px' : null;
    });
  });

  /* Keep an open answer correctly sized after a resize */
  var resizeTimer = null;
  window.addEventListener('resize', function () {
    window.clearTimeout(resizeTimer);
    resizeTimer = window.setTimeout(function () {
      root.querySelectorAll('.sa-faq-item.open .sa-faq-a').forEach(function (a) {
        a.style.maxHeight = a.scrollHeight + 'px';
      });
    }, 150);
  });

})();

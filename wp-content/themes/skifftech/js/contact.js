(function () {
  'use strict';

  /* ----------------------------------------------------------
     Reveal on scroll (IntersectionObserver)
     Elements start with .reveal (opacity:0), gain .in on entry
  ---------------------------------------------------------- */
  var reveals = document.querySelectorAll('#pg-contact .reveal');
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
     Contact form — disable the submit button once native
     validation passes, so the real POST to WordPress can't be
     double-fired while the request is in flight.
  ---------------------------------------------------------- */
  var form = document.getElementById('ctForm');
  if (form) {
    form.addEventListener('submit', function () {
      if (form.checkValidity()) {
        form.querySelector('button[type="submit"]').disabled = true;
      }
    });
  }
})();

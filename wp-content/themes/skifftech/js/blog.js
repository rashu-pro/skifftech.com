(function () {
  'use strict';

  var root = document.getElementById('pg-blog');
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

})();

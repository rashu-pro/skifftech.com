(function () {
  'use strict';

  var root = document.getElementById('pg-blog-article');
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
     Reading progress bar
  ---------------------------------------------------------- */
  var prog = document.getElementById('arProg');
  var body = document.getElementById('arBody');
  if (prog && body) {
    var tick = function () {
      var r = body.getBoundingClientRect();
      var total = r.height - window.innerHeight * 0.35;
      var p = Math.min(1, Math.max(0, (-r.top + window.innerHeight * 0.35) / Math.max(total, 1)));
      prog.style.width = (p * 100).toFixed(2) + '%';
    };
    window.addEventListener('scroll', tick, { passive: true });
    window.addEventListener('resize', tick);
    tick();
  }

})();

(function () {
  'use strict';

  /* ----------------------------------------------------------
     Reveal on scroll (IntersectionObserver)
  ---------------------------------------------------------- */
  var reveals = document.querySelectorAll('#pg-team-profile .reveal');
  if (reveals.length && 'IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08 });
    reveals.forEach(function (el) { observer.observe(el); });
  } else {
    reveals.forEach(function (el) { el.classList.add('in'); });
  }

  /* ----------------------------------------------------------
     About section — read full bio
  ---------------------------------------------------------- */
  var aboutWrap = document.getElementById('pfAboutWrap');
  var aboutBtn = document.getElementById('pfAboutMore');
  if (aboutWrap && aboutBtn) {
    aboutBtn.addEventListener('click', function () {
      var open = aboutWrap.classList.toggle('open');
      aboutBtn.classList.toggle('open', open);
      aboutBtn.querySelector('.lbl').textContent = open ? 'Show less' : 'Read full bio';
    });
  }

  /* ----------------------------------------------------------
     Certificate lightbox
  ---------------------------------------------------------- */
  document.querySelectorAll('#pg-team-profile [data-cert]').forEach(function (c) {
    var open = function () {
      var lb = document.getElementById('lb-' + c.dataset.cert);
      if (lb) {
        lb.classList.add('open');
        document.body.style.overflow = 'hidden';
      }
    };
    c.addEventListener('click', open);
    c.addEventListener('keydown', function (ev) {
      if (ev.key === 'Enter' || ev.key === ' ') {
        ev.preventDefault();
        open();
      }
    });
  });
  document.querySelectorAll('#pg-team-profile .pf-lightbox').forEach(function (lb) {
    var close = function () {
      lb.classList.remove('open');
      document.body.style.overflow = '';
    };
    lb.addEventListener('click', function (ev) {
      if (ev.target === lb) close();
    });
    var closeBtn = lb.querySelector('.pf-lb-close');
    if (closeBtn) closeBtn.addEventListener('click', close);
  });
  document.addEventListener('keydown', function (ev) {
    if (ev.key === 'Escape') {
      document.querySelectorAll('#pg-team-profile .pf-lightbox.open').forEach(function (lb) {
        lb.classList.remove('open');
        document.body.style.overflow = '';
      });
    }
  });

  /* ----------------------------------------------------------
     Certifications carousel scroll
  ---------------------------------------------------------- */
  var certTrack = document.getElementById('pfCertTrack');
  if (certTrack) {
    var scrollAmt = function () {
      var card = certTrack.querySelector('.pf-cert');
      return card ? card.getBoundingClientRect().width + 18 : 260;
    };
    var prevBtn = document.getElementById('pfCertPrev');
    var nextBtn = document.getElementById('pfCertNext');
    if (prevBtn) prevBtn.addEventListener('click', function () {
      certTrack.scrollBy({ left: -scrollAmt(), behavior: 'smooth' });
    });
    if (nextBtn) nextBtn.addEventListener('click', function () {
      certTrack.scrollBy({ left: scrollAmt(), behavior: 'smooth' });
    });
  }

  /* ----------------------------------------------------------
     Recommendations — read more + show all
  ---------------------------------------------------------- */
  document.querySelectorAll('#pg-team-profile .pf-rec-more').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var q = document.getElementById(btn.dataset.rec);
      var open = q.classList.toggle('open');
      btn.textContent = open ? 'Show less' : 'Read more';
    });
  });

  var showAllBtn = document.getElementById('pfShowAllRecs');
  if (showAllBtn) {
    showAllBtn.addEventListener('click', function () {
      document.querySelectorAll('#pg-team-profile .pf-rec-hidden').forEach(function (el) {
        el.classList.remove('pf-rec-hidden');
      });
      showAllBtn.closest('.pf-more-note').style.display = 'none';
    });
  }

})();

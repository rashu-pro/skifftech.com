(function () {
  'use strict';

  /* ----------------------------------------------------------
     Reveal on scroll (IntersectionObserver)
     Elements start with .reveal (opacity:0), gain .in on entry
  ---------------------------------------------------------- */
  var reveals = document.querySelectorAll('#pg-home .reveal');
  if (reveals.length && 'IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('in');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    reveals.forEach(function (el) {
      el.classList.remove('in'); // reset so observer controls it
      observer.observe(el);
    });
  } else {
    // fallback: show everything
    reveals.forEach(function (el) { el.classList.add('in'); });
  }

  /* ----------------------------------------------------------
     Products carousel — prev/next buttons
  ---------------------------------------------------------- */
  var carousel = document.getElementById('carousel');
  var cprev    = document.getElementById('cprev');
  var cnext    = document.getElementById('cnext');
  if (carousel && cprev && cnext) {
    var cardWidth = function () {
      var card = carousel.querySelector('.pcard');
      return card ? card.offsetWidth + 18 : 314; // card + gap
    };
    cprev.addEventListener('click', function () {
      carousel.scrollBy({ left: -cardWidth() * 2, behavior: 'smooth' });
    });
    cnext.addEventListener('click', function () {
      carousel.scrollBy({ left: cardWidth() * 2, behavior: 'smooth' });
    });
  }

  /* ----------------------------------------------------------
     FAQ accordion
  ---------------------------------------------------------- */
  var qaItems = document.querySelectorAll('#pg-home .qa');
  qaItems.forEach(function (qa) {
    var btn = qa.querySelector('button');
    var ans = qa.querySelector('.ans');
    if (!btn || !ans) return;

    btn.addEventListener('click', function () {
      var isOpen = qa.getAttribute('aria-open') === 'true';

      // close all others
      qaItems.forEach(function (other) {
        if (other !== qa) {
          other.setAttribute('aria-open', 'false');
          var otherBtn = other.querySelector('button');
          var otherAns = other.querySelector('.ans');
          if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
          if (otherAns) otherAns.style.maxHeight = '0';
        }
      });

      // toggle this one
      if (isOpen) {
        qa.setAttribute('aria-open', 'false');
        btn.setAttribute('aria-expanded', 'false');
        ans.style.maxHeight = '0';
      } else {
        qa.setAttribute('aria-open', 'true');
        btn.setAttribute('aria-expanded', 'true');
        ans.style.maxHeight = ans.scrollHeight + 'px';
      }
    });
  });

  /* ----------------------------------------------------------
     Tech stack marquee — populate tracks with chips
  ---------------------------------------------------------- */
  var trk1 = document.getElementById('trk1');
  var trk2 = document.getElementById('trk2');

  var row1 = [
    'React', 'Next.js', 'Vue.js', 'TypeScript', 'Node.js', 'Laravel',
    'Python', 'Django', 'FastAPI', 'PostgreSQL', 'MySQL', 'MongoDB',
    'Redis', 'GraphQL', 'REST APIs', 'Docker'
  ];
  var row2 = [
    'Kubernetes', 'AWS', 'Google Cloud', 'Azure', 'Terraform', 'CI/CD',
    'GitHub Actions', 'Flutter', 'React Native', 'Tailwind CSS',
    'Figma', 'Elasticsearch', 'RabbitMQ', 'Stripe', 'Twilio', 'Firebase'
  ];

  function buildTrack(el, items) {
    if (!el) return;
    var doubled = items.concat(items); // duplicate for seamless loop
    var html = doubled.map(function (name) {
      return '<span class="tchip"><span class="d"></span>' + name + '</span>';
    }).join('');
    el.innerHTML = html;
  }

  buildTrack(trk1, row1);
  buildTrack(trk2, row2);

})();

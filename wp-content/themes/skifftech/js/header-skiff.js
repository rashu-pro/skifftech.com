(function () {
  // Scroll — toggle frosted-glass on #hdr after 30px
  var hdr = document.getElementById('hdr');
  if (hdr) {
    window.addEventListener('scroll', function () {
      hdr.classList.toggle('scrolled', window.scrollY > 30);
    }, { passive: true });
  }

  // Burger — toggle #mnav open/closed
  var burger = document.getElementById('burger');
  var mnav   = document.getElementById('mnav');
  if (burger && mnav) {
    burger.addEventListener('click', function () {
      var open = mnav.classList.toggle('open');
      burger.setAttribute('aria-expanded', String(open));
    });
    // Close mobile menu when any link inside it is clicked
    mnav.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () {
        mnav.classList.remove('open');
        burger.setAttribute('aria-expanded', 'false');
      });
    });
  }
})();

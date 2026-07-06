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
    var setMenu = function (open) {
      mnav.classList.toggle('open', open);
      burger.setAttribute('aria-expanded', String(open));
      // Lock background scroll while the full-page drawer is open
      document.body.style.overflow = open ? 'hidden' : '';
    };
    burger.addEventListener('click', function () {
      setMenu(!mnav.classList.contains('open'));
    });
    // Close mobile menu when any link inside it is clicked
    mnav.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () {
        setMenu(false);
      });
    });
  }
})();

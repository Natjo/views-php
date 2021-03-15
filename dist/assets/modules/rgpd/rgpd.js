const Rgpd = a => {
  const b = {
    create(a, b, c) {
      var d = new Date();
      d.setTime(d.getTime() + 1e3 * (60 * (60 * (24 * c)))), document.cookie = `${a}=${b}${c ? `; expires=${d.toGMTString()}` : ''}; path=/`;
    },

    read(a) {
      const b = `${a}=`;

      for (let c of document.cookie.split(';')) {
        for (; ' ' === c.charAt(0);) c = c.substring(1, c.length);

        if (0 === c.indexOf(b)) return c.substring(b.length, c.length);
      }

      return null;
    },

    erase(a) {
      var b = document.location.hostname;
      0 === b.indexOf('www.') && (b = b.substring(4)), document.cookie = `${a}=; domain=.${b}; expires=Thu, 01-Jan-1970 00:00:01 GMT; path=`, document.cookie = `${a}=; expires=Thu, 01-Jan-1970 00:00:01 GMT; path=/`;
    },

    eraseUnused() {
      for (let a of o) a.checked || a.dataset.cookies.split(',').forEach(a => b.erase(a));
    }

  };
  let c = !!b.read('rgpd');
  const d = document.querySelectorAll('.rgpd-link'),
        e = document.documentElement || window,
        f = 'ontouchstart' in e ? 'touchstart' : 'click',
        g = document.getElementById('rgpd-modal'),
        h = g.querySelector('.btn-accept'),
        i = g.querySelector('.btn-refuse'),
        j = g.querySelectorAll('.btn-manage'),
        k = document.getElementById('rgpd-manage'),
        l = k.querySelector('.box'),
        m = k.querySelectorAll('.btn-detail'),
        n = k.querySelector('.btn-save'),
        o = k.querySelectorAll('input[type="checkbox"]'),
        p = k.querySelector('.btn-close');
  let q,
      r = {};

  const s = () => {
    for (let b in r) r[b] && 'function' == typeof a && a(b);
  },
        t = () => o.forEach(a => r[a.value] = !!a.checked),
        u = () => {
    c = !0, g.classList.remove('active'), b.create('rgpd', JSON.stringify(r), 30);
  },
        v = () => {
    t(), s(), u();
  },
        w = () => {
    o.forEach(a => a.checked = !1), t(), u();
  },
        x = () => {
    t(), c || s(), u(), b.eraseUnused();
  },
        y = () => window.scrollTo(0, q);

  for (let d in !0 == c ? r = JSON.parse(b.read('rgpd')) : o.forEach(a => r[a.value] = !0), r) for (let a of o) a.value == d && (a.checked = r[d]);

  m.forEach(a => a.onclick = () => a.classList.toggle('active')), h.onclick = () => v(), i.onclick = () => w(), !0 == c ? s() : g.classList.add('active');

  const z = a => !l.contains(a.target) && B(),
        A = () => {
    t(), g.classList.remove('active'), k.classList.add('open'), k.addEventListener('animationend', () => window.addEventListener(f, z), {
      once: !0
    }), q = window.pageYOffset || window.scrollY, window.addEventListener('scroll', y);
  };

  j.forEach(a => {
    a.onclick = a => {
      a.preventDefault(), A();
    };
  });

  const B = () => {
    c || g.classList.add('active'), k.classList.add('close'), window.removeEventListener(f, z, !1), window.removeEventListener('scroll', y), m.forEach(a => a.onclick = () => a.classList.toggle('active')), k.addEventListener('animationend', () => {
      k.classList.remove('open'), k.classList.remove('close');
    }, {
      once: !0
    });
  };

  d.forEach(a => a.onclick = a => {
    a.stopPropagation(), a.preventDefault(), A();
  }), n.onclick = () => {
    x(), B();
  }, p.onclick = a => B(a);
};

export default Rgpd;
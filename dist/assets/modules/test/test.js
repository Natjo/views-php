function Slider(a) {
  const b = ('ontouchstart' in document.documentElement),
        c = a.querySelectorAll('.item'),
        d = a.querySelector('.slider-wrapper'),
        e = c.length;
  var f,
      g,
      h,
      i,
      j,
      k,
      l = e - 1,
      m = 0,
      n = 0;

  const o = new IntersectionObserver(a => {
    a.forEach(a => {
      a.isIntersecting ? (a.target.removeAttribute('data-hidden'), a.target.style.visibility = 'visible') : (a.target.setAttribute('data-hidden', !0), a.target.style.visibility = 'hidden');
    });
  }),
        p = a => {
    const b = a => a * (2 - a),
          c = a.start,
          d = a.end,
          e = 300;

    let f,
        g,
        h = null;

    const i = j => {
      g = j - h, a.onChange(c + (d - c) * b(g / e)), f = requestAnimationFrame(i), g >= e && (cancelAnimationFrame(f), a.onChange(d));
    };

    f = requestAnimationFrame(a => {
      h = a, i(a);
    });
  },
        q = () => {
    console.log("d ", l), j = parseInt(getComputedStyle(d).getPropertyValue('--nb')) || 1, i = parseInt(getComputedStyle(d).gridColumnGap) || 0, h = d.clientWidth / j - i * (j - 1) / j, k = h + i, m = -(l * k), d.style.transform = `translateX(${m}px)`;
  },
        r = () => {
    if (l = Math.ceil(-m / k) - 1, f != l) {
      let a, b;

      for (let d of c) d.pos < l && (a = e + l - 1, b = d), d.pos > e + l - 1 && (a = l, b = d);

      b && (b.pos = a, b.style.gridColumn = a);
    }

    f = l;
  };

  var s = !1;

  const t = a => {
    p({
      start: m,
      end: -a,

      onChange(a) {
        m = a, d.style.transform = `translateX(${a}px)`, r();
      }

    });
  },
        u = a => {
    d.contains(a.target) || (d.onmousemove = d.onmouseup = null, t(l * k), d.classList.remove('onswipe'));
  },
        v = a => {
    1 < Math.abs(m - g) && !1 === s && (d.classList.add('onswipe'), s = !0, b && document.body.classList.add('disableScroll')), m = a - n, d.style.transform = `translateX(${a - n}px)`, r();
  },
        w = () => {
    const a = l * k;
    let c = 1;
    g > m && 100 > -m - a + i && (c = 0), g < m && 100 < h - (-m - a) && (c = 0), d.onmousemove = d.onmouseup = null, d.ontouchmove = d.ontouchend = null, t(k * (l + c)), d.classList.remove('onswipe'), window.removeEventListener('mouseup', u), s = !1, b && document.body.classList.remove('disableScroll');
  },
        x = a => (window.addEventListener('mouseup', u), n = a - m, g = m, d.onmousemove = a => v(a.clientX), d.onmouseup = a => w(a.clientX), !1),
        y = a => {
    n = a - m, g = m, d.ontouchmove = a => v(a.touches[0].clientX), d.ontouchend = a => w(a.changedTouches[0].clientX);
  };

  c.forEach((a, b) => {
    a.style.gridColumn = b + l + 1, a.pos = b + l + 1, b == e - 1 && (a.style.gridColumn = l, a.pos = l), o.observe(a);
  }), this.prev = () => t(k * l), this.next = () => t(k * (l + 2)), this.enable = () => {
    b ? d.ontouchstart = a => y(a.touches[0].clientX, a) : d.onmousedown = a => x(a.clientX), window.addEventListener('resize', q, {
      passive: !0
    });
  }, this.disable = () => {
    d.onmousemove = d.onmouseup = d.onmousedown = null, d.ontouchmove = d.ontouchend = d.ontouchstart = null, window.removeEventListener('mouseup', u), window.removeEventListener('resize', q);
  }, q(), r(), q();
}

export default Slider;
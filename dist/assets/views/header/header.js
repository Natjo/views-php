const header = document.getElementById('header'),
      nav = document.getElementById('nav'),
      btn_nav = header.querySelector('.btn-nav');
var oldscrollY,
    oldstatus,
    trigger,
    scrollDown = !1,
    scrollY = 0,
    status = 0;

const resize = () => trigger = header.clientHeight,
      change = () => {
  1 == scrollDown && header.classList.add('fixed'), 0 === status && (header.classList.remove('hide'), header.classList.remove('show'), header.classList.remove('fixed')), 1 === status && (header.classList.remove('show'), header.classList.add('hide')), 2 === status && (header.classList.remove('hide'), header.classList.add('show'));
},
      scroll = () => {
  scrollY = window.pageYOffset, scrollDown = !!(0 < oldscrollY - scrollY), scrollY > trigger && (status = !1 === scrollDown ? 1 : 2), 0 === scrollY && (status = 0), oldstatus !== status && change(), oldstatus = status, oldscrollY = scrollY;
},
      open = () => {
  document.body.classList.add('hasPopin'), btn_nav.classList.add('active'), nav.classList.add('open');
},
      close = () => {
  document.body.classList.remove('hasPopin'), btn_nav.classList.remove('active'), nav.classList.remove('open');
};

btn_nav.onclick = () => btn_nav.classList.contains('active') ? close() : open(), window.addEventListener('scroll', scroll, !1), window.addEventListener('resize', resize, !1), resize(), window.pageYOffset > trigger && header.classList.add('show');
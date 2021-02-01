const header = document.getElementById('header');
const nav = document.getElementById('nav');
const btn_nav = header.querySelector('.btn-nav');
var scrollDown = false;
var scrollY = 0;
var oldscrollY;
var status = 0;
var oldstatus;
var trigger;

const resize = () => trigger = header.clientHeight;

const change = () => {
    scrollDown == 1 && header.classList.add('fixed');
    if (status === 0) {
        header.classList.remove('hide');
        header.classList.remove('show');
        header.classList.remove('fixed');
    }
    if (status === 1) {
        header.classList.remove('show');
        header.classList.add('hide');
    }
    if (status === 2) {
        header.classList.remove('hide');
        header.classList.add('show');
    }
};

const scroll = () => {
    scrollY = window.pageYOffset;
    scrollDown = oldscrollY - scrollY > 0 ? true : false;
    if (scrollY > trigger) status = scrollDown === false ? 1 : 2;
    if (scrollY === 0) status = 0;
    oldstatus !== status && change();
    oldstatus = status;
    oldscrollY = scrollY;
};

const open = () => {
    document.body.classList.add('hasPopin'); 
    btn_nav.classList.add('active');
    nav.classList.add('open');
};

const close = () => {
    document.body.classList.remove('hasPopin');
    btn_nav.classList.remove('active');
    nav.classList.remove('open');
};

btn_nav.onclick = () => btn_nav.classList.contains('active') ? close() : open();

window.addEventListener('scroll', scroll, false);
window.addEventListener('resize', resize, false);

resize();

window.pageYOffset > trigger && header.classList.add('show');
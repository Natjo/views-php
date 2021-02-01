import Swiper from '../swiper/swiper-bundle.esm.browser.min.js';
import Breakpoint from '../breakpoint/breakpoint.js';

function Swipe2grid(a) {
  document.querySelectorAll(".swipe2grid").forEach(b => {
    let c;
    const d = new Breakpoint(a),
          e = b.querySelector('ul'),
          f = e.querySelectorAll('.item');
    d.above = () => {
      b.swiper !== void 0 && b.swiper.destroy(!0, !0), b.classList.remove('swiper-container'), e.classList.remove('swiper-wrapper'), f.forEach(a => a.classList.remove('swiper-slide'));
    }, d.under = () => {
      console.log("under"), b.classList.add('swiper-container'), e.classList.add('swiper-wrapper'), f.forEach(a => a.classList.add('swiper-slide')), c = new Swiper('.swipe2grid', {
        spaceBetween: 480 > window.innerWidth ? 20 : 50,
        slidesPerView: 'auto',
        centeredSlides: !0
      });
    };
  });
}

export default Swipe2grid;
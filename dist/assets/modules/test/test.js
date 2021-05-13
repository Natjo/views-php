function Slider(el) {
  const isTouch = ('ontouchstart' in document.documentElement);
  const items = el.querySelectorAll('.item');
  const slider = el.querySelector('.slider-wrapper');
  const length = items.length;
  var index = length - 1,
      oldindex;
  var posX = 0,
      oldposX;
  var offset = 0;
  var itemW, gap, nb, itemWgap;
  const observer = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.removeAttribute('data-hidden');
        e.target.style.visibility = 'visible';
      } else {
        e.target.setAttribute('data-hidden', true);
        e.target.style.visibility = 'hidden';
      }
    });
  });

  const animation = param => {
    const ease = t => t * (2 - t);

    const start = param.start;
    const end = param.end;
    const duration = 300;
    let req, time;
    let init = null;

    const startAnim = timeStamp => {
      init = timeStamp;
      draw(timeStamp);
    };

    const draw = now => {
      time = now - init;
      param.onChange(start + (end - start) * ease(time / duration));
      req = requestAnimationFrame(draw);

      if (time >= duration) {
        cancelAnimationFrame(req);
        param.onChange(end);
      }
    };

    req = requestAnimationFrame(startAnim);
  };

  const resize = () => {
    console.log("d ", index);
    nb = parseInt(getComputedStyle(slider).getPropertyValue('--nb')) || 1;
    gap = parseInt(getComputedStyle(slider).gridColumnGap) || 0;
    itemW = slider.clientWidth / nb - gap * (nb - 1) / nb;
    itemWgap = itemW + gap;
    posX = -(index * itemWgap);
    slider.style.transform = `translateX(${posX}px)`;
  };

  const onmove = () => {
    index = Math.ceil(-posX / itemWgap) - 1;

    if (oldindex != index) {
      let newIndex, selected;

      for (let item of items) {
        if (item.pos < index) {
          newIndex = length + index - 1;
          selected = item;
        }

        if (item.pos > length + index - 1) {
          newIndex = index;
          selected = item;
        }
      }

      if (selected) {
        selected.pos = newIndex;
        selected.style.gridColumn = newIndex;
      }
    }

    oldindex = index;
  };

  var isMove = false;

  const goto = val => {
    animation({
      start: posX,
      end: -val,

      onChange(value) {
        posX = value;
        slider.style.transform = `translateX(${value}px)`;
        onmove();
      }

    });
  };

  const clickout = e => {
    if (!slider.contains(e.target)) {
      slider.onmousemove = slider.onmouseup = null;
      goto(index * itemWgap);
      slider.classList.remove('onswipe');
    }
  };

  const mouseMove = val => {
    if (Math.abs(posX - oldposX) > 1 && isMove === false) {
      slider.classList.add('onswipe');
      isMove = true;
      isTouch && document.body.classList.add('disableScroll');
    }

    posX = val - offset;
    slider.style.transform = `translateX(${val - offset}px)`;
    onmove();
  };

  const mouseUp = val => {
    const posOffset = index * itemWgap;
    let inc = 1;
    if (oldposX > posX && -posX - posOffset + gap < 100) inc = 0;
    if (oldposX < posX && itemW - (-posX - posOffset) > 100) inc = 0;
    slider.onmousemove = slider.onmouseup = null;
    slider.ontouchmove = slider.ontouchend = null;
    goto(itemWgap * (index + inc));
    slider.classList.remove('onswipe');
    window.removeEventListener('mouseup', clickout);
    isMove = false;
    isTouch && document.body.classList.remove('disableScroll');
  };

  const mouseDown = val => {
    window.addEventListener('mouseup', clickout);
    offset = val - posX;
    oldposX = posX;

    slider.onmousemove = e => mouseMove(e.clientX);

    slider.onmouseup = e => mouseUp(e.clientX);

    return false;
  };

  const touchstart = (val, e) => {
    offset = val - posX;
    oldposX = posX;

    slider.ontouchmove = e => mouseMove(e.touches[0].clientX);

    slider.ontouchend = e => mouseUp(e.changedTouches[0].clientX);
  };

  items.forEach((item, i) => {
    item.style.gridColumn = i + index + 1;
    item.pos = i + index + 1;

    if (i == length - 1) {
      item.style.gridColumn = index;
      item.pos = index;
    }

    observer.observe(item);
  });

  this.prev = () => goto(itemWgap * index);

  this.next = () => goto(itemWgap * (index + 2));

  this.enable = () => {
    if (isTouch) {
      slider.ontouchstart = e => touchstart(e.touches[0].clientX, e);
    } else {
      slider.onmousedown = e => mouseDown(e.clientX);
    }

    window.addEventListener('resize', resize, {
      passive: true
    });
  };

  this.disable = () => {
    slider.onmousemove = slider.onmouseup = slider.onmousedown = null;
    slider.ontouchmove = slider.ontouchend = slider.ontouchstart = null;
    window.removeEventListener('mouseup', clickout);
    window.removeEventListener('resize', resize);
  };

  resize();
  onmove();
  resize();
}

export default Slider;
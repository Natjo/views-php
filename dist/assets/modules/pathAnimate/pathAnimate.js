const pathAnimate = a => {
  var b = 0;
  a.querySelectorAll("path").forEach(a => {
    const c = a.getTotalLength();
    a.style.strokeWidth = 3, a.style.animationName = "pathAnimate", a.style.animationFillMode = "forwards", a.style.animationTimingFunction = "linear", a.style.strokeDasharray = c + " " + c, a.style.strokeDashoffset = c, a.style.animationDelay = "0s", a.style.animationDuration = c / 1e3 + "s", b += c / 1e3;
  });
};

export default pathAnimate;
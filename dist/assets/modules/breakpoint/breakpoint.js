function Breakpoint(a) {
  this.above = function () {}, this.under = function () {};
  const b = window.matchMedia(`(min-width:${a}px)`);
  b.addListener(a => a.matches ? this.above() : this.under()), setTimeout(() => b.matches ? this.above() : this.under(), 1);
}

export default Breakpoint;
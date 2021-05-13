import Breakpoint from "../../modules/breakpoint/breakpoint.js";
const el = document.querySelector('[data-view=keywords]');
const btns = el.querySelectorAll("button");
const panels = el.querySelectorAll(".panel");
const contents = el.querySelectorAll(".content");
var heights = [];
var selected;

var accordion = () => {};

btns.forEach(btn => {
  btn.onclick = () => {
    selected && selected.classList.remove("active");
    selected = btn;
    btn.classList.add("active");
    accordion();
  };

  if (btn.classList.contains("active")) selected = btn;
});
const breakpoint = new Breakpoint(960);

breakpoint.above = () => {
  accordion = () => {};
};

breakpoint.under = () => {
  accordion = () => {
    heights = [];
    contents.forEach(e => heights.push(e.scrollHeight));
    btns.forEach((el, i) => {
      if (el.classList.contains("active")) {
        panels[i].style.height = `${heights[i]}px`;
      } else {
        panels[i].style.height = null;
      }
    });
  };

  accordion();
};
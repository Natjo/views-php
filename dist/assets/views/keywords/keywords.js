import Breakpoint from "../../modules/breakpoint/breakpoint.js";
const el = document.querySelector('[data-view=keywords]'),
      btns = el.querySelectorAll("button"),
      panels = el.querySelectorAll(".panel"),
      contents = el.querySelectorAll(".content");

var selected,
    heights = [],
    accordion = () => {};

btns.forEach(a => {
  a.onclick = () => {
    selected && selected.classList.remove("active"), selected = a, a.classList.add("active"), accordion();
  }, a.classList.contains("active") && (selected = a);
});
const breakpoint = new Breakpoint(960);
breakpoint.above = () => {
  accordion = () => {};
}, breakpoint.under = () => {
  accordion = () => {
    heights = [], contents.forEach(a => heights.push(a.scrollHeight)), btns.forEach((a, b) => {
      panels[b].style.height = a.classList.contains("active") ? `${heights[b]}px` : null;
    });
  }, accordion();
};
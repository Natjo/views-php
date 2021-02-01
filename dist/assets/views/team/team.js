const el = document.querySelector("#team"),
      btns = el.querySelectorAll(".filters button"),
      items = el.querySelectorAll("[data-filter]");
btns.forEach(a => a.onclick = () => {
  btns.forEach(b => b === a ? a.classList.toggle("active") : b.classList.remove("active"));
  const b = a.classList.contains("active") ? a.value : "";
  items.forEach((a, c) => {
    a.style.display = "none", a.style.animation = "none", a.offsetHeight, a.style.animation = null, -1 !== a.dataset.filter.indexOf(b) && (a.style.display = "block", a.style.animation = `itemDisplay .4s ease ${.2 * c}s both`);
  }), el.scrollIntoView({
    behavior: "smooth"
  });
});
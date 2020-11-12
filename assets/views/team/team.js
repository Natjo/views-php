const el = document.querySelector("#team");
const btns = el.querySelectorAll(".filters button");
const items = el.querySelectorAll("[data-filter]");

btns.forEach(btn =>
    btn.onclick = () => {
        btns.forEach((e) =>
            e !== btn? e.classList.remove("active") : btn.classList.toggle("active")
        );
        const value = btn.classList.contains("active") ? btn.value : "";
        items.forEach((item, i) => {
            item.style.display = "none";
            item.style.animation = "none";
            item.offsetHeight; /* trigger reflow */
            item.style.animation = null;
            if (item.dataset.filter.indexOf(value) !== -1) {
                item.style.display = "block";
                item.style.animation = `itemDisplay .4s ease ${i * 0.2}s both`;
            }
        });
        el.scrollIntoView({ behavior: "smooth" });
    }
);

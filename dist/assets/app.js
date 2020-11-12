import Rgpd from "./modules/rgpd/rgpd.js";
Rgpd(status => {
  console.log(status);
});

if ("loading" in HTMLImageElement.prototype) {
  document.querySelectorAll("img[loading]").forEach(img => {
    if (img.complete) img.loading = "eager";

    img.onload = () => img.loading = "eager";
  });
} else {
  document.querySelectorAll("img[loading]").forEach(img => img.removeAttribute("loading"));
}

console.log("app.js");
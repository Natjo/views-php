import Rgpd from "./modules/rgpd/rgpd.js";
Rgpd(a => {
  console.log(a);
}), 'loading' in HTMLImageElement.prototype ? document.querySelectorAll('img[loading]').forEach(a => {
  a.complete && (a.loading = 'eager'), a.onload = () => a.loading = 'eager';
}) : document.querySelectorAll('img[loading]').forEach(a => a.removeAttribute('loading')), console.log("app.js");
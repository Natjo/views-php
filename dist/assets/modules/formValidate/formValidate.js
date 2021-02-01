const formValidate = (a, b) => {
  const c = a.querySelectorAll(':required');
  let d = !0,
      e = !0;

  for (let d of c) {
    const a = document.createElement('div');
    a.className = 'field-error-msg', a.id = d.getAttribute('aria-describedby'), d.parentNode.appendChild(a), d.addEventListener('change', () => f());
  }

  const f = () => {
    if (!d) {
      e = !0;

      for (let a of c) {
        const b = a.parentNode.querySelector('.field-error-msg');
        a.checkValidity() ? (a.classList.remove('error'), b.innerHTML = "") : (a.classList.add('error'), b.innerHTML = a.validationMessage, e = !1);
      }

      return e;
    }
  };

  a.onsubmit = a => {
    a.preventDefault(), d = !1, f() ? b() : null;
  };
};

export default formValidate;
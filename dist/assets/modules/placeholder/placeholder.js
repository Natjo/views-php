const Placeholder = function () {
  const a = document.querySelectorAll('input[type="text"],input[type="email"],input[type="tel"], textarea');

  for (let b of a) {
    const a = b.parentNode.querySelector('label');
    a && (b.oninput = () => {
      '' === b.value ? a.classList.remove('active') : a.classList.add('active');
    }, b.onblur = () => '' === b.value && a.classList.remove('active'), b.value.length && a.classList.add('active'));
  }
};

export default Placeholder;
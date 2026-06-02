// Smooth scroll nav active state
document.addEventListener('DOMContentLoaded', function() {
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('nav a');

  window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      if (window.scrollY >= sectionTop - 200) {
        current = section.getAttribute('id');
      }
    });

    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === '#' + current) {
        link.classList.add('active');
      }
    });
  });
});

function toggleMenu() {
    const nav = document.querySelector('.nav');
    nav.classList.toggle('is-open');
}


document.querySelectorAll('.nav__links a').forEach(link => {
  link.addEventListener('click', () => {
    const nav = document.querySelector('.nav');
    if (nav) nav.classList.remove('is-open');
  });
});

document.addEventListener('click', (e) => {
  const nav = document.querySelector('.nav');
  if (!nav) return;
  if (!nav.classList.contains('is-open')) return;

  if (!nav.contains(e.target)) {
    nav.classList.remove('is-open');
  }
});

document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape' || e.key === 'Esc') {
    const nav = document.querySelector('.nav');
    if (nav && nav.classList.contains('is-open')) nav.classList.remove('is-open');
  }
});
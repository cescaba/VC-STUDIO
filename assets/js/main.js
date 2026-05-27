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
        document.querySelector('.nav').classList.remove('is-open');
    });
});
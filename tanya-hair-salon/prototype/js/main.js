// ---------- Sticky header on scroll ----------
const header = document.querySelector('.site-header');
const onScroll = () => header.classList.toggle('is-scrolled', window.scrollY > 60);
document.addEventListener('scroll', onScroll, { passive: true });
onScroll();

// ---------- Mobile nav toggle ----------
const toggle = document.querySelector('.nav-toggle');
if (toggle) {
  toggle.addEventListener('click', () => header.classList.toggle('is-open'));
}

// ---------- Reveal on scroll ----------
const io = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('is-visible');
      io.unobserve(e.target);
    }
  });
}, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

document.querySelectorAll('.reveal').forEach(el => io.observe(el));

// ---------- Testimonial slider ----------
const slides = document.querySelectorAll('.testimonial');
const dots = document.querySelectorAll('.testimonials__dots button');
let current = 0;
let timer;

const show = (i) => {
  slides.forEach((s, k) => s.classList.toggle('is-active', k === i));
  dots.forEach((d, k) => d.classList.toggle('is-active', k === i));
  current = i;
};
const next = () => show((current + 1) % slides.length);

if (slides.length) {
  show(0);
  timer = setInterval(next, 7000);
  dots.forEach((d, i) => d.addEventListener('click', () => {
    clearInterval(timer);
    show(i);
    timer = setInterval(next, 7000);
  }));
}

// ---------- Update copyright year ----------
const yearEl = document.querySelector('[data-year]');
if (yearEl) yearEl.textContent = new Date().getFullYear();

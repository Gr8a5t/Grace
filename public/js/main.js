// --- Faith Connect Interactivity ---

// 1. Countdown Timer
function updateCountdown() {
  // Dynamically find the next upcoming Sunday at 9:00 AM
  const now = new Date();
  const nextSunday = new Date(now);
  const dayOfWeek = now.getDay(); // 0 = Sunday
  const daysUntilSunday = dayOfWeek === 0 ? 7 : 7 - dayOfWeek;
  nextSunday.setDate(now.getDate() + daysUntilSunday);
  nextSunday.setHours(9, 0, 0, 0);

  // If today is Sunday but service hasn't started yet, use today
  if (dayOfWeek === 0 && now.getHours() < 9) {
    nextSunday.setDate(now.getDate());
  }

  const endDate = nextSunday.getTime();
  const nowTime = now.getTime();
  const diff = endDate - nowTime;

  const timerEl = document.querySelector('.timer');
  if (!timerEl) return;

  if (diff < 0) {
    timerEl.innerHTML = '<h2>SERVICE IN PROGRESS</h2>';
    return;
  }

  const days = Math.floor(diff / (1000 * 60 * 60 * 24));
  const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  const mins = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
  const secs = Math.floor((diff % (1000 * 60)) / 1000);

  const daysEl = document.getElementById('days');
  const hoursEl = document.getElementById('hours');
  const minsEl = document.getElementById('mins');
  const secsEl = document.getElementById('secs');

  if (daysEl) daysEl.innerText = String(days).padStart(2, '0');
  if (hoursEl) hoursEl.innerText = String(hours).padStart(2, '0');
  if (minsEl) minsEl.innerText = String(mins).padStart(2, '0');
  if (secsEl) secsEl.innerText = String(secs).padStart(2, '0');
}

setInterval(updateCountdown, 1000);
updateCountdown();

// 2. Multi-State Sticky Header & ScrollSpy
window.addEventListener('scroll', () => {
  const header = document.querySelector('header');
  const navLinks = document.querySelectorAll('.nav-links a');
  const sections = document.querySelectorAll('section');
  const heroEl = document.querySelector('.hero');
  const heroHeight = heroEl ? heroEl.offsetHeight : 500;
  
  if (header) {
    // State 1: Transparent (Default)
    // State 2: Scrolled (Dark Bar)
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled', 'deep-scrolled');
    }

    // State 3: Deep Scrolled (Floating Pill)
    if (window.scrollY > heroHeight * 0.8) {
      header.classList.add('deep-scrolled');
    } else {
      header.classList.remove('deep-scrolled');
    }
  }

  // ScrollSpy logic
  let current = '';
  sections.forEach(section => {
    const sectionTop = section.offsetTop;
    const sectionHeight = section.clientHeight;
    if (window.pageYOffset >= (sectionTop - sectionHeight / 3)) {
      current = section.getAttribute('id') || '';
    }
  });

  navLinks.forEach(a => {
    a.classList.remove('active');
    if (current && a.getAttribute('href') && a.getAttribute('href').includes(current)) {
      a.classList.add('active');
    }
  });
});

// 3. Simple Scroll Reveal Animation
const observerOptions = {
  threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = '1';
      entry.target.style.transform = 'translateY(0)';
    }
  });
}, observerOptions);

document.querySelectorAll('section').forEach(section => {
  section.style.opacity = '0';
  section.style.transform = 'translateY(20px)';
  section.style.transition = 'all 0.8s ease-out';
  observer.observe(section);
});

// 4. Mobile Menu Toggle
const menuToggle = document.getElementById('menu-toggle');
const navLinks = document.querySelector('.nav-links');
const body = document.body;

if (menuToggle && navLinks) {
  menuToggle.addEventListener('click', () => {
    menuToggle.classList.toggle('active');
    navLinks.classList.toggle('active');
    body.classList.toggle('no-scroll');
  });

  // Close menu when a link is clicked
  document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
      menuToggle.classList.remove('active');
      navLinks.classList.remove('active');
      body.classList.remove('no-scroll');
    });
  });
}

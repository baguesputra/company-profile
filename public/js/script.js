/**
 * ==============================
 * CONFIG
 * ==============================
 */
const CONFIG = {
  MIN_LOADING_TIME: 1500,
  SLIDE_INTERVAL: 4500,
  COUNTER_DURATION: 2000,
};

/**
 * ==============================
 * UTILS
 * ==============================
 */
const qs = (selector, scope = document) => scope.querySelector(selector);
const qsa = (selector, scope = document) => [...scope.querySelectorAll(selector)];

/**
 * ==============================
 * LOADING SCREEN
 * ==============================
 */
function initLoadingScreen() {
  const start = Date.now();

  window.addEventListener("load", () => {
    const elapsed = Date.now() - start;
    const delay = Math.max(0, CONFIG.MIN_LOADING_TIME - elapsed);

    setTimeout(() => {
      document.body.classList.add("loaded");

      const sticky = qs(".call-center-sticky");
      if (sticky) sticky.style.display = "block";

      setTimeout(showHutPopup, 350);
    }, delay);
  });
}

/**
 * ==============================
 * HUT POPUP + CONFETTI
 * ==============================
 */
function showHutPopup() {
  const popup = qs("#hutPopup");
  if (!popup) return;

  popup.classList.add("show");
  startConfetti();
}

function startConfetti() {
  const wrapper = qs("#confettiWrapper");
  if (!wrapper) return;

  for (let i = 0; i < 20; i++) {
    const el = document.createElement("div");
    el.className = "confetti";
    el.style.left = Math.random() * 100 + "%";
    el.style.animationDuration = Math.random() * 2 + 2 + "s";
    el.style.animationDelay = Math.random() * 2 + "s";

    wrapper.appendChild(el);

    setTimeout(() => el.remove(), 5000);
  }
}

function initHutPopupHandlers() {
  const popup = qs("#hutPopup");
  if (!popup) return;

  const close = () => popup.classList.remove("show");

  qs(".hut-popup-close")?.addEventListener("click", close);
  qs(".hut-popup-later")?.addEventListener("click", close);
  qs(".hut-popup-btn")?.addEventListener("click", close);

  popup.addEventListener("click", (e) => {
    if (e.target === popup) close();
  });
}

/**
 * ==============================
 * SLIDER
 * ==============================
 */
function initSlider() {
  const track = qs("#hutTrack");
  const dotsEl = qs("#hutDots");
  if (!track || !dotsEl) return;

  let current = 0;
  const total = 5;
  let timer;

  function goTo(n) {
    current = (n + total) % total;
    track.style.transform = `translateX(-${current * 100}%)`;

    qsa(".hut-dot-btn").forEach((d, i) => {
      d.classList.toggle("active", i === current);
    });

    restartAuto();
  }

  function restartAuto() {
    clearInterval(timer);
    timer = setInterval(() => goTo(current + 1), CONFIG.SLIDE_INTERVAL);
  }

  // create dots
  for (let i = 0; i < total; i++) {
    const btn = document.createElement("button");
    btn.className = "hut-dot-btn" + (i === 0 ? " active" : "");
    btn.addEventListener("click", () => goTo(i));
    dotsEl.appendChild(btn);
  }

  window.hutSlide = (d) => goTo(current + d);
  restartAuto();
}

/**
 * ==============================
 * DROPDOWN
 * ==============================
 */
function initDropdown() {
  qsa(".dropdown").forEach((dropdown) => {
    dropdown.addEventListener("click", () => {
      const menu = qs(".dropdown-menu", dropdown);
      if (!menu) return;
      menu.classList.toggle("show");
    });
  });

  document.addEventListener("click", (e) => {
    qsa(".dropdown-menu").forEach((menu) => {
      if (!menu.contains(e.target) && !menu.parentElement.contains(e.target)) {
        menu.classList.remove("show");
      }
    });
  });
}

/**
 * ==============================
 * NAVBAR SCROLL
 * ==============================
 */
function initNavbarScroll() {
  const nav = qs(".navbar");
  if (!nav) return;

  window.addEventListener(
    "scroll",
    () => {
      nav.classList.toggle("scrolled", window.scrollY > 50);
    },
    { passive: true }
  );
}

/**
 * ==============================
 * COUNTER
 * ==============================
 */
function animateCounter(el) {
  const target = +el.dataset.target;
  const step = target / (CONFIG.COUNTER_DURATION / 50);
  let current = 0;

  const timer = setInterval(() => {
    current += step;
    if (current >= target) {
      el.innerText = target.toLocaleString();
      clearInterval(timer);
    } else {
      el.innerText = Math.floor(current).toLocaleString();
    }
  }, 50);
}

function initCounter() {
  const section = qs("#stats-section");
  const counters = qsa(".counter");
  if (!section || !counters.length) return;

  const run = () => counters.forEach(animateCounter);

  const observer = new IntersectionObserver(
    ([entry]) => {
      if (entry.isIntersecting) {
        run();
        observer.disconnect();
      }
    },
    { threshold: 0.1 }
  );

  observer.observe(section);
}

/**
 * ==============================
 * VIDEO MODAL
 * ==============================
 */
function initVideoModal() {
  const modal = qs("#videoModal");
  const video = qs("#popupVideo");
  if (!modal || !video) return;

  const close = () => {
    video.pause();
    video.src = "";
    modal.classList.remove("show");
  };

  qsa(".video-trigger").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      video.src = btn.dataset.video;
      modal.classList.add("show");
      video.play().catch(() => {});
    });
  });

  qs(".close", modal)?.addEventListener("click", close);

  modal.addEventListener("click", (e) => {
    if (e.target === modal) close();
  });
}

/**
 * ==============================
 * INIT APP
 * ==============================
 */
document.addEventListener("DOMContentLoaded", () => {
  initHutPopupHandlers();
  initSlider();
  initDropdown();
  initNavbarScroll();
  initCounter();
  initVideoModal();

  if (typeof AOS !== "undefined") AOS.init();
});

initLoadingScreen();

/**
 * ==============================
 * Whatsapp Call Center Sticky Button
 * ==============================
 */
 document.addEventListener('DOMContentLoaded', function() {
            const callCenterBtn = document.getElementById('callCenterBtn');
            const callCenterMenu = document.getElementById('callCenterMenu');
            if (!callCenterBtn || !callCenterMenu) return;

            callCenterBtn.addEventListener('click', function() {
                callCenterMenu.classList.toggle('active');
                callCenterBtn.classList.toggle('active');
            });

            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                if (!callCenterBtn.contains(event.target) && !callCenterMenu.contains(event.target)) {
                    callCenterMenu.classList.remove('active');
                    callCenterBtn.classList.remove('active');
                }
            });
        });
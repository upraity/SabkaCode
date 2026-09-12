
/* -------------------------------
   Partial Loader
-------------------------------- */
function loadPartial(targetId, sources) {
  const target = document.getElementById(targetId);
  if (!target) return Promise.resolve(false);

  function trySource(index) {
    if (index >= sources.length) return Promise.resolve(false);

    return fetch(sources[index])
      .then((response) => {
        if (!response.ok) {
          throw new Error(`Failed to load ${sources[index]}`);
        }
        return response.text();
      })
      .then((html) => {
        target.innerHTML = html;
        return true;
      })
      .catch(() => trySource(index + 1));
  }

  return trySource(0);
}

/* -------------------------------
   Social Links
-------------------------------- */
function whats() {
  window.location.href = "https://wa.me/918938870794";
}

function tele() {
  window.location.href = "https://t.me/sabkacode";
}

function arattai() {
  window.location.href = "https://chat.arattai.in/groups/n43545f313238383531313639383036383535383136355f32303030353332363533342d47437c3031303134303039303132333137363136323533383832353530";
}

/* -------------------------------
   Floating Buttons
-------------------------------- */
function initFloatingButtons() {
  const btn1 = document.getElementById("btn1");
  const btn2 = document.getElementById("btn2");
  const btn3 = document.getElementById("btn3");
  const click = document.getElementById("click");

  if (!btn1 || !btn2 || !btn3 || !click) return;

  let isOpen = false;

  function showButtons() {
    [btn1, btn2, btn3].forEach((btn) => btn.classList.remove("hidden"));

    setTimeout(() => {
      [btn1, btn2, btn3].forEach((btn) => btn.classList.add("visible"));
    }, 40);
  }

  function hideButtons() {
    [btn1, btn2, btn3].forEach((btn) => btn.classList.remove("visible"));

    setTimeout(() => {
      [btn1, btn2, btn3].forEach((btn) => btn.classList.add("hidden"));
    }, 260);
  }

  click.addEventListener("click", () => {
    isOpen = !isOpen;
    isOpen ? showButtons() : hideButtons();
  });

  btn1.addEventListener("click", tele);
  btn2.addEventListener("click", arattai);
  btn3.addEventListener("click", whats);
}

/* -------------------------------
   Navigation + Sticky Nav
-------------------------------- */
function initResponsiveNav() {
  const menuToggle = document.getElementById("menuToggle");
  const navLinks = document.getElementById("navLinks");
  const floatingToggle = document.getElementById("floatingToggle");
  const socialStack = document.getElementById("socialStack");
  const dropButtons = document.querySelectorAll(".drop-btn");

  const mainNav = document.getElementById("mainNav");
  const navGhost = document.getElementById("navGhost");
  const navSentinel = document.getElementById("navSentinel");
  const backToTop = document.getElementById("backToTop");

  /* Mobile Menu */
  if (menuToggle && navLinks) {
    menuToggle.addEventListener("click", () => {
      const isOpen = navLinks.classList.toggle("open");
      menuToggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
      menuToggle.innerHTML = isOpen
        ? '<i class="fa-solid fa-xmark"></i>'
        : '<i class="fa-solid fa-bars"></i>';
    });
  }

  /* Floating Social Stack */
  if (floatingToggle && socialStack) {
    floatingToggle.addEventListener("click", () => {
      socialStack.classList.toggle("open");
    });
  }

  /* Mobile Dropdowns */
  dropButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      if (window.innerWidth > 860) return;

      const parent = btn.parentElement;
      const isOpen = parent.classList.toggle("open");
      btn.setAttribute("aria-expanded", isOpen ? "true" : "false");
    });
  });

  /* Resize Reset */
  window.addEventListener("resize", () => {
    if (window.innerWidth > 860) {
      if (navLinks) navLinks.classList.remove("open");

      if (menuToggle) {
        menuToggle.setAttribute("aria-expanded", "false");
        menuToggle.innerHTML = '<i class="fa-solid fa-bars"></i>';
      }

      document
        .querySelectorAll(".drop")
        .forEach((drop) => drop.classList.remove("open"));
    }
  });

  /* Sticky Nav */
  if (mainNav && navGhost && navSentinel) {
    function goSticky() {
      navGhost.style.height = `${mainNav.offsetHeight}px`;
      navGhost.classList.add("is-sticky");
      mainNav.classList.add("is-sticky");
    }

    function goNormal() {
      mainNav.classList.remove("is-sticky");
      navGhost.classList.remove("is-sticky");
    }

    if ("IntersectionObserver" in window) {
      const observer = new IntersectionObserver(
        (entries) => {
          entries[0].isIntersecting ? goNormal() : goSticky();
        },
        {
          threshold: 0,
        }
      );

      observer.observe(navSentinel);
    }
  }

  /* Back To Top */
  if (backToTop) {
    window.addEventListener(
      "scroll",
      () => {
        if (window.scrollY > 300) {
          backToTop.classList.add("show");
        } else {
          backToTop.classList.remove("show");
        }
      },
      { passive: true }
    );

    backToTop.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }
}

/* -------------------------------
   Popup
-------------------------------- */
function initPopup() {
  const popup = document.getElementById("popup");
  const closeBtn = document.getElementById("closeBtn");

  if (!popup || !closeBtn) return;

  setTimeout(() => {
    popup.classList.add("active");
  }, 500);

  closeBtn.addEventListener("click", () => {
    popup.classList.remove("active");
  });

  popup.addEventListener("click", (e) => {
    if (e.target === popup) {
      popup.classList.remove("active");
    }
  });
}

/* -------------------------------
   Reveal Animation
-------------------------------- */
function initReveal() {
  if (!("IntersectionObserver" in window)) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.12,
    }
  );

  document.querySelectorAll(".reveal").forEach((el) => {
    observer.observe(el);
  });
}

/* -------------------------------
   Contact Form
-------------------------------- */
function submitForm() {
  const name = document.getElementById("fname")?.value.trim();
  const email = document.getElementById("femail")?.value.trim();
  const subject =
    document.getElementById("fsubject")?.value || "General Contact";
  const message = document.getElementById("fmessage")?.value.trim();

  if (!name || !email || !message) {
    alert("Kripya naam, email aur message zaroor bharen!");
    return;
  }

  const to = "sabkacode@gmail.com";
  const body = `Naam: ${name}\nEmail: ${email}\n\nMessage:\n${message}`;

  window.location.href = `mailto:${to}?subject=${encodeURIComponent(
    subject
  )}&body=${encodeURIComponent(body)}`;

  const form = document.getElementById("contactForm");
  const success = document.getElementById("successMsg");

  if (form) form.style.display = "none";
  if (success) success.style.display = "block";
}

/* -------------------------------
   Site Init
-------------------------------- */
function initSite() {
  Promise.all([
    loadPartial("nav", ["/nnav.html", "nnav.html"]),
    loadPartial("footer", ["/footer.html", "footer.html"]),
  ]).then(() => {
    initResponsiveNav();
    initFloatingButtons();
    initPopup();
    initReveal();
  });
}

document.addEventListener("DOMContentLoaded", initSite);

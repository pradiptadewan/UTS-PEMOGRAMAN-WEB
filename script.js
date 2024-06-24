const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", (e) => {
  navLinks.classList.toggle("open");

  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

navLinks.addEventListener("click", (e) => {
  navLinks.classList.remove("open");
  menuBtnIcon.setAttribute("class", "ri-menu-line");
});

const scrollRevealOption = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

ScrollReveal().reveal(".header__container .section__subheader", {
  ...scrollRevealOption,
});

ScrollReveal().reveal(".header__container h1", {
  ...scrollRevealOption,
  delay: 500,
});

ScrollReveal().reveal(".header__container .btn", {
  ...scrollRevealOption,
  delay: 1000,
});

ScrollReveal().reveal(".about p", {
    ...scrollRevealOption,
    interval: 500,
  });

  ScrollReveal().reveal(".about h2", {
    ...scrollRevealOption,
    interval: 500,
  });

  ScrollReveal().reveal(".about h4", {
    ...scrollRevealOption,
    interval: 500,
  });

  ScrollReveal().reveal(".about img", {
    ...scrollRevealOption,
    interval: 500,
  });

  ScrollReveal().reveal(".about .btn", {
    ...scrollRevealOption,
    interval: 500,
  });

ScrollReveal().reveal(".room__card", {
  ...scrollRevealOption,
  interval: 500,
});

ScrollReveal().reveal(".feature__card", {
  ...scrollRevealOption,
  interval: 500,
});

ScrollReveal().reveal(".maps", {
    ...scrollRevealOption,
    interval: 500,
  });


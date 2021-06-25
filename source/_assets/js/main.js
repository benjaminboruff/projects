let menuArrow = document.getElementById("menu-arrow");

mobileMenu = document.getElementById("menu");

// open and close menu via hamburger
menuArrow.addEventListener("click", function () {
  menuArrow.classList.toggle("rotate-180");
  mobileMenu.classList.toggle("hidden");
});

let menuArrow = document.getElementById("menu-arrow");
let mobileSidebar = document.getElementById("sidebar");
let logo = document.getElementById("logo");
let sidebarItems = document.querySelectorAll(
  "#side-home, #side-about, #side-contact"
);

// open and close sidebar via menu-arrow
menuArrow.addEventListener("click", function () {
  menuArrow.classList.toggle("transition");
  menuArrow.classList.toggle("duration-700");
  menuArrow.classList.toggle("transform");
  menuArrow.classList.toggle("rotate-180");
  menuArrow.offsetHeight;

  mobileSidebar.classList.toggle("transition");
  mobileSidebar.classList.toggle("duration-700");
  mobileSidebar.classList.toggle("transform");
  mobileSidebar.classList.toggle("translate-x-full");
});

// close sidebar when menu item is clicked
sidebarItems.forEach(function (elem) {
  elem.addEventListener("click", function () {
    menuArrow.classList.toggle("transition");
    menuArrow.classList.toggle("duration-700");
    menuArrow.classList.toggle("transform");
    menuArrow.classList.toggle("rotate-180");

    mobileSidebar.classList.toggle("transition");
    mobileSidebar.classList.toggle("duration-700");
    mobileSidebar.classList.toggle("transform");
    mobileSidebar.classList.toggle("translate-x-full");
  });
});

// When the user scrolls down, hide the logo. When the user scrolls back to the top, show the logo
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos !== currentScrollPos) {
    logo.classList.add("invisible");
  } else {
    logo.classList.remove("invisible");
  }
};

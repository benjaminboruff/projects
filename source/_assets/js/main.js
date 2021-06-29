let menuArrow = document.getElementById("menu-arrow");
let mobileSidebar = document.getElementById("sidebar");

// open and close sidebar via menu-arrow
menuArrow.addEventListener("click", function () {
  menuArrow.classList.toggle("rotate-180");
  
  mobileSidebar.classList.toggle("transition");
  mobileSidebar.classList.toggle("duration-700");
  mobileSidebar.classList.toggle("transform");
  mobileSidebar.classList.toggle("translate-x-full");
});

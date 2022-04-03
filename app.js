const openMobileMenu = document.querySelector(".mobile-icon");

openMobileMenu.addEventListener("click", () => {
  document.querySelector('.mobile-nav').style.display = "block"

});
const closeMobileMenu = document.querySelector(".mobile-close");
closeMobileMenu.addEventListener("click", () => {
  console.log("hey")
  document.querySelector('.mobile-nav').style.display = "none"
});

const closeMobileMenuItem = document.querySelector("#mobile-item");
closeMobileMenuItem.addEventListener("click", () => {
  console.log("hey")
  document.querySelector('.mobile-nav').style.display = "none"
  
});
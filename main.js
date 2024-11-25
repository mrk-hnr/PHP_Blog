// DECLARATIONS
const navItems = document.querySelector(".nav__items");
// const openNavButton = document.querySelector("#open__nav-button");
// const closeNavButton = document.querySelector("#close__nav-button");
const openNavButton = document.getElementById("open__nav-button");
const closeNavButton = document.getElementById("close__nav-button");

// FUNCTIONS
const openNav = () => {
  navItems.style.display = "flex";
  openNavButton.style.display = "none";
  closeNavButton.style.display = "inline-block";
};

const closeNav = () => {
  navItems.style.display = "none";
  openNavButton.style.display = "inline-block";
  closeNavButton.style.display = "none";
};

// EVENT LISTENERS
openNavButton.addEventListener("click", openNav);
closeNavButton.addEventListener("click", closeNav);

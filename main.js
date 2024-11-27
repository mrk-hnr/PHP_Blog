// NAV
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

// DASHBOARD LEFT-RIGHT & ASIDE

const sidebar = document.querySelector("aside");
const showSidebarButton = document.getElementById("show__sidebar-button");
const hideSidebarButton = document.getElementById("hide__sidebar-button");

const showSideBar = () => {
  sidebar.style.left = "0";
  showSidebarButton.style.display = "none";
  hideSidebarButton.style.display = "inline-block";
};

const hideSideBar = () => {
  sidebar.style.left = "-100%";
  showSidebarButton.style.display = "inline-block";
  hideSidebarButton.style.display = "none";
};

showSidebarButton.addEventListener("click", showSideBar);
hideSidebarButton.addEventListener("click", hideSideBar);

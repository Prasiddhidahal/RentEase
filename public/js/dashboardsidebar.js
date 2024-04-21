// const shrink_btn = document.querySelector(".shrink-btn");
// const search = document.querySelector(".search");
// const sidebar_links = document.querySelectorAll(".sidebar-links a");
// const active_tab = document.querySelector(".active-tab");
// const shortcuts = document.querySelector(".sidebar-links h4");
// const tooltip_elements = document.querySelectorAll(".tooltip-element");

// let activeIndex;


// var currentLocation = window.location.pathname.split('/').pop();
// if (currentLocation === '2fa') {
//   document.getElementById('dashboard').classList.remove('active');
//   document.getElementById('2fa').classList.add('active');
//   activeIndex = 1;
 

// } else if (currentLocation === 'property_manage') {
//   document.getElementById('dashboard').classList.remove('active');
//   document.getElementById('property_manage').classList.add('active');
// } else if  (currentLocation === 'manage_profile'){
//   document.getElementById('account').classList.add('active');
//   document.getElementById('dashboard').classList.remove('active');
// }
// else if  (currentLocation === 'fav'){
//   document.getElementById('fav').classList.add('active');
//   document.getElementById('dashboard').classList.remove('active');
// }
// else if  (currentLocation === 'request'){
//   document.getElementById('message_request').classList.add('active');
//   document.getElementById('dashboard').classList.remove('active');
// }

// shrink_btn.addEventListener("click", () => {
//   document.body.classList.toggle("shrink");
//   setTimeout(moveActiveTab, 400);

//   shrink_btn.classList.add("hovered");

//   setTimeout(() => {
//     shrink_btn.classList.remove("hovered");
//   }, 500);
// });

// search.addEventListener("click", () => {
//   document.body.classList.remove("shrink");
//   search.lastElementChild.focus();
// });

// function moveActiveTab() {
//   let topPosition = activeIndex * 58 + 2.5;

//   if (activeIndex > 3) {
//     topPosition += shortcuts.clientHeight;
//   }

//   active_tab.style.top = `${topPosition}px`;
// }

// function changeLink() {
//   sidebar_links.forEach((sideLink) => sideLink.classList.remove("active"));
//   this.classList.add("active");

//   activeIndex = this.dataset.active;

//   moveActiveTab();
// }

// sidebar_links.forEach((link) => link.addEventListener("click", changeLink));

// function showTooltip() {
//   let tooltip = this.parentNode.lastElementChild;
//   let spans = tooltip.children;
//   let tooltipIndex = this.dataset.tooltip;

//   Array.from(spans).forEach((sp) => sp.classList.remove("show"));
//   spans[tooltipIndex].classList.add("show");

//   tooltip.style.top = `${(100 / (spans.length * 2)) * (tooltipIndex * 2 + 1)}%`;
// }

// tooltip_elements.forEach((elem) => {
//   elem.addEventListener("mouseover", showTooltip);
// });
const shrinkBtn = document.querySelector(".shrink-btn");
const search = document.querySelector(".search");
const sidebarLinks = document.querySelectorAll(".sidebar-links a");
const activeTab = document.querySelector(".active-tab");
const shortcuts = document.querySelector(".sidebar-links h4");
const tooltipElements = document.querySelectorAll(".tooltip-element");

let activeIndex;
const sidebarStateKey = "sidebarState";

// Get the current page URL
const currentLocation = window.location.pathname.split('/').pop();

// Check if a saved sidebar state exists
const savedSidebarState = localStorage.getItem(sidebarStateKey);

if (savedSidebarState === "shrink") {
  document.body.classList.add("shrink");
}

// Set the active tab based on the current page URL
if (currentLocation === "2fa") {
  document.getElementById("dashboard").classList.remove("active");
  document.getElementById("2fa").classList.add("active");
  activeIndex = 1;
} else if (currentLocation === "property_manage") {
  document.getElementById("dashboard").classList.remove("active");
  document.getElementById("property_manage").classList.add("active");
} else if (currentLocation === "manage_profile") {
  document.getElementById("account").classList.add("active");
  document.getElementById("dashboard").classList.remove("active");
} else if (currentLocation === "fav") {
  document.getElementById("fav").classList.add("active");
  document.getElementById("dashboard").classList.remove("active");
} else if (currentLocation === "request") {
  document.getElementById("message_request").classList.add("active");
  document.getElementById("dashboard").classList.remove("active");
}
else if (currentLocation === "profile") {
  document.getElementById("dashboard").classList.remove("active");
  document.getElementById("profile").classList.add("active");
}

shrinkBtn.addEventListener("click", () => {
  document.body.classList.toggle("shrink");
  setTimeout(moveActiveTab, 400);

  shrinkBtn.classList.add("hovered");

  setTimeout(() => {
    shrinkBtn.classList.remove("hovered");
  }, 500);

  // Save the current sidebar state
  const sidebarState = document.body.classList.contains("shrink") ? "shrink" : "expand";
  localStorage.setItem(sidebarStateKey, sidebarState);
});

search.addEventListener("click", () => {
  document.body.classList.remove("shrink");
  search.lastElementChild.focus();
});

function moveActiveTab() {
  let topPosition = activeIndex * 58 + 2.5;

  if (activeIndex > 3) {
    topPosition += shortcuts.clientHeight;
  }

  activeTab.style.top = `${topPosition}px`;
}

function changeLink() {
  sidebarLinks.forEach((sideLink) => sideLink.classList.remove("active"));
  this.classList.add("active");

  activeIndex = this.dataset.active;

  moveActiveTab();
}

sidebarLinks.forEach((link) => link.addEventListener("click", changeLink));

function showTooltip() {
  let tooltip = this.parentNode.lastElementChild;
  let spans = tooltip.children;
  let tooltipIndex = this.dataset.tooltip;

  Array.from(spans).forEach((sp) => sp.classList.remove("show"));
  spans[tooltipIndex].classList.add("show");

  tooltip.style.top = `${(100 / (spans.length * 2)) * (tooltipIndex * 2 + 1)}%`;
}

tooltipElements.forEach((elem) => {
  elem.addEventListener("mouseover", showTooltip);
});

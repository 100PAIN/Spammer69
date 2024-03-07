const input = document.getElementById("input");
const icons = document.querySelectorAll(".icon");
const iconsContainer = document.querySelector(".icon-container");

// show the icons
function toggleIcons(e) {
  e.preventDefault();
  icons.forEach((icon) => icon.classList.toggle("hidden"));
  icons.forEach((icon) => icon.classList.toggle("translate-0"));
  iconsContainer.classList.toggle("icon-container-bg");
}

input.addEventListener(`click`, toggleIcons);
input.addEventListener(`focus`, toggleIcons);

// add selected icon to the input value
function addIcon(e) {
  e.preventDefault();
  // guard clause
  if (icons[0].classList.contains("hidden")) return;

  input.value = e.target.textContent;
}

iconsContainer.addEventListener(`focus`, addIcon);
iconsContainer.addEventListener(`click`, addIcon);

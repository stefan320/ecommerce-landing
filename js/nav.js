//Close the mob navigation when clicking a link
const navList = document.querySelector(".nav__list");
const checkbox = document.querySelector(".nav--checkbox");
navList.addEventListener("click", e => {
  if (e.target.classList.contains("nav__list--link")) {
    if (checkbox.checked) {
      checkbox.checked = false;
    }
  }
});

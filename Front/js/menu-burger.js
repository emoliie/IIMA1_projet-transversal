let button = document.querySelector("#button");

function burgerMenu(x) {
  x.classList.toggle("change");
}

button.addEventListener("click", function () {
  console.log("click");

  let burger_menu = document.querySelector("#burger-menu");
  burger_menu.classList.toggle("open");
});

let body = document.querySelector("body");
let burgerSection = document.querySelector(".button-section");

let menu = document.getElementById("burger-menu");
body.addEventListener("click", function (event) {
  const target = event.target;
  if (
    target.classList.contains("button-section") ||
    target.classList.contains("bar1") ||
    target.classList.contains("bar2") ||
    target.classList.contains("bar3")
  )
    return;
  if (!menu.classList.contains("open")) return; 
  if (target !== menu) {
    menu.classList.remove("open");
    burgerMenu(burgerSection);
  }
});
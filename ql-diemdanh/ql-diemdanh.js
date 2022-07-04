
const menuBtn = document.getElementById("menu-btn");
const menuLeft = document.getElementById("menu-left");
const menuLeftBtn = document.getElementById("menu-left-btn");

menuLeftBtn.addEventListener("click", () => {
  menuLeft.style.left = "-600px";
});
menuBtn.addEventListener("click", () => {
  menuLeft.style.left = "0px";
});

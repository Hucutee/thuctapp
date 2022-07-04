const form = document.getElementById("popup-add");
const addBtn = document.getElementById("add");
const closeBtn = document.getElementById("close");
const menuBtn = document.getElementById("menu-btn");
const menuLeft = document.getElementById("menu-left");
const menuLeftBtn = document.getElementById("menu-left-btn");
closeBtn.addEventListener("click", () => {
  form.style.display = "none";
});

addBtn.addEventListener("click", () => {
  form.style.display = "flex";
});
menuLeftBtn.addEventListener("click", () => {
  menuLeft.style.left = "-600px";
});
menuBtn.addEventListener("click", () => {
  menuLeft.style.left = "0px";
});

require("./bootstrap");

const temp = document.querySelector(".panel");
const temp1 = document.querySelector(".header_tab");
const temp2 = document.querySelector("body");

temp.addEventListener("click", () => {
    temp.classList.toggle("active");
    temp1.classList.toggle("active");
    temp2.classList.toggle("lock");
});

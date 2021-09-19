const menuBurger = document.querySelector('.burger');
const menuList = document.querySelector('.nav__list');

menuBurger.addEventListener("click", function(e) {
    menuBurger.classList.toggle('active-burger');
    menuList.classList.toggle('list--block');
})
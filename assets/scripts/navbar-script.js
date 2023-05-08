const button = document.querySelector('.header__navbar__hamburger');
const content = document.querySelector('.navbar__box');

button.addEventListener('click', () => {
    content.classList.toggle('navbar__toggle');
}
)
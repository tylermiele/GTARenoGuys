const header = document.querySelector('header');

window.onscroll = function () {
    scrollFunction();
}

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        header.classList.remove('header-default');
        header.classList.add('header-scroll');
    } else {
        header.classList.add('header-default');
        header.classList.remove('header-scroll');
    }
}

// const buttons = document.querySelectorAll("button");

// buttons.forEach((button) => {
//   button.addEventListener("click", () => {
//     const currentState = button.getAttribute("data-state");

//     if (!currentState || currentState === "closed") {
//       button.setAttribute("data-state", "opened");
//       button.setAttribute("aria-expanded", "true");
//     } else {
//       button.setAttribute("data-state", "closed");
//       button.setAttribute("aria-expanded", "false");
//     }
//   });
// });

const buttonOpen = document.querySelector('.button-open');
const buttonClose = document.querySelector('.button-close');
const mobileNav = document.querySelector('.mobile-nav');

buttonOpen.addEventListener('click', () =>{
    mobileNav.showModal();
    mobileNav.style.display = 'grid';
});
buttonClose.addEventListener('click', () =>{
    mobileNav.close();
    mobileNav.style.display = 'none';
});



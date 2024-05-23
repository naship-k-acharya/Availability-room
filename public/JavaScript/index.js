const swiper = new Swiper(".swiper_room", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

const swiper_facilities = new Swiper(".swiper_facilities", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper_facilities-button-next",
        prevEl: ".swiper_facilities-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
        el: ".swiper_facilities-scrollbar",
        draggable: true,
    },
});

const swiper_food = new Swiper(".swiper_food", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    // Navigation arrows
    navigation: {
        nextEl: ".swiper_food-button-next",
        prevEl: ".swiper_food-button-prev",
    },

    // And if we need scrollbar
    scrollbar: {
        el: ".swiper_food-scrollbar",
        draggable: true,
    },
});

const swiper_gourmet = new Swiper(".swiper_gourmet", {
    // Optional parameters
    direction: "horizontal",
    loop: true,

    // If we need pagination
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    // Navigation arrows
    // navigation: {
    //   nextEl: '.swiper_food-button-next',
    //   prevEl: '.swiper_food-button-prev',
    // },

    // And if we need scrollbar
    scrollbar: {
        el: ".swiper_gourmet-scrollbar",
        draggable: true,
    },
});

const menuMobil = document.querySelector(".container-menu__toggle");
const menuOpenMobil = menuMobil.querySelector(".container-menu__burger");
const menuCloseMobil = document.querySelector(".container-menu__burger-close");
menuCloseMobil.style.display = "none";

function toggleMenu(e) {
    e.preventDefault();
    let toggleMenuMobil = document
        .querySelector(".nav__list")
        .classList.toggle("is_active");
    if (toggleMenuMobil) {
        menuOpenMobil.style.display = "none";
        menuCloseMobil.style.display = "inline-block";
    } else {
        menuOpenMobil.style.display = "initial";
        menuCloseMobil.style.display = "none";
    }
}
menuMobil.addEventListener("click", toggleMenu);

//Navbar scrolling functionality
let nav = document.getElementById("nav-scroll");
let initialValue = 0;
let positionScroll = window.innerWidth < 999 ? true : false;

window.addEventListener("scroll", (e) => {
    if (window.scrollY > 200) {
        nav.classList.remove("topMenu");
        nav.classList.add("menuHidden");
    } else {
        nav.classList.add("topMenu");
        nav.classList.remove("menuHidden");
    }
});

document.addEventListener("mouseover", (e) => {
    if (e.y < 100 && window.scrollY > 200) {
        nav.classList.remove("menuHidden");
    } else if (e.y > 100 && window.scrollY > 200) {
        nav.classList.add("menuHidden");
    }
});

const form = document.getElementById("availabilityForm");
const modal = document.getElementById("availabilityModal");
const aceptBtn = document.getElementById("modalBtn");

form === null || form === void 0
    ? void 0
    : form.addEventListener("keyup", function (e) {
          e.target.classList.remove("pageContactForm__form__inputError");
      });
form === null || form === void 0
    ? void 0
    : form.addEventListener("change", function (e) {
          e.target.classList.remove("pageContactForm__form__inputError");
      });

aceptBtn === null || aceptBtn === void 0
    ? void 0
    : aceptBtn.addEventListener("click", function () {
          modal === null || modal === void 0
              ? void 0
              : modal.classList.add(
                    "pageDetailsAvailability__modalContainer-hidden"
                );
      });

const editButtons = document.getElementsByClassName("editButton");

for (let i = 0; i < editButtons.length; i++) {
    let editButtonMode = false;
    editButtons[i].addEventListener("click", function () {
        const { oid } = editButtons[i].dataset;
        const descriptionForm = document.getElementById(`f-${oid}`);
        const orderDescriptionP = document.getElementById(`p-${oid}`);
        if (editButtonMode) {
            descriptionForm.submit();
            descriptionForm.classList.add("hidden");
            descriptionForm.classList.remove("visible");
            orderDescriptionP.classList.add("visible");
            orderDescriptionP.classList.remove("hidden");
            editButtons[i].innerText = "edit";
            editButtons[i].style.color = "#62f088";
            editButtonMode = false;
        } else {
            descriptionForm.classList.add("visible");
            descriptionForm.classList.remove("hidden");
            orderDescriptionP.classList.add("hidden");
            orderDescriptionP.classList.remove("visible");
            editButtons[i].innerText = "save";
            editButtons[i].style.color = "#5e5ef5";
            editButtonMode = true;
        }
    });
}

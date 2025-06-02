
const navbar = document.querySelector(".navbar")
const logo = document.querySelector(".logo-svg use")
const mMenuToggle = document.querySelector(".mobile-menu-toggle")
const menu = document.querySelector(".mobile-menu")
const isFront = document.body.classList.contains("front-page")

const lightModeOn = (event) => {
    navbar.classList.add("navbar-light");
}

const lightModeOff = (event) => {
    navbar.classList.remove("navbar-light");
}

const changeNavHeight = (height) => {
    navbar.style.height = height;
}

const openMenu = (event) => {
    menu.classList.add("is-open");
    mMenuToggle.classList.add("close-menu");
    document.body.style.overflow = "hidden";
    lightModeOn();
}

const closeMenu = (event) => {
    menu.classList.remove("is-open");
    mMenuToggle.classList.remove("close-menu");
    document.body.style.overflow = "";
    lightModeOff();
}

window.addEventListener("scroll", () => {
    this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem");
    if (isFront) {
        this.scrollY > 1 ? lightModeOn() : lightModeOff();
    }

});

mMenuToggle.addEventListener("click", (event) => {
    event.preventDefault();
    menu.classList.contains("is-open") ? closeMenu() : openMenu();

});

const swiperSteps = new Swiper(".steps-slider", {
    speed: 400,
    loop: true,
    slidesPerView: 1,
        navigation: {
        nextEl: ".steps-button-next",
        prevEl: ".steps-button-prev",
    },
        breakpoints: {
        576: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 4,
        },
    }
});

const swiper = new Swiper('.features-slider', {
    speed: 400,
    // autoHeight: true,
    loop: true,
    slidesPerView: 1,
    navigation: {
        nextEl: ".slider-button-next",
        prevEl: ".slider-button-prev",
    },
    breakpoints: {
        576: {
            slidesPerView: 2,
            centeredSlides: true,
        },
        768: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 4,
        },
        1200: {
            slidesPerView: 5,
        },
    }

});

const swiperBlog = new Swiper(".blog-slider", {
    speed: 400,
    loop: true,
    slidesPerView: 2,
    spaceBetween: 30,
    navigation: {
        nextEl: ".blog-button-next",
        prevEl: ".blog-button-prev",
    },

});

const  modal = document.querySelector(".modal");
const  modalDialog = document.querySelector(".modal-dialog");

document.addEventListener("click", (event) => {
    if (event.target.dataset.toggle === "modal" ||
        event.target.parentNode.dataset.toggle === "modal" ||
        !event.composedPath().includes(modalDialog) && 
        modal.classList.contains("is-open"))
        {
            event.preventDefault();
            modal.classList.toggle("is-open");
        }
});

document.addEventListener("keyup", (event) => {
    if (event.key === "Escape" && modal.classList.contains("is-open")){
        modal.classList.toggle("is-open");
    }
});
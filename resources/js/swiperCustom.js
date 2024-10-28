import Swiper from "swiper/bundle";

import "swiper/css/bundle";
const swiper = new Swiper(".swiper", {
    slidesPerView: 5,
    loop: true,
    loopPreventsSliding: true,
    centeredSlides: true,
    spaceBetween: 15,
    initialSlide: -1,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

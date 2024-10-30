import Swiper from "swiper/bundle";
import "swiper/css/bundle";

document.addEventListener("DOMContentLoaded", function () {
    const categories = document.querySelectorAll(".swiper-container");

    categories.forEach((container, index) => {
        new Swiper(`.swiper-container-${index}`, {
            slidesPerView: 6,
            loop: true,
            initialSlide: 1,
            loopPreventsSliding: true,
            spaceBetween: 20,
            watchOverflow: true,
            slidesPerGroup: 1,
            pagination: {
                el: `.swiper-pagination-${index}`,
                clickable: true,
            },
            navigation: {
                nextEl: `.swiper-button-next-${index}`,
                prevEl: `.swiper-button-prev-${index}`,
            },
        });
    });
});

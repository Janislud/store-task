const swiper = new Swiper('.swiper', {
    slidesPerView: 3,
    speed: 400,
    spaceBetween: 20,
    loop: true,
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
});
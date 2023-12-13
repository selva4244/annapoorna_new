var swiper = new Swiper(".slide-content", {
    slidesPerView: 20,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        900: {
            slidesPerView: 1,
        },
        900: {
            slidesPerView: 2,
        },
        900: {
            slidesPerView: 3,
        },
	600: {
            slidesPerView: 4,
        },
	600: {
            slidesPerView: 5,
        },
	600: {
            slidesPerView: 6,
        },
	600: {
            slidesPerView: 7,
        },
    },
  });
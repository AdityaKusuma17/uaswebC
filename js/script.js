// const swiper = new Swiper(".card-slider", {
//     slidesPerView: 3,
//     spaceBetween: 30,
//     pagination: {
//       el: ".swiper-pagination",
//       clickable: true,
//     },
//   });
const swiper = new Swiper('.card-slider', {
  direction: 'horizontal',
  loop: true,

  autoplay: {
    delay: 5000,
  },

  pagination: {
    el: '.swiper-pagination',
  },
});
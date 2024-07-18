let testimonialsSwiper = new Swiper('.testimonials-swiper', {
    slidesPerView: 5,
    speed: 300,
    spaceBetween: 20,
    breakpoints: {
    275: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    640: {
      slidesPerView: 3,
      spaceBetween: 20
    },
    720: {
      slidesPerView: 4,
      spaceBetween: 20
    },
    1000: {
        slidesPerView: 5,
        spaceBetween: 20
      }
    },
    loop: true,
    navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    },
});

const testimonialsData = [
    {
        image: 'assets/person1.webp',
        comment: '"I love it!"',
        author: 'Liv'
    },    
    {
        image: 'assets/person2.webp',
        comment: '"Reccomended for everyone"',
        author: 'Marco'
    },    
    {
        image: 'assets/person3.webp',
        comment: '"Great product"',
        author: 'Charli'
    },    
    {
        image: 'assets/person4.webp',
        comment: '"Captivating smell"',
        author: 'Myke'
    },    
    {
        image: 'assets/person5.webp',
        comment: '"My partner loved it!"',
        author: 'Kira'
    },    
    {
        image: 'assets/person6.webp',
        comment: '“Never dissapoints”',
        author: 'James'
    },    
    {
        image: 'assets/person7.webp',
        comment: '"Pleasant smell in the room for so long"',
        author: 'Lola'
    },    
    {
        image: 'assets/person8.webp',
        comment: '“Exceptional quality!”',
        author: 'Kate'
    },    
    {
        image: 'assets/person9.webp',
        comment: '“Great, as always”',
        author: 'Jenny'
    },    
    {
        image: 'assets/person10.webp',
        comment: '“Melted my heart”',
        author: 'Juan'
    },
];
  
const testimonialsSliderWrapper = document.querySelector('.testimonials-container.testimonials-swiper .swiper-wrapper');

testimonialsData.forEach(testimonial => {
  const testimonialSlide = document.createElement('div');
  testimonialSlide.classList.add('testimonials-container-box');
  testimonialSlide.classList.add('swiper-slide');

  try {
    const image = document.createElement('img');
    image.src = testimonial.image;
    image.alt = 'person';
    image.classList.add('testimonials-person');
    testimonialSlide.appendChild(image);

    const comment = document.createElement('h4');
    comment.textContent = testimonial.comment;
    comment.classList.add('testimonials-comment');
    testimonialSlide.appendChild(comment);

    const author = document.createElement('p');
    author.textContent = testimonial.author;
    testimonialSlide.appendChild(author);
  } catch (error) {
    console.error('Error creating testimonial box:', error);
  }

  testimonialsSliderWrapper.appendChild(testimonialSlide);
});

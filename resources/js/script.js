// Navbar Inizio
let navbarTrasformation = document.querySelector('#navId')


let navCustom = document.querySelector('.navcustom')



// evento navbar
window.addEventListener('scroll', ()=>{
    let scrolled = window.scrollY;

    if(scrolled > 650){
        navbarTrasformation.classList.add('p-0');
        navCustom.classList.add('w-100')
        
    } else {
        navbarTrasformation.classList.remove('p-0');
        navCustom.classList.remove('w-100')
    }
    
})



// Inizio section Carousel

const swiper = new Swiper('.mySwiper', {
    // Optional parameters
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
   
  });

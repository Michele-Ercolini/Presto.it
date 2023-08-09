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




  
// Section 1 numeri

let primoNumero = document.querySelector('#primoNumero')
let secondoNumero = document.querySelector('#secondoNumero')


function createInterval(total,element,timing) {
    

let counter = 0
let interval = setInterval(()=>{
    if (counter < total) {
        counter++
        element.innerHTML = counter
        
        
    } else{
        clearInterval(interval)
    }
    console.log(counter);
    
}, timing)
}

let check = true

let observer = new IntersectionObserver((entries) =>{
    entries.forEach(entry =>{
        if (entry.isIntersecting && check) {
            createInterval(1500, primoNumero, 10)
            createInterval(5000, secondoNumero, 1)
            
            check = false
            // setTimeout(() => {
            //     check = true
            // }, 17000);
        }
    })
})

observer.observe(primoNumero)
// Section numeri casuali Fine
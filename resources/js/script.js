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
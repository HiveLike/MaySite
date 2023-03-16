const init = () => {
    const parent = document.querySelector('.slider_cont');
    const slides = parent.querySelectorAll('.slide');
    const dots = parent.querySelectorAll('.dot');

    /*dots.forEach((dot,index) => {
         dot.addEventListener('click',()=>{
             dots.forEach((onedot) => {
                 onedot.classList.remove('active');
             });
             slides.forEach((oneslide) => {
                 oneslide.classList.remove('active');
             });

             dots[index].classList.add('active');
             slides[index].classList.add('active');
         })
    });*/

}

document.addEventListener('DomContentLoaded',init())

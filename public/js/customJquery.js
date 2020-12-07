// Toggle on Hamburger Menu Click
let hamburgerBtn = $('.navbar-toggler');
let menuOuterLayer = $('.outerLayer');
let openCloseBtn = [hamburgerBtn,menuOuterLayer];
//Loop through elements i can click to open and close menu
openCloseBtn.forEach(controlSideMenu => {
    controlSideMenu.click(function() {
        $('.side-menu').toggleClass('open-menu');
        $('.hamburger-icon').toggleClass('is-opened');
        $(document.body).toggleClass('lock-scroll'); //Lock screen scroll when added to body
    }); 
});
//Navbar
$(function(){
    let scroll = $(document).scrollTop();
    let navHeight = $('nav').outerHeight();
    console.log(navHeight);
    $(window).scroll(function () {
        let scrolled = $(document).scrollTop();
        // console.log(scrolled);
        if(scrolled > navHeight){
            $('nav').addClass('animated');
        }else{
            $('nav').removeClass('animated');
        }

        if (scrolled > scroll) {
            $('nav').removeClass('sticky');
        }else{
            $('nav').addClass('sticky');
        }

        scroll = $(document).scrollTop();
    });
});

//Slider
// let slides = $('.sliding-system a.slide').length
//     let maxSlides;
//     let moveTotal;
//     let currentSlide=0;

//     //Run function when screen is resize
//     $(window).resize(function () {
//       currentSlide = 0;
//       $('.sliding-system').css('transform', 'translate3d(-0%,0,0');
//     })

//     //Function to ensure slider is mobile ready //Desktop view
//     function desktopSlider() {
//       if (a.matches) {
//         maxSlides = Math.ceil((slides * 20) / 100);
//         moveTotal = 100;

//         //right btn
//         $('.right-btn').on('click', () => {
//           console.log('right btn click')
//           if(currentSlide < maxSlides){
//             currentSlide += 20;
//             $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
//           }
//         })
//         //left btn
//         $('.left-btn').on('click', () => {
//           console.log('left btn click')
//           if(currentSlide != 0){
//             currentSlide -= 20;
//             $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
//           }
//         })
//       }
//     }

//     var a = window.matchMedia("(min-width:998px)")
//     desktopSlider(a)
//     a.addListener(desktopSlider)

//     //Tablet view
//     function tabletSlider() {
//       if (b.matches){
//         maxSlides = Math.ceil((slides * 50) / 100)
//         moveTotal = 100

//         //right btn
//         $('.right-btn').on('click', () => {
//           console.log('right btn click')
//           if(currentSlide < ((maxSlides * 100) - 100)){
//             currentSlide += 50;
//             $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
//           }
//         })
//         //left btn
//         $('.left-btn').on('click', () => {
//           console.log('left btn click')
//           if(currentSlide != 0){
//             currentSlide -= 50;
//             $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
//           }
//         })
//       }
//     }

//     var b = window.matchMedia("(min-width:768px) and (max-width:997px)")
//     console.log(b);
//     tabletSlider(b)
//     b.addListener(tabletSlider)

// Toggle on Hamburger Menu Click
let hamburgerBtn = $('.navbar-toggler');
let menuOuterLayer = $('.outerLayer');
let openCloseBtn = [hamburgerBtn,menuOuterLayer];
//Loop through elements i can click to open and close menu
openCloseBtn.forEach(controlSideMenu => {
    controlSideMenu.on('click',function() {
        $('.side-menu').toggleClass('open-menu');
        $('.hamburger-icon').toggleClass('is-opened');
        $(document.body).toggleClass('lock-scroll'); //Lock screen scroll when added to body
    }); 
});
//Navbar
$(function(){
  // $(document).ready(function(){
    let scroll = $(document).scrollTop();
    let navHeight = $('#headerNav').outerHeight();
    console.log(scroll);
    $(window).on('scroll',function () {
        let scrolled = $(document).scrollTop();
        console.log('scrolled');
        if(scrolled > navHeight){
            $('#headerNav').addClass('animated');
        }else{
            $('#headerNav').removeClass('animated');
        }

        if (scrolled > scroll) {
            $('#headerNav').removeClass('sticky');
        }else{
            $('#headerNav').addClass('sticky');
        }

        scroll = $(document).scrollTop();
    });
  // });
});

// Slider
let slides = $('.sliding-system a.slide').length
    let maxSlides;
    let moveTotal;
    let currentSlide=0;

    //Run function when screen is resize
    $(window).on('resize',function () {
      currentSlide = 0;
      $('.sliding-system').css('transform', 'translate3d(-0%,0,0');
    })

    //Function to ensure slider is mobile ready //Desktop view
    function desktopSlider() {
      if (a.matches) {
        maxSlides = Math.ceil((slides * 20) / 100);
        moveTotal = 100;

        //right btn
        $('.right-btn').on('click', () => {
          console.log('right btn click')
          if(currentSlide < maxSlides){
            currentSlide += 20;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
          }
        })
        //left btn
        $('.left-btn').on('click', () => {
          console.log('left btn click')
          if(currentSlide != 0){
            currentSlide -= 20;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
          }
        })
      }
    }

    var a = window.matchMedia("(min-width:998px)");
    desktopSlider(a);
    a.addEventListener('change',desktopSlider);

    //Tablet view
    function tabletSlider() {
      if (b.matches){
        maxSlides = Math.ceil((slides * 50) / 100)
        moveTotal = 100

        //right btn
        $('.right-btn').on('click', () => {
          console.log('right btn click')
          if(currentSlide < ((maxSlides * 100) - 100)){
            currentSlide += 50;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
          }
        })
        //left btn
        $('.left-btn').on('click', () => {
          console.log('left btn click')
          if(currentSlide != 0){
            currentSlide -= 50;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
          }
        })
      }
    }

    var b = window.matchMedia("(min-width:768px) and (max-width:997px)");
    console.log(b);
    tabletSlider(b);
    b.addEventListener('change',tabletSlider);

    // Temp Account
      var tempEmail = 'billy@gmail.com'
      var tempPass = '12345678'
      $('.temp-account').on('change',function() {
          if (this.checked) {
              $('.temp-account').next().text('Click Sign In')
              $('#email').val(tempEmail)
              $('#password').val(tempPass)
          }
          else {
              $('.temp-account').next().text('Temp Account')
              $('#email').val('')
              $('#password').val('')
          }
      });
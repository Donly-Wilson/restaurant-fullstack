<section id="food-preview">
    <h2>We have everything you need To kill your hunger</h2>
    <div class="container">
      <div class="left-btn">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </div>
      <div class="right-btn">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
      <div class="food-slider">
        <div class="sliding-system">
          @foreach ($categories as $category)
            <a  href="menu/{{strtolower($category->title)}}" class="slide">
              <div class="background"></div>
              <div class="content">
                <div class="food-title">
                  {{$category->title}}
                </div>
                <p class="food-description">{{$category->description}}</p>
                <div class="food-image"><img src="{{$category->image_url}}" alt="">
                </div>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>

  <script>
    let slides = $('.sliding-system a.slide').length
    let maxSlides;
    let moveTotal;
    let currentSlide=0;

    //Run function when screen is resize
    $(window).resize(function () {
      currentSlide = 0;
      $('.sliding-system').css('transform', 'translate3d(-0%,0,0');
    })

    //Function to ensure slider is mobile ready
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

    var a = window.matchMedia("(min-width:998px)")
    desktopSlider(a)
    a.addListener(desktopSlider)

    function tabletSlider() {
      if (b.matches){
        
      }
    }
  </script>
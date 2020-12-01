@extends('layouts.landing-page')

@section('title')
{{$settings["general"]->site_title}} - St.Lucia Selling Franchise
@endsection

@section('content')
<section id="information">
  <div class="restaurant-image">
    <img src="./img/top-view.jpg" alt="">
  </div>
  <div class="info">
    <h2>We Start From The Bottom In 1987</h2>
    <div class="paragraphs">
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis possimus quae vel, iste, sint repellendus
        debitis aperiam iure repellat, quidem nostrum facilis laborum voluptatum! Maxime ipsam libero id asperiores
        quia?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis possimus quae vel, iste, sint repellendus
        debitis aperiam iure repellat, quidem nostrum facilis laborum voluptatum! Maxime ipsam libero id asperiores
        quia?</p>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis possimus quae vel, iste, sint repellendus
        debitis aperiam iure repellat, quidem nostrum facilis laborum voluptatum! Maxime ipsam libero id asperiores
        quia?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis possimus quae vel, iste, sint repellendus
        debitis aperiam iure repellat, quidem nostrum facilis laborum voluptatum! Maxime ipsam libero id asperiores
        quia?</p>
    </div>
    <a href="#" class="about-link"><span>Learn More About Our Restaurants</span>
      <div class="circle-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
    </a>
  </div>
</section>
<section id="food-preview">
  <h2>We have everything you need To kill your hunger</h2>
  <div class="button-rounded">View Our Menu</div>
  <div class="container">
    <div class="left-btn">
      <i class="fa fa-chevron-left" aria-hidden="true"></i>
    </div>
    <div class="right-btn">
      <i class="fa fa-chevron-right" aria-hidden="true"></i>
    </div>
    <div class="food-slider">
      <div class="sliding-system">
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Starters
            </div>
            <p class="food-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, autem.
              Obcaecati saepe quae veniam inventore deserunt eligendi voluptates accusantium alias libero commodi?
              Necessitatibus debitis suscipit doloremque delectus consequatur minima officiis?</p>
            <div class="food-image"><img src="./img/chips.png" alt="">
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Burgers
            </div>
            <p class="food-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, autem.
              Obcaecati saepe quae veniam inventore deserunt eligendi voluptates accusantium alias libero commodi?
              Necessitatibus debitis suscipit doloremque delectus consequatur minima officiis?</p>
            <div class="food-image"><img src="./img/hamburger-and-fries.png" alt="">
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Entrees
            </div>
            <p class="food-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, autem.
              Obcaecati saepe quae veniam inventore deserunt eligendi voluptates accusantium alias libero commodi?
              Necessitatibus debitis suscipit doloremque delectus consequatur minima officiis?</p>
            <div class="food-image"><img
                src="./img/pork-steak.png" alt="">
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Sides
            </div>
            <p class="food-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, autem.
              Obcaecati saepe quae veniam inventore deserunt eligendi voluptates accusantium alias libero commodi?
              Necessitatibus debitis suscipit doloremque delectus consequatur minima officiis?</p>
            <div class="food-image"><img
                src="./img/salad.png" alt="">
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Deserts
            </div>
            <p class="food-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, autem.
              Obcaecati saepe quae veniam inventore deserunt eligendi voluptates accusantium alias libero commodi?
              Necessitatibus debitis suscipit doloremque delectus consequatur minima officiis?</p>
            <div class="food-image"><img
                src="./img/cupcake.png"
                alt="">
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Drinks
            </div>
            <p class="food-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, autem.
              Obcaecati saepe quae veniam inventore deserunt eligendi voluptates accusantium alias libero commodi?
              Necessitatibus debitis suscipit doloremque delectus consequatur minima officiis?</p>
            <div class="food-image"><img
                src="https://pngriver.com/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image.png"
                alt="">
            </div>
          </div>
        </div>
        <div class="slide">
          <div class="background"></div>
          <div class="content">
            <div class="food-title">
              Beers
            </div>
            <p class="food-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, autem.
              Obcaecati saepe quae veniam inventore deserunt eligendi voluptates accusantium alias libero commodi?
              Necessitatibus debitis suscipit doloremque delectus consequatur minima officiis?</p>
            <div class="food-image"><img
                src="https://pngriver.com/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image.png"
                alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
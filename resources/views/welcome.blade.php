<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Font Awesome V4 -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>
        <section id="welcome">
            <div class="welcome-menu">
              <div class="logo"><img src="https://i.pinimg.com/originals/45/d3/4d/45d34df4612f4c50e88695e649e7a997.png" alt="">
              </div>
              <div class="menu">
                <div class="menu-title">Menu</div>
                <ul class="links">
                  <li><a href="#">Menu</a></li>
                  <li><a href="#">Waitlist</a></li>
                  <li><a href="#">Offers</a></li>
                  <li><a href="#">Giftcards</a></li>
                </ul>
              </div>
              <div class="social-icons">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              </div>
              <div class="location">
                <div class="address">234 Main st, <br>
                  New York, New York 11747</div>
                <div class="phone-number">
                  <a href="tel:+7182198652">718-219-8652</a>
                </div>
              </div>
            </div>
            <div class="welcome-jumbo">
              <div class="status">NEW</div>
              <h1>Ballie's Burger</h1>
              <img class="burger-fries" src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" alt="">
            </div>
          </section>
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
                      <div class="food-image"><img src="https://taco.sfo2.digitaloceanspaces.com/2019/04/CHIPS.png" alt="">
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
                      <div class="food-image"><img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" alt="">
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
                          src="https://www.pngkey.com/png/full/342-3422633_pork-entrees-steak-pork-png.png" alt="">
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
                          src="https://pngriver.com/wp-content/uploads/2018/04/Download-Salad-Transparent-PNG.png" alt="">
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
                          src="https://pngriver.com/wp-content/uploads/2018/04/Download-Cupcake-PNG-Transparent-Image.png"
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
    </body>
</html>

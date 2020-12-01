<div class="side-menu">
    <a href="/" class="logo">
      <img src="{{$generalSettings->logo_image_url}}" alt="">
    </a>
    <div class="menu">
      <div class="menu-title">Menu</div>
      <ul class="links">
        <li><a href="/menu">Food</a></li>
        <li><a href="/reservations">Reservations</a></li>
        <li><a href="/offers">Offers</a></li>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/about">About Us</a></li>
      </ul>
    </div>
    <div class="social-icons">
      <a href="{{$socialSettings->facebook_url}}" target="new"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="{{$socialSettings->twitter_url}}" target="new"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="{{$socialSettings->instagram_url}}" target="new"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    </div>
    <div class="location">
      <div class="address">{{$generalSettings->address_1}} {{$generalSettings->address_2}}<br>
        {{$generalSettings->city}}, {{$generalSettings->state}} {{$generalSettings->zipcode}}</div>
      <div class="phone-number">
        <a href="tel:{{$generalSettings->phone_number}}">{{$generalSettings->phone_number}}</a>
      </div>
    </div>
</div>
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
{{-- inputs food-categories-slider from includes folder --}}
@include('includes.landing-page.food-categories-slider')
@endsection
@extends('layouts.landing-page')

@section('title')
{{$settings["general"]->site_title}} - St.Lucia Selling Franchise
@endsection

@section('content')
<section id="information">
  <div class="restaurant-image">
    <!-- <img src="./img/top-view.jpg" alt=""> -->
    <picture>
      <source srcset="./img/top-view2.webp" type="image/webp">
      <source srcset="./img/top-view.png" type="image/png">
      <img src="./img/top-view.png" alt="top-view">
    </picture>
  </div>
  <div class="info">
    <h2>We Start From The Bottom In 1987</h2>
    <div class="paragraphs">
      <p>Founded in 1987 by Adriano Ballie Paganini, Food Circle, Inc. is the group behind some of Saint Lucia's most beloved concepts and favorite neighborhood spots: Ballie's Burger, Belga, Beretta, Delarosa, El Techo, Lolinda, Starbelly, Super Duper Burgers, and Uno Dos Tacos. Our group creates concept-driven restaurants that encompass the spirit of their neighborhood. We are servers, chefs, operators and restaurateurs. We are bussers, cooks, bartenders and </p>
      <p>hosts. We are a group that believe the best relationships are built around the dining table. We bring inquisitive guests and curious epicureans together in beautiful venues for memorable nights of conversation, connection, laughter and unforgettable food. So grab a plate and dive into a true experience of our well crafted recipes. We deliver. We satisfy. We are the pride of Mr. Paganini, We are Food Circle, Inc.</p>
    </div>
    <a href="/about" class="about-link"><span>Learn More About Our Restaurants</span>
      <div class="circle-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
    </a>
  </div>
</section>
{{-- inputs food-categories-slider from includes folder --}}
@include('includes.landing-page.food-categories-slider')
@endsection
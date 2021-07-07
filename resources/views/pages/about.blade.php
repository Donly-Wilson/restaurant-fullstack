@extends('layouts.app')

@section('title')
About - {{$settings["general"]->site_title}}
@endsection

@section('content')
<div id="about-page">
    <div class="content-box">
        <div class="row">
            <div class="col-md-6">
                <h1>About Page</h1>
                <p>
                    In 1980, the Paganini family opened the doors to their Greek cuisine in Saint Lucia. Adriano “Ballie” Paganini made Burgers for shift workers looking for a quick meal via their food truck. His servings were so popular that they soon opened a second location focused solely on Burgers. Since then, Ballie has brought the best pasta, salad, and of course the Ballie’s Special eateries across 28 countries. You’re welcome, world.
                </p>
                <p>
                    Founded in 1987 by Adriano Ballie Paganini, Food Circle, Inc. is the group behind some of Saint Lucia's most beloved concepts and favorite neighborhood spots: Ballie's Burger, Belga, Beretta, Delarosa, El Techo, Lolinda, Starbelly, Super Duper Burgers, and Uno Dos Tacos. Our group creates concept-driven restaurants that encompass the spirit of their neighborhood. We are servers, chefs, operators and restaurateurs. We are bussers, cooks, bartenders and hosts. We are a group that believe the best relationships are built around the dining table. We bring inquisitive guests and curious epicureans together in beautiful venues for memorable nights of conversation, connection, laughter and unforgettable food. So grab a plate and dive into a true experience of our well crafted recipes. We deliver. We satisfy. We are the pride of Mr. Paganini, We are Food Circle, Inc.
                </p>
            </div>
            <div class="col-md-6">
                <!-- <img class="img-fluid" src="./img/about-page-img.jpg" alt=""> -->
                <picture>
                    <source srcset="./img/about-page-img2.webp" type="image/webp">
                    <source srcset="./img/about-page-img.png" type="image/png">
                    <img class="img-fluid" src="./img/about-page-img.png" alt="about-page">
                  </picture>
            </div>
        </div>
    </div>
</div>
@endsection
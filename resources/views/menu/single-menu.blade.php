@extends('layouts.app')

@section('title')
{{$foodItem}} - {{$settings["general"]->site_title}}
@endsection

@section('content')
<div id="single-menu-page">
    <div class="row">
        <div class="col-sm-12 col-md-10 offset-md-1 col-ld-8 offset-ld-2">
            <div class="quickCategories">
                @foreach ($categories as $category)
                <a href="./{{strtolower($category->title)}}" class="backBtn @if($foodItem == $category->title)active @endif">{{$category->title}}</a>
                @endforeach
            </div>
            <div class="content-box">
                <div class="row">
                    <div class="col-md-12">
                        <h1>{{$foodItem}}</h1>
                    </div>
                    @foreach ($foodItems as $item)
                        <div class="col-md-6">
                            <div class="item">
                                <div class="title">
                                    <h4>{{$item->title}}</h4>
                                    <span class="price">${{$item->price}}</span>
                                </div>
                                <div class="description">
                                    <p>{{$item->description}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- Calls layout/app and adds @section area to where it's name being @yeild --}}
@extends('layouts.app')

@section('title')
Food Menu - {{$settings["general"]->site_title}}
@endsection

@section('content')
<div id="menu-page">
    {{-- inputs food-categories-slider from includes folder --}}
    @include('includes.food-categories-slider')
</div>
@endsection
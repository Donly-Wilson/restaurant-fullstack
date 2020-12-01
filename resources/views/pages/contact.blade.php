@extends('layouts.app')

@section('title')
Contact - {{$settings["general"]->site_title}}
@endsection

{{-- @section('description')
Bailie's Burgers have been around since the beginning of time
@endsection --}}

@section('content')
<div id="contact-page">
    <div class="content-box">
        <div class="row">
            <div class="col-md-6">
                <h1>Contact Page</h1>
                <h3>Address</h3>
                <p>
                {{$settings["general"]->address_1}} {{$settings["general"]->address_2}}<br>
                {{$settings["general"]->city}}, {{$settings["general"]->state}} {{$settings["general"]->zipcode}}
                </p>
                <h3>Phone Number</h3>
                <p>
                    <a href="tel:{{$settings["general"]->phone_number}}">{{$settings["general"]->phone_number}}</a>
                </p>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3870.0990527598574!2d-60.9581723851427!3d14.071327793599698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c4068278000428b%3A0xbe25441b9a1fea41!2sTriangle%20PUB%2C%20St%20Lucia!5e0!3m2!1sen!2s!4v1606865834386!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
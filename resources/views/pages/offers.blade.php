@extends('layouts.app')

@section('title')
Offers - {{$settings["general"]->site_title}}
@endsection

@section('content')
<div id="offers-page">
    <div class="content-box">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Sign Up To Notification For Deals</h1>
                <form class="" method="POST" action="/offers">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputfname">First Name</label>
                                <input id="inputfname" class="form-control form-control-lg @error('fname') is-invalid @enderror" type="text" name="fname" value="{{old('fname')}}" required autofocus autocomplete="fname" placeholder="John" />
                                @error('fname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputlname">Last Name</label>
                                <input id="inputlname" class="form-control form-control-lg @error('lname') is-invalid @enderror" type="text" name="lname" value="{{old('lname')}}" required autofocus autocomplete="lname" placeholder="John" />
                                @error('lname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputemail">Email address</label>
                                <input id="inputemail" class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}" required autofocus autocomplete="email" placeholder="email@address.com" />
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputphone">Phone Number</label>
                                <input id="inputphone" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" type="tel" name="phone_number" value="{{old('phone_number')}}" required autofocus autocomplete="phone_number" placeholder="758-321-7801" />
                                @error('phone_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <p>
                                    In signing up I acknowledge that I am 18 years of age or older, want to receive email offers from Baillie's Burgers and, if I select to join Dine Rewards, agree to the terms and conditions of the program.
                                  </p>
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                              </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


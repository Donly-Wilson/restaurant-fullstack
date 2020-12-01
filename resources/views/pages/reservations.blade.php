@extends('layouts.app')

@section('title')
Reservations - {{$settings["general"]->site_title}}
@endsection

@section('content')
<div id="waitlist-page">
    <div class="content-box">
        <div class="row">
            <div class="col-md-6">
                <h1>Get On The List</h1>
                <form class="" method="POST" action="/reservations">
                  @csrf
                  <div class="form-group">
                    <label for="inputfname">First Name</label>
                    <input id="inputfname" class="form-control form-control-lg @error('fname') is-invalid @enderror" type="text" name="fname" value="{{old('fname')}}" required autofocus autocomplete="fname" placeholder="John" />
                    @error('fname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputlname">Last Name</label>
                    <input id="inputlname" class="form-control form-control-lg @error('lname') is-invalid @enderror" type="text" name="lname" value="{{old('lname')}}" required autofocus autocomplete="lname" placeholder="John" />
                    @error('lname')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                      <label for="inputemail">Email address</label>
                      <input id="inputemail" class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}" required autofocus autocomplete="email" placeholder="email@address.com" />
                      @error('email')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                        <label for="inputphone">Phone Number</label>
                        <input id="inputphone" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" type="tel" name="phone_number" value="{{old('phone_number')}}" required autofocus autocomplete="phone_number" placeholder="758-321-7801" />
                        @error('phone_number')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                  </div>
                  <div class="form-group">
                      <label for="guests_total">How Many Guest?</label>
                      <select class="form-control form-control-lg @error('guest_total') is-invalid @enderror" name="guest_total" id="guest_total">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                      @error('guest_total')
                            <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                        <label for="timeinput">What Time?</label>
                        <select class="form-control form-control-lg @error('time') is-invalid @enderror" name="time" id="timeinput">
                          <option value="6">6:00 PM</option>
                          <option value="7">7:00 PM</option>
                          <option value="8">8:00 PM</option>
                          <option value="9">9:00 PM</option>
                          <option value="10">10:00 PM</option>
                        </select>
                        @error('time')
                            <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                      </div>
                </form>
            </div>
            <div class="col-md-6">
                <p>Please Note: This is not a reservation. You will be added to the current wait list and get notified to have a resavation schedule.You may have a short wait once you have arrive while we prepare your table.</p>
            </div>
        </div>
    </div>
</div>
@endsection
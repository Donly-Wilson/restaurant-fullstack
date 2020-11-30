@extends('layouts.admin')

@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">New Reservation </h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/admin/food-items" class="breadcrumb-link">Reservation</a></li>
                            <li class="breadcrumb-item active" aria-current="page">New Reservation</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader -->
    <!-- ============================================================== -->
 
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic form -->
            <!-- ============================================================== -->
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Create a new reservation</h5>
                    <div class="card-body">
                        <form class="" method="POST" action="/admin/reservations">
                            @csrf
                            <div class="form-group">
                              <label for="inputfname">First Name</label>
                              <input id="inputfname" class="form-control form-control-lg @error('fname') is-invalid @enderror" type="text" name="fname" value="{{old('fname')}}" required autofocus autocomplete="fname" placeholder="First Name" />
                              @error('fname')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                              <label for="inputlname">Last Name</label>
                              <input id="inputlname" class="form-control form-control-lg @error('lname') is-invalid @enderror" type="text" name="lname" value="{{old('lname')}}" required autofocus autocomplete="lname" placeholder="Last Name" />
                              @error('lname')
                                  <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputemail">Email</label>
                                <input id="inputemail" class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}" required autofocus autocomplete="email" placeholder="Enter email" />
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                  <label for="inputphone">Phone Number</label>
                                  <input id="inputphone" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" type="tel" name="phone_number" value="{{old('phone_number')}}" required autofocus autocomplete="phone_number" placeholder="Enter Phone Number" />
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
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic form -->
            <!-- ============================================================== -->
        </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div id="offers-page">
    <div class="content-box">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Sign Up To Notification For Deals</h1>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstnameinput">First Name</label>
                                <input type="text" class="form-control" name="fname" id="firstnameinput" placeholder="John">
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastnameinput">Phone no.</label>
                                <input type="text" class="form-control" name="lname" id="lastnameinput" placeholder="Doe">
                              </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailinput">Email address</label>
                                <input type="email" class="form-control" name="email" id="emailinput" placeholder="name@example.com">
                              </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phoneinput">Phone no.</label>
                                <input type="text" class="form-control" name="phone" id="phoneinput" placeholder="758-321-7801">
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
                    
            </div>
        </div>
    </div>
</div>
@endsection


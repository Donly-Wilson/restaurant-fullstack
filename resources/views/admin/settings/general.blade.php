@extends('layouts.admin')

@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Edit General Settings </h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit General Settings</li>
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
                    <h5 class="card-header">Edit General Setting</h5>
                    <div class="card-body">
                        <form class="" method="POST" action="/admin/settings/general">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="inputtitle">Business Name</label>
                                <input id="inputtitle" class="form-control form-control-lg @error('site_title') is-invalid @enderror" type="text" name="site_title" value="{{old('site_title', $general_setting->site_title)}}" required autofocus autocomplete="site_title" placeholder="Add Business Name or Site Name" />
                                @error('site_title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputlogoimageurl">Business Logo</label>
                                <input id="inputlogoimageurl" class="form-control form-control-lg @error('logo_image_url') is-invalid @enderror" type="text" name="logo_image_url" value="{{old('logo_image_url', $general_setting->logo_image_url)}}" required autofocus placeholder="Add Your Business Image Url"/>
                                @error('logo_image_url')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputaddress1">Address 1</label>
                                <input id="inputaddress1" class="form-control form-control-lg @error('address_1') is-invalid @enderror" type="text" name="address_1" value="{{old('address_1', $general_setting->address_1)}}" required autofocus autocomplete="address_1" placeholder="Add Street Address"/>
                                @error('address_1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputaddress2">Address 2</label>
                                <input id="inputaddress2" class="form-control form-control-lg @error('address_2') is-invalid @enderror" type="text" name="address_2" value="{{old('address_2', $general_setting->address_2)}}" autofocus autocomplete="address_2" placeholder=""/>
                                @error('address_2')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputcity">City</label>
                                <input id="inputcity" class="form-control form-control-lg @error('city') is-invalid @enderror" type="text" name="city" value="{{old('city', $general_setting->city)}}" required autofocus autocomplete="city" placeholder="Add City"/>
                                @error('city')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputstate">State</label>
                                <input id="inputstate" class="form-control form-control-lg @error('state') is-invalid @enderror" type="text" name="state" value="{{old('state', $general_setting->state)}}" required autofocus autocomplete="state" placeholder="Add Main State"/>
                                @error('state')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputzipcode">Zipcode</label>
                                <input id="inputzipcode" class="form-control form-control-lg @error('zipcode') is-invalid @enderror" type="text" name="zipcode" value="{{old('zipcode', $general_setting->zipcode)}}" required autofocus autocomplete="zipcode" placeholder="Add Zipcode"/>
                                @error('zipcode')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputphonenumber">Phone Number</label>
                                <input id="inputphonenumber" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" type="tel" name="phone_number" value="{{old('phone_number',$general_setting->phone_number)}}" required autofocus autocomplete="phone_number" placeholder="Enter Business Phone Number" />
                                @error('phone_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                          </div>
                            <div class="row">
                                <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                </div>
                                <div class="col-sm-6 pl-0">
                                    <p class="text-right">
                                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                    </p>
                                </div>
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
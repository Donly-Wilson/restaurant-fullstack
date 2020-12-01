@extends('layouts.admin')

@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Edit Social Settings </h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Social Settings</li>
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
                    <h5 class="card-header">Edit Social Setting</h5>
                    <div class="card-body">
                        <form class="" method="POST" action="/admin/settings/social">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="inputfacebook_url">Facebook Profile Url</label>
                                <input id="inputfacebook_url" class="form-control form-control-lg @error('facebook_url') is-invalid @enderror" type="text" name="facebook_url" value="{{old('facebook_url', $social_setting->facebook_url)}}" autofocus placeholder="Add Facebook Profile Url"/>
                                @error('facebook_url')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputtwitter_url">Twitter Profile Url</label>
                                <input id="inputtwitter_url" class="form-control form-control-lg @error('twitter_url') is-invalid @enderror" type="text" name="twitter_url" value="{{old('twitter_url', $social_setting->twitter_url)}}" autofocus placeholder="Add Facebook Profile Url"/>
                                @error('twitter_url')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputinstagram_url">Instagram Profile Url</label>
                                <input id="inputinstagram_url" class="form-control form-control-lg @error('instagram_url') is-invalid @enderror" type="text" name="instagram_url" value="{{old('instagram_url', $social_setting->instagram_url)}}" autofocus placeholder="Add Instagram Profile Url"/>
                                @error('instagram_url')
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
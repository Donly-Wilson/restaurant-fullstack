{{-- Admin --}}
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Csrf Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/libs/css/style.css">
    <link rel="stylesheet" href="/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%; 
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    .text-red-600 {
    --text-opacity: 1;
    color: #e02424;
    color: rgba(224, 36, 36, var(--text-opacity));
    }  
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    
    <form class="splash-container" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Registrations Form</h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
                
                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif

                    <div class="form-group">
                        <x-jet-input id="fname" class="form-control form-control-lg" type="text" name="fname" :value="old('fname')" required autofocus autocomplete="name" placeholder="First Name" />
                    </div>
                    
                    <div class="form-group">
                        <x-jet-input id="lname" class="form-control form-control-lg" type="text" name="lname" :value="old('lname')" required autofocus autocomplete="name" placeholder="Last name" />
                    </div>

                    <div class="form-group">
                        <x-jet-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required placeholder="E-mail" />
                    </div>
        
                    <div class="form-group">
                        <x-jet-input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="new-password" placeholder="Password"/>
                    </div>
        
                    <div class="form-group">
                        <x-jet-input id="password_confirmation" class="form-control form-control-lg" type="password" name="password_confirmation" required autocomplete="new-password" 
                        placeholder="Confirm Password"/>
                    </div>

                    <div class="form-group pt-2">
                        <button class="btn btn-block btn-primary" type="submit">{{ __('Register My Account') }}</button>
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                        </label>
                    </div>
                    <div class="form-group row pt-0">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                            <button class="btn btn-block btn-social btn-facebook " type="button">Facebook</button>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <button class="btn  btn-block btn-social btn-twitter" type="button">Twitter</button>
                        </div>
                    </div>
            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="{{ route('login') }}"class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
</body>

 
</html>
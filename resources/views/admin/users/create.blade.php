@extends('layouts.admin')

@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">New Users</h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/admin/users" class="breadcrumb-link">All Users</a></li>
                            <li class="breadcrumb-item active" aria-current="page">New Users</li>
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
                    <h5 class="card-header">Create a new user</h5>
                    <div class="card-body">
                        <form class="" method="POST" action="/admin/users">
                            @csrf
                            <div class="form-group">
                                <label for="inputfirstnameUser">First Name</label>
                                <input id="inputfirstnameUser" class="form-control form-control-lg @error('fname') is-invalid @enderror" type="text" name="fname" :value="old('fname')" required autofocus autocomplete="name" placeholder="First Name" />
                                @error('fname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputlastnameUser">Last Name</label>
                                <input id="inputlastnameUser" class="form-control form-control-lg" type="text" name="lname" :value="old('lname')" required autofocus autocomplete="name" placeholder="Last name" />
                                @error('lname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputemail">Email</label>
                                <input id="inputemail" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required placeholder="Enter email" />
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label for="inputpassword">Password</label>
                                <input id="inputpassword" class="form-control form-control-lg" type="password" name="password" required autocomplete="new-password" placeholder="Password"/>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input id="password_confirmation" class="form-control form-control-lg" type="password" name="password_confirmation" required autocomplete="new-password" 
                                placeholder="Confirm Password"/>
                            </div>
                            <div class="form-group">
                                <label for="inputrole">Select Role</label>
                                <select class="form-control" id="inputrole" name="role_id">
                                    @foreach ($roles as $role)
                                <option value="{{$role->id}}" 
                                    @if ($role->title == 'Admin')
                                        selected
                                    @endif>
                                    {{$role->title}}</option>
                                    
                                    @endforeach
                                </select>
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
<!--This is "ALL USERS PAGE" -->
@extends('layouts.admin')

@section('content')
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Users</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                <!-- basic table -->
                <!-- ============================================================== -->
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">All Users</h5>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- //Loops the "$users" object being passed down in it's route controller aka UsersController) --}}
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{$user->id}}</th>
                                            <td>{{ $user->fname }} {{ $user->lname }} 
                                                {{-- //Checks to see if user "role_id = 1" ("title = admin" can also be used) then add admin span --}}
                                                @if ($user->roles()->where('role_id', '1')->first())
                                                    <span style="
                                                        color: #2ec551;
                                                        background-color: hsla(133.9,62.1%,47.6%,0.2);
                                                        padding: 5px 8px;
                                                        border-radius: 4px;
                                                        margin-left: 15px;
                                                    ">
                                                    {{-- // $user->roles()->where('role_id', '1')->get()->map(function($aUser){
                                                    //     return $aUser->only(['title']);
                                                    // })
                                                    // $user->roles()->where('role_id', '1')->get()->map->only(['title']) --}}
                                                    Admin
                                                </span>
                                                @else
                                                    <span style="
                                                    color:#5969ff;
                                                    background-color: hsla(234.2,100%,67.5%,0.2);
                                                    padding: 5px 8px;
                                                    border-radius: 4px;
                                                    margin-left: 15px;
                                                ">Employee</span>
                                                @endif
                                            </td>
                                            <td>{{ date('m/d/y', strtotime($user->updated_at)) }}</td>
                                            <td><a href="/admin/users/{{$user->id}}/edit"><i class="far fa-edit"></i></a></td>
                                            <td>
                                                {{-- Get request to delete user --}}
                                                {{-- <a href="/admin/users/{{$user->id}}/delete" onclick="if(! confirm('Are you sure you want to delete this user')){return false;}"><i class="far fa-trash-alt"></i></a> --}}
                                            
                                                {{-- Delete method to delete user | Remove '@method('DELETE')' and it becomes Post request --}}
                                                <form id="delete-user-{{$user->id}}" method="POST" action="/admin/users/{{$user->id}}/delete">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a class="dropdown-item" href="#"
                                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                                        <i class="far fa-trash-alt"></i> {{ __('Delete') }}
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Add Larvel builtin pagination with "links()"-->
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic table -->
                <!-- ============================= ================================= -->
    </div>
@endsection
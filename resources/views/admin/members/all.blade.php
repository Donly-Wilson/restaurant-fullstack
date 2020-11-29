@extends('layouts.admin')

@section('content')
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">All Offers Members </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Offers Members</li>
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
                        <h5 class="card-header">All Members</h5>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Date Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- //Loops the "$members" object being passed down in it's route controller aka membersController) --}}
                                    @foreach ($members as $member)
                                        <tr>
                                            <th scope="row">{{$member->id}}</th>
                                            <td>{{ $member->fname }} {{ $member->lname }}</td>
                                            <td>{{ $member->email }}</td>
                                            <td>{{ $member->phone_number }}</td>
                                            <td>{{ date('m/d/y', strtotime($member->updated_at)) }}</td>
                                            <td><a class="edit-btn" href="/admin/members/{{$member->id}}/edit"><i class="far fa-edit"></i></a></td>
                                            <td>
                                                {{-- This is a "GET" request to delete member --}}
                                                {{-- <a href="/admin/members/{{$member->id}}/delete" onclick="if(! confirm('Are you sure you want to delete this member')){return false;}"><i class="far fa-trash-alt"></i></a> --}}
                                            
                                                {{-- this uses "Delete method" to delete member | If you remove '@method('DELETE')' below, it becomes a "POST" request --}}
                                                <form id="delete-member-{{$member->id}}" method="POST" action="/admin/members/{{$member->id}}/delete">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="#"
                                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                                        <i class="far fa-trash-alt"></i>
                                                         {{-- {{ __('Delete') }} --}}
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic table -->
                <!-- ============================================================== -->
    </div>
@endsection
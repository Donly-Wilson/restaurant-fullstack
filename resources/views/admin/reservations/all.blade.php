@extends('layouts.admin')

@section('content')
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">All Reservations </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Reservations</li>
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
                        <h5 class="card-header">All Reservation</h5>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">Guests Total</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- //Loops the "$reservations" object being passed down in it's route controller aka reservationController) --}}
                                    @foreach ($reservations as $reservation)
                                        <tr>
                                            <th scope="row">{{$reservation->id}}</th>
                                            <td>{{ $reservation->fname }} {{ $reservation->lname }}</td>
                                            <td>{{ $reservation->email }}</td>
                                            <td>{{ $reservation->phone_number }}</td>
                                            <td>{{ $reservation->guest_total }}</td>
                                            <td>{{ $reservation->time }}</td>
                                            <td>{{ date('m/d/y', strtotime($reservation->updated_at)) }}</td>
                                            <td><a class="edit-btn" href="/admin/reservations/{{$reservation->id}}/edit"><i class="far fa-edit"></i></a></td>
                                            <td>
                                                {{-- This is a "GET" request to delete reservation --}}
                                                {{-- <a href="/admin/reservations/{{$reservation->id}}/delete" onclick="if(! confirm('Are you sure you want to delete this reservation')){return false;}"><i class="far fa-trash-alt"></i></a> --}}
                                            
                                                {{-- this uses "Delete method" to delete reservation | If you remove '@method('DELETE')' below, it becomes a "POST" request --}}
                                                <form id="delete-reservation-{{$reservation->id}}" method="POST" action="/admin/reservations/{{$reservation->id}}/delete">
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
                            <!-- Add Larvel builtin pagination with "links()"-->
                            {{ $reservations->links() }}
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic table -->
                <!-- ============================================================== -->
    </div>
@endsection
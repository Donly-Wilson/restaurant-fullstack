@extends('layouts.admin')

@section('content')
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Food Items </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Food Items</li>
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
                        <h5 class="card-header">All Food Items</h5>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- //Loops the "$items" object being passed down in it's route controller aka FoodItemsController) --}}
                                    @foreach ($items as $item)
                                        <tr>
                                            <th scope="row">{{$item->id}}</th>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ date('m/d/y', strtotime($item->updated_at)) }}</td>
                                            <td><a class="edit-btn" href="/admin/food-items/{{$item->id}}/edit"><i class="far fa-edit"></i></a></td>
                                            <td>
                                                {{-- This is a "GET" request to delete item --}}
                                                {{-- <a href="/admin/food-items/{{$item->id}}/delete" onclick="if(! confirm('Are you sure you want to delete this item')){return false;}"><i class="far fa-trash-alt"></i></a> --}}
                                            
                                                {{-- this uses "Delete method" to delete item | If you remove '@method('DELETE')' below, it becomes a "POST" request --}}
                                                <form id="delete-item-{{$item->id}}" method="POST" action="/admin/food-items/{{$item->id}}/delete">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="#"
                                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                                        <i class="far fa-trash-alt"></i>
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
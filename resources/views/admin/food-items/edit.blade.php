@extends('layouts.admin')

@section('content')
<div class="container-fluid  dashboard-content">
    <!-- ============================================================== -->
    <!-- pageheader -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Edit Food Item </h2>
                <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="/admin/food-items" class="breadcrumb-link">Food Item</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Food Item</li>
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
                    <h5 class="card-header">Edit this item</h5>
                    <div class="card-body">
                        <form class="" method="POST" action="/admin/food-items/{{$item->id}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="inputtitle">Title</label>
                                <input id="inputtitle" class="form-control form-control-lg @error('title') is-invalid @enderror" type="text" name="title" value="{{old('title',$item->title)}}" required autofocus autocomplete="title" placeholder="Give item a title" />

                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputprice">Price</label>
                                <input id="inputprice" class="form-control form-control-lg @error('price') is-invalid @enderror" type="text" name="price" value="{{old('price',$item->price)}}" required autofocus autocomplete="price" placeholder="Give item a price" />

                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputcategory">Select Category</label>
                                <select class="form-control" id="inputcategory" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}"> 
                                            @if ($category->id == $item->category_id)
                                                selected
                                            @endif
                                            {{$category->title}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputimageurl">Image Url</label>
                                <input id="inputimageurl" class="form-control form-control-lg @error('image_url') is-invalid @enderror" type="text" name="image_url" value="{{old('image_url',$item->image_url)}}" autofocus placeholder="Add an image url to item" />

                                @error('image_url')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="inputdescription">Description</label>
                                <textarea id="inputdescription" class="form-control form-control-lg" type="text" name="description" required autofocus placeholder="Write the ingredients">{{old('description',$item->description)}}</textarea>

                                @error('description')
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
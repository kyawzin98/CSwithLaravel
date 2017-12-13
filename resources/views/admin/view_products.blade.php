@extends('master_admin')
@section('content')
    <div class="container">
        <div class="row mt-3" id="addnewproduct">
            <div class="col-md-8">
                <h2 class="display-4">Admin Panel</h2>
            </div>
            <div class="col-md-4 text-right">
                <a href="{{route('product.form')}}" class="btn btn-success"><span class="fa fa-plus"></span> Add New</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <caption>List of users</caption>
                    <thead>
                    <tr>
                        <th width="5">#</th>
                        <th>Name</th>
                        <th>Large Image</th>
                        <th>Small Image</th>
                        <th>Price</th>
                        <th>Short Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->image_full}}</td>
                            <td>{{$product->image_thumb}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->short_description}}</td>
                            <td>
                                <a href="" class="btn btn-info">View</a>
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
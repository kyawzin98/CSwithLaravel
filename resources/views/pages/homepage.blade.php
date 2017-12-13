@extends('master')
@section('content')
    <!-- New Website section-->
    <section class="new-website py-5">
        <h2 class="text-center text-uppercase"><span class="text-lowercase my-4">Welcome to our new</span> Website</h2>
        <p class="text-center">My name is Kyaw Zin Htike.I live in <br>Mandalay</p>
    </section>

    <!-- Image Links -->
    <div class="container pb-5 mt-4">
        <div class="row">
            <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
                <div class="image-links">
                    <img class="img-fluid img-thumbnail" src="{{asset('assets/img/service_01.jpg')}}">
                </div>
                <div class="row no-gutters">
                    <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-3">
                        <h3 class="text-center text-uppercase"><span class="text-lowercase">Learn More</span> About Us
                        </h3>
                        <a href="#" class="btn btn-primary text-uppercase btn-block py-3 mt-4">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
                <div class="image-links">
                    <img class="img-fluid img-thumbnail" src="{{asset('assets/img/service_02.jpg')}}">
                </div>
                <div class="row no-gutters">
                    <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-3">
                        <h3 class="text-center text-uppercase"><span class="text-lowercase">about our</span> Services
                        </h3>
                        <a href="#" class="btn btn-primary text-uppercase btn-block py-3 mt-4">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 text-center mb-4 mb-md-0">
                <div class="image-links">
                    <img class="img-fluid img-thumbnail" src="{{asset('assets/img/service_03.jpg')}}">
                </div>
                <div class="row no-gutters">
                    <div class="col-8 offset-2 col-md-10 offset-md-1 image-info pt-3">
                        <h3 class="text-center text-uppercase"><span class="text-lowercase">visit our</span> Store</h3>
                        <a href="#" class="btn btn-primary text-uppercase btn-block py-3 mt-4">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="business-hours pink-cyan-gradient py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    @include('template.business_hours')
                </div>
                <div class="col-md-6 bg-hours">

                </div>
            </div>
        </div>
    </div>

    <!-- Product Section -->
    <div class="container products py-5">
        <h3 class="text-center text-uppercase"><span class="text-lowercase">check out</span> Our Products</h3>
        <div class="row mt-5">
            @foreach($products as $product)
                <div class="col-6 col-md-3 mb-5 mb-md-0 mt-md-4">
                    <div class="card">
                        <a href="{{route('product.detail',$product->id)}}">
                            <img src="{{asset('assets/img/'.$product->image_thumb)}}"
                                 class="card-img-top img-fluid">
                            <div class="card-block">
                                <h3 class="card-title text-uppercase text-center mb-0">{{$product->name}}</h3>
                                <div class="card-text">
                                    <p>
                                        {{$product->short_description}}
                                    </p>
                                    <p class="price text-center mb-0">$ {{$product->price}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('template.appointment')
@endsection
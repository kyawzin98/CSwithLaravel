@extends('master')
@section('content')
    <div class="container pt-4">
        <div class="row no-gutters">
            <div class="col-12 hero">
                <img src="{{asset('assets/img/'.$product->image_full)}}" class="img-fluid">
                <h2 class="text-uppercase d-none d-md-block ">{{$product->name}}</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-4">
            <main class="col-lg-8 main-content">
                <h3 class="text-center text-uppercase d-block d-md-none">{{$product->name}}</h3>
                <p>{{$product->description}}</p>
            </main>
            <aside class="col-lg-4 product_detail">
                <div class="text-center hours p-3 pink-cyan-gradient">
                    <h3 class="text-center text-uppercase mt-5">{{$product->name}}</h3>
                    <p class="text-center lead">
                        {{$product->short_description}}
                    </p>

                    <h3 class="text-center text-uppercase mt-5">Price</h3>
                    <p class="text-center price lead p-3">$ {{$product->price}}</p>
                </div>
            </aside>
        </div>
    </div>
@endsection
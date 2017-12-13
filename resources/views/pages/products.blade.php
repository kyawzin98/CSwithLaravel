@extends('master')
@section('content')
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
@endsection
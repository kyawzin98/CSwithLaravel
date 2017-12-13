@extends('master_admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="card-body p-4 my-form">
                        <!-- Form contact -->
                        <form method="post" action="{{route('product.insert')}}">
                            {{csrf_field()}}
                            <h2 class="text-center py-4 font-bold font-up danger-text">Input Product Detail</h2>
                            <div class="form-group">
                                <label for="pname">Product Name</label>
                                <input type="text" id="pname" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="limage">Large Image</label>
                                <input type="file" id="limage" class="form-control" name="image_full">
                            </div>
                            <div class="form-group">
                                <label for="simage">Small Image</label>
                                <input type="file" id="simage" class="form-control" name="image_thumb">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" id="price" class="form-control" name="price">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea type="text" id="description" class="form-control" name="description"
                                          style="height: 100px"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="shortdescription">Short Description</label>
                                <textarea type="text" id="shortdescription" class="form-control" name="shortDescription" style="height: 100px"></textarea>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-outline-danger btn-lg btn-block" type="submit">Send</button>
                            </div>
                        </form>
                        <!-- Form contact -->
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
@extends('master')
@section('content')

    <div class="container pt-4">
        <div class="row no-gutters">
            <div class="col-12 hero">
                <img src="{{asset('assets/img/product_large_01.jpg')}}" class="img-fluid">
                <h2 class="text-uppercase d-none d-md-block ">About Us</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <main class="col-lg-8 main-content">
                <h3 class="text-center text-uppercase d-block d-md-none">About Us</h3>
                <p>Curious which components explicitly require jQuery, our JS, and Popper.js? Click the show components
                    link below. If you’re at all unsure about the general page structure, keep reading for an example
                    page template.Curious which components explicitly require jQuery, our JS, and Popper.js? Click the
                    show components link below. If you’re at all unsure about the general page structure, keep reading
                    for an example page template.</p>
                <p>Curious which components explicitly require jQuery, our JS, and Popper.js? Click the show components
                    link below. If you’re at all unsure about the general page structure, keep reading for an example
                    page template.</p>
                <div class="facilities-gallery">
                    <h3 class="text-uppercase text-center p-4"><span class="text-lowercase">Checkout our</span>
                        Facilities</h3>
                    <a href="#" data-target="#image_1" data-toggle="modal" class="mr-3">
                        <img src="{{asset('assets/img/gallery_thumb_01.jpg')}}" class="rounded img-thumbnail">
                    </a>
                    <a href="#" data-target="#image_2" data-toggle="modal" class="mr-3">
                        <img src="{{asset('assets/img/gallery_thumb_02.jpg')}}" class="rounded img-thumbnail">
                    </a>
                    <a href="#" data-target="#image_3" data-toggle="modal" class="mr-3">
                        <img src="{{asset('assets/img/gallery_thumb_03.jpg')}}" class="rounded img-thumbnail">
                    </a>
                    <div class="modal fade" id="image_1" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="{{asset('assets/img/gallery_large_01.jpg')}}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="image_2" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="{{asset('assets/img/gallery_large_02.jpg')}}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="image_3" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="{{asset('assets/img/gallery_large_03.jpg')}}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <aside class="col-lg-4 sidebar">
                <div class="text-center hours p-3 pink-cyan-gradient">
                    <div class="business-hours pink-cyan-gradient py-5">
                        <div class="container">
                            <div class="row">
                                <div class="text-center">
                                    @include('template.business_hours')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
@endsection
@extends('master')
@section('content')
    <div class="container pt-4">
        <div class="row no-gutters">
            <div class="col-12 hero">
                <img src="{{asset('assets/img/services.jpg')}}" class="img-fluid">
                <h2 class="text-uppercase d-none d-md-block ">Services</h2>
            </div>
        </div>
    </div>
    <div class="container mb-4">
        <div class="row mt-4">
            <main class="col-lg-8 main-content">
                <h3 class="text-center text-uppercase d-block d-md-none">Services</h3>
                <div id="services" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header py-3" role="tab" id="service_1">
                            <h3 class="mb-0">
                                <a href="#service_1des" data-toggle="collapse" data-parent="#services"
                                   aria-expanded="true">Services 1</a>
                            </h3>
                        </div>
                        <div id="service_1des" class="collapse show" role="tabpanel">
                            <div class="card-block">
                                <p> "Fearless" is a country pop song performed by American singer-songwriter Taylor
                                    Swift.
                                    The song was co-written by Swift in collaboration with Liz Rose "Fearless"
                                    is a country pop song performed by American singer-songwriter Taylor Swift.
                                    The song was co-written by Swift in collaboration with Liz Rose "Fearless" is a
                                    country
                                    pop song performed by American singer-songwriter Taylor Swift.
                                    The song was co-written by Swift in collaboration with Liz Rose</p>
                            </div>
                        </div>
                    </div>
                    <div class="card ">
                        <div class="card-header py-3" role="tab" id="service_2">
                            <h3 class="mb-0">
                                <a href="#service_2des" data-toggle="collapse" data-parent="#services"
                                   aria-expanded="true">Services 2</a>
                            </h3>
                        </div>
                        <div id="service_2des" class="collapse" role="tabpanel">
                            <div class="card-block">
                                <p> "Fearless" is a country pop song performed by American singer-songwriter Taylor
                                    Swift.
                                    The song was co-written by Swift in collaboration with Liz Rose "Fearless"
                                    is a country pop song performed by American singer-songwriter Taylor Swift.
                                    The song was co-written by Swift in collaboration with Liz Rose "Fearless" is a
                                    country
                                    pop song performed by American singer-songwriter Taylor Swift.
                                    The song was co-written by Swift in collaboration with Liz Rose</p>
                            </div>
                        </div>
                    </div>
                    <div class="card ">
                        <div class="card-header py-3" role="tab" id="service_3">
                            <h3 class="mb-0">
                                <a href="#service_3des" data-toggle="collapse" data-parent="#services"
                                   aria-expanded="true">Services 3</a>
                            </h3>
                        </div>
                        <div id="service_3des" class="collapse" role="tabpanel">
                            <div class="card-block">
                                <p> "Fearless" is a country pop song performed by American singer-songwriter Taylor
                                    Swift.
                                    The song was co-written by Swift in collaboration with Liz Rose "Fearless"
                                    is a country pop song performed by American singer-songwriter Taylor Swift.
                                    The song was co-written by Swift in collaboration with Liz Rose "Fearless" is a
                                    country
                                    pop song performed by American singer-songwriter Taylor Swift.
                                    The song was co-written by Swift in collaboration with Liz Rose</p>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
            <aside class="col-lg-4 discount mt-4 mt-md-0">
                <div class="text-center hours p-3 pink-cyan-gradient">
                    <h3 class="text-uppercase pt-3">First Time Customers</h3>
                    <p class="lead">Get 20% of in any services, with this coupon</p>
                    <div class="coupon">
                        <p class="text-uppercase text-center pt-3">
                            <span class="display-4">20% off</span>
                            In any services
                        </p>
                    </div>
                </div>
            </aside>
        </div>
    </div>
@endsection
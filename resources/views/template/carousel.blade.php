<!-- Carousel -->
<main class="container">
    <div id="main-slider" data-ride="carousel" class="carousel slide mt-4">
        <ul class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/img/img_two/bg1.jpg')}}" class="d-block img-fluid img-thumbnail">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-primary text-uppercase">Mogok</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/img_two/bg2.jpg')}}" class="d-block img-fluid img-thumbnail">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-primary text-uppercase">Mandalay</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/img_two/bg3.jpg')}}" class="d-block img-fluid img-thumbnail">
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="text-primary text-uppercase">MogokMandalay</h2>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main-slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</main>

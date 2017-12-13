<!-- Header -->
<header class="site-header container">
    <div class="row justify-content-between">
        <div class="col-8 offset-2 col-lg-4 offset-lg-0">
            <a href="{{route('homepage')}}"><img src="{{asset('assets/img/logo.svg')}}"
                                                 class="img-fluid mx-auto d-block"></a>
        </div>
        <div class="col-12 col-lg-4">
            <nav class="socials text-center text-md-right pt-5">
                <ul>
                    <li><a href="#"><i class="fa fa-2x fa-facebook-official" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-2x fa-twitter-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-2x fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-2x fa-pinterest-square" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-2x fa-youtube-square" aria-hidden="true"></i></a></li>
                </ul>
                <ul>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                           aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
</header>

<!-- Navigation -->
<div class="pink-cyan-gradient  py-2 mt-4">
    <nav class="main-nav py-2 hidden-sm-down">
        <div class="container">
            <ul class="nav nav-justified flex-column flex-sm-row">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('homepage')}}">CRUD Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about.us')}}">Add Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('services')}}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('products')}}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact.us')}}">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <nav id="mobile-nav" class="navbar navbar-expand-lg navbar-light bg-light hidden-md-up">
        <div>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation" style="float: right;">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="text-center">
                    <a class="nav-link" href="index.php">All Product</a>
                </li>
                <li class="text-center">
                    <a class="nav-link" href="about_us.php">Add Product</a>
                </li>
                <li class="text-center">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="text-center">
                    <a class="nav-link" href="products.php">Products</a>
                </li>
                <li class="text-center">
                    <a class="nav-link" href="contact_us.php">Contact Us</a>
                </li>
            </ul>

        </div>
    </nav>
</div>

</div>
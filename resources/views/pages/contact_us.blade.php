@extends('master')
@section('content')
    <div class="container pt-4">
        <div class="row no-gutters">
            <div class="col-12 hero">
                <img src="{{asset('assets/img/contact_us.jpg')}}" class="img-fluid">
                <h2 class="text-uppercase d-none d-md-block ">Contact Us</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <main class="col-12 col-md-10 offset-md-1 main-content">
                <h3 class="text-uppercase text-center d-block d-md-none">Contact Us</h3>
                <form action="send.php" method="post" class="p-5 mt-5 contact-form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="6"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary text-uppercase" name="submit" value="Submit">
                </form>
            </main>
        </div>
    </div>
@endsection
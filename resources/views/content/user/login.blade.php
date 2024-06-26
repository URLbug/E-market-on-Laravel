@extends('app.app')

@section('content')
    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg);">
        <div class="container">

            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Login</h2>

                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Login</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->

        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Login Section Start -->
    <div class="section section-padding mt-n1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Login & Register Start -->
                    <div class="login-register-wrapper">
                        <h4 class="title">Login to Your Account</h4>
                        <form method="POST" action="/login" enctype="multipart/form-data">
                            @csrf

                            <div class="single-form">
                                <input type="text" placeholder="Username" name="login">
                            </div>
                            <div class="single-form">
                                <input type="password" placeholder="Password" name="password">
                            </div>
                            <div class="single-form">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember"><span></span> Remember me</label>
                            </div>
                            <div class="single-form">
                                <button
                                    class="btn btn-primary btn-hover-dark"
                                    type="submit">Login</button>
                            </div>
                        </form>
                        <p><a href="#">Lost your password?</a></p>
                        <p>No account? <a href="{{ route('register') }}">Create one here.</a></p>
                    </div>
                    <!-- Login & Register End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Login Section End -->
@endsection

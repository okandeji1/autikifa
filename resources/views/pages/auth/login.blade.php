<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Autikifa</title>
    <!-- Favicon -->
    {{-- <link rel="shortcut icon"
        href="https://iqonic.design/themes/streamitnew/dashboard/html/assets/images/favicon.ico" /> --}}
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/typography.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Sign in Start -->
    <section class="sign-in-page">
        <div class="container">
            <div class="row justify-content-center align-items-center height-self-center">
                <div class="col-lg-5 col-md-12 align-self-center">
                    <div class="sign-user_card ">
                        <div class="sign-in-page-data">
                            <div class="sign-in-from w-100 m-auto">
                                <h3 class="mb-3 text-center">Sign in</h3>
                                <form class="mt-4" action="/auth-user-signin" method="POST">
                                    @csrf
                                    @include('partials.user.messages')
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control mb-0"
                                            id="exampleInputEmail2" placeholder="Enter email" autocomplete="off"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control mb-0"
                                            id="exampleInputPassword2" placeholder="Password" required>
                                    </div>
                                    <div class="sign-info">
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                        <div class="custom-control custom-checkbox d-inline-block">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex justify-content-center links">
                                Don't have an account? <a href="/auth-register" class="text-primary ml-2">Sign Up</a>
                            </div>
                            <div class="d-flex justify-content-center links">
                                <a href="#" class="f-link">Forgot your password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sign in END -->
            <!-- color-customizer -->
        </div>
    </section>
    <!-- Sign in END -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Appear JavaScript -->
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
    <!-- Countdown JavaScript -->
    <script src="{{ asset('assets/js/countdown.min.js') }}"></script>
    <!-- Counterup JavaScript -->
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow JavaScript -->
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <!-- Slick JavaScript -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Magnific Popup JavaScript -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Smooth Scrollbar JavaScript -->
    <script src="{{ asset('assets/js/smooth-scrollbar.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('assets/js/chart-custom.js') }}"></script>
    <!-- Custom JavaScript -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>

@extends('layouts.site')
@section('content')
    <div class="next-section-contact pt-130">
        <div class="container">
            <div class="row">
                <div class="section-head col-md-12 text-center animate-box" data-animate-effect="fadeInUp">
                    <h4>Contact Us</h4>
                </div>
                <!-- Info -->
                <div class="col-md-6 mb-60 animate-box" data-animate-effect="fadeInUp">
                    <h4>Phone</h4>
                    <p>+234 816 055 5893</p>
                    <h4>Email</h4>
                    <p>augustaasuquo@gmail.com</p>
                    {{-- <h4>Address</h4>
                    <p>340 North First Street, San Jose, CA 95112, US.</p> --}}
                </div>
                <!-- Contact Form -->
                <div class="col-md-6 mb-60 animate-box" data-animate-effect="fadeInUp">
                    <div>
                        <h4>Drop me a line!</h4>
                    </div>
                    <form method="post" class="row" action="#">
                        @csrf
                        @include('partials.user.messages')
                        <div class="col-sm-6">
                            <div class="pozo-form-component">
                                <input type="text" name="name" id="name" placeholder="Full Name" required="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="pozo-form-component">
                                <input type="email" name="email" id="email" placeholder="Email / Phone" required="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="pozo-form-component">
                                <textarea name="message" id="message" cols="40" rows="4" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="button" id="button" onclick="clickMe();">Say Hello.</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Remove after you set mailer
        function clickMe() {
            setTimeout(() => {
                alert('Message sent!');
            }, 5000)
            return;
        }

    </script>
@endsection

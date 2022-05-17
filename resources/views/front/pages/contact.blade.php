@extends('front.layout')
@section('body')

<body class="inner-pages agents homepage-4 det ag-de hd-white">
    @section('main')
    <section class="headings">
        <div class="text-heading text-center">
            <div class="container">
                <h1>Contact Us</h1>
                <h2><a href="{{ route('front.index') }}">Home </a> &nbsp;/&nbsp; Contact Us</h2>
            </div>
        </div>
    </section>
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION CONTACT US -->
    <section class="contact-us">
        <div class="container">
            <div class="property-location mb-5">
                <h3>Our Location</h3>
                <div class="divider-fade"></div>
                <div id="map-contact" class="contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d877.3788938820865!2d70.27730412916567!3d28.403695878566722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39375d3c7e06bae7%3A0x5496092a6f04362e!2sSaad%20Media!5e0!3m2!1sen!2s!4v1652696304546!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <h3 class="mb-4">Contact Us</h3>
                    <form action="/user/contact_us" class="contact-form" name="contactform" method="post">
                        @csrf
                        <div id="success" class="successform">
                            <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
                        </div>
                        <div id="error" class="errorform">
                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control input-custom input-full" name="name" placeholder="First Name">
                            @if($errors->has('name'))
                            <div class="error">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" required class="form-control input-custom input-full" name="lastname" placeholder="Last Name">
                            @if($errors->has('lastname'))
                            <div class="error">{{ $errors->first('lastname') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control input-custom input-full" name="email" placeholder="Email">
                            @if($errors->has('email'))
                            <div class="error">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8" placeholder="Message"></textarea>
                            @if($errors->has('message'))
                            <div class="error">{{ $errors->first('message') }}</div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12 bgc">
                    <div class="call-info">
                        <h3>Contact Details</h3>
                        <p class="mb-5">Please find below contact details and contact us today!</p>
                        <ul>
                            <li>
                                <div class="info">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p class="in-p">Main Nor-e-Wali Tibi Rd, Rahim Yar Khan, Punjab, Pakistan</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p class="in-p">+456 875 369 208</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p class="in-p ti">support@abadkar.com</p>
                                </div>
                            </li>
                            <li>
                                <div class="info cll">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    <p class="in-p ti">8:00 a.m - 7:00 p.m</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION CONTACT US -->

    @endsection
</body>
@endsection
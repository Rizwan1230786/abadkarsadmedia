<!-- START FOOTER -->
<footer class="first-footer rec-pro">
    <div class="top-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="netabout">
                        <a href="index.html" class="logo">
                            <img src="{{ asset('/front/images/abadkar-logo.png') }}" alt="netcom">
                        </a>
                        <p>Abadkar, Leading Property Portal in Pakistan - Property Buyers Sellers Landlords, and Real
                            Estate Agents in Karachi, Lahore, Islamabad, and all over Pakistan. We are providing
                            standard property - Commercial Plots, Lands & Markets - Villas - Apartments - Bungalows -
                            Home Buying & Renting Villas.</p>
                    </div>
                    <div class="contactus">
                        <ul>
                            <li>
                                <div class="info">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p class="in-p">Rahim Yar Khan Abasiya Town, Pakistan</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p class="in-p">+923009264940</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p class="in-p ti">support@abadkar.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="navigation">
                        <h3>Navigation</h3>
                        <div class="nav-footer" style="padding: 0px">
                            <ul>
                                <li><a href="{{ route('front.index') }}">Home</a></li>
                                <li><a href="{{ route('front.property') }}">Properties</a></li>
                                <li><a href="{{ route('front.new-projects') }}">Projects</a></li>
                                <li class="no-mgb"><a href="{{ route('front.advertise') }}">Advertisement on
                                        abadkar</a></li>
                            </ul>
                            <ul class="nav-right">
                                <li class="no-mgb"><a href="{{ route('front.agent') }}">Agents</a></li>
                                <li><a href="{{ route('front.agency') }}">Agencies</a></li>
                                <li><a href="{{ route('front.blog') }}">Blog Default</a></li>
                                <li class="no-mgb"><a href="{{ route('front.contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="newsletters">
                        <h3>Newsletters</h3>
                        <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in
                            your inbox.</p>
                    </div>
                    <form class="bloq-email form-inline" action="{{ url('/subscribe') }}" method="post">
                        @csrf
                        <div class="email">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            <input type="email" name="email" placeholder="Enter Your Email">
                            <input type="submit" value="Subscribe" class="mt-2">
                            <p class="subscription-success"></p>
                        </div>
                    </form>
                    <style>
                        .text-danger{
                            color: #FF385C !important;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer rec-pro">
        <div class="container-fluid sd-f">
            <p style="text-align: center">2022 © Copyright <a href="{{ url('https://abadkar.com//') }}">Abadkar</a> -
                All Rights Reserved.</p>
            <ul class="netsocials" style="justify-content: center">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</footer>

<a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
<!-- END FOOTER -->

@extends('Front.template')
@section('content')
<section class="page-header">
            <div class="container">
                <div class="page-title">
                    <h2>Contact info</h2>
                    <ul class="breadcrumb lab-ul">
                        <li><a href="/">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
		<!-- Page Header Section Ending Here -->
        
        <!-- Contact Section Start Here -->
        <section class="contact-us padding-tb pb-0">
            <div class="container">
                <div class="contact-wrap">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                        	<div class="contact-title">
                        		<h5>Contact Informations</h5>
                        	</div>
                            <ul class="contact-area lab-ul">
                                <li class="contact-item">
                                    <div class="contact-icon">
                                        <img src="{{asset('Front')}}/assets/images/contact/icon/01.png" alt="contact">
                                    </div>
                                    <div class="content">
                                        <h6>Our Location</h6>
                                        <p>Rahim Yar Khan, Punjab, Pakistan</p>
                                    </div>
                                </li>
                                <li class="contact-item">
                                    <div class="contact-icon">
                                        <img src="{{asset('Front')}}/assets/images/contact/icon/02.png" alt="contact">
                                    </div>
                                    <div class="content">
                                        <h6>Phone Number</h6>
                                        <p>+923047122971</p>
                                    </div>
                                </li>
                                <li class="contact-item">
                                    <div class="contact-icon">
                                        <img src="{{asset('Front')}}/assets/images/contact/icon/03.png" alt="contact">
                                    </div>
                                    <div class="content">
                                        <h6>Email Address</h6>
                                        <p>rizwan.13347@gmail.com</p>
                                    </div>
                                </li>
                                <li class="contact-item">
                                    <div class="contact-icon">
                                        <img src="{{asset('Front')}}/assets/images/contact/icon/04.png" alt="contact">
                                    </div>
                                    <div class="content">
                                        <h6>Website Address:</h6>
                                        <p>http://admincovid.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-8 col-md-6 col-xs-12">
                        	<div class="contact-title">
                        		<h5>Send us a Massage</h5>
                        	</div>
                            <form id="email-form2" action="{{url('/contactus')}}" method="post" name="email-form" class="qoute-form validationForm" data-redirecturl="{{ route('homepage') }}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="firstName" class="mb-1">First name <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="firstname" class="test form-control" id="firstName" placeholder="First name" aria-label="First name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="lastName" class="mb-1">Last name <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="lastname" class="test form-control notrequired" id="lastName" placeholder="Last name" aria-label="Last name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="phone" class="mb-1">Phone <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="phone" class="test form-control" id="account-phone" placeholder="Phone" aria-label="Phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" class="mb-1">Email <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="email" name="email" class="test form-control" id="email" placeholder="Email" aria-label="Email">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label for="yourMessage" class="mb-1">Message <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <textarea  style="height: 120px;" class="test form-control" name="detail" id="yourMessage" placeholder="How can we help you?"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label class="form-label" for="contact-symptom">You have any symptoms?</label>
                                        <div class="row margin position">
                                            <div class="col-sm-4">
                                                <label  for="contact-symptom">Dry Cough</label>
                                                    <input type="checkbox" value="1" id="vehicle1" class="check test" name="dry_cough">
                                            </div>
                                            <div class="col-sm-4">
                                                <label  for="contact-symptom">Sore Throat</label>
                                                <input type="checkbox" value="1" class="check test" name="sore_throat">
                                            </div>
                                            <div class="col-sm-4">
                                                <label  for="contact-symptom">Cold</label>
                                                <input type="checkbox" value="1" class="check test" name="cold">             
                                            </div>
                                            <div class="col-sm-4">
                                                <label  for="contact-symptom">Fever</label>
                                                <input type="checkbox" value="1" class="check test" id="vehicle1" name="fever">
                                            </div>
                                            <div class="col-sm-4">
                                                <label  for="contact-symptom">Headache</label>
                                                <input type="checkbox" value="1" class="check test" name="headache">
                                            </div>
                                            <div class="col-sm-4">
                                                <label  for="contact-symptom">Vomiting</label>
                                                <input type="checkbox" value="1" class="check test" name="vomiting">
                                            </div>
                                        </div>
                                </div>
                               <div class="col-sm-12">
                                    <div class="form-group"  style="margin-bottom: 15px;">
                                        <label class="form-label" for="contact-symptom">Age Range</label>
                                        <div class="form-control-select"> 
                                            <select id="contact-symptom" name="age" class="form-control test">
                                                <option selected="" value="">selected</option>
                                                <option value="30-39 years">30-39 years</option>
                                                <option value="20-29 years">20-29 years</option>
                                                <option value="00-19 years">00-19 years</option>
                                            </select>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <button type="submit" value="Contactus!" class="btn btn-primary btn1 submit_button">Contactus!</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section Ending Here -->

        <!-- G-Map Section Start Here -->
        
        <!-- G-Map Section Ending Here -->
@endsection
@section('js')
<script src="{{ asset('Front') }}/js/custom.js"></script>
<link href="{{ asset('Front') }}/css/intlTelInput.css" rel="stylesheet">
<script src="{{ asset('Front') }}/js/prism.js"></script>
<script src="{{ asset('Front') }}/js/intlTelInput.js"></script>
<script src="{{asset('assets/themejquery/contactus/jquery.js') }}"></script>
@endsection

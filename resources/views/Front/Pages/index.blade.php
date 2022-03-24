@extends('Front.template')
@section('content')
<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h1>Prevention from Corona Virus</h1>
        <h3>stay home, stay safe</h3>
        <a href="#prevent" class="btn">how to prevent</a>
    </div>
</section>

<!-- home section ends -->

<!-- prevent section starts  -->

<section class="prevent" id="prevent">

    <h1 class="heading"> how to prevent virus </h1>

    <div class="box-container">

        <div class="box" id="box">
            <img src="{{asset('Front')}}/images/pre-1.png" alt="">
            <h3>wash your place</h3>
            <p>Cleaning product instructions for safe and effective use, including precautions you should take when applying the product, such as wearing gloves and making sure you have good ventilation.</p>
        </div>

        <div class="box" id="box">
            <img src="{{asset('Front')}}/images/pre-2.png" alt="">
            <h3>maintain distance</h3>
            <p>Maintain at least 1 metre (3 feet) distance between yourself & anyone who is coughing or sneezing. If you are too close, get chance to infected.</p>
        </div>

        <div class="box" id="box">
            <img src="{{asset('Front')}}/images/pre-3.png" alt="">
            <h3>Avoid touching face</h3>
            <p>Hands touch many surfaces and can pick up viruses. So, hands can transfer the virus to your eyes, nose or mouth and can make you sick.</p>
        </div>

        <div class="box" id="box">
            <img src="{{asset('Front')}}/images/pre-4.png" alt="">
            <h3>Wash your hands</h3>
            <p>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water for at least 20 seconds.</p>
        </div>

        <div class="box" id="box">
            <img src="{{asset('Front')}}/images/pre-5.png" alt="">
            <h3>use napkin</h3>
            <p>Maintain good respiratory hygiene as covering your mouth & nose with your bent elbow or tissue when cough or sneeze.</p>
        </div>

        <div class="box" id="box">
            <img src="{{asset('Front')}}/images/pre-6.png" alt="">
            <h3>wear a mask</h3>
            <p>If COVID-19 is widespread in your area, a fabric mask should be worn in all public settings where it is difficult to keep a physical distance from others.</p>
        </div>

    </div>

</section>

<!-- prevent section ends -->

<!-- symptoms section starts  -->

<section class="symptoms" id="symptoms">

    <h1 class="heading">covid-19 symptoms</h1>

    <div class="column">

        <div class="main-image">
            <img src="{{asset('Front')}}/images/main-symp-img.png" alt="">
        </div>

        <div class="box-container">

            <div class="box" id="box">
                <img src="{{asset('Front')}}/images/symp-a.png" alt="">
                <h3>dry cough</h3>
            </div>

            <div class="box" id="box">
                <img src="{{asset('Front')}}/images/symp-b.png" alt="">
                <h3>sore throat</h3>
            </div>

            <div class="box" id="box">
                <img src="{{asset('Front')}}/images/symp-c.png" alt="">
                <h3>cold</h3>
            </div>

            <div class="box" id="box">
                <img src="{{asset('Front')}}/images/symp-d.png" alt="">
                <h3>fever</h3>
            </div>

            <div class="box" id="box">
                <img src="{{asset('Front')}}/images/symp-e.png" alt="">
                <h3>headache</h3>
            </div>

            <div class="box" id="box">
                <img src="{{asset('Front')}}/images/symp-f.png" alt="">
                <h3>vomiting</h3>
            </div>

        </div>

    </div>

</section>

<!-- symptoms section ends -->

<!-- precautions section starts  -->

<section class="precautions" id="precautions">

    <h1 class="heading">Take precautions against covid-19</h1>

    <div class="column">

        <div class="box-container">

            <h3 class="title">Things you should DO</h3>

            <div class="box">
                <img src="{{asset('Front')}}/images/do-img1.png" alt="">
                <div class="info">
                    <h3>Wash your hand</h3>
                    <p>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water for at least 20 seconds.</p>
                </div>
            </div>

            <div class="box">
                <img src="{{asset('Front')}}/images/do-img2.png" alt="">
                <div class="info">
                    <h3>Always wear a mask</h3>
                    <p>If COVID-19 is widespread in your area, a fabric mask should be worn in all public settings where it is difficult to keep a physical distance from others!</p>
                </div>
            </div>

            <div class="box">
                <img src="{{asset('Front')}}/images/do-img3.png" alt="">
                <div class="info">
                    <h3>Stay home during fever</h3>
                    <p>Maintain at least 1 metre (3 feet) distance between yourself & anyone who is coughing or sneezing. If you are too close, get chance to infected!</p>
                </div>
            </div>

        </div>

        <div class="box-container">

            <h3 class="title">Things you should NOT DO</h3>

            <div class="box">
                <img src="{{asset('Front')}}/images/dont-img1.png" alt="">
                <div class="info">
                    <h3>Avoid close contact with animals</h3>
                    <p>The virus that causes COVID-19 can spread from people to animals during close contact.The risk of animals spreading COVID-19 to people is low.</p>
                </div>
            </div>

            <div class="box">
                <img src="{{asset('Front')}}/images/dont-img2.png" alt="">
                <div class="info">
                    <h3>Avoid close contact with peoples</h3>
                    <p>Indoors in public: If you are not up to date on COVID-19 vaccines, stay at least 6 feet away from other people, especially if you are at higher risk of getting very sick with COVID-19!</p>
                </div>
            </div>

            <div class="box">
                <img src="{{asset('Front')}}/images/dont-img3.png" alt="">
                <div class="info">
                    <h3>Avoid crowded area</h3>
                    <p>strict lockdowns during the COVID-19 pandemic, most countries introduced policies in which citizens were expected to avoid crowded places using common sense, as advised by the WHO!</p>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- precautions section ends -->

<!-- doctor section start  -->
<section class="cta-subscribe custom-color ptb-120 position-relative overflow-hidden" id="doctor">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-8">
                <div class="subscribe-info-wrap position-relative z-2">
                    <div class="section-heading">
                        <!-- <h4 class="h5 text-warning">Let's Try! Get Free Support</h4> -->
                        <h1 class="heading" style=" text-transform: none;">Consult To Our Doctors</h1>
                        <!-- <p>We can help you to create your dream website for better business revenue.</p> -->
                    </div>
                    <div class="form-block-banner mw-65 m-auto mt-5" style="font-size: 15px;">
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
                                <div class="form-group">
                                    <label class="form-label" for="contact-symptom">You have any symptoms?</label>
                                        <div class="row margin">
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
                            <button type="submit" value="Contactus!" class="btn-primary btn1 submit_button">Contactus!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
        <div class="bg-circle rounded-circle circle-shape-1 position-absolute warning right-5"></div>
    </div>
</section>

<!-- doctor section ends -->

<!-- hand-wash section starts  -->

<section class="hand-wash" id="hand-wash">

    <h1 class="heading">how to wash hand properly</h1>

    <div class="column">

        <div class="box-container">

            <div class="box" id="box">
                <img src="{{asset('Front')}}/images/wash-a.png" alt="">
                <h3>water and soap</h3>
            </div>

            <div class="box" id="box">
                <img src="{{asset('Front')}}/images/wash-b.png" alt="">
                <h3>palm to palm</h3>
            </div>

            <div class="box" id="box">
                <img src="{{asset('Front')}}/images/wash-c.png" alt="">
                <h3>Between Fingurs</h3>
            </div>

            <div class="box" id="box">
                <img src="{{asset('Front')}}/images/wash-d.png" alt="">
                <h3>Focus on Thumbs</h3>
            </div>

            <div class="box" id="box">
                <img src="{{asset('Front')}}/images/wash-e.png" alt="">
                <h3>Back of Hands</h3>
            </div>

            <div class="box" id="box">
                <img src="{{asset('Front')}}/images/wash-f.png" alt="">
                <h3>Focus on wrist</h3>
            </div>

        </div>

        <div class="main-image" id="box">
            <img src="{{asset('Front')}}/images/main-wash-img.png" alt="">
        </div>
    </div>

</section>
<!-- hand-wash section ends -->
@endsection
@section('js')
<script src="{{ asset('Front') }}/js/custom.js"></script>
<link href="{{ asset('Front') }}/css/intlTelInput.css" rel="stylesheet">
<script src="{{ asset('Front') }}/js/prism.js"></script>
<script src="{{ asset('Front') }}/js/intlTelInput.js"></script>
<script src="{{asset('assets/themejquery/contactus/jquery.js') }}"></script>
@endsection

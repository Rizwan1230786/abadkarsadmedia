@extends('Front.template')
@section('content')
<section class="page-header">
            <div class="container">
                <div class="page-title">
                    <h2>About Corona Virus</h2>
                    <ul class="breadcrumb lab-ul">
                        <li><a href="/">Home</a></li>
                        <li>About</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->
        
        <!-- corona count section start here -->
        <section class="corona-count-section bg-corona padding-tb">
            <div class="container">
				<div class="corona-wrap">
					<div class="corona-count-top">
						<div class="row justify-content-center align-items-center">
							<div class="col-xl-3 col-md-6 col-12">
								<h5>Total Corona Statistics :</h5>
							</div>
							<div class="col-xl-3 col-md-6 col-12">
								<div class="corona-item">
									<div class="corona-inner">
										<div class="corona-thumb">
											<img src="{{asset('Front')}}/assets/images/corona/01.png" alt="corona">
										</div>
										<div class="corona-content">
											<h3 class="count-number">221290</h3>
											<p>Coronavirus Cases</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6 col-12">
								<div class="corona-item">
									<div class="corona-inner">
										<div class="corona-thumb">
											<img src="{{asset('Front')}}/assets/images/corona/02.png" alt="corona">
										</div>
										<div class="corona-content">
											<h3 class="count-number">185790</h3>
											<p>Recovered Cases</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6 col-12">
								<div class="corona-item">
									<div class="corona-inner">
										<div class="corona-thumb">
											<img src="{{asset('Front')}}/assets/images/corona/03.png" alt="corona">
										</div>
										<div class="corona-content">
											<h3 class="count-number">09303</h3>
											<p>Deaths</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="corona-count-bottom">
						<div class="row justify-content-center align-items-center flex-row-reverse">
							<div class="col-lg-6 col-12">
								<div class="ccb-thumb">
									<img src="{{asset('Front')}}/assets/images/corona/01.jpg" alt="corona">
								</div>
							</div>
							<div class="col-lg-6 col-12">
								<div class="ccb-content">
									<h2>What Is Coronavirus?</h2>
									<h6>Coronavirus COVID-19 Global Cases map developed by the Johns Hopkins Center for Systems Science and Engineering.</h6>
									<p>Coronaviruses are type of virus. There are many different kinds, & some cause disease newly identified type has caused recent outbreak of respiratory ilnessnow called COVID-19 that started in China.</p>
									<ul class="lab-ul">
										<li><i class="icofont-tick-mark"></i>COVID-19 is the disease caused by the new coronavirus that emerged in China in December 2019.</li>
										<li><i class="icofont-tick-mark"></i>COVID-19 symptoms include cough, fever and shortness of breath. COVID-19 can be severe, and some cases have caused death.</li>
										<li><i class="icofont-tick-mark"></i>The new coronavirus can be spread from person to person. It is diagnosed with a laboratory test.</li>
									</ul>
									<a href="#" class="lab-btn style-2"><span>get started Now</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!-- corona count section ending here -->

        <!-- safe actions section start here -->
		<section class="safe-actions padding-tb bg-action">
			<div class="action-shape">
				<img src="{{asset('Front')}}/assets/images/safe/shape/01.png" alt="action-shape">
			</div>
			<div class="container">
				<div class="row justify-content-center align-items-center">
					<div class="col-lg-6 col-12">
						<div class="sa-thumb-part">
							<div class="safe-thumb">
								<img src="{{asset('Front')}}/assets/images/safe/01.jpg" alt="safe-actions">
								<div class="shape-icon">
									<div class="sa-icon sa-green saicon-1">
										<img src="{{asset('Front')}}/assets/images/safe/shape/green/01.png" alt="green-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
									<div class="sa-icon sa-green saicon-2">
										<img src="{{asset('Front')}}/assets/images/safe/shape/green/02.png" alt="green-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
									<div class="sa-icon sa-green saicon-3">
										<img src="{{asset('Front')}}/assets/images/safe/shape/green/03.png" alt="green-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
									<div class="sa-icon sa-green saicon-4">
										<img src="{{asset('Front')}}/assets/images/safe/shape/green/04.png" alt="green-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
									<div class="sa-icon sa-green saicon-5">
										<img src="{{asset('Front')}}/assets/images/safe/shape/green/05.png" alt="green-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
									<div class="sa-icon sa-red saicon-6">
										<img src="{{asset('Front')}}/assets/images/safe/shape/red/01.png" alt="red-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
									<div class="sa-icon sa-red saicon-7">
										<img src="{{asset('Front')}}/assets/images/safe/shape/red/02.png" alt="red-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
									<div class="sa-icon sa-red saicon-8">
										<img src="{{asset('Front')}}/assets/images/safe/shape/red/03.png" alt="red-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
									<div class="sa-icon sa-red saicon-9">
										<img src="{{asset('Front')}}/assets/images/safe/shape/red/04.png" alt="red-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
									<div class="sa-icon sa-red saicon-10">
										<img src="{{asset('Front')}}/assets/images/safe/shape/red/05.png" alt="red-signal">
										<div class="saicon-content">
											<p>Coronaviruses (CoV) are a large family of viruses that cause illness ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS-CoV) and Severe Acute Respiratory Syndrome (SARS-CoV).</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="sa-content-part">
							<h2>How to stay Safe Important Percautions</h2>
							<p>Continuay seize magnetic oportunities via value added imperatives ompetenty plagiarize customized meta-services after interopera supply chains nthuastica embrace portals through high-payoff internal or "organic" sources rogressively engineer cross functional synergy with client-centric </p>
							<div class="row">
								<div class="col-lg-6 col-12">
									<div class="sa-title">
										<h6><i class="icofont-checked"></i>Things You Should Do</h6>
									</div>
									<ul class="lab-ul">
										<li><i class="icofont-check-circled"></i>Stay at Home</li>
										<li><i class="icofont-check-circled"></i>Wear Mask</li>
										<li><i class="icofont-check-circled"></i>Wash Your Hands</li>
										<li><i class="icofont-check-circled"></i>Well Done Cooking</li>
										<li><i class="icofont-check-circled"></i>Seek for a Doctor</li>
										<li><i class="icofont-check-circled"></i>Avoid Crowed Places</li>
									</ul>
								</div>
								<div class="col-lg-6 col-12">
									<div class="sa-title">
										<h6><i class="icofont-not-allowed"></i>Things You Should Avoid</h6>
									</div>
									<ul class="lab-ul">
										<li><i class="icofont-close-circled"></i>Stay at Home</li>
										<li><i class="icofont-close-circled"></i>Wear Mask</li>
										<li><i class="icofont-close-circled"></i>Wash Your Hands</li>
										<li><i class="icofont-close-circled"></i>Well Done Cooking</li>
										<li><i class="icofont-close-circled"></i>Seek for a Doctor</li>
										<li><i class="icofont-close-circled"></i>Avoid Crowed Places</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- safe actions section ending here -->
        
        <!-- Team Member Section Start here -->
       
</div>
@endsection
@extends('Front.template')
@section('content')
<section class="page-header">
            <div class="container">
                <div class="page-title">
                    <h2>Mapping the Coronavirus Outbreak</h2>
                    <ul class="breadcrumb lab-ul">
                        <li><a href="/">Home</a></li>
                        <li>Coronavirus Outbreak</li>
                    </ul>
                </div>
            </div>
        </section>
		<!-- Page Header Section Ending Here -->
		
		<!-- corona count section start here -->
        <section class="corona-count-section pt-0 padding-tb">
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
											<h3 class="count-number">262774</h3>
											<p>Active Cases</p>
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
											<h3 class="count-number">125050</h3>
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
											<h3 class="count-number">16558</h3>
											<p>Deaths</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="corona-count-bottom">
						<div class="gmaps">
                            <img src="{{asset('Front')}}/assets/images/map.png" alt="map">
                        </div>
					</div>
        </section>
        <!-- corona count section ending here -->
		
@endsection
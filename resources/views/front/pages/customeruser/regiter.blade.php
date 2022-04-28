@extends('front.layout3')
@section('css')
@endsection
@section('content')
<div class="page">
			<div class="page-single">
				<div class="p-5">
					<div class="row">
						<div class="col mx-auto">
							<div class="row justify-content-center">
								<div class="col-lg-9 col-xl-8">
									<div class="card-group mb-0">
										<div class="card p-4">
											<div class="card-body">
												<div class="text-center title-style mb-6">
													<h1 class="mb-2">SignUp</h1>
													<hr>
													<p class="text-muted">Sign Up to your account</p>
												</div>
                                                <form class="validationForm formSubmit" action="{{ url('user/register') }}" method="POST">
                                                    @csrf
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-user"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="firstname" class="form-control" placeholder="Firstname">
                                                    </div>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-user"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="lastname" class="form-control" placeholder="Lastname">
                                                    </div>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-user"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="email" class="form-control" placeholder="email address">
                                                    </div>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-user"></i>
                                                            </div>
                                                        </div>
                                                        <input type="file" name="image" class="form-control" placeholder="image">
                                                    </div>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-lock"></i>
                                                            </div>
                                                        </div>
                                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary btn-block px-4 submit_button">Register</button>
                                                        </div>
                                                    </div>
                                                </form>
											</div>
										</div>
										<div class="card text-white bg-primary py-5 d-md-down-none page-content mt-0">
											<div class="text-center justify-content-center page-single-content">
												<div class="box">
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
												</div>
												<img src="{{URL::asset('assets/images/png/login.png')}}" alt="img">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
@endsection
@section('js')
<script src="{{ URL::asset('assets/themeJquery/customeruser/jquery.js') }}"></script>
@endsection

@extends('agency.master3')
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
													<h1 class="mb-2">Reset Password</h1>
													<hr>
													<p class="text-muted text-left">Are you registerd so sign In to your account otherwise <a style="color: #007bff; text-decoration:underline;" href="{{ route('front.contact') }}">Contact us</a> to admin.</p>
												</div>
                                                <form  action="{{ route('agency:reset.password.post') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="email" value="{{ $email }}">
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-user"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="otp" class="form-control" placeholder="Enter otp">
                                                    </div>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-user"></i>
                                                            </div>
                                                        </div>
                                                        <input type="password" name="password" class="form-control" placeholder="Enter New Password">
                                                    </div>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-user"></i>
                                                            </div>
                                                        </div>
                                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Enter password confirmation">
                                                    </div>
                                                   
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-success btn-block px-4">Submit</button>
                                                        </div>
                                                        
                                                    </div>
                                                </form>
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
@endsection

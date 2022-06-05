						@extends('admin.master')
						@section('page-header')
						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0">Hi! Welcome Back</h4>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/' . $page='#')}}"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="{{url('/' . $page='#')}}">Abadkar Dashboard</a></li>
								</ol>
							</div>
						</div>
						<!--End Page header-->
						@endsection
						@section('content')
						<!-- Row-1 -->
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1 ">Total User</p>
										<h2 class="mb-1 number-font">{{$user}}</h2>
										<span class="ratio bg-info"> <br> </span>
									</div>
									<div id="spark2"></div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1 ">Total Customer user</p>
										<h2 class="mb-1 number-font">{{ $customer }}</h2>
										<span class="ratio bg-danger"><br></span>
									</div>
									<div id="spark3"></div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1">Total Orders</p>
										<h2 class="mb-1 number-font">{{ $orders }}</h2>
										<span class="ratio bg-success"><br></span>
									</div>
									<div id="spark4"></div>
								</div>
							</div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1 ">Total Sales</p>
										<h2 class="mb-1 number-font">$3,257</h2>
										<span class="ratio bg-warning"><br></span>
									</div>
									<div id="spark1"></div>
								</div>
							</div>
						</div>
						<!-- End Row-1 -->

						<!-- Row-2 -->

						<!-- End Row-2 -->

						<!-- Row-3 -->

						<!-- End Row-3 -->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Top Product Sales Overview</h3>
										<div class="card-options">
											<a href="{{url('/' . $page='#')}}" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal fs-20"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="{{url('/' . $page='#')}}">Today</a>
												<a class="dropdown-item" href="{{url('/' . $page='#')}}">Last Week</a>
												<a class="dropdown-item" href="{{url('/' . $page='#')}}">Last Month</a>
												<a class="dropdown-item" href="{{url('/' . $page='#')}}">Last Year</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-vcenter text-nowrap mb-0 table-striped table-bordered border-top">
												<thead class="">
													<tr>
														<th>Product</th>
														<th>Sold</th>
														<th>Record point</th>
														<th>Stock</th>
														<th>Amount</th>
														<th>Stock Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="font-weight-bold"><img class="w-7 h-7 rounded shadow mr-3" src="{{URL::asset('assets/images/orders/7.jpg')}}" alt="media1"> New Book</td>
														<td><span class="badge badge-primary">18</span></td>
														<td>05</td>
														<td>112</td>
														<td class="number-font">$ 2,356</td>
														<td><i class="fa fa-check mr-1 text-success"></i> In Stock</td>
													</tr>
													<tr>
														<td class="font-weight-bold"><img class="w-7 h-7 rounded shadow mr-3" src="{{URL::asset('assets/images/orders/8.jpg')}}" alt="media1"> New Bowl</td>
														<td><span class="badge badge-info">10</span></td>
														<td>04</td>
														<td>210</td>
														<td class="number-font">$ 3,522</td>
														<td><i class="fa fa-check text-success"></i> In Stock</td>
													</tr>
													<tr>
														<td class="font-weight-bold"><img class="w-7 h-7 rounded shadow mr-3" src="{{URL::asset('assets/images/orders/9.jpg')}}" alt="media1"> Modal Car</td>
														<td><span class="badge badge-secondary">15</span></td>
														<td>05</td>
														<td>215</td>
														<td class="number-font">$ 5,362</td>
														<td><i class="fa fa-check text-success"></i> In Stock</td>
													</tr>
													<tr>
														<td class="font-weight-bold"><img class="w-7 h-7 rounded shadow mr-3" src="{{URL::asset('assets/images/orders/10.jpg')}}" alt="media1"> Headset</td>
														<td><span class="badge badge-primary">21</span></td>
														<td>07</td>
														<td>102</td>
														<td class="number-font">$ 1,326</td>
														<td><i class="fa fa-check text-success"></i> In Stock</td>
													</tr>
													<tr>
														<td class="font-weight-bold"><img class="w-7 h-7 rounded shadow mr-3" src="{{URL::asset('assets/images/orders/12.jpg')}}" alt="media1"> Watch</td>
														<td><span class="badge badge-danger">34</span></td>
														<td>10</td>
														<td>325</td>
														<td class="number-font">$ 5,234</td>
														<td><i class="fa fa-check text-success"></i> In Stock</td>
													</tr>
													<tr>
														<td class="font-weight-bold"><img class="w-7 h-7 rounded shadow mr-3" src="{{URL::asset('assets/images/orders/13.jpg')}}" alt="media1"> Branded Shoes</td>
														<td><span class="badge badge-success">11</span></td>
														<td>04</td>
														<td>0</td>
														<td class="number-font">$ 3,256</td>
														<td><i class="fa fa-exclamation-triangle text-warning"></i> Out of stock</td>
													</tr>
													<tr class="mb-0">
														<td class="font-weight-bold"><img class="w-7 h-7 rounded shadow mr-3" src="{{URL::asset('assets/images/orders/11.jpg')}}" alt="media1"> New EarPhones</td>
														<td><span class="badge badge-warning">60</span></td>
														<td>10</td>
														<td>0</td>
														<td class="number-font">$ 7,652</td>
														<td><i class="fa fa-exclamation-triangle text-danger"></i> Out of stock</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End app-content-->
			</div>
@endsection
@section('js')

<!--INTERNAL Peitychart js-->
<script src="{{URL::asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

<!--INTERNAL Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>

<!--INTERNAL ECharts js-->
<script src="{{URL::asset('assets/plugins/echarts/echarts.js')}}"></script>

<!--INTERNAL Chart js -->
<script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>

<!-- INTERNAL Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>

<!--INTERNAL Moment js-->
<script src="{{URL::asset('assets/plugins/moment/moment.js')}}"></script>

<!--INTERNAL Index js-->
<script src="{{URL::asset('assets/js/index1.js')}}"></script>

@endsection

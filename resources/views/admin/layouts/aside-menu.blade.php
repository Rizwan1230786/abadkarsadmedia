				<aside class="app-sidebar">
					<div class="app-sidebar__logo" style="padding: 0px 0px;">
						<a class="logo" href="{{url('/admin/dashboard')}}">
							<img src="{{asset('assets')}}/abadkar-logo.png" alt="logo">
						</a>
					</div>
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">
							<div class="user-pic">
								<img src="{{URL::asset('assets/images/userphoto/'.Auth()->user()->image ?? '')}}" alt="user-img" class="avatar-xl rounded-circle mb-1">
							</div>
							<div class="user-info">
								<h5 class=" mb-1">{{Auth()->user()->name ?? ''}} <i class="ion-checkmark-circled  text-success fs-12"></i></h5>
							</div>
						</div>
					</div>
					<ul class="side-menu app-sidebar3">
						<li class="side-item side-item-category mt-4">Main</li>
						<li class="slide">
							<a class="side-menu__item" href="{{route('admin:dashboard')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
								</svg>
								<span class="side-menu__label">Dashboard</span><span class="badge badge-danger side-badge">Hot</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" href="{{route('admin:users')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
								</svg>
								<span class="side-menu__label">Users</span></a>
						</li>
                        <li class="slide">
							<a class="side-menu__item" href="{{route('admin:customerusers')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
								</svg>
								<span class="side-menu__label">Customers</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" href="{{route('admin:webpages')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
								</svg>
								<span class="side-menu__label">Webpages</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item dropdown-btn" href="#">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
								</svg>
								<span class="side-menu__label">Real Estate</span><i class="fa fa-caret-down"></i></a>
							<div class="dropdown-container">
								<ul>
									<a class="side-menu__item" href="{{route('admin:facilities')}}">
										<i class="fas fa-band-aid side-menu__icon custom"></i>
										<span class="side-menu__label">Facilites</span>
									</a>
									<a class="side-menu__item" href="{{route('admin:projects')}}">
										<i class="fas fa-project-diagram side-menu__icon custom"></i>
										<span class="side-menu__label">Projects</span>
									</a>
                                    <a class="side-menu__item" href="{{route('admin:properties')}}">
										<i class="fas fa-project-diagram side-menu__icon custom"></i>
										<span class="side-menu__label">Properties</span>
									</a>
									<a class="side-menu__item" href="{{route('admin:categories')}}">
										<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
											<path d="M0 0h24v24H0V0z" fill="none" />
											<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
										</svg>
										<span class="side-menu__label">Categories</span>
									</a>
									<a class="side-menu__item" href="{{route('admin:features')}}">
										<i class="fas fa-th side-menu__icon custom"></i>
										<span class="side-menu__label">Features</span>
									</a>
									<a class="side-menu__item" href="{{route('admin:investor')}}">
										<i class="fas fa-users side-menu__icon custom"></i>
										<span class="side-menu__label">Investor</span>
									</a>
									<a class="side-menu__item" href="{{route('admin:cities')}}">
										<i class="fas fa-globe-americas side-menu__icon custom"></i>
										<span class="side-menu__label">Cities</span>
									</a>
                                    <a class="side-menu__item" href="{{route('admin:state')}}">
										<i class="fas fa-globe-americas side-menu__icon custom"></i>
										<span class="side-menu__label">States</span>
									</a>
									<a class="side-menu__item" href="{{route('admin:area')}}">
										<i class="fas fa-globe-americas side-menu__icon custom"></i>
										<span class="side-menu__label">Area</span>
									</a>
                                    <a class="side-menu__item" href="{{route('admin:agent')}}">
										<i class="fas fa-users side-menu__icon custom"></i>
										<span class="side-menu__label">Agents</span>
									</a>
                                    <a class="side-menu__item" href="{{route('admin:agency')}}">
										<i class="fas fa-users side-menu__icon custom"></i>
										<span class="side-menu__label">Agencies</span>
									</a>
								</ul>
							</div>

						</li>
                        <li class="slide">
							<a class="side-menu__item" href="{{route('admin:blog.index')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
								</svg>
								<span class="side-menu__label">Blogs</span></a>
						</li>
                        <li class="slide">
							<a class="side-menu__item" href="{{route('admin:testimonials')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
								</svg>
								<span class="side-menu__label">Our Testimonials</span></a>
						</li>
                        <li class="slide">
							<a class="side-menu__item" href="{{route('admin:partners')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
								</svg>
								<span class="side-menu__label">Our Partners</span></a>
						</li>
                        <li class="slide">
							<a class="side-menu__item dropdown-btn" href="#">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
								</svg>
								<span class="side-menu__label">Our Advertisement</span><i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-container">
                                    <ul>
                                        <a class="side-menu__item" href="{{route('admin:pakges')}}">
                                            <i class="fas fa-th side-menu__icon custom"></i>
                                            <span class="side-menu__label">Packges</span>
                                        </a>
                                    </ul>
                                </div>
						</li>
                        <li class="slide">
							<a class="side-menu__item" href="{{route('admin:product')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
								</svg>
								<span class="side-menu__label">Add Products</span></a>
						</li>
                        <li class="slide">
							<a class="side-menu__item" href="{{route('admin:slugs')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
								</svg>
								<span class="side-menu__label">Create Slugs</span></a>
						</li>
                        <li class="slide">
							<a class="side-menu__item" href="{{route('admin:orders')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
								</svg>
								<span class="side-menu__label">Orders</span></a>
						</li>
                        <li class="slide">
							<a class="side-menu__item" href="{{route('admin:tools')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
								</svg>
								<span class="side-menu__label">Tools</span></a>
						</li>
					</ul>
				</aside>
				<!--aside closed-->

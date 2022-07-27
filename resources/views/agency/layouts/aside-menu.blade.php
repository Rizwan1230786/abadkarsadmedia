<?php
use App\Models\Agency;
use App\Models\Agent;
?>
<aside class="app-sidebar">
					<div class="app-sidebar__logo" style="padding: 0px 0px;">
						<a class="logo" href="{{url('/admin/dashboard')}}">
							<img style="padding: 20px;" src="{{asset('assets')}}/abadkar-logo.png" alt="logo">
						</a>
					</div>
                    @if(Auth::user()->type == 'agency')
                    <?php
                      $agency_id = Auth::user()->agency_id;
                      $agency=Agency::where('id',$agency_id)->first();
                    ?>
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">
							<div class="user-pic">
								<img src="{{ asset('assets/images/agency/'.$agency->image) }}" alt="user-img" class="avatar-xl rounded-circle mb-1">
							</div>
							<div class="user-info">
								<h5 class=" mb-1">{{ $agency->name ?? ''}} <i class="ion-checkmark-circled  text-success fs-12"></i></h5>
							</div>
						</div>
					</div>
                    @else
                    <?php
                        $agent_id = Auth::user()->agent_id;
                        $agent=Agent::where('id',$agent_id)->first();
                    ?>
                    <div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">
							<div class="user-pic">
								<img src="{{ asset('assets/images/agent/'.$agent->image) }}" alt="user-img" class="avatar-xl rounded-circle mb-1">
							</div>
							<div class="user-info">
								<h5 class=" mb-1">{{ $agent->name }} <i class="ion-checkmark-circled  text-success fs-12"></i></h5>
							</div>
						</div>
					</div>
                    @endif
					<ul class="side-menu app-sidebar3">
						<li class="side-item side-item-category mt-4">Main</li>
						<li class="slide">
							<a class="side-menu__item" href="{{route('agency:dashboard')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
								</svg>
								<span class="side-menu__label">Dashboard</span><span class="badge badge-danger side-badge">Hot</span></a>
						</li>
                        @if(Auth()->user()->type == 'agency')
                        <li class="slide">
							<a class="side-menu__item" href="{{route('agency:agent')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
								</svg>
								<span class="side-menu__label">Agents</span></a>
						</li>
                        <li class="slide">
							<a class="side-menu__item" href="{{route('agency:properties')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
								</svg>
								<span class="side-menu__label">Agency Property</span></a>
						</li>
                        <li class="slide">
							<a class="side-menu__item" href="{{route('agency:agentproperties')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
								</svg>
								<span class="side-menu__label">Agent Property</span></a>
						</li>
                        @else
                        <li class="slide">
							<a class="side-menu__item" href="{{route('agency:agentproperties')}}">
								<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
									<path d="M0 0h24v24H0V0z" fill="none" />
									<path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z" />
								</svg>
								<span class="side-menu__label">Agent Property</span></a>
						</li>
                        @endif
					</ul>
				</aside>
				<!--aside closed-->

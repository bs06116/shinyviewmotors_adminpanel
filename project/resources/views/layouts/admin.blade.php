<!doctype html>
<html lang="en" dir="ltr">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">
    	<meta name="author" content="GeniusOcean">
		<!-- Title -->
		<title>{{$gs->title}}</title>
		<!-- favicon -->
		<link rel="icon"  type="image/x-icon" href="{{asset('assets/front/images/favicon.png')}}"/>
		<!-- Bootstrap -->
		<link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet" />
		<!-- Fontawesome -->
		<link rel="stylesheet" href="{{asset('assets/admin/css/fontawesome.css')}}">
		<!-- icofont -->
		<link rel="stylesheet" href="{{asset('assets/admin/css/icofont.min.css')}}">
		<!-- Sidemenu Css -->
		<link href="{{asset('assets/admin/plugins/fullside-menu/css/dark-side-style.css')}}" rel="stylesheet" />
		<link href="{{asset('assets/admin/plugins/fullside-menu/waves.min.css')}}" rel="stylesheet" />

		<link href="{{asset('assets/admin/css/plugin.css')}}" rel="stylesheet" />
		<link href="{{asset('assets/admin/css/jquery.tagit.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-coloroicker.css') }}">
		<!-- Main Css -->
		<link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet"/>
		<link href="{{asset('assets/admin/css/custom.css')}}" rel="stylesheet"/>
		<link href="{{asset('assets/admin/css/responsive.css')}}" rel="stylesheet" />
		@yield('styles')

	</head>
	<body>
		<div class="page">
			<div class="page-main">
				<!-- Header Menu Area Start -->
				<div class="header">
					<div class="container-fluid">
						<div class="d-flex justify-content-between">
							<div class="menu-toggle-button">
								<a class="nav-link" href="javascript:;" id="sidebarCollapse">
									<div class="my-toggl-icon">
											<span class="bar1"></span>
											<span class="bar2"></span>
											<span class="bar3"></span>
									</div>
								</a>
							</div>

							<div class="right-eliment">
								<ul class="list">

									<li class="login-profile-area">
										<a class="dropdown-toggle-1" href="javascript:;">
											<div class="user-img">
												<img src="{{ Auth::guard('admin')->user()->photo ? asset('assets/images/admins/'.Auth::guard('admin')->user()->photo ):asset('assets/images/noimage.png') }}" alt="">
											</div>
										</a>
										<div class="dropdown-menu">
											<div class="dropdownmenu-wrapper">
													<ul>
														<h5>Welcome!</h5>
															<li>
																<a href="{{ route('admin.profile') }}"><i class="fas fa-user"></i> Edit Profile</a>
															</li>
															<li>
																<a href="{{ route('admin.password') }}"><i class="fas fa-cog"></i> Change Password</a>
															</li>
															<li>
																<a href="{{ route('admin.logout') }}"><i class="fas fa-power-off"></i> Logout</a>
															</li>
														</ul>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Header Menu Area End -->
				<div class="wrapper">
					<!-- Side Menu Area Start -->
					<nav id="sidebar" class="nav-sidebar">
						<ul class="list-unstyled components" id="accordion">
							<li>
								<a href="{{ route('admin.dashboard') }}" class="wave-effect active"><i class="fa fa-home mr-2"></i>Dashbord</a>
							</li>

							<li>
								<a href="#specs" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
									<i class="fas fa-cogs"></i>Car Specifications
								</a>
								<ul class="collapse list-unstyled" id="specs" data-parent="#accordion">
                    <li>
                    	<a href="{{ route('admin-cat-index') }}"><span>Category Management</span></a>
                    </li>
                    <li>
                    	<a href="{{ route('admin-condtion-index') }}"><span>Condition Management</span></a>
                    </li>
                    <li>
                    	<a href="{{ route('admin-brand-index') }}"><span>Brand Management</span></a>
                    </li>
                    <li>
                    	<a href="{{ route('admin-model-index') }}"><span>Model Management</span></a>
                    </li>
                    <li>
                    <a href="{{ route('admin-body-index') }}"><span>Body Type Management</span></a>
                    </li>
                    <li>
                    <a href="{{ route('admin-fuel-index') }}"><span>Fuel Type Management</span></a>
                    </li>
										<li>
											<a href="{{ route('admin-transmission-index') }}"><span>Transmission Type Management</span></a>
										</li>
								</ul>
							</li>


							<li>
								<a href="#car" class="accordion-toggle wave-effect" data-toggle="collapse" aria-expanded="false">
									<i class="fas fa-car"></i> Car Management
								</a>
								<ul class="collapse list-unstyled @if(request()->path() == 'admin/car') show  @endif" id="car" data-parent="#accordion">
                    <li class="@if(request()->input('type') == 'all') active  @endif">
                    	<a href="{{ route('admin.car.index') . '?type=all' }}"><span>All Cars</span></a>
                    </li>
                    <li class="@if(request()->input('type') == 'featured') active  @endif" class="@if(request()->input('type') == 'all') active  @endif">
                    	<a href="{{ route('admin.car.index') . '?type=featured' }}"><span>Featured Cars</span></a>
                    </li>
                    <li class="@if(request()->input('type') == 'pending') active  @endif">
                    	<a href="{{ route('admin.car.index') . '?type=pending' }}"><span>Pending Cars</span></a>
                    </li>
                    <li class="@if(request()->input('type') == 'published') active  @endif">
                    	<a href="{{ route('admin.car.index') . '?type=published' }}"><span>Published Cars</span></a>
                    </li>
                    <li class="@if(request()->input('type') == 'rejected') active  @endif">
                    <a href="{{ route('admin.car.index') . '?type=rejected' }}"><span>Rejected Cars</span></a>
                    </li>
								</ul>
							</li>

							<li>
								<a href="{{ route('admin-user-index') }}" class="wave-effect active"><i class="fas fa-users"></i>Sellers Management</a>
							</li>



						</ul>
					</nav>
					<!-- Main Content Area Start -->
					@yield('content')
					<!-- Main Content Area End -->
					</div>
				</div>
			</div>

		<script type="text/javascript">
		  var mainurl = "{{url('/')}}";
		</script>

		<!-- Dashboard Core -->
		<script src="{{asset('assets/admin/js/vendors/jquery-1.12.4.min.js')}}"></script>
		<script src="{{asset('assets/admin/js/vendors/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/admin/js/jqueryui.min.js')}}"></script>
		<script src="{{asset('assets/admin/js/vendors/vue.js')}}"></script>
		<!-- Fullside-menu Js-->
		<script src="{{asset('assets/admin/plugins/fullside-menu/jquery.slimscroll.min.js')}}"></script>
		<script src="{{asset('assets/admin/plugins/fullside-menu/waves.min.js')}}"></script>

		<script src="{{asset('assets/admin/js/plugin.js')}}"></script>
		<script src="{{asset('assets/admin/js/Chart.min.js')}}"></script>
		<script src="{{asset('assets/admin/js/tag-it.js')}}"></script>
		<script src="{{asset('assets/admin/js/nicEdit.js')}}"></script>
        <script src="{{asset('assets/admin/js/bootstrap-colorpicker.min.js') }}"></script>
        <script src="{{asset('assets/admin/js/notify.js') }}"></script>
		<script src="{{asset('assets/admin/js/load.js')}}"></script>
		<script src="{{asset('assets/admin/js/select2.min.js')}}"></script>
		<!-- Custom Js-->
		<script src="{{asset('assets/admin/js/custom.js')}}"></script>
		<!-- AJAX Js-->
		<script src="{{asset('assets/admin/js/myscript.js')}}"></script>
		@yield('scripts')
	</body>

</html>

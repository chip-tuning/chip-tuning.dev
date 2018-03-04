<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{ config('app.name', 'RPCT') }} - @yield('title')</title>
	<meta name="description" content="@yield('description')">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<style>
	#loader{transition:all .3s ease-in-out;opacity:1;visibility:visible;position:fixed;height:100vh;width:100%;background:#fff;z-index:90000}#loader.fadeOut{opacity:0;visibility:hidden}.spinner{width:40px;height:40px;position:absolute;top:calc(50% - 20px);left:calc(50% - 20px);background-color:#333;border-radius:100%;-webkit-animation:sk-scaleout 1s infinite ease-in-out;animation:sk-scaleout 1s infinite ease-in-out}@-webkit-keyframes sk-scaleout{0%{-webkit-transform:scale(0)}100%{-webkit-transform:scale(1);opacity:0}}@keyframes sk-scaleout{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}
	</style>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin/app.css') }}">
</head>
<body class="app">
	<div id='loader'><div class="spinner"></div></div>
	<script>
		window.addEventListener('load', () => {
			const loader = document.getElementById('loader');
			setTimeout(() => {
				loader.classList.add('fadeOut');
			}, 300);
		});
	</script>
	<div id="app">
		<div class="sidebar">
			<div class="sidebar-inner">
				<div class="sidebar-logo">
					<div class="peers ai-c fxw-nw">
						<div class="peer peer-greed">
							<a class="sidebar-link td-n" href="{{ route('admin.dashboard.index') }}">
								<div class="peers ai-c fxw-nw">
									<div class="peer">
										<div class="logo">
											<img src=" {{ asset('images/admin/logo.png') }}" alt="{{ config('app.name', 'RPCT') }}">
										</div>
									</div>
									<div class="peer peer-greed">
										<h4 class="lh-1 mB-0 logo-text">RPCT</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="peer">
							<div class="mobile-toggle sidebar-toggle">
								<a href="#" class="td-n"><i class="ti-arrow-circle-left"></i></a>
							</div>
						</div>
					</div>
				</div>
				<ul class="sidebar-menu scrollable pos-r">
					<li class="nav-item mT-30 {{ set_active('admin') }}">
						<a class="sidebar-link" href="{{ route('admin.dashboard.index') }}">
							<span class="icon-holder"><i class="c-orange-500 ti-dashboard"></i></span>
							<span class="title">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="sidebar-link" href="#">
							<span class="icon-holder"><i class="c-brown-500 ti-user"></i></span>
							<span class="title">Users</span>
						</a>
					</li>
					<li class="nav-item dropdown {{ set_active('admin/tags*', 'active open') }}">
						<a class="dropdown-toggle" href="javascript:void(0);">
							<span class="icon-holder"><i class="c-red-700 ti-tag"></i></span>
							<span class="title">Tags</span>
							<span class="arrow"><i class="ti-angle-right"></i></span>
						</a>
						<ul class="dropdown-menu">
							<li><a class="sidebar-link" href="{{ route('admin.tags.create') }}">Create Tag</a></li>
							<li><a class="sidebar-link" href="{{ route('admin.tags.index') }}">Tags Overview</a></li>
						</ul>
					</li>					 
					<li class="nav-item dropdown {{ set_active('admin/articles*', 'active open') }}">
						<a class="dropdown-toggle" href="javascript:void(0);">
							<span class="icon-holder"><i class="c-deep-purple-500 ti-book"></i></span>
							<span class="title">Articles</span>
							<span class="arrow"><i class="ti-angle-right"></i></span>
						</a>
						<ul class="dropdown-menu">
							<li><a class="sidebar-link" href="{{ route('admin.articles.create') }}">Create Article</a></li>
							<li><a class="sidebar-link" href="{{ route('admin.articles.index') }}">Articles Overview</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown {{ set_active('admin/photos*', 'active open') }}">
						<a class="dropdown-toggle" href="javascript:void(0);">
							<span class="icon-holder"><i class="c-teal-500  ti-gallery"></i></span>
							<span class="title">Photos</span>
							<span class="arrow"><i class="ti-angle-right"></i></span>
						</a>
						<ul class="dropdown-menu">
							<li><a class="sidebar-link" href="{{ route('admin.photos.index') }}">Instagram photos</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown {{ set_active('admin/faqs*', 'active open') }}">
						<a class="dropdown-toggle" href="javascript:void(0);">
							<span class="icon-holder"><i class="c-blue-500 ti-help-alt"></i></span>
							<span class="title">F.A.Q</span>
							<span class="arrow"><i class="ti-angle-right"></i></span>
						</a>
						<ul class="dropdown-menu">
							<li><a class="sidebar-link" href="{{ route('admin.faqs.create') }}">Create Q&amp;A</a></li>
							<li><a class="sidebar-link" href="{{ route('admin.faqs.index') }}">Q&amp;A Overview</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="page-container">
			<div class="header navbar">
				<div class="header-container">
					<ul class="nav-left">
						<li><a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="ti-menu"></i></a></li>
						<li class="search-box">
							<a class="search-toggle no-pdd-right" href="javascript:void(0);">
								<i class="search-icon ti-search pdd-right-10"></i>
								<i class="search-icon-close ti-close pdd-right-10"></i>
							</a>
						</li>
						<li class="search-input">
							<input class="form-control" type="text" placeholder="Search...">
						</li>
					</ul>
					<ul class="nav-right">
						<li class="dropdown">
							<a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
								<div class="peer mR-10">
									<img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt="">
								</div>
								<div class="peer">
									<span class="fsz-sm c-grey-900">{{ Auth::user()->name }}</span>
								</div>
							</a>
							<ul class="dropdown-menu fsz-sm">
								<li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-user mR-10"></i><span>Profile</span></a></li>
								<li role="separator" class="divider"></li>
								<li>
									<a href="{{ route('logout') }}" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
										<i class="ti-power-off mR-10"></i><span>Logout</span>
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<main class="main-content bgc-grey-100">
				<div id="mainContent">
					@yield('content')
				</div>
			</main>
			<footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
				Copyright &copy; 2017-{{ date('Y') }} <a href="{{ config('app.url', 'https://www.chip-tuning.rs') }}">{{ config('app.name', 'RPCT') }}</a>. All rights reserved.
			</footer>
		</div>
	</div>
	<script src="{{ asset('js/admin/app.js') }}"></script>
</body>
</html>
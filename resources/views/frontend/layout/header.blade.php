<nav class="gtco-nav" role="navigation">
			<div class="container" >
				
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<div id="gtco-logo"><a href="{{route('home')}}">Aesthetic <em>.</em></a></div>
					</div>
					<div class="col-xs-8 text-right menu-1">
						<ul>
							<li class="@yield('Home_avtive')"><a href="{{route('home')}}">Home</a></li>
							<li class="has-dropdown @yield('Service_avtive')">
								<a href="{{route('service')}}" class="">Services</a>
								<ul class="dropdown">
									<li><a href="{{route('register-new-license')}}"><i class="fas fa-id-card"></i> Register for New License</a></li>
									<li><a href="{{route('renew')}}"><i class="fas fa-sync-alt"></i> Renew License</a></li>
									<li><a href="{{ route('booktest') }}"><i class="fas fa-car"></i> Book Driving Test</a></li>
									<li><a href="{{ route('checkstatus') }}"><i class="fas fa-search"></i> Check Application Status</a></li>
									{{-- <li><a href="{{ route('downloadDucument') }}"><i class="fas fa-file-download"></i> Download Documents</a></li> --}}
								</ul>
							</li>
							<li class="@yield('News_avtive')"><a href="{{route('news')}}">News</a></li>
							<li class="@yield('About_avtive')"><a href="{{route('about')}}">About</a></li>
							

							<li class="has-dropdown @yield('User_avtive')">
								<a href="#"><i class="fas fa-user-circle"></i> Profile</a>
								<ul class="dropdown">
									<li><a href="{{route('profile')}}"><i class="fas fa-user"></i> Username</a></li>
									{{-- <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li> --}}
									<li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
									<li><a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				
			</div>
		</nav>
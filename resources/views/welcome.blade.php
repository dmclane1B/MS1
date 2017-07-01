<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Meta title & meta -->
        @meta

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{ asset('/danny/public/assets/custom/app.css') }}">
        <!-- Styles -->
		
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .footer {
                position:fixed;
                width:100%;
                height:20px;
                padding:5px;
                bottom:0px;
                font-size: smaller;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        <!-- Laravel variables for js -->
        @tojs
    </head>
    <body>
        <div class="wrapper">
        <!-- MAIN HEADER -->
        <header id="topnav">
            <div class="topbar-main" style="min-height:58px;">
				<div class="container">
					<div class="topnav-logo"><a href=""><img src="/danny/public/assets/images/logo/v2/logo-v2-57x57.jpg" width="52px" height="auto"></a></div>
						<!-- Topnav Links -->
						<div class="topnav-links">					
							<a href="/danny/register"><div class="topnav-link-btn btn-active-link"><span class="topnav-link-text">REGISTER</span></div></a>
							<a href="/danny/login"><div class="topnav-link-btn btn-active-link"><span class="topnav-link-text">SIGN IN</span></div></a>				
							<!-- User Account Button -->
							<div class="user-account-btn hide-this">
								<button type="button" class="btn menu-btn dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="pe-7s-user"></i></button>
							</div>		
						</div>	
					
						<!-- Menu Button -->
						<div class="menu-btn-wrap">
							<div class="btn-group pull-left">
								<button type="button" class="btn menu-btn dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="ion-grid font-21p"></i></button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Legacy Website</a></li>
									<li class="divider"></li>
									<li><a href="/danny/login">Sign In</a></li>
									<li class="divider"></li>	
									<li><a href="/danny/register">Register</a></li>								
									<li class="divider"></li>
									<li><a href="support.html">Support</a></li>
									<li class="divider"></li>
									<li><a href="legal-termsofuse.html">Terms of Use</a></li>
									<li class="divider"></li>
									<li><a href="legal-privacy">Privacy Policy</a></li>
								</ul>
							</div>
						</div>
					<!-- End Menu Button -->
					<!-- topnav logo -->
                </div>				
            </div>
        </header>
        <!-- END MAIN HEADER -->
        </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (!Auth::check())
                        @if(config('auth.users.registration'))
                            <a href="{{ url('/danny/register') }}">{{ __('views.welcome.register') }}</a>
                        @endif
                        <a href="{{ url('/danny/login') }}">{{ __('views.welcome.login') }}</a>
                    @else
                        @if(auth()->user()->hasRole('administrator'))
                            <a href="{{ url('/danny/admin') }}">{{ __('views.welcome.admin') }}</a>
                        @endif
                        <a href="{{ url('/danny/logout') }}">{{ __('views.welcome.logout') }}</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   {{ config('app.name') }}
                </div>
                
            </div>
        </div>
        
        
    <!-- App Core JS -->
	<script src="{{ asset('/danny/public/assets/user/js/plugins.js') }}"></script>
    <script src="{{ asset('/danny/public/assets/user/js/jquery.min.js') }}"></script>	
    <script src="{{ asset('/danny/public/assets/user/js/waves.js') }}"></script>
	<!-- App Form Validation JS -->
	<script src="{{ asset('/danny/public/assets/user/js/form.errors.js') }}"></script>
	<script src="{{ asset('/danny/public/assets/user/js/lib/animsition/animsition.min.js') }}"></script>		
	<script src="{{ asset('/danny/public/assets/user/js/lib/validation/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('/danny/public/assets/user/js/lib/validation/jquery.validate.defaults.js') }}"></script>
	<script src="{{ asset('/danny/public/assets/user/js/lib/validation/formvalidation.js') }}"></script>
    
    
    </body>
</html>

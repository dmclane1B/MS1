@extends('auth.layouts.auth')

@section('body_class','login')

@section('content')
	<div class="bg-overlay-img"></div>
     <div class="wrapper">
        <!-- MAIN HEADER -->
        <header id="topnav">
            <div class="topbar-main">
				<div class="container">
					<div class="topnav-logo"><a href=""><img src="/danny/public/assets/images/logo/v2/logo-v2-57x57.jpg" width="52px" height="auto"></a></div>
						<!-- Topnav Links -->
						<div class="topnav-links">					
							<div class="topnav-link-btn btn-active"><span class="topnav-link-text">SIGN IN</span></div>
							<a href="/danny/register"><div class="topnav-link-btn btn-active-link"><span class="topnav-link-text">REGISTER</span></div></a>						
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
									<li class="dd-link-active"><a><span class="dd-txt-active">Sign In</span></a></li>
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

	<!-- MAIN CONTAINER <sup>TM</sup>-->
	<div class="container">
<div class="two-column-wrap m-t-75">
<div class="col-md-6">
    <div class="main-intro">
        <h2>Begin experiencing <br/>the benefits of a Legacy client account.</h2>
		<a href="/danny/register"><div class="btn2 btn-fatboy btn-appblue waves-effect waves-light m-t-20" >CREATE AN ACCOUNT</div></a>
    </div>
</div>	
<div class="col-md-6">
<!-------/ LOGIN FORM /-------> 
<div class="login-form-wrapper">	
		<!--- USER SIGN IN ICON ---> 
		<div class="panel-header">
		<div class="panel-header-img align-center"><img src="/danny/public/assets/images/logo/v2/lpm-symbol-v2-lg-1b.png" width="100px" height="auto"></div>
			<h2 class="panel-header-title align-center">Legacy Client Sign In</h2>
			<p class="panel-header-text align-center m-b-20">Please enter your account details below</p>
		</div>
		<!-- uncomment for legacy panel circle
		<div class="panel-header-circle">
			<div class="panel-header-ltr">L</div>
        </div>	
		-->	
	<div class="row">
        <div class="panel-body">
			<div class="form">
				<section class="login_content">
                    {{ Form::open(['route' => 'login']) }}
                        <!--h1>{{ __('views.auth.login.header') }}</h1-->

                        <div class="form-group">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   placeholder="{{ __('views.auth.login.input_0') }}" required autofocus>
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control" name="password"
                                   placeholder="{{ __('views.auth.login.input_1') }}" required>
                        </div>
                        <div class="checkbox al_left">
                            <label>
                                <input type="checkbox"
                                       name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('views.auth.login.input_2') }}
                            </label>
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (!$errors->isEmpty())
                            <div class="alert alert-danger" role="alert">
                                {!! $errors->first() !!}
                            </div>
                        @endif

                        <div>
                            <button class="btn submit btn-slim btn-thmnavy waves-effect waves-light width-100" type="submit">{{ __('views.auth.login.action_0') }}</button>
                            <a class="reset_pass form-text"  href="{{ route('password.request') }}"><i class="fa fa-lock m-r-5"></i>
                                {{ __('views.auth.login.action_1') }}
                            </a>
                        </div>

                        <div class="clearfix"></div>

                        <!--div class="separator">
                            <span>{{ __('views.auth.login.message_0') }}</span>
                            <div class="social">
                                <a href="{{ route('social.redirect', ['google']) }}" class="btn btn-thmnavy btn-google-plus">
                                    <i class="fa fa-google-plus"></i>
                                    Google+
                                </a>
                                <a href="{{ route('social.redirect', ['facebook']) }}" class="btn btn-thmnavy btn-facebook">
                                    <i class="fa fa-facebook"></i>
                                    Facebook
                                </a>
                                <a href="{{ route('social.redirect', ['twitter']) }}" class="btn btn-thmnavy btn-twitter">
                                    <i class="fa fa-twitter"></i>
                                    Twitter
                                </a>
                            </div>
                        </div-->

                        @if(config('auth.users.registration'))
                            <div class="separator">
                                <p class="change_link">{{ __('views.auth.login.message_1') }}
                                    <a href="{{ route('register') }}" class="to_register"> {{ __('views.auth.login.action_2') }} </a>
                                </p>

                                <div class="clearfix"></div>
                                <br/>

                                <div>
                                    <div class="h1">{{ config('app.name') }}</div>
                                    <p>&copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('views.auth.login.copyright') }}</p>
                                </div>
                            </div>
                        @endif
                    {{ Form::close() }}
                </section>
			</div>				
		</div>
	 </div>			
   </div>
</div>
<!-------/ END LOGIN FORM /-------> 
</div>
</div>


	<!-------/ FOOTER /-------> 
	<footer class="footer-gray text-right">
        <div class="container">
            <div class="row">
                <div class="width-100">
                    <ul class="content_center list-inline m-b-0">
                        <li>
							<a href="#" class="easyIn">Legacy Property Management &copy;2017</a>
						</li>								
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-------/ END FOOTER /-------> 		


	</div>
@endsection

@section('styles')
    @parent

    {{ Html::style('/danny/public/assets/auth/css/login.40c9e49295ea5c9af42b5899f6794b77.css') }}
    {{ Html::style('/danny/public/assets/app/css/app.b31c35e7f389a0a62d0dfbf6e592fbcd.css') }}
	<link rel="stylesheet" href="{{ asset('/danny/public/assets/custom/app.css') }}">
@endsection
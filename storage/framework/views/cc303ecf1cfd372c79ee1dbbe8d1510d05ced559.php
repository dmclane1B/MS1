

<?php $__env->startSection('body_class','register'); ?>

<?php $__env->startSection('content'); ?>
	<div class="bg-overlay-img"></div>
    <div class="wrapper">
        <!-- MAIN HEADER -->
        <header id="topnav">
            <div class="topbar-main">
				<div class="container">
					<div class="topnav-logo"><a href=""><img src="/danny/public/assets/images/logo/v2/logo-v2-57x57.jpg" width="52px" height="auto"></a></div>
						<!-- Topnav Links -->
						<div class="topnav-links">					
							<div class="topnav-link-btn btn-active"><span class="topnav-link-text">REGISTER</span></div>
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
									<li class="dd-link-active"><a><span class="dd-txt-active">Register</span></a></li>									
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

	<!-- MAIN CONTAINER -->
    <div class="container">

<!-------/ REGISTER FORM /-------> 
<div class="reg-form-wrapper">	
		<!--- USER SIGN IN ICON ---> 
		<div class="panel-header">
		<div class="panel-header-img align-center"><img src="/danny/public/assets/images/logo/v2/lpm-symbol-v2-lg-1b.png" width="100px" height="auto"></div>
			<h2 class="panel-header-title align-center">Account Registration</h2>
			<p class="panel-header-text align-center m-b-20">Complete the form below to register</p>
		</div>
		<!-- uncomment for legacy panel circle
		<div class="panel-header-circle">
			<div class="panel-header-ltr">L</div>
        </div>	
		-->	
	<div class="row">
        <div class="panel-body">
			<div class="form">
				<?php echo e(Form::open(['route' => 'register'])); ?>

					<!--h1><?php echo e(__('views.auth.register.header')); ?></h1-->
					<div class="form-group col-md-6 p-r-5">
						<input type="text" name="first_name" class="form-control"
							   placeholder="First Name"
							   value="<?php echo e(old('name')); ?>" required autofocus/>
					</div>
					<div class="form-group col-md-6 p-l-5">
						<input type="text" name="last_name" class="form-control"
							   placeholder="Last Name"
							   value="<?php echo e(old('name')); ?>" required autofocus/>
					</div>
					<div class="form-group">
						<input type="text" name="phone" class="form-control"
							   placeholder="Phone"
							   value="<?php echo e(old('phone')); ?>" required autofocus/>
					</div>
					<div class="form-group">
						<input type="email" name="email" class="form-control"
							   placeholder="email"
							   required/>
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control"
							   placeholder="password"
							   required=""/>
					</div>
					<div class="form-group">
						<input type="password" name="password_confirmation" class="form-control"
							   placeholder="confirm password"
							   required/>
					</div>
					<div class="form-group">
						<input type="text" name="property_address" class="form-control"
							   placeholder="Property Address"
							   required/>
					</div>

					<?php if(session('status')): ?>
						<div class="alert alert-success">
							<?php echo e(session('status')); ?>

						</div>
					<?php endif; ?>

					<?php if(!$errors->isEmpty()): ?>
						<div class="alert alert-danger" role="alert">
							<?php echo $errors->first(); ?>

						</div>
					<?php endif; ?>

					<!-- <?php if(config('auth.captcha.registration')): ?>
						<?php echo app('captcha')->render(); ?>
					<?php endif; ?> -->

					<div>
						<button type="submit" class="btn submit  btn-thmnavy waves-effect waves-light width-100">
						<?php echo e(__('views.auth.register.action_1')); ?></button>
					</div>

					<div class="clearfix"></div>

					<div class="separator">
						<p class="change_link"><?php echo e(__('views.auth.register.message')); ?>

							<a href="<?php echo e(route('login')); ?>" class="to_register"> <?php echo e(__('views.auth.register.action_2')); ?> </a>
						</p>

						<div class="clearfix"></div>
						<br/>

						<div class="text-center">
							<div class="h1"><?php echo e(config('app.name')); ?></div>
							<p>&copy; <?php echo e(date('Y')); ?> <?php echo e(config('app.name')); ?>. <?php echo e(__('views.auth.register.copyright_0')); ?></p>
							<p><?php echo e(__('views.auth.register.copyright_1')); ?></p>
						</div>
					</div>
				<?php echo e(Form::close()); ?>

			</div>				
		</div>
	 </div>			
   </div>
</div>
<!-------/ END REGISTER FORM /-------> 
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##

    <?php echo e(Html::style('/danny/public/assets/auth/css/register.66b6f477cc540cb92f47d033bfa6a4f2.css')); ?>

	<?php echo e(Html::style('/danny/public/assets/app/css/app.b31c35e7f389a0a62d0dfbf6e592fbcd.css')); ?>

	<link rel="stylesheet" href="<?php echo e(asset('/danny/public/assets/custom/app.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
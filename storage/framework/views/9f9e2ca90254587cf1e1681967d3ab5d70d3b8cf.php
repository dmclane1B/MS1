

<?php $__env->startSection('body_class','passwords_email'); ?>

<?php $__env->startSection('content'); ?>
    <div class="wrapper">
	<div class="bg-overlay-img"></div> 
        <!-- MAIN HEADER -->
        <header id="topnav">
            <div class="topbar-main" style="min-height:58px;">
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

	<!-- MAIN CONTAINER -->
    <div class="container">
					
<!-------/ REGISTER FORM /-------> 
<div class="psw-reset-form">	

		<!--- USER SIGN IN ICON ---> 
		<div class="panel-header width-70">
			<h2 class="panel-header-title align-center">Recover Password</h2>
			<p class="panel-header-text align-center m-b-20">Please enter your account email and recovery instructions will be sent to you</p>			
		</div>
    <div class="container">	
	<div class="row">
        <div class="panel-body">
			<div class="form">
				<?php echo e(Form::open(['route' => 'password.email'])); ?>

					<!--h1><?php echo e(__('views.auth.passwords.email.header')); ?></h1-->

					<div class="form-group">
						<input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>"
							   placeholder="<?php echo e(__('views.auth.passwords.email.input')); ?>" required autofocus>
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

					<div class="text-center">
						<button class="btn submit btn-slim btn-thmnavy waves-effect waves-light width-100" type="submit"><?php echo e(__('views.auth.passwords.email.action')); ?></button>
						<a class="reset_pass form-text" href="<?php echo e(route('login')); ?>">
							<?php echo e(__('views.auth.passwords.email.message')); ?>

						</a>
					</div>

					<div class="clearfix"></div>

					<div class="separator">
						<div  class="text-center">
							<div class="h1"><?php echo e(config('app.name')); ?></div>
							<p>&copy; <?php echo e(date('Y')); ?> <?php echo e(config('app.name')); ?>. <?php echo e(__('views.auth.passwords.email.copyright')); ?></p>
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


	</div>
    <!-- END MAIN CONTAINER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669##

    <?php echo e(Html::style('/danny/public/assets/auth/css/passwords.a9f54b8b2b5eca8cabb093d220b3be0b.css')); ?><?php echo e(Html::style('/danny/public/assets/app/css/app.b31c35e7f389a0a62d0dfbf6e592fbcd.css')); ?>

	<link rel="stylesheet" href="<?php echo e(asset('/danny/public/assets/custom/app.css')); ?>">
<?php $__env->stopSection(); ?>
<?php echo $__env->make('auth.layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('navigation'); ?>
<!-- top navigation -->
<div class="row border-bottom">
		<!-- TOP NAVNAR -->
        <nav class="navbar navbar-static-top navbar-shadow" role="navigation" style="margin-bottom:0">
			<!-- TOPNAV -->
			<div id="topnav">
				<div class="topbar-main">
					<!-- Menu Button -->
					<div class="navbar-header">
						<div class="menu-btn-wrap">
							<div class="btn-group">
								<button type="button" class="menu-btn navbar-minimalize minimalize-styl-2 waves-effect waves-light" data-toggle="dropdown" aria-expanded="false"><i class="ion-grid font-21p"></i></button>
							</div>
						</div>
					</div>
					<!-- End Menu Button -->	
					<div class="navbar-header">					
					<div class="topnav-logo"><a href=""><img src="assets/images/logo/v2/logo-v2-57x57.jpg" width="52px" height="auto"></a></div>
						<!-- Topnav Links -->
						<div class="topnav-links">					
							<div class="topnav-link-btn btn-active"><span class="topnav-link-text">LEGACY PROPERTY MANAGEMENT</span></div>															
						</div>						
					<!-- topnav logo -->
					</div>
                </div>						
			</div>		
			<!-- END TOPNAV -->
			
			<!-- BEGIN NAVBAR ELEMENTS -->
          <ul class="nav navbar-top-links navbar-left">
			  <li>
				  <div class="navbar-breadcrumb"><span class="Roboto font-15p"><strong>My Account /</strong> <span class="color:#eee;">Client Dashboard</span></div>
              </li>
		  </ul>
          <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message font-17p">Welcome, <strong>John Smith</strong></span>
					<li class="dropdown">
						<button class="user-account-btn dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="pe-7s-user"></i></button>
                        <ul class="dropdown-menu dd-menu-1">
                            <li><a href="db_user-profile.html">Profile</a></li>
							<li class="divider"></li>
                            <li><a href="db_user-settings.html">Settings</a></li>
							<li class="divider"></li>
                            <li><a href="db_user-index.html">Dashboard</a></li>
							<li class="divider"></li>
                            <li><a href="db_user-support.html">Help / Support</a></li>
                        </ul>
					</li>			
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell font-20p"></i>  <span class="label label-success">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts mar-down-2">
                        <li>
                            <a href="javascript:void(0)">
                                <div>
									<span class="badge badge-warning">1</span> &nbsp; application pending
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0)">
                                <div>
                                    <span class="badge badge-info">3</span> &nbsp; new messages
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0)">
                                <div class="text-center dd-alert-link">
                                    See All Notifications
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/logout"><div class="label-btn"><i class="ion-android-exit font-12p"></i><span class="Roboto font-12p">Sign Out</span></div></a>
                </li>
            </ul>
        </nav>
		<!-- END NAVBAR ELEMENTS -->
    </div>
<!-- /top navigation -->
<?php $__env->stopSection(); ?>
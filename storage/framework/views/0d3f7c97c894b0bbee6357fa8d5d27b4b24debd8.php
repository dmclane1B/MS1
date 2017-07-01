<!DOCTYPE html>
<html>
    <head>
		<!--======= Title ==========================-->
        <title>Legacy Property Management - User Dashoard</title>
		<!--======= Meta Tags ======================-->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />		
        <meta name="robots" content="index, follow"/>
        <meta name="description" content="Legacy Property Management Account Sign In - Log into your Legacy account or register for free">
        <meta name="keywords" content="Legacy Property Management, Legacy Property Management of Silicon Valley, Property Management, Silicon Valley, Silicon Valley Property Management, Quality Property Management, Account Sign In, Account Registration ">
        <meta name="author" content="Legacy Property Management of Silicon Valley">
    	<!--======= Favicon ========================-->
		<link rel="icon" href="assets/user/images/logo/icon/favicon.png"/>
        <link rel="shortcut icon" href="assets/user/images/logo/icon/favicon.png"/>
		<!--======= Core CSS Source ================-->
        <link href="assets/user/css/app.css" rel="stylesheet" type="text/css">
        <link href="assets/user/css/app.min.css" rel="stylesheet" type="text/css">		
        <link href="assets/user/css/fusion.css" rel="stylesheet" type="text/css">
        <link href="assets/user/css/custom.css" rel="stylesheet" type="text/css">
		<!--======= JS Source ======================-->	
    </head>
<!--- BODY --->
<body class="fixed-sidebar no-skin-config full-height-layout">

	<!-- MAIN WRAPPER -->
    <div id="wrapper">
	
        <!-- MAIN NAVBAR -->
        <?php echo $__env->yieldContent('left-sidebar'); ?>
        <!-- END MAIN NAV -->
        
        <!-- PAGE WRAPPER -->
        <div id="page-wrapper" class="gray-bg">
            <!-- CONTENT : ROW -->
            <?php echo $__env->yieldContent('navigation'); ?>
            <?php echo $__env->yieldContent('content'); ?>
            <!-- END USER OPTIONS -->

        <!-- FOOTER --------------------->
        <div class="footer">
            <div class="text-center"><strong>Copyright</strong> &copy; 2017 Legacy Property Management</div>
        </div>
        <!-- END FOOTER ----------------->	

        </div>
        <!-- END PAGE WRAPPER -->
        
     <!-- END MAIN WRAPPER -->	
     </div>
    
	<!-- CORE JS SOURCE -->
	<script src="assets/user/js/app.js"></script>
	<script src="assets/user/js/waves.js"></script>
	<!-- App Form Validation JS -->
	<script src="assets/user/js/form.errors.js"></script>
	<script src="assets/user/js/lib/animsition/animsition.min.js"></script>		
	<script src="assets/user/js/lib/validation/jquery.validate.min.js"></script>
	<script src="assets/user/js/lib/validation/jquery.validate.defaults.js"></script>
	<script src="assets/user/js/lib/validation/formvalidation.js"></script>
	
    <?php echo $__env->yieldContent('js'); ?>
    
	<!-- END DOCUMENT -->
	</body>
</html>
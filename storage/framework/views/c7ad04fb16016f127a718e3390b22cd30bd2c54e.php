<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <!-- Meta title & meta -->
        <title>Properties | Properties</title>
<meta name="robots" content="INDEX, FOLLOW">
<meta name="twitter:title" content="Properties">
<meta name="DC.Title" content="Properties">
<meta name="DC.Identifier" content="Properties">
<meta name="DC.Type" content="Text">
<meta name="DC.Format" content="text/html">
<meta name="DC.Language" content="en">
<meta property="og:title" content="Properties">
<meta property="og:site_name" content="Properties">


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
        <script> window.Laravel = {"locale":"en"}</script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(!Auth::check()): ?>
                        <?php if(config('auth.users.registration')): ?>
                            <a href="<?php echo e(url('/register')); ?>"><?php echo e(__('views.welcome.register')); ?></a>
                        <?php endif; ?>
                        <a href="<?php echo e(url('/login')); ?>"><?php echo e(__('views.welcome.login')); ?></a>
                    <?php else: ?>
                        <?php if(auth()->user()->hasRole('administrator')): ?>
                            <a href="<?php echo e(url('/admin')); ?>"><?php echo e(__('views.welcome.admin')); ?></a>
                        <?php endif; ?>
                        <a href="<?php echo e(url('/logout')); ?>"><?php echo e(__('views.welcome.logout')); ?></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                   <?php echo e(config('app.name')); ?>

                </div>
                <div class="m-b-md">
                   Sample users:<br/>
                   Admin user: admin.laravel@labs64.com / password: admin<br/>
                   Demo user: demo.laravel@labs64.com / password: demo
                </div>
                <div class="footer">
                   Credits:&nbsp;
                   <a href="http://netlicensing.io/?utm_source=Laravel_Boilerplate&amp;utm_medium=github&amp;utm_campaign=laravel_boilerplate&amp;utm_content=credits" target="_blank" title="Online Software License Management"><i class="fa fa-lock" aria-hidden="true"></i>NetLicensing</a>&nbsp;&bull;&nbsp;
                   <a href="https://photolancer.zone/?utm_source=Laravel_Boilerplate&amp;utm_medium=github&amp;utm_campaign=laravel_boilerplate&amp;utm_content=credits" target="_blank" title="Individual digital content for your next campaign"><i class="fa fa-camera-retro" aria-hidden="true"></i>Photolancer Zone</a>
                </div>
            </div>
        </div>
    </body>
</html>

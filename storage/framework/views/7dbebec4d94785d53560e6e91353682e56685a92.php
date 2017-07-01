<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        
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


        
        <?php echo e(Html::style(mix('assets/app/css/app.css'))); ?>


        
        <?php echo $__env->yieldContent('styles'); ?>

        
        <?php echo $__env->yieldContent('head'); ?>

    </head>
    <body class="<?php echo $__env->yieldContent('body_class'); ?>">

        
        <?php echo $__env->yieldContent('page'); ?>

        
        <?php echo e(Html::script(mix('assets/app/js/app.js'))); ?>


        
        <script> window.Laravel = {"locale":"en"}</script>

        
        <?php echo $__env->yieldContent('scripts'); ?>
    </body>
</html>

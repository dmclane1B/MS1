<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{--CSRF Token--}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{--Title and Meta--}}
        @meta

        {{--Common App Styles--}}
        {{ Html::style('/danny/public/assets/app/css/app.b31c35e7f389a0a62d0dfbf6e592fbcd.css') }}

        {{--Styles--}}
        @yield('styles')

        {{--Head--}}
        @yield('head')

    </head>
    <body class="@yield('body_class')">

        {{--Page--}}
        @yield('page')

        {{--Common Scripts--}}
        {{ Html::script('/danny/public/assets/app/js/app.dcff6fa53aac6bfbac3ccb298524012a.js') }}

        {{--Laravel Js Variables--}}
        @tojs

        {{--Scripts--}}
        @yield('scripts')
    </body>
</html>

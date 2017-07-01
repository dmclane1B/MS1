@extends('layouts.app')

@section('page')

    {{--Region Content--}}
    @yield('content')

@endsection

@section('styles')
    {{ Html::style('/danny/public/assets/auth/css/auth.c6436b6b48978bc2a589b2ed5dfcb0dd.css') }}
@endsection

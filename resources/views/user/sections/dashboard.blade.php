@extends('user.layouts.layout')
@extends('user.sections.sidebar')
@extends('user.sections.navigation')
@section('title', 'Dashboard')
@section('add-menu')
@endsection

@section('content')
<div class="wrapper wrapper-content text-center width-90 content_center">
    <!--- USER SIGN IN ICON ---> 
    <div class="panel-header" style="padding:70px 0px 50px;">
        <div class="panel-header-img align-center"><img src="/danny/public/assets/images/logo/v2/lpm-symbol-v2-lg-1b.png" width="120px" height="auto"></div>
        <h2 class="panel-header-title align-center">Legacy Client Dashboard</h2>
    </div>

   <ul class="content-nav content-nav-navbar content-nav-navbar-content" style="list-style:none!important;">
        <li>
            <div class="content-nav-navbar-content p-b-0">
            
                <ul class="thumbnail-links row">
                    <li class="col-sm-4">
                        <a href="#">
                            <i class="pe-7s-id"></i>
                            <div class="link-title">My Proile</div>
                                <p>Manage Account Profile</p>
                        </a>
                    </li>
                    <li class="col-sm-4">
                        <a href="#">
                            <i class="pe-7s-culture"></i>
                            <div class="link-title">My Property</div>
                                <p>Manage Your Property</p>
                        </a>
                    </li>	
                    <li class="col-sm-4">
                        <a href="#">
                            <i class="pe-7s-flag"></i>
                            <div class="link-title">Active Task</div>
                                <p>Complete Pending Task</p>
                        </a>
                    </li>
                    <li class="col-sm-4">
                        <a href="#">
                            <i class="pe-7s-mail-open-file"></i>
                            <div class="link-title">Notifications</div>
                                <p>See Account Notifications</p>
                        </a>
                    </li>					
                    <li class="col-sm-4">
                        <a href="#">
                            <i class="pe-7s-settings"></i>
                            <div class="link-title">Settings</div>
                                <p>Manage Account settings</p>
                        </a>
                    </li>
                    <li class="col-sm-4">
                        <a href="#">
                            <i class="pe-7s-headphones"></i>
                            <div class="link-title">Support</div>
                                <p>Contact An Agent</p>
                        </a>
                    </li>				
                </ul>
            </div>	
        </li>
    </ul>
</div>
@endsection

@section('js')
@endsection
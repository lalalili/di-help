<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Di - help</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('/css/plugins/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Social Buttons CSS -->
    <link href="{{ asset('/css/plugins/social-buttons.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/font/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

{!! Rapyd::styles() !!}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/.env.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-brand">請先確定Mongo連線正常 => CN:10.10.21.72 27017 / TW:10.1.4.47 27017</a>
    </div>
    <!-- /.navbar-header -->

{{--<ul class="nav navbar-top-links navbar-right">--}}
{{--<li class="dropdown">--}}
{{--<a href="#" data-toggle="dropdown" class="dropdown-toggle">--}}
{{--<i class="fa fa-wrench fa-fw"></i> <i class="fa fa-caret-down"></i>--}}
{{--</a>--}}
{{--<ul class="dropdown-menu dropdown-user">--}}
{{--<li>--}}
{{--<a href="{{url('/bday/list')}}">--}}
{{--<div>--}}
{{--<i class="fa fa-birthday-cake fa-fw"></i> 生日祝福名單--}}
{{--</div>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li class="divider"></li>--}}
{{--<li>--}}
{{--<a href="{{url('/phpmyadmin/')}}" target="_blank">--}}
{{--<div>--}}
{{--<i class="fa fa-qq fa-fw"></i> phpMyAdmin--}}
{{--</div>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--<!-- /.dropdown-alerts -->--}}
{{--</li>--}}
{{--@if(Auth::check())--}}
{{--{{Auth::getUser()['name']}}--}}
{{--@else--}}
{{--Guest--}}
{{--@endif--}}
{{--<li class="dropdown">--}}
{{--<a class="dropdown-toggle" href="#" data-toggle="dropdown">--}}
{{--<i class="fa fa-user fa-fw"></i>--}}
{{--<i class="fa fa-caret-down"></i>--}}
{{--</a>--}}
{{--<ul class="dropdown-menu dropdown-user">--}}
{{--@if (Auth::check())--}}
{{--<li>--}}
{{--<a href="{{url('/auth/logout')}}">--}}
{{--<i class="fa fa-sign-out fa-fw"></i>--}}
{{--Logout--}}
{{--</a>--}}
{{--</li>--}}
{{--@else--}}
{{--<li>--}}
{{--<a href="{{url('/auth/login')}}">--}}
{{--<i class="fa fa-sign-in fa-fw"></i>--}}
{{--Login--}}
{{--</a>--}}
{{--</li>--}}
{{--@endif--}}
{{--</ul>--}}
{{--</li>--}}
{{--</ul>--}}
<!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="active">
                    <a href="#">
                        <i class="fa fa-bar-chart fa-fw"></i>
                        DI - Help
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="nav nav-second-level" style="">
                        <li>
                            <a href="{{url('/store')}}">門店</a>
                        </li>
                        {{--<li>--}}
                        {{--<a href="{{url('/company')}}">公司列表</a>--}}
                        {{--</li>--}}
                        <li>
                            <a href="{{url('/member')}}">會員查詢</a>
                        </li>
                        <li>
                            <a href="{{url('/diy')}}">指標</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
@yield('content')
<!-- jQuery Version .env.11.0 -->
<script src="{{ asset('/js/jquery-1.11.0.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('/js/plugins/metisMenu/metisMenu.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>
<script src="{{ asset('js/task.js')}}" charset="utf-8"></script>


<!-- Custom Theme JavaScript -->
<script src="{{ asset('/js/sb-admin-2.js') }}"></script>

<!-- BAT JavaScript -->
<script src="{{ asset('/js/bat.js') }}"></script>

<script>
    $('#flash-overlay-modal').modal();
</script>

{!! Rapyd::scripts() !!}

</body>

</html>
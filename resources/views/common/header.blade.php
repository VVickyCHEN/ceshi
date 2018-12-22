<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<link href="{{asset('stylesheets/bootstrap.min.css')}}" media="all" rel="stylesheet" type="text/css" /><link href="{{asset('stylesheets/font-awesome.css')}}" media="all" rel="stylesheet" type="text/css" /><link href="{{asset('stylesheets/se7en-font.css')}}" media="all" rel="stylesheet" type="text/css" /><link href="{{asset('stylesheets/style.css')}}" media="all" rel="stylesheet" type="text/css" />
	<script src="{{asset('javascripts/jquery.min.js')}}" type="text/javascript"></script>
	<script src="http://www.jq22.com/jquery/jquery-ui-1.10.2.js" type="text/javascript"></script>	
	<script src="{{asset('javascripts/bootstrap.min.js')}}" type="text/javascript"></script><script src="{{asset('javascripts/modernizr.custom.js')}}" type="text/javascript"></script><script src="{{asset('javascripts/main.js')}}" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>测试的title</title>

    <!-- Scripts -->
    
</head>
<body>
    @yield('content')
</body>
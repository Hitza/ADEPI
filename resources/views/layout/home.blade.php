<!doctype html>
<html class="{{asset('no-js')}}" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">

        <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script> 
    </head>
    <body style= "background-color: #E6E6E6">
    	@yield('content')
    </body>
</html>
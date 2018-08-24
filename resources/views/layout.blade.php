
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Portage - On Your Way Delivery</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/img/assets/favicon.png?v=1.1" rel="icon" type="image/png">
        <link href="/css/init.css" rel="stylesheet" type="text/css">

        <link href="/css/theme.css" rel="stylesheet" type="text/css">
        <link href="/css/custom.css" rel="stylesheet" type="text/css">
        <link href="/css/colors/blue.css" rel="stylesheet" type="text/css">
		<link href="/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:400,100,200,300%7CHind:400,300" rel="stylesheet" type="text/css" />
    </head>
    <body data-fade-in="true">

        <div class="pre-loader"><div></div></div>

        @include('layout.header')

        @include('sections.hero')

        @if(session('message'))
        <div class="container">
            <p class="alert alert-success">{{ session('message') }}</p>
        </div>
        @endif

        @yield('content')

        @include('layout.footer')

		@include('termsOfServiceModal')

        <script src="/js/jquery.js"></script>
        <script src="/js/init.js"></script>
        <script src="/js/scripts.js"></script>
    </body>
</html>

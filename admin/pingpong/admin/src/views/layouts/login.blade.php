<html>
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title> Administrator </title>
	
    {{ style('css/bootstrap.min.css') }}
    {{ style('css/bootstrap-reset.css') }}

    <!--external css-->
    {{ style('assets/font-awesome/css/font-awesome.css') }} 

    <!-- Custom styles for this template -->
    {{ style('css/style.css') }}
    {{ style('css/style-responsive.css') }}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    {{ style('js/html5shiv.js') }}
    {{ style('respond.min.js') }}
    <![endif]-->

	
	@yield('style')

</head>
<body class="login-body">

    <div class="container">
        @yield('content')
    </div>

    {{ script('js/jquery.js') }}
    {{ script('js/bootstrap.min.js') }}

    @yield('script')
</body>
</html>
<style>
	
.header-item {
	line-height: 50px !important; 
	font-size: 30px;
}

.header-links {
	margin-top:15px !important;
		font-size: 30px;
}

.social-icons a  {
	margin-right: 7px;
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	
	<link rel="stylesheet" href="{{ asset('/css/social-icons.css') }}">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default navbar-fixed-top" style="opacity:0.8;">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php URL('/'); ?>"> <img src=""></a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="{{ url('/') }}"><img src="<?php echo asset('img/logo.png'); ?>" width="85px"/></a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right"> 
						<li> <span style="font-size:18px; margin-right:30px;" class="glyphicon glyphicon-search header-item"></span> </li>
					</ul>

				</div>
			</div>
		</nav>

					<div style="margin-top:90px;" class="nav navbar-nav navbar-left col-md-12">
						
						<ul style="padding:0; margin-top:25px;" class="social-icons col-md-3">
							<a class="btn btn-social-icon btn twitter"> <i class="fa fa-twitter"></i></a>
							<a class="btn btn-social-icon btn facebook"> <i class="fa fa-facebook"></i></a>
							<a class="btn btn-social-icon btn dropbox"> <i class="fa fa-dropbox"></i></a>
							<a class="btn btn-social-icon btn reddit"> <i class="fa fa-reddit"></i></a>
						</ul>
			

						<ul class="nav navbar-nav navbar-left col-md-9 header-links ">
							<li> <a href="#"> Categories </a> </li>
							<li> <a href="#"> Link1 </a> </li>
							<li> <a href="#"> Link1 </a> </li>
							<li> <a href="#"> Link1 </a> </li>
							<li> <a href="#"> Link1 </a> </li>
							<li> <a href="#"> Link1 </a> </li>
							<li> <a href="#"> Link1 </a> </li>
						</ul>

					</div>
		
	</div>
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>

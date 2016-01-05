
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>NV - NGO View</title>

	<link href="http://localhost/authentication/secure/dashboard/modules/ngos/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="http://localhost/authentication/secure/dashboard/modules/ngos/master/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src="http://localhost/authentication/secure/dashboard/modules/ngos/master/js/jquery.min.js"></script>
	<script src="http://localhost/authentication/secure/dashboard/modules/ngos/master/js/bootstrap.min.js"></script>

	<style>

		@font-face 
		{
	    font-family: Yanone;
	    src: url(http://localhost/authentication/secure/dashboard/modules/ngos/myfont/YanoneKaffeesatz-Bold.ttf);
	    src: url(http://localhost/authentication/secure/dashboard/modules/ngos/myfont/YanoneKaffeesatz-Light.ttf);
	    src: url(http://localhost/authentication/secure/dashboard/modules/ngos/myfont/YanoneKaffeesatz-ExtraLight.ttf);
	    src: url(http://localhost/authentication/secure/dashboard/modules/ngos/myfont/YanoneKaffeesatz-Regular.ttf);
		}
		
		body
		{
			font-family: Yanone, sans-serif;
			font-size: 18px;
			background-image: url('http://localhost/authentication/secure/dashboard/modules/ngos/images/ngo-4.jpg');
			background-size: cover;
			background-repeat: no-repeat;
		}

		hr
		{
			border-color: #aaa;
		}

		.panel-default {
      background: rgba(240, 240, 240, 1)!important;
    }

    .panel-heading a
    {
    	color: #fff;
    }

    .panel-default .panel-heading
    {
      background: rgba(180, 180, 180, 0.9)!important;
      color: #000;
    }

    .panel-default .panel-body
    {
      background: rgba(240, 240, 240, 0.75)!important;
    }

	</style>
	
</head>

<body>
	
	<div class="container">
		<div class="navbar navbar-default">
			<!-- navbar contents -->
			<div class="container-fluid">
				
				<div class="navbar-header col-sm-6">
					
					@if (Auth::guest())
						<a href="/authentication/secure/dashboard/modules/ngos/" class="col-sm-1 btn btn-info"
						 >
							<i class="fa fa-home"></i>
						</a>
					@endif

				</div>

				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						&nbsp;
					</ul>
					<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
							<li><a href="/authentication/secure/dashboard/modules/ngos/auth/register">
								<i class="fa fa-btn fa-heart"></i> NGO Registration
							</a></li>
							<li><a href="/authentication/secure/dashboard/modules/ngos/auth/login">
								<i class="fa fa-btn fa-sign-in"></i> NGO Login
							</a></li>
						@else
							<li class="navbar-text">
								<i class="fa fa-btn fa-user"></i> {{ Auth::user()->user_name }}
							</li>
							<li><a href="/envy/auth/logout">
								<i class="fa fa-btn fa-sign-out"></i> Logout
							</a></li>
						@endif
					</ul>
				</div>
			</div>
		</div>
	</div>

	@yield('content')
	
</body>
</html>
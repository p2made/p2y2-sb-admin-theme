<?php
	$title = 'Registration';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo $title; ?> – SB Admin 2</title>

	<!-- Bootstrap Core CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Social Buttons CSS -->
	<link href="../assets/css/bootstrap-social.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="../assets/css/sb/sb-admin-2-user.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script type="text/javascript" src="src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script type="text/javascript" src="src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div class="sb-box">
		<div class="sb-logo">
			<a href="#">SB <b>Admin</b></a>
		</div><!-- /.sb-logo -->

		<div class="sb-box-body panel panel-default">
			<div class="panel-body">

				<p class="sb-box-msg">Register a new membership</p>

				<form id="register-form" action="/index.php" method="post" role="form">
					<fieldset>

						<div class="form-group has-feedback required">
							<input class="form-control" placeholder="Username" name="username" type="text" autofocus>
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback required">
							<input class="form-control" placeholder="Email" name="email" type="email">
							<span class='glyphicon glyphicon-envelope form-control-feedback'></span>
						</div>
						<div class="form-group has-feedback required">
							<input class="form-control" placeholder="Password" name="password" type="password" value="">
							<span class='glyphicon glyphicon-lock form-control-feedback'></span>
						</div>
						<div class="form-group has-feedback required">
							<input class="form-control" placeholder="Retype Password" name="confirm-password" type="password" value="">
							<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
						</div>

						<div class="row">
							<div class="col-xs-8">
								<div class="form-group">
									<div class="checkbox">
										<label>
											<input name="terms" type="checkbox" value="Agree"> I agree to the <a href="#">terms</a>
										</label>
									</div>
								</div>
							</div><!-- /.col -->
							<div class="col-xs-4">
								<button type="submit" class="btn btn-primary btn-block btn-flat" name="register-button">Register</button>
							</div><!-- /.col -->
						</div><!-- /.row -->

					</fieldset>
				</form>

				<div class="social-auth-links text-center">
					<p>- OR -</p>
					<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Register using Facebook</a>
					<a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Register using Google+</a>
				</div>

				<a href="login.php" class="text-center">I already have a membership</a>

			</div><!-- /.panel-body -->
		</div><!-- /.login-box-body panel panel-default -->
	</div><!-- /.sb-box -->

	<!-- Core JavaScript -->
	<script src="//code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>

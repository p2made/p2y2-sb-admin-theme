<?php
	$title = 'Calendar';
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

	<!-- Core CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="//cdnjs.cloudflare.com/ajax/libs/metisMenu/1.1.3/metisMenu.min.css" rel="stylesheet" type="text/css">

	<!-- Ionicons -->
	<link href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">

	<!-- fullCalendar -->
	<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css" rel="stylesheet" type="text/css">
	<link href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.print.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="../assets/css/sb/sb-admin-2.css" rel="stylesheet" type="text/css">
	<link href="data/admin-lte.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script type="text/javascript" src="src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script type="text/javascript" src="src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="wrapper">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">SB Admin v2.0</a>
			</div><!-- /.navbar-header -->

			<ul class="nav navbar-top-links navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-messages">
						<li>
							<a href="#">
								<div>
									<strong>John Smith</strong>
									<span class="pull-right text-muted">
										<em>Yesterday</em>
									</span>
								</div>
								<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">
								<div>
									<strong>John Smith</strong>
									<span class="pull-right text-muted">
										<em>Yesterday</em>
									</span>
								</div>
								<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">
								<div>
									<strong>John Smith</strong>
									<span class="pull-right text-muted">
										<em>Yesterday</em>
									</span>
								</div>
								<div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a class="text-center" href="#">
								<strong>Read All Messages</strong>
								<i class="fa fa-angle-right"></i>
							</a>
						</li>
					</ul>
					<!-- /.dropdown-messages -->
				</li>
				<!-- /.dropdown -->
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-tasks">
						<li>
							<a href="#">
								<div>
									<p>
										<strong>Task 1</strong>
										<span class="pull-right text-muted">40% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
											<span class="sr-only">40% Complete (success)</span>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">
								<div>
									<p>
										<strong>Task 2</strong>
										<span class="pull-right text-muted">20% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
											<span class="sr-only">20% Complete</span>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">
								<div>
									<p>
										<strong>Task 3</strong>
										<span class="pull-right text-muted">60% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only">60% Complete (warning)</span>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">
								<div>
									<p>
										<strong>Task 4</strong>
										<span class="pull-right text-muted">80% Complete</span>
									</p>
									<div class="progress progress-striped active">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											<span class="sr-only">80% Complete (danger)</span>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a class="text-center" href="#">
								<strong>See All Tasks</strong>
								<i class="fa fa-angle-right"></i>
							</a>
						</li>
					</ul>
					<!-- /.dropdown-tasks -->
				</li>
				<!-- /.dropdown -->
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-alerts">
						<li>
							<a href="#">
								<div>
									<i class="fa fa-comment fa-fw"></i> New Comment
									<span class="pull-right text-muted small">4 minutes ago</span>
								</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">
								<div>
									<i class="fa fa-twitter fa-fw"></i> 3 New Followers
									<span class="pull-right text-muted small">12 minutes ago</span>
								</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">
								<div>
									<i class="fa fa-envelope fa-fw"></i> Message Sent
									<span class="pull-right text-muted small">4 minutes ago</span>
								</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">
								<div>
									<i class="fa fa-tasks fa-fw"></i> New Task
									<span class="pull-right text-muted small">4 minutes ago</span>
								</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">
								<div>
									<i class="fa fa-upload fa-fw"></i> Server Rebooted
									<span class="pull-right text-muted small">4 minutes ago</span>
								</div>
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a class="text-center" href="#">
								<strong>See All Alerts</strong>
								<i class="fa fa-angle-right"></i>
							</a>
						</li>
					</ul>
					<!-- /.dropdown-alerts -->
				</li>
				<!-- /.dropdown -->
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-user">
						<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
						</li>
						<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
						</li>
						<li class="divider"></li>
						<li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
						</li>
					</ul>
					<!-- /.dropdown-user -->
				</li>
				<!-- /.dropdown -->
			</ul><!-- /.navbar-top-links -->

			<div class="navbar-default sidebar" role="navigation">
				<div class="sidebar-nav navbar-collapse">
					<ul class="nav" id="side-menu">
						<li class="sidebar-search">
							<div class="input-group custom-search-form">
								<input type="text" class="form-control" placeholder="Search...">
								<span class="input-group-btn">
									<button class="btn btn-default" type="button">
										<i class="fa fa-search"></i>
									</button>
								</span>
							</div><!-- /input-group -->
						</li>
						<li>
							<a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="flot.php">Flot Charts</a>
								</li>
								<li>
									<a href="morris.php">Morris.js Charts</a>
								</li>
							</ul>
							<!-- /.nav-second-level -->
						</li>
						<li>
							<a href="tables.php"><i class="fa fa-table fa-fw"></i> Tables</a>
						</li>
						<li>
							<a href="forms.php"><i class="fa fa-edit fa-fw"></i> Forms</a>
						</li>
						<li>
							<a href="calendar.php"><i class="fa fa-calendar fa-fw"></i> Calendar</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="panels-wells.php">Panels and Wells</a>
								</li>
								<li>
									<a href="buttons.php">Buttons</a>
								</li>
								<li>
									<a href="notifications.php">Notifications</a>
								</li>
								<li>
									<a href="typography.php">Typography</a>
								</li>
								<li>
									<a href="icons.php"> Icons</a>
								</li>
								<li>
									<a href="grid.php">Grid</a>
								</li>
							</ul>
							<!-- /.nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a href="#">Second Level Item</a>
								</li>
								<li>
									<a href="#">Second Level Item</a>
								</li>
								<li>
									<a href="#">Third Level <span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
										<li>
											<a href="#">Third Level Item</a>
										</li>
										<li>
											<a href="#">Third Level Item</a>
										</li>
										<li>
											<a href="#">Third Level Item</a>
										</li>
										<li>
											<a href="#">Third Level Item</a>
										</li>
									</ul>
									<!-- /.nav-third-level -->
								</li>
							</ul>
							<!-- /.nav-second-level -->
						</li>
						<li>
							<a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
								<li>
									<a class="active" href="blank.php">Blank Page</a>
								</li>
								<li>
									<a href="login.php">Login Page</a>
								</li>
							</ul>
							<!-- /.nav-second-level -->
						</li>
					</ul>
				</div><!-- /.sidebar-collapse -->
			</div><!-- /.navbar-static-side -->
		</nav>

		<!-- Page Content -->
		<div id="page-wrapper">
			<header class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><?php echo $title; ?></h1>
				</div><!-- /.col-lg-12 -->
			</header><!-- /.header -->
			<div class="row">
				<div class="col-lg-9">
					<div id="calendar"></div>
				</div><!-- /.col-lg-9 -->
				<div class="col-lg-3">

					<div class="panel panel-default">
						<div class="panel-heading">
							Draggable Events
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<!-- the events -->
							<div id='external-events'>
								<div class='external-event bg-green'>Lunch</div>
								<div class='external-event bg-red'>Go home</div>
								<div class='external-event bg-aqua'>Do homework</div>
								<div class='external-event bg-yellow'>Work on UI design</div>
								<div class='external-event bg-navy'>Sleep tight</div>
								<p>
									<input type='checkbox' id='drop-remove' /> <label for='drop-remove'>remove after drop</label>
								</p>
							</div>
						</div><!-- /.panel-body -->
					</div><!-- /.panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							Create Event
						</div><!-- /.panel-heading -->
						<div class="panel-body">
							<div class="btn-group" style="width: 100%; margin-bottom: 10px;">
								<button type="button" id="color-chooser-btn" class="btn btn-danger btn-block btn-sm dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>
								<ul class="dropdown-menu" id="color-chooser">
									<li><a class="text-green" href="#"><i class="fa fa-square"></i> Green</a></li>
									<li><a class="text-blue" href="#"><i class="fa fa-square"></i> Blue</a></li>
									<li><a class="text-navy" href="#"><i class="fa fa-square"></i> Navy</a></li>
									<li><a class="text-yellow" href="#"><i class="fa fa-square"></i> Yellow</a></li>
									<li><a class="text-orange" href="#"><i class="fa fa-square"></i> Orange</a></li>
									<li><a class="text-aqua" href="#"><i class="fa fa-square"></i> Aqua</a></li>
									<li><a class="text-red" href="#"><i class="fa fa-square"></i> Red</a></li>
									<li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i> Fuchsia</a></li>
									<li><a class="text-purple" href="#"><i class="fa fa-square"></i> Purple</a></li>
								</ul>
							</div><!-- /btn-group -->
							<div class="input-group">
								<input id="new-event" type="text" class="form-control" placeholder="Event Title">
								<div class="input-group-btn">
									<button id="add-new-event" type="button" class="btn btn-default btn-flat">Add</button>
								</div><!-- /btn-group -->
							</div><!-- /input-group -->
						</div><!-- /.panel-body -->
					</div><!-- /.panel -->
				</div><!-- /.col-lg-3 -->
			</div><!-- /.row -->
		</div><!-- /#page-wrapper -->
	</div><!-- /#wrapper -->

	<!-- Core JavaScript -->
	<script src="//code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/metisMenu/1.1.3/metisMenu.min.js" type="text/javascript"></script>

	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>

	<!-- Custom Theme JavaScript -->
	<script src="../assets/js/sb/sb-admin-2.js" type="text/javascript"></script>

	<!-- AdminLTE for demo purposes -->
	<!-- <script type="text/javascript" src="data/admin-lte-demo.js"></script> -->

	<!-- fullCalendar -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js" type="text/javascript"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js" type="text/javascript"></script>
	<script src="data/calendar-data.js" type="text/javascript"></script>
</body>
</html>

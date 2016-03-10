<?php
	$title = 'Notifications';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Pedro fp">

	<title><?php echo $title; ?> – SB Admin 2</title>

	<!-- Bootstrap Core CSS -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- Custom Fonts -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- MetisMenu CSS -->
	<link href="//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.4.2/metisMenu.min.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="assets/css/sb-admin-2.css" rel="stylesheet" type="text/css">
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
							</div>
							<!-- /input-group -->
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
									<a class="active" href="notifications.php">Notifications</a>
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
									<a href="blank.php">Blank Page</a>
								</li>
								<li>
									<a href="login.php">Login Page</a>
								</li>
							</ul>
							<!-- /.nav-second-level -->
						</li>
					</ul>
				</div>
				<!-- /.sidebar-collapse -->
			</div><!-- /.navbar-static-side -->
		</nav>

		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header"><?php echo $title; ?></h1>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							Alert Styles
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="alert alert-success">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
							</div>
							<div class="alert alert-info">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
							</div>
							<div class="alert alert-warning">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
							</div>
							<div class="alert alert-danger">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
							</div>
						</div>
						<!-- .panel-body -->
					</div>
					<!-- /.panel -->
				</div>
				<!-- /.col-lg-6 -->
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							Dismissable Alerts
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="alert alert-success alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
							</div>
							<div class="alert alert-info alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
							</div>
							<div class="alert alert-warning alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
							</div>
							<div class="alert alert-danger alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
							</div>
						</div>
						<!-- .panel-body -->
					</div>
					<!-- /.panel -->
				</div>
				<!-- /.col-lg-6 -->
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							Modals
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<!-- Button trigger modal -->
							<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
								Launch Demo Modal
							</button>
							<!-- Modal -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title" id="myModalLabel">Modal title</h4>
										</div>
										<div class="modal-body">
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
									<!-- /.modal-content -->
								</div>
								<!-- /.modal-dialog -->
							</div>
							<!-- /.modal -->
						</div>
						<!-- .panel-body -->
					</div>
					<!-- /.panel -->
				</div>
				<!-- /.col-lg-6 -->
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading">
							Tooltips and Popovers
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<h4>Tooltip Demo</h4>
							<div class="tooltip-demo">
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
								<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
							</div>
							<br>
							<h4>Clickable Popover Demo</h4>
							<div class="tooltip-demo">
								<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
									Popover on left
								</button>
								<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
									Popover on top
								</button>
								<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
									Popover on bottom
								</button>
								<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
									Popover on right
								</button>
							</div>
						</div>
						<!-- .panel-body -->
					</div>
					<!-- /.panel -->
				</div>
				<!-- /.col-lg-6 -->
			</div>
		</div><!-- /#page-wrapper -->

	</div><!-- /#wrapper -->

	<!-- jQuery -->
	<script src="//code.jquery.com/jquery-2.2.1.min.js" type="text/javascript"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/metisMenu/2.4.2/metisMenu.min.js" type="text/javascript"></script>

	<!-- Custom Theme JavaScript -->
	<script src="assets/js/sb-admin-2.js" type="text/javascript"></script>

	<!-- Page-Level Demo Scripts - Notifications - Use for reference -->
	<script>
	// tooltip demo
	$('.tooltip-demo').tooltip({
		selector: "[data-toggle=tooltip]",
		container: "body"
	})

	// popover demo
	$("[data-toggle=popover]")
		.popover()
	</script>

</body>
</html>

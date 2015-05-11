<body>
		<div class="wrapper">

		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

			<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="/">P<sup>2</sup>SB Admin</a>	<!-- <a class="navbar-brand" href="/">My Application</a> -->
</div>

<ul class="nav navbar-right top-nav">
	<li class="dropdown">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
			<b class="caret"></b>
		</a>
		<ul class="dropdown-menu message-dropdown">
			<li class="message-preview">
				<a href="#">
					<div class="media">
						<span class="pull-left">
							<img class="media-object" src="http://placehold.it/50x50" alt="">
						</span>
						<div class="media-body">
							<h5 class="media-heading"><strong>John Smith</strong>
							</h5>
							<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
							<p>Lorem ipsum dolor sit amet, consectetur...</p>
						</div>
					</div>
				</a>
			</li>
			<li class="message-preview">
				<a href="#">
					<div class="media">
						<span class="pull-left">
							<img class="media-object" src="http://placehold.it/50x50" alt="">
						</span>
						<div class="media-body">
							<h5 class="media-heading"><strong>John Smith</strong>
							</h5>
							<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
							<p>Lorem ipsum dolor sit amet, consectetur...</p>
						</div>
					</div>
				</a>
			</li>
			<li class="message-preview">
				<a href="#">
					<div class="media">
						<span class="pull-left">
							<img class="media-object" src="http://placehold.it/50x50" alt="">
						</span>
						<div class="media-body">
							<h5 class="media-heading"><strong>John Smith</strong>
							</h5>
							<p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
							<p>Lorem ipsum dolor sit amet, consectetur...</p>
						</div>
					</div>
				</a>
			</li>
			<li class="message-footer">
				<a href="#">Read All New Messages</a>
			</li>
		</ul><!-- /.message-dropdown -->
	</li><!-- /.dropdown -->
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
		<ul class="dropdown-menu alert-dropdown">
			<li>
				<a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
			</li>
			<li>
				<a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
			</li>
			<li>
				<a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
			</li>
			<li>
				<a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
			</li>
			<li>
				<a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
			</li>
			<li>
				<a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="#">View All</a>
			</li>
		</ul>
	</li><!-- /.dropdown -->
	<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
		<ul class="dropdown-menu">
			<li>
				<a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
			</li>
			<li>
				<a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="/site/logout.p2m" data-method="post"><i class="fa fa-power-off fa-fw"></i> Logout</a>			</li>
		</ul>
	</li><!-- /.dropdown -->
</ul>

			<section class="collapse navbar-collapse navbar-ex1-collapse" role="navigation">
	<ul class="nav navbar-nav side-nav">
		<li><a href="/"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li><!-- Dashboard -->
		<li>
			<a href="charts.php"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
		</li><!-- Charts -->
		<li>
			<a href="tables.php"><i class="fa fa-fw fa-table"></i> Tables</a>
		</li><!-- Tables -->
		<li>
			<a href="forms.php"><i class="fa fa-fw fa-edit"></i> Forms</a>
		</li><!-- Forms -->
		<li>
			<a href="bootstrap-elements.php"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
		</li><!-- Bootstrap Elements -->
		<li>
			<a href="bootstrap-grid.php"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
		</li><!-- Bootstrap Grid -->
		<li>
			<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
			<ul id="demo" class="collapse">
				<li>
					<a href="#">Dropdown Item</a>
				</li>
				<li>
					<a href="#">Dropdown Item</a>
				</li>
			</ul>
		</li><!-- Dropdown -->
		<li>
			<a href="blank-page.php"><i class="fa fa-fw fa-file"></i> Blank Page</a>
		</li><!-- Blank Page -->
		<li>
			<a href="index-rtl.php"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
		</li><!-- RTL Dashboard -->
	</ul>
</section>

		</nav>

		<div id="page-wrapper">
	<div class="container-fluid">
		<header class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Dashboard <small></small>
				</h1>
											</div>
		</header>

		<div id="content-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<div class="alert alert-info alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-comments fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">26</div>
							<div>New Comments!</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-green">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-tasks fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">12</div>
							<div>New Tasks!</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-yellow">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-shopping-cart fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">124</div>
							<div>New Orders!</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-red">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="fa fa-support fa-5x"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">13</div>
							<div>Support Tickets!</div>
						</div>
					</div>
				</div>
				<a href="#">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
				</div>
				<div class="panel-body">
					<div id="morris-area-chart"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
				</div>
				<div class="panel-body">
					<div id="morris-donut-chart"></div>
					<div class="text-right">
						<a href="#">View Details <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-clock-o fa-fw"></i> Tasks Panel</h3>
				</div>
				<div class="panel-body">
					<div class="list-group">
						<a href="#" class="list-group-item">
							<span class="badge">just now</span>
							<i class="fa fa-fw fa-calendar"></i> Calendar updated
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">4 minutes ago</span>
							<i class="fa fa-fw fa-comment"></i> Commented on a post
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">23 minutes ago</span>
							<i class="fa fa-fw fa-truck"></i> Order 392 shipped
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">46 minutes ago</span>
							<i class="fa fa-fw fa-money"></i> Invoice 653 has been paid
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">1 hour ago</span>
							<i class="fa fa-fw fa-user"></i> A new user has been added
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">2 hours ago</span>
							<i class="fa fa-fw fa-check"></i> Completed task: "pick up dry cleaning"
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">yesterday</span>
							<i class="fa fa-fw fa-globe"></i> Saved the world
						</a>
						<a href="#" class="list-group-item">
							<span class="badge">two days ago</span>
							<i class="fa fa-fw fa-check"></i> Completed task: "fix error on sales page"
						</a>
					</div>
					<div class="text-right">
						<a href="#">View All Activity <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transactions Panel</h3>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped">
							<thead>
								<tr>
									<th>Order #</th>
									<th>Order Date</th>
									<th>Order Time</th>
									<th>Amount (USD)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>3326</td>
									<td>10/21/2013</td>
									<td>3:29 PM</td>
									<td>$321.33</td>
								</tr>
								<tr>
									<td>3325</td>
									<td>10/21/2013</td>
									<td>3:20 PM</td>
									<td>$234.34</td>
								</tr>
								<tr>
									<td>3324</td>
									<td>10/21/2013</td>
									<td>3:03 PM</td>
									<td>$724.17</td>
								</tr>
								<tr>
									<td>3323</td>
									<td>10/21/2013</td>
									<td>3:00 PM</td>
									<td>$23.71</td>
								</tr>
								<tr>
									<td>3322</td>
									<td>10/21/2013</td>
									<td>2:49 PM</td>
									<td>$8345.23</td>
								</tr>
								<tr>
									<td>3321</td>
									<td>10/21/2013</td>
									<td>2:23 PM</td>
									<td>$245.12</td>
								</tr>
								<tr>
									<td>3320</td>
									<td>10/21/2013</td>
									<td>2:15 PM</td>
									<td>$5663.54</td>
								</tr>
								<tr>
									<td>3319</td>
									<td>10/21/2013</td>
									<td>2:13 PM</td>
									<td>$943.45</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="text-right">
						<a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- /#content-wrapper -->

	</div>
</div>

	</div>
</body>

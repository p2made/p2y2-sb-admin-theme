<?php
/**
 * panels-wells.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-sb-admin-theme
 * @license MIT
 */

use yii\bootstrap\Html;
use p2m\helpers\FA;

p2m\sbAdmin\assets\SBAdmin2Asset::register($this);

// DEMO ONLY _DON'T_ use this in your production copy.

/* @var $this yii\web\View */

$this->title = 'Panels and Wells';
?>
<div id="content-wrapper">

	<!-- ### NOTE ### - 1 or more naked rows go in here -->

	<div class="row">

		<div class="col-lg-4">

			<div class="panel panel-default">
				<div class="panel-heading">
					Default Panel
				</div>
				<div class="panel-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
				</div>
				<div class="panel-footer">
					Panel Footer
				</div>
			</div>

		</div>

		<div class="col-lg-4">

			<div class="panel panel-primary">
				<div class="panel-heading">
					Primary Panel
				</div>
				<div class="panel-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
				</div>
				<div class="panel-footer">
					Panel Footer
				</div>
			</div>

		</div>

		<div class="col-lg-4">

			<div class="panel panel-success">
				<div class="panel-heading">
					Success Panel
				</div>
				<div class="panel-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
				</div>
				<div class="panel-footer">
					Panel Footer
				</div>
			</div>

		</div>

	</div>

	<div class="row">

		<div class="col-lg-4">

			<div class="panel panel-info">
				<div class="panel-heading">
					Info Panel
				</div>
				<div class="panel-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
				</div>
				<div class="panel-footer">
					Panel Footer
				</div>
			</div>

		</div>

		<div class="col-lg-4">

			<div class="panel panel-warning">
				<div class="panel-heading">
					Warning Panel
				</div>
				<div class="panel-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
				</div>
				<div class="panel-footer">
					Panel Footer
				</div>
			</div>

		</div>

		<div class="col-lg-4">

			<div class="panel panel-danger">
				<div class="panel-heading">
					Danger Panel
				</div>
				<div class="panel-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
				</div>
				<div class="panel-footer">
					Panel Footer
				</div>
			</div>

		</div>

	</div>

	<div class="row">

		<div class="col-lg-4">

			<div class="panel panel-green">
				<div class="panel-heading">
					Green Panel
				</div>
				<div class="panel-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
				</div>
				<div class="panel-footer">
					Panel Footer
				</div>
			</div>

		</div>

		<div class="col-lg-4">

			<div class="panel panel-yellow">
				<div class="panel-heading">
					Yellow Panel
				</div>
				<div class="panel-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
				</div>
				<div class="panel-footer">
					Panel Footer
				</div>
			</div>

		</div>

		<div class="col-lg-4">

			<div class="panel panel-red">
				<div class="panel-heading">
					Red Panel
				</div>
				<div class="panel-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
				</div>
				<div class="panel-footer">
					Panel Footer
				</div>
			</div>

		</div>

	</div>

	<div class="row">

		<div class="col-lg-12">

			<div class="panel panel-default">
				<div class="panel-heading">
					Collapsible Accordion Panel Group
				</div><!-- .panel-heading -->
				<div class="panel-body">
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Collapsible Group Item #1</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in">
								<div class="panel-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Collapsible Group Item #2</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Collapsible Group Item #3</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse">
								<div class="panel-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</div>
							</div>
						</div>
					</div>
				</div><!-- .panel-body -->
			</div><!-- /.panel -->

		</div>

	</div>

	<div class="row">

		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					Basic Tabs
				</div><!-- /.panel-heading -->
				<div class="panel-body">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
						<li class="active"><a href="#home" data-toggle="tab">Home</a>
						</li>
						<li><a href="#profile" data-toggle="tab">Profile</a>
						</li>
						<li><a href="#messages" data-toggle="tab">Messages</a>
						</li>
						<li><a href="#settings" data-toggle="tab">Settings</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane fade in active" id="home">
							<h4>Home Tab</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="tab-pane fade" id="profile">
							<h4>Profile Tab</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="tab-pane fade" id="messages">
							<h4>Messages Tab</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="tab-pane fade" id="settings">
							<h4>Settings Tab</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->

		</div>

		<div class="col-lg-6">

			<div class="panel panel-default">
				<div class="panel-heading">
					Pill Tabs
				</div><!-- /.panel-heading -->
				<div class="panel-body"><!-- Nav tabs -->
					<ul class="nav nav-pills">
						<li class="active"><a href="#home-pills" data-toggle="tab">Home</a>
						</li>
						<li><a href="#profile-pills" data-toggle="tab">Profile</a>
						</li>
						<li><a href="#messages-pills" data-toggle="tab">Messages</a>
						</li>
						<li><a href="#settings-pills" data-toggle="tab">Settings</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane fade in active" id="home-pills">
							<h4>Home Tab</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="tab-pane fade" id="profile-pills">
							<h4>Profile Tab</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="tab-pane fade" id="messages-pills">
							<h4>Messages Tab</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="tab-pane fade" id="settings-pills">
							<h4>Settings Tab</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
				</div><!-- /.panel-body -->
			</div><!-- /.panel -->

		</div>

	</div>

	<div class="row">

		<div class="col-lg-4">
			<div class="well">
				<h4>Normal Well</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
			</div>
		</div>

		<div class="col-lg-4">
			<div class="well well-lg">
				<h4>Large Well</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
			</div>
		</div>

		<div class="col-lg-4">
			<div class="well well-sm">
				<h4>Small Well</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
			</div>
		</div>

	</div>

	<div class="row">

		<div class="col-lg-12">
			<div class="jumbotron">
				<h1>Jumbotron</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing.</p>
				<p><a class="btn btn-primary btn-lg" role="button">Learn more</a>
				</p>
			</div>
		</div>

	</div>

	<!-- /### NOTE ### -->

	<!-- this goes on every site file in p2made demos -->
	<br><div class="alert alert-success" role="alert">
		<ul class="fa-ul">
			<li>
				<?= FA::fw(FA::_CODE)->li()->size(FA::SIZE_LARGE) ?> <code><?= __FILE__ ?></code>
			</li>
		</ul>
	</div>

</div><!-- /#content-wrapper -->
